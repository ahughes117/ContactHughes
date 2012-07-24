<?php

/**
 *Configuration file for contact.php 
 */

//email field id
$emailF = 'email';

//name field id
$nameF = 'name';

//message field id
$messageF = 'message';

//email address
$toAddress = 'alexhughes117@gmail.com';

$subject = 'testform - ';

//redirect url
$url = 'http://www.google.com';

//success message, containing redirect url
$sucMessage = 'Congratulations, your message has been sent. </br>
    Click <a href="' . $url . '">here</a> to continue';

//fail message, containing redirect url
$failMessage = 'Message Sending failed. Check again the appropriate fields</br>
    Click <a href="' . $url . '">here</a> to continue';

//Toggle whether to show message pages or echo the above messages.
$messagePages = false;

//Message page url
$messagePUrl = 'EnterALocationHere.com';
?>
