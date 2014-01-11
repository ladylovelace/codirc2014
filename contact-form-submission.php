<?php

// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
    header('Location: contact.php'); exit;
}
	
// get the posted data
$name = $_POST['contact_name'];
$email_address = $_POST['contact_email'];
$phone = $_POST['contact_phone'];
$message = $_POST['contact_message'];
	
// check that a name was entered
if (empty($name))
    $error = 'Nome. Campo Obrigatório.';
// check that an email address was entered
elseif (empty($email_address)) 
    $error = 'Email. Campo Obrigatório.';
// check for a valid email address
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address))
    $error = 'Email inválido';
// check that a message was entered
elseif (empty($message))
    $error = 'Mensagem. Campo Obrigatório.';
		
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location: contact.php?e='.urlencode($error)); exit;
}

$headers = "From: $email_address\r\n"; 
$headers .= "Reply-To: $email_address\r\n";

// write the email content
$email_content = "Nome *: $name\n";
$email_content .= "Email *: $email_address\n";
$email_content .= "Telefone: $phone\n";
$email_content .= "Menssagem *:\n\n$message";
	
// send the email
//ENTER YOUR INFORMATION BELOW FOR THE FORM TO WORK!
mail ('let.rostirola@gmail.com', 'CODIRC - Formulário de envio de email', $email_content, $headers);
	
// send the user back to the form
header('Location: contact.php?s='.urlencode('Agradecemos seu contato. Responderemos o mais breve possível.')); exit;

?>