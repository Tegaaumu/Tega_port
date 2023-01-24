<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'portfiolo');

    $messages = '';
    $username = '';
    $email = '';
    $password1 = '';
    $password2 = '';
    
    // $_POST;
    // $_SESSION['user'] = null;

    if (mysqli_error($db)) {
        die('Their was an error in your code');
    }else {
        if (isset($_POST['createAnAccount'])) {

            $username = mysqli_escape_string($db, $_POST['User']);
            $email = mysqli_escape_string($db, $_POST['mail']);
            $password1 = mysqli_escape_string( $db, $_POST['pass1']);
            $password2 = mysqli_escape_string($db, $_POST['pass2']);

            if (empty($username)) {
                $messages .= "This username feild can't be empty<br>";
            }
            if (empty($email)) {
                $messages .= "This email feild can't be empty<br>";
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $messages .= "This email feild is invalid <br>";
            }
            // for url validation
            // $website = test_input($_POST["website"]);
            // if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            // $websiteErr = "Invalid URL";
            // }
            if (empty($password1)) {
                $messages .= "This password field can't be empty<br>";
            }
            if (empty($password2)) {
                $messages .= "This Corfirm password field can't be empty<br>";
            }elseif ($password1 != $password2) {
                $messages .= "Your password do not match<br>";
            }

            if ($messages > 0) {
                $messages = "There are errors in the folloeing code<br>".$messages."Please attend to the error";
            }else {
                
            $username = mysqli_real_escape_string($db, $_POST['User']);
            $email = mysqli_real_escape_string($db, $_POST['mail']);
            $password1 = mysqli_real_escape_string( $db, md5($_POST['pass1']));
            $password2 = mysqli_real_escape_string($db, md5($_POST['pass2']));

            // $insert = "DELETE FROM `signinlogin` WHERE id= '$username'";
            $exist = mysqli_query($db, "SELECT id FROM `signin` WHERE `username` = '$username' OR `email` = '$email'");


            if (mysqli_num_rows($exist) > 0) {
                $messages = 'This Username/Email already exist';
            }else {

            $insert = "INSERT INTO `signin`(`username`, `email`, `password`) VALUES ('$username',' $email','$password1')";
            $sucess = mysqli_query($db, $insert);
            $_SESSION['user'] = $username;

            header("Location: index.php");
                
            }


            }


            // echo 'me';
            // print_r($_POST);
           

        }

        if (isset($_POST['loginme'])) {
            $uname = mysqli_real_escape_string($db, $_POST['User']);
            $password1 = mysqli_real_escape_string( $db, md5($_POST['pass1']));
            $pass = "SELECT * FROM signin WHERE username='$uname'";

            $result = mysqli_query($db, $pass);
    
            if (mysqli_num_rows($result) === 1) {
    
                $row = mysqli_fetch_assoc($result);
                echo $password1.'<br>';
                print_r($row['password']);
    
                if ($row['username'] === $uname && $row['password'] === $password1) {
                    // echo "Logged in!";
                    $_SESSION['user'] = $row['username'];
    
                    $_SESSION['name'] = $row['email'];
                    // $_SESSION['id'] = $row['id'];
                    header("Location: index.php");
                    exit();
                }
            }
    }
       
}
        // 4wertrreasd
?>