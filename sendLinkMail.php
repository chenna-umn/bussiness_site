<?php
if (!empty($_POST)) 
{
    $data = $_POST;
    $htmlContent = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Falcons Nest</title>
         <!-- Bootstrap core CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/css/bootstrap.css" rel="stylesheet" media="screen"/>
    </head>
    <body>
        <h3>Dear Cutomer</h3>
        <p> Please follow or click this link to view our services:</p>
        <p>
            <a href="'.$data['url'].'">'.$data['url'].'</a>
        </p>
    </body>
</html>';
require 'mailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'bsnsktmc@gmail.com';                   // SMTP username
$mail->Password = 'ktmcktmc';               // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom('bsnsktmc@gmail.com', 'Falcons Nest');     //Set who the message is to be sent from
$mail->addReplyTo('bsnsktmc@gmail.com', 'Falcons Nest');  //Set an alternative reply-to address
$mail->addAddress(trim($data['email']), 'Customer');  // Add a recipient
$mail->addCC('bsnsktmc@gmail.com');
//$mail->addBCC('bcc@example.com');
$mail->isHTML(true); 
$mail->Subject = 'Share Link';
$mail->Body    = $htmlContent;
if (!$mail->send()) {
    echo '<div class="alert alert-danger">Link Sharing Failed.</div>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
}
echo '<div class="alert alert-success">Link Successfully Shared.</div>';
}
?>