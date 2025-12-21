<?php
if (isset($_POST['subscribe'])){
    $subject = 'You Got Message from ICON site'; // Subject of your email
    $to = 'icon.simsr@somaiya.edu';  //Recipient's E-mail
    $emailTo = $_POST['subscribe'];

    $name = $_REQUEST['name'];
    $email = $_POST['subscribe'];
    $phone = $_REQUEST['phone'];
    $msg = $_REQUEST['message'];

    $email_from = $name.'<'.$email.'>';

    $headers = "MIME-Version: 1.1";
    $headers .= "Content-type: text/html; charset=iso-8859-1";
    $headers .= "From: ".$name.'<'.$email.'>'."\r\n"; // Sender's E-mail
    $headers .= "Return-Path:"."From:" . $email;

    $message .= 'Name : ' . $name . "\n";
    $message .= 'Email : ' . $email . "\n";
    $message .= 'Phone : ' . $phone . "\n";
    $message .= 'Message : ' . $msg;

    if (@mail($to, $subject, $message, $email_from))
    {
        // Transfer the value 'sent' to ajax function for showing success message.
        header("Location: http://www.example.com");
        exit;
    }
    else
    {
        // Transfer the value 'failed' to ajax function for showing error message.
        echo 'failed to sent';
    }
}



?>