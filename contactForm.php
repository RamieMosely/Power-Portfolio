<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailto = "themanager@summitmacomb.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.",\n\n".$message;

    mail($mailto, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}