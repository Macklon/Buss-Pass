<?php
require 'PHPMailer/PHPMailerAutoload.php';

require 'connect.php';

if( isset($_SESSION['phno'])){

	$sent_to=$_SESSION['email'];
  $name=$_SESSION['name'];
  $ack_no=rand(100000, 999999);
    
//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

//Set the hostname of the mail server
//$mail->Host = 'smtp.gmail.com';
$mail->Host = 'ssl://smtp.gmail.com:465';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "projectbca2018@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "project1#";

//Set who the message is to be sent from
$mail->setFrom('BusHub@gmail.com','BusHub' );

//Set an alternative reply-to address
$mail->addReplyTo('noreply@BusHub.com','BusHub');

//Set who the message is to be sent to
$mail->addAddress($sent_to, '');

//Set the subject line
$mail->Subject = 'BussPass';

$time = time();

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('<font size="4">
  Hello '.$name.',<br><br>

  Thank you for submitting your details.<br>
  Aknowledgement number: MGOV'.$ack_no.'<br>
  Pass status: Your application recieved<br><br>
      
  Have a good day!<br><br>
 
  The BusHub team<br><br>');

//$mail->Body    = '';

//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';

//send the message, check for errors
if (!$mail->send()) {
    // $mail->ErrorInfo;
    echo "<script type='text/javascript'>alert('Mailer Error:');</script>";
} 
// else {
//     echo "<script type='text/javascript'>alert('Message sent!');</script>";
// }

}
?>