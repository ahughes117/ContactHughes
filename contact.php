<?php

include 'util/emailer.php';
include 'config.php';

/**
 * A php mail sender in utf8. First parses and validates email address. 
 */
$email = $_POST[$emailF];
$name = $_POST[$nameF];
$message = $_POST[$messageF];

if (validEmail($email)) {
    sendMail($name, $email, $message, $toAddress, $subject);
    if ($messagePages)
        header('Location: ' . $messagePUrl . '/messages/success.php');
    else
        echo $sucMessage;
} else {
    if ($messagePages)
        header('Location: ' . $messagePUrl . '/messages/failure.php');
    else
        echo $failMessage;
}
?>
