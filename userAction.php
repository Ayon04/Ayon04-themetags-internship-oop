<?php
session_start();

class User {
    public $email;
    public $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }


    public function userInfo() {
        echo "The email address is  {$this->email} AND  the password is {$this->password}.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    

    if (empty($email) || empty($password)) {
        $_SESSION['empty_error'] = 'Please fill up all the inputs';
        header('Location: ../view/user.php');



    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/@gmail\.com$/', $email)) {
        $_SESSION['invalid_email_format'] = 'Invalid email format';
        header('Location: ../view/user.php');




    } elseif (strlen($password) < 4) {
        $_SESSION['password_error'] = 'Password must contain at least 4 characters';
        header('Location: ../view/user.php');


    } else {
        unset($_SESSION['password_error']);
        unset($_SESSION['invalid_email_format']);
        unset($_SESSION['empty_error']);

        $user1 = new User($email, $password);
         $user1->userInfo();

    }
} else {
    // Invalid Request
    //echo "Invalid Request";
}
?>
