<?php
session_start();
include "connection.php";
ini_set('max_execution_time', 300);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'websquad04@gmail.com';                     //SMTP username
    $mail->Password   = 'PredatorTriton300';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //
   
    $sql = "select * from student where roll='". $_GET ."'";
    $query = mysqli_query($conn, $sql);
    $fetch = mysqli_fetch_array($query);
    //Recipients
    $mail->setFrom('websquad04@gmail.com', 'E-Recruit');
    $mail->addAddress($fetch["email"]);     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Selected for interview';
    $mail->Body    = '<td class="esd-stripe" align="center">
    <table class="es-content-body" style="background-color: #333333;" width="600" cellspacing="0" cellpadding="0" bgcolor="#333333" align="center">
        <tbody>
            <tr>
                <td class="esd-structure esd-checked es-p40t es-p40b es-p40r es-p40l" style="background-image: url("https://ugeybb.stripocdn.email/content/guids/CABINET_85e4431b39e3c4492fca561009cef9b5/images/93491522393929597.png"); background-repeat: no-repeat;" align="left">
                    <table width="100%" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td class="esd-container-frame" width="520" valign="top" align="center">
                                    <table width="100%" cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td align="center" class="esd-block-text es-p40t es-p10b" spellcheck="false" data-ms-editor="true">
                                                    <h1 style="color: #ffffff;">Invitation for Interview</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td esdev-links-color="#757575" class="esd-block-text es-p10t es-p20b es-p30r es-p30l" align="center" spellcheck="false" data-ms-editor="true">
                                                    <p style="color: #757575;">Dear '.$fetch['name'].', Thank you for your application to the Job. We would like to invite you to interview . The interview will last 30 min in total.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="esd-block-button es-p10t es-p20b" align="center"><span class="es-button-border" style="border-width: 0px; border-style: solid; background: none 0% 0% repeat scroll #26a4d3; border-color: #26a4d3;"><a href="https://viewstripo.email/" class="es-button" target="_blank" style="background: #26a4d3 none repeat scroll 0% 0%; border-color: #26a4d3;">JOIN INTERVIEW</a></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</td>';
    $mail->AltBody = 'This is the body of the message.';

    $mail->send();
    header("location:pdf.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    
}