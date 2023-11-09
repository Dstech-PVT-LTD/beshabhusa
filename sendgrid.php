<?php
include "includes/config.php";
require('vendor/autoload.php');


$sendgrid_api_key = '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';
function sendEmail($from, $to, $fromUserName, $subject, $mailContent)
{
    global $sendgrid_api_key;
    // echo "<script>console.log('$from, $to, $fromUserName, $subject, $mailContent')</script>";
    // echo "<script>console.log('send email started')</script>";
    // SMTP
    $msg = strip_tags($mailContent);
    $email = new \SendGrid\Mail\Mail();
    $email->setFrom($from, $fromUserName);
    $email->setSubject("$subject");
    $email->addTo($to, "User");
    $email->addContent("text/plain", "$msg");
    $email->addContent(
        "text/html",
        "$mailContent"
    );
    $sendgrid = new \SendGrid($sendgrid_api_key);
    try {
        $response = $sendgrid->send($email);
        // print_r($response);
        if ($response->statusCode() != 202) {
            // echo "<script>console.log('Sendgrid Failed, SMTP used')</script>";
            $subject = "$subject";
            $message = $mailContent;
            $header = "From: $from \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
            mail($to, $subject, $message, $header);
        }
    } catch (Exception $e) {
        $subject = "$subject";
        $message = $mailContent;
        $header = "From: $from \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        mail($to, $subject, $message, $header);
        echo "<script>console.log('In send mail catch')</script>";
    }
}





                    $from = 'support@beshabhusa.in';
                    $to = $email;
                    $fromUserName = 'beshabhusa';
                    $subject = 'Submission From localhero Contact Form';
                    $mailContent = 'userid: ur email ,password:phone number';
                    sendEmail($from, $to, $fromUserName, $subject, $mailContent);


                    ?>