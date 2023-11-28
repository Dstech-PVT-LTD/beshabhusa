<?php
// require('vendor/autoload.php');
$servername = "localhost";
// $username = "beshabhusa_admin";
// $password = "8@EFN^~^boO1";
$username = "root";
$password = "";
$dbname = "beshabhusa_db";
// $username = "dstechsi_purifier_admin";
// $password = "}eh5k0N9%omJ";
// $dbname = "dstechsi_purifier";
$driver = "mysql";
$socket = "https://beshabhusa.com";
//mychanges

// function sendEmail ($from, $to, $subject, $mailContent) {
// global $sendgrid_api_key;
// // echo "<script>console.log('$from, $to, $fromUserName, $subject, $mailContent')</script>";
// // echo "<script>console.log('send email started')</script>";
// // SMTP
// $msg = strip_tags($mailContent);
// $email = new \SendGrid\Mail\Mail(); 
// $email->setFrom($from, $fromUserName);
// $email->setSubject("$subject");
// $email->addTo($to, "User");
// $email->addContent("text/plain", "$msg");
// $email->addContent(
//   "text/html", "$mailContent"
// );
// $sendgrid = new \SendGrid($sendgrid_api_key);
// try {
//   $response = $sendgrid->send($email);
//   // print_r($response);
//   if($response->statusCode() != 202) {
//     // echo "<script>console.log('Sendgrid Failed, SMTP used')</script>";
//     $subject = "$subject";
//     $message = $mailContent;
//     $header = "From: $from \r\n";
//     $header .= "MIME-Version: 1.0\r\n";
//     $header .= "Content-type: text/html\r\n";
//     mail($to,$subject,$message,$header);
//   }
// } catch (Exception $e) {
// $subject = "$subject";
// $message = $mailContent;
// $header = "From: $from \r\n";
// $header .= "MIME-Version: 1.0\r\n";
// $header .= "Content-type: text/html\r\n";
// mail($to,$subject,$message,$header);
// echo "<script>console.log('In send mail catch')</script>";
// }
// }

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
    // echo '<pre>';
    // print_r($response);
    if ($response->statusCode() != 202) {
      // echo "<script>console.log('Sendgrid Failed, SMTP used')</script>";
      $subject = "$subject";
      $message = $mailContent;
      $header = "From: $from \r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $header .= "Content-type: text/html\r\n";
      mail($to, $subject, $message, $header);
      // echo 'test';

    }
  } catch (Exception $e) {
    $subject = "$subject";
    $message = $mailContent;
    $header = "From: $from \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    mail($to, $subject, $message, $header);
    echo "<script>console.log('In send mail catch')</script>";
    // echo $e;
  }
}
$from = 'support@localhero.in';

$fromUserName = 'beshabhusa';
?>
