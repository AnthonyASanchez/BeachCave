<!DOCTYPE html>
<html>
<body>
<?php
if(!isset($_POST['submit']))
{

echo '<script type = "text/javascript">';
echo 'alert("Please fill out the entire form.")';
echo '</script>';


}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$organization = $_POST['organization'];
if(empty($name)||empty($visitor_email)||empty($month)||empty($day)||empty($year)||empty($organization))
{
  echo '<script type = "text/javascript">';
  echo 'alert("Please fill out the entire form.")';
  echo '</script>';
  exit;
}
$email_from = "beachcave21@gmail.com";
$email_subject = "New lab request";
$email_body  = "You have recieved a new lab time request from $name. \n".
                "organization: $organization\n".
                "Email address: $visitor_email\n".
                "Date: $month/$day/$year\n".
                "Reason: $message".
$to = "beachcave21@gmail.com";
$header = "From: $email_from \r \n";

mail($to,$email_subject,$email_body,$header);
?>
</body>
</html>
