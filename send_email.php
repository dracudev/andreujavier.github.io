<?php
    $to = 'andreujavier99@gmail.com';
    $subject = $_POST['subject'];
    $message = "
        Name: {$_POST['name']}
        Email: {$_POST['email']}
        Telephone: {$_POST['telephone']}
        Message: {$_POST['message']}
    ";

    mail($to, $subject, $message);
?>