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
    <body style="background-color:#8D8888;border-radius: 15px 40px 15px;border: 3px solid #d9534f;background-image:url(\'http://www.youthintoindustry.org.nz/wp-content/uploads/2012/07/texturetastic_gray-300x300.png\')">
        <a href="#">
            <img style="max-height:50px;padding:10px;" src="https://lh3.googleusercontent.com/-hz2Vcn8JnpA/U25xEo4-SyI/AAAAAAAAAFg/W137RUdQ7yo/s454/logo.png" alt="Falcons  Nest"/>
        </a>
        <div class="container">
                <div class="row">
                <center>
                    <div style="width:100%;">
                        <div class="thumbnail" style="width:100%;">
                            
                            <div class="caption" style="width:100%;">
                                <center>
                                <table style="width:80%;" id="hor-minimalist-b">
                                    <tr>
                                        <th colspan="2" style="border-bottom: 2px solid #000;"><center><h1>Contact Details</h1></center></th>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>Customer Name</h5></td>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>'.$data['con_fname'].'</h5></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>Email Address</h5></td>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>'.$data['con_email'].'</h5></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>Message</h5></td>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>'.$data['con_message'].'</h5></td>
                                    </tr>
                                    <tr><td><br/><br/><br/><br/></td><td></td></tr>
                                </table>
                                </center>
                            </div>
                            </center>
                        </div>
                    </div>
                </div>
        </div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/js/bootstrap.min.js"></script>
    </body>
</html>';
require 'mailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'falconskiran@gmail.com';                   // SMTP username
$mail->Password = 'becoolfalcon';               // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom('falconskiran@gmail.com', 'Falcons Nest');     //Set who the message is to be sent from
$mail->addReplyTo('falconskiran@gmail.com', 'Falcons Nest');  //Set an alternative reply-to address
$mail->addAddress(trim($data['con_email']), $data['con_fname']);  // Add a recipient
$mail->addCC('falconskiran@gmail.com');
//$mail->addBCC('bcc@example.com');
$mail->isHTML(true); 
$mail->Subject = 'Contact Details';
$mail->Body    = $htmlContent;
if (!$mail->send()) {
    echo '<div class="alert alert-danger">Mail Delivery Failed.</div>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
}
echo '<div class="alert alert-success">We received your request. We will contact you as soon as possible. Thank You.</div>';
}
?>