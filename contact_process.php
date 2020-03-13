<?php

    $to = "hellobd6@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "m a x r a n k e r . c o  m";

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"message"} = "message";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
