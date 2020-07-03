<?php
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $visitor_mobile=$_POST['mobile'];
    $message=$_POST['message'];
    $submit=$_POST['submit'];

    $email_from='mdsayedbinhasan@gmail.com';
    $email_subject='New form submission';

    $email_body="User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Mobile: $visitor_mobile.\n".
                "User Message: $message.\n";
    
    $to="mdsayedbinhasan@gmail.com";

    $headers="From: $email_from \r\n";
    $headers.="Reply-to: $visitor_email \r\n";

    if(isset($submit)){
        if(mail($to, $email_subject, $email_body, $headers)){
            echo "mail sent";
        }
        else{
            echo "send failed";
        }
    }

    header("Location: index.html");
?>