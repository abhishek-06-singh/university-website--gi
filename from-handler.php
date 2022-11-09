<?php 

$name =$_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from ='yourwebsite@12.com';
$email_subject ='New Form Submission'
$email_body ="User Name: $name .\n".
              "User Email: $visitor_email .\n".
               "Subject:$subject .\n".
                "User Massege: $message .\n";

$to ='avi7000201383@gmail.com';

$header = "From : $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n";
 

mail($to,$email_subject,$email_body,$header);
header("Location: http://127.0.0.1:5500/contact.html");




?>