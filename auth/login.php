<?php

include('../connection/config.php');
include('../classes/user.php');
$user = new User($db);
$successStatus = 200;
$errorStatus = 401;
if ($user->is_logged_in()) {
    header('Location: user/dashboard');
}
if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($user->login($email, $password)) {
        $_SESSION['email'] = $email;
        $data['status'] = $successStatus;
        $data['message'] = ' Logging in successful please wait..';
        echo json_encode($data);
    } else {
        $data['status'] = $errorStatus;
        $data['message'] = 'Cant log you in, check your username or password';
        echo json_encode($data);
    }
}
?>