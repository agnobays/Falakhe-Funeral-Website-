<?php
$name = $_POST['email']
$name = $_POST['message']



$mailheader = "From:".$name."<"$email.">\r\n";

$recepeint = "lindokuhleamazubane@gmail.com"

mail($recepeint, $subject, $message, $mailheader)
or die("Error!")

echo"message sent";
?>