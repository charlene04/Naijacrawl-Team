<?php

include('password.php');

class User extends Password {

    private $_db;

    function __construct($db) {
        parent::__construct();

        $this->_db = $db;
    }

    /* user hash */

    private function get_user_hash($email) {

        try {
            $stmt = $this->_db->prepare('SELECT password, email, id FROM users WHERE email = :email ');
            $stmt->execute(array('email' => $email));

            return $stmt->fetch();
        } catch (PDOException $e) {
            echo '<p class="bg-danger">' . $e->getMessage() . '</p>';
        }
    }

    /* login function */

    public function login($email, $password) {

        $row = $this->get_user_hash($email);

        if ($this->password_verify($password, $row['password']) == 1) {

            $_SESSION['loggedin'] = true;
            $_SESSION["VALID_USER_ID"] = $email;
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];

            return true;
        }
    }

    /* logoutfunction */

    public function logout() {
        session_destroy();
    }

    /* user login tracking function */

    public function is_logged_in() {
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            return true;
        }
    }

}

?>
