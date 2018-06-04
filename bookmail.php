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
        
        <div class="container">
                <div class="row">
                <center>
                    <div style="width:100%;">
                        <div class="thumbnail" style="width:100%;">
                            
                            <div class="caption" style="width:100%;">
                                <center>
                                <table style="width:80%;" id="hor-minimalist-b">
                                    <tr>
                                        <th colspan="2" style="border-bottom: 2px solid #000;"><center><h1>Booking Details</h1></center></th>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>Customer Name</h5></td>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>'.$data['fname'].'</h5></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>Email Address</h5></td>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>'.$data['email'].'</h5></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>Mobile Number</h5></td>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>'.$data['mobile'].'</h5></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>Check in Date</h5></td>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>'.$data['datepicker1'].'</h5></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>Check out Date</h5></td>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>'.$data['datepicker2'].'</h5></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>Number of Adults</h5></td>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>'.$data['adult'].'</h5></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>Number of Children</h5></td>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>'.$data['children'].'</h5></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>Apartment Category</h5></td>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>'.$data['categorey'].'</h5></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>City</h5></td>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>'.$data['city'].'</h5></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>Branches</h5></td>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>'.$data['branch'].'</h5></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>Mode Of Payment</h5></td>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>'.$data['payment'].'</h5></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>Airport Pickup</h5></td>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>'.$data['airport'].'</h5></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>Remarks / Special Notes</h5></td>
                                        <td style="width:50%;border-bottom: 1px solid #000;"><h5>'.$data['message'].'</h5></td>
                                    </tr>
                                    <tr><td></td><td></td></tr>
                                </table>
                                </center>
                                <p>For any clarification or more information, please contact us.<p>
                                <p>Sincerely,<p>
                                <p style="color:#d9534f;font-weight:bold;">Falcons nest</p>
                                
                                <br/><br/>
                                <p>
                                    Please do not reply to this email because we are not monitoring this inbox. 
                                    To get in touch with us, got to our website and click "Contact Us" at the Top of any page.
                                </p>
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
$mail->Username = 'bsnsktmc@gmail.com';                   // SMTP username
$mail->Password = 'ktmcktmc';               // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom('bsnsktmc@gmail.com', 'Falcons Nest');     //Set who the message is to be sent from
$mail->addReplyTo('bsnsktmc@gmail.com', 'Falcons Nest');  //Set an alternative reply-to address
$mail->addAddress(trim($data['email']), $data['fname']);  // Add a recipient
$mail->addCC('bsnsktmc@gmail.com');
//$mail->addBCC('bcc@example.com');
$mail->isHTML(true); 
$mail->Subject = 'Room Booking';
$mail->Body    = $htmlContent;
if (!$mail->send()) {
    echo '<div class="alert alert-danger">Booking request Failed.</div>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
}
echo '<div class="alert alert-success">We received your request. Our marketing team will call you as soon as possible.</div>';
}
?>