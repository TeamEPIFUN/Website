<?php	
	if (empty($_POST['name_31480']) && strlen($_POST['name_31480']) == 0 || empty($_POST['email_31480']) && strlen($_POST['email_31480']) == 0)
	{
		return false;
	}
	
	$name_31480 = $_POST['name_31480'];
	$email_31480 = $_POST['email_31480'];
	$message_31480 = $_POST['message_31480'];
	
	$to = 'contact@epifun.fr'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Messagerie EPIFUN";
	$email_body = "Vous avez reçu un nouveau message \n\n".
				  "Name_31480: $name_31480 \nEmail_31480: $email_31480 \nMessage_31480: $message_31480 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: no-reply@epifun.fr\n";
	$headers .= "Reply-To: $email_31480";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>