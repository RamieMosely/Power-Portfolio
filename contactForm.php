<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailto = "ramiemosely5@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.",\n\n".$message;

    mail($mailto, $subject, $txt, $headers);
    header("Location: home.php$mailsend");
}