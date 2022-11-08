<?php
$to = "cfilippini@mail.utdt.edu";
$subject = "Contact from the website";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$name = $_POST['name'];
$email = $_POST['email'];
$question = $_POST['question'];
$country = $_POST['country'];


$message = "
<html>
<head>
<title>Contact Form</title>
</head>
<body>
<h1>Contacto information from the website</h1>
<p>User name: $name </p> 
<p>Email: $email </p> 

<p>¿Qué tipo de eventos necesitas que cubra?: $question </p> 

<p>¿De dónde eres?: $country </p>
</body>
</html>";
 echo 'Thanks';
mail($to, $subject, $message, $headers);
?>

