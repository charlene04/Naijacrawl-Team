<?php

include('../connection/config.php');
include('../classes/user.php');
$user = new User($db);
$successStatus = 200;
$errorStatus = 401;
$data = array();
if ($_POST) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if (empty($full_name)) {
        $data['status'] = $errorStatus;
        $data['message'] = 'Full Name is Required';
        echo json_encode($data);
    } else {
        if (empty($email)) {
            $data['status'] = $errorStatus;
            $data['message'] = 'Email is Required';
            echo json_encode($data);
        } else {
            if (empty($password)) {
                $data['status'] = $errorStatus;
                $data['message'] = 'Password is Required';
                echo json_encode($data);
            } else {

                if ($password != $confirm_password) {

                    $data['status'] = $errorStatus;
                    $data['message'] = 'Password do not Match';
                    echo json_encode($data);
                } else {

                    if (strlen($password) < 7) {
                        $data['status'] = $errorStatus;
                        $data['message'] = 'Password is too short, must me from 8 Character Above';
                        echo json_encode($data);
                    } else {
                        if (strlen($full_name) < 5) {
                            $data['status'] = $errorStatus;
                            $data['message'] = 'Fullname is Very Short , must be more than 5 letters';
                            echo json_encode($data);
                        } else {
                            $stmt = $db->prepare('SELECT email FROM users WHERE email = :email');
                            $stmt->execute(array(':email' => $email));
                            $row = $stmt->fetch(PDO::FETCH_ASSOC);

                            if (!empty($row['email'])) {
                                $data['status'] = 422;
                                $data['message'] = $email . ' Already in use, choose another Email';
                                echo json_encode($data);
                            } else {

                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    $data['status'] = 422;
                                    $data['message'] = $email . ' is not a valid email address,  Please enter enter a valid one';
                                    echo json_encode($data);
                                } else {
                                    //hash the password
                                    $hashedpassword = $user->password_hash($password, PASSWORD_BCRYPT);
                                    //create the activasion code
                                    $activasion = md5(uniqid(rand(), true));

                                    try {
                                        //insert into database with a prepared statement
                                        $stmt = $db->prepare('INSERT INTO users (full_name,email,password) 
			                 VALUES (:full_name, :email , :password)');
                                        $stmt->execute(array(
                                            ':full_name' => $full_name,
                                            ':email' => $email,
                                            ':password' => $hashedpassword,
                                        ));
                                        $data['status'] = 200;
                                        $data['message'] = 'Registration was successful';
                                        echo json_encode($data);
                                        //else catch the exception and show the error.
                                    } catch (PDOException $e) {
                                        $data['status'] = 422;
                                        $data['message'] = $e->getMessage();
                                        echo json_encode($data);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
