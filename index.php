<?php

    $hello = 'hello world<br/>';
    echo $hello;

    $to = $_REQUEST['to'];
    $subject = 'Test mail';
    $message = "this is a test message";
    if(isset($to)){
        echo "Sending mail to $to<br/>";
        if( mail ($to, $subject, $message) ){
            echo "Mail sent<br/>";
        }else{
            echo "Some error occured<br/>";
        }
    }

?>