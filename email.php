<?php

$to = "ajazahmed5068@gmail.com";
$subject = "Test mail";
$message = "ABCD";
$from = "fa19bsse0022@maju.edu.pk";
$header = "from : $from";

mail($to, $subject, $message, $header);

echo"mail sent";


?>