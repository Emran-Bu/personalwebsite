<?php
 $from = 'emran9704@gmail.com';
    $to      = 'obujemran240@gmail.com';
    $subjects = 'Developer Emran Portfolio';
    $messages = ' your message has been received, I will contact you soon.';
    $headers = 'From: '.$from;

    mail($to, $subjects, $messages, $headers);
?>