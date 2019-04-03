<?php if (isset($_POST['submit'])) : ?> 
        <!--import class here-->
        <?php
        include "class/csvform.php";
        endif;
        ?>
<?php
    $name = filter_var( $_POST['name'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
    require 'vendor/autoload.php';
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
    //Server settings
        // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'niyex.rental@gmail.com';                 // SMTP username
        $mail->Password = 'alihamdulillah';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
    //Sender
        $mail->setFrom('niyex.rental@gmail.com', 'Niyexdroid');
    //Receiver
        $mail->addAddress($email, $name);     // Add a recipient
    //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $body = '<strong>Hello '.$name.', </strong><br> <br>'. 'Below is the information you provided in the contact section of our website,
         please verify your information ' . '<br> <br>'.$name . '<br> <br>' .$email.'<br> <br>'.$phone.'<br> <br>'.$message.'<br> <br>'.'Thank You and have a Nice Day!';
        $mail->Body = $body;
        $mail->AltBody = $body;
        $mail->send();
        header("location: confirmation.php");
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
?>
