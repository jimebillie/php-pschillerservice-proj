<?php
session_start();
// Middleware
if (!isset($_POST["mail_for_customer"])) {
    header("Location : ../contactus.php");
    exit;
}


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.pschillerservice.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'contact@pschillerservice.com';                     //SMTP username
    $mail->Password   = 'RTIPsuFn{mEW';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('contact@pschillerservice.com', 'ข้อมูลจากเว็บไซต์ : ' . $_POST["name"]);
    $mail->addAddress($_POST["mail_for_customer"]);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    if (isset($_FILES["file_send"])) {
        if($_FILES["file_send"]["name"] !== ""){
            $mail->addAttachment($_FILES["file_send"]["tmp_name"], $_FILES["file_send"]["name"]);         //Add attachments
        }
    }
    if (isset($_FILES["file_send2"])) {
        if($_FILES["file_send2"]["name"] !== ""){
            $mail->addAttachment($_FILES["file_send2"]["tmp_name"], $_FILES["file_send2"]["name"]);         //Add attachments
        }
    }
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "ข้อมูลแบบฟอร์มจากเว็บไซต์ : " . $_POST["name"];
    $mail->Body    = '
    <b>ชื่อ-นามสกุล</b> : ' . $_POST["name"] . '
    <br>
    <b>อีเมล</b> : ' . $_POST["email"] . '
    <br>
    <b>เบอร์ติดต่อ</b> : ' . $_POST["tel"] . '
    <br>
    <b>ชื่อบริษัท</b> : ' . $_POST["company"] . '
    <br>
    <b>รหัสสินค้าที่สนใจ </b> : ' . $_POST["part_number"] . ' 
    <br>
    <b>จำนวนสินค้าที่ต้องการสั่งซื้อ </b> : ' . $_POST["quantity"] . ' 
    <br>
    <b>รายละเอียดเพิ่มเติม </b> : ' . $_POST["detail"] . ' 
    <br>
   ';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    // Carset
    $mail->CharSet = "UTF-8";

    $mail->send();
    echo "resp_pass";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
