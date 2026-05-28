<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "anandanjali520@gmail.com"; // apna email

    $subject = "New Portfolio Inquiry";

    $body = "
    Name: $name

    Email: $email

    Message:
    $message
    ";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)) {

        echo "
        <script>
        alert('Message Sent Successfully!');
        window.location.href='index.php';
        </script>
        ";

    } else {

        echo "
        <script>
        alert('Message Failed!');
        window.location.href='index.php';
        </script>
        ";
    }
}
?>