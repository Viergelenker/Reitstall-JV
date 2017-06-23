<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 13.06.17
 * Time: 14:26
 */
if ( isset( $_POST['send'] ) ) {
	$ownEmail      = "ju.vollweiter@gmail.com"; // Receiver of the message
	$customerEmail = $_POST['email']; // customer email
	$from          = " viergelenker@web.de"; // Official sender. Insert new domain email here.
	$message       = $_POST['message'];

	$ownerSubject    = "Neue Anfrage bei Reitstall Räuchle"; // Email subject
	$customerSubject = "Ihre Anfrage bei Reitstall Räuchle"; // Email subject

	// Email for me
	$ownerContent = "Ein Nutzer hat folgende Nachricht hinterlassen: \n\n" .
	                $message . "\n\n 
        Email Adresse: " . $customerEmail;

	// Customer email
	$customerContent = "Vielen Dank für Ihre Anfrage bei Reitstall Räuchle." . "\n\n" .
	                   "Wir werden Ihre Nachricht sobald wie möglich bearbeiten." . "\n\n" .
	                   "Ihre Nachricht: " . "\n\n" . $message;

	$headers = array(
		"From: " . $from,
		"Reply-To: " . $from,
		"X-Mailer: PHP/" . PHP_VERSION
	);

	mail( $ownEmail, $ownerSubject, $ownerContent, $headers );
	mail( $customerEmail, $customerSubject, $customerContent, $headers );
	// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
	header( 'Location: /' );
	// You can also use header('Location: thank_you.php'); to redirect to another page.
	// You cannot use header and echo together. It's one or the other.
}