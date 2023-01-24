<?php
//     use PHPMailer\PHPMailer\PHPMailer;
//     use PHPMailer\PHPMailer\SMTP;

// if ( isset($_POST['Submitfeild'])) {
//     $users = mysqli_escape_string($db, $_SESSION['user']);

//     $sel = mysqli_query($db, "SELECT * FROM `signin` WHERE username = '$users'");
//     $sels = mysqli_fetch_array($sel);

//         $username = $sels['username'];
//         $email = $sels['email'];
//         $subject = $_POST['Subjectfeild'];
//         $message = $_POST['Messagefeild'];
//         // $Sent = '';
//     $mail = '';

//     require "vendor/autoload.php";


//     $mail = new PHPMailer(true);
//     $mail->SMTPDebug = SMTP::DEBUG_SERVER;

//     $mail->isSMTP();
//     $mail->SMTPAuth = true;

//     $mail->HOST = "smtp.example.com";
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//     $mail->Port = 587;

//     $mail->Username = "user@example.com";
//     $mail->Password = "secret";

//     $mail->setFrom($email, $username);
//     $mail->addAddress("umurhurhutega@gmail.com");

//     // $mail->Subject = $subject;
//     // $mail->Body = $message;
//             $mail->Subject = 'Here is the subject';
//             $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

//     $mail->send();
    
//     echo "Email was sent";
// }

    // $username = $_POST['User'];
    // $email = $_POST['mail'];
    // $subject = $_POST['Subjectfeild'];
    // $message = $_POST['Messagefeild'];
    // $Sent = '';
    // $mail = '';
   
    //second trier
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;
    // use PHPMailer\PHPMailer\Exception;

    // $users = mysqli_escape_string($db, $_SESSION['user']);

    // $sel = mysqli_query($db, "SELECT * FROM `signin` WHERE username = '$users'");
    // $sels = mysqli_fetch_array($sel);

    //     $username = $sels['username'];
    //     $email = $sels['email'];
    //     $subject = $_POST['Subjectfeild'];
    //     $message = $_POST['Messagefeild'];
    //     // $Sent = '';
    //     // $mail = '';

    // if ( isset($_POST['Submitfeild'])) {
    //     // echo "maihksjbfoalsjdbfajbdfe";
    //     require 'vendor/autoload.php';

    //     $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    //     try {
    //         //Server settings
    //         // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    //         $mail->isSMTP();                                      // Set mailer to use SMTP
    //         $mail->Host = 'smtp.example.com';  // Specify main and backup SMTP servers
    //         $mail->SMTPAuth = true;                               // Enable SMTP authentication
    //         $mail->Username = 'user@example.com';                 // SMTP username
    //         $mail->Password = 'secret';                           // SMTP password
    //         // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    //         $mail->Port = 587;                                    // TCP port to connect to

    //         //Recipients
    //         $mail->setFrom($email, $username);
    //         $mail->addAddress('umurhurhutega@gmail.com');     // Add a recipient
    //         // $mail->addAddress('ellen@example.com');               // Name is optional
    //         // $mail->addReplyTo('info@example.com', 'Information');
    //         // $mail->addCC('cc@example.com');
    //         // $mail->addBCC('bcc@example.com');

    //         //Attachments
    //         // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //         // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //         //Content
    //         $mail->isHTML(true);                                  // Set email format to HTML
    //         $mail->Subject = 'Here is the subject';
    //         $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    //         // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    //         $mail->send();
    //         echo 'Message has been sent';
    //     } catch (Exception $e) {
    //         echo 'Message could not be sent.';
    //         echo 'Mailer Error: ' . $mail->ErrorInfo;
    //     }
    
    // }



// working SMTP

            //Import PHPMailer classes into the global namespace
            //These must be at the top of your script, not inside a function
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;

            $username = '';
            $email = '';
            $subject = '';
            $message = '';
            $message2 = '';


            if ( isset($_POST['Submitfeild'])) {
            // $username = $_POST['Namefeild'];
            // $email = $_POST['Emailfeild'];
            $users = mysqli_escape_string($db, $_SESSION['user']);

            $sel = mysqli_query($db, "SELECT * FROM `signin` WHERE username = '$users'");
            $sels = mysqli_fetch_array($sel);
            
            $username = $sels['username'];
            $email = $sels['email'];
            $subject = $_POST['Subjectfeild'];
            $message = $_POST['Messagefeild'];
            //Load Composer's autoloader
            require 'vendor/autoload.php';

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username = "tegaumurhurhu@gmail.com";
                $mail->Password = "zadpaoxzjhgdnybg";                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom($email, $username);
                $mail->addAddress('umurhurhutega@gmail.com');     //Add a recipient
                // $mail->addAddress('ellen@example.com');               //Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    =  $message;
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                $query ="UPDATE `signin` SET `subject`= '$subject',`message`= '$message' WHERE username = '$users' ";
                mysqli_query($db, $query);
                echo $message2 = 'Message has been sent';
            } catch (Exception $e) {
                echo  $message2 = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }