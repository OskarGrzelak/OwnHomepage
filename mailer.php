<?php
$name = $_POST['name']; //'name' has to be the same as the name value on the form input element
$email = $_POST['email'];
$message = $_POST['message'];
$from = $_POST['email'];
$to = 'oskar@oskargrzelak.pl'; //set to the default email address
$subject = $_POST['subject'];
$body = "From: $name\n E-Mail: $email\n Message:\n $message";

$headers = "From: $email" . "\r\n" .
"Reply-To: $email" . "\r\n" .
"X-Mailer: PHP/" . phpversion();

if(isset($_POST['submit'])) {               
mail ($to, $subject, $body, $headers);  //mail sends it to the SMTP server side which sends the email
    echo "<p>Your message has been sent!</p>";
} 

else { 
    echo "<p>Something went wrong, go back and try again!</p>"; 
} 
header("Location: http://www.oskargrzelak.pl");
?>