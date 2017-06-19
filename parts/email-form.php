<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 13.06.17
 * Time: 14:12
 */
session_start();
if ( isset( $_POST['kaufenPaypal'] ) ) {
	$ownEmail      = "bestellung@jvmtb.de"; // My own email adress
	$customerEmail = $_SESSION['customerEmail']; // customer email
	$from          = "service@jvmtb.de"; // Official sender. Insert new domain email here.

	$first_name = $_SESSION['first_name']; // Customer details
	$last_name  = $_SESSION['last_name'];
	$street     = $_SESSION['street'];
	$plz        = $_SESSION['plz'];
	$city       = $_SESSION['city'];
	$message    = $_SESSION['message'];
	$quantity   = $_SESSION['quantity'];

	$ownerSubject    = "Neue Bestellung bei JVmtb"; // Email subject
	$customerSubject = "Deine Bestellung bei JVmtb"; // Email subject

	// Email for me
	$ownerContent = "Neue Bestellung bei JVmtb von \n\n" .
	                $first_name . " " . $last_name . "\n" .
	                $street . "\n" .
	                $plz . " " . $city . "\n\n 
        Menge: " . $quantity . "\n
        Kommentar: \n" . $message . "\n\n 
        Kunden Email: " . $customerEmail . "\n\n 
        Bezahlung per Paypal.";

	// Customer email
	$customerContent = "Hallo " . $first_name . ", \n" .
	                   "vielen Dank für Deine Bestellung bei JVmtb" . "\n\n" .
	                   "Deine Bestellung wird an: \n" .
	                   $first_name . " " . $last_name . "\n" .
	                   $street . "\n" .
	                   $plz . " " . $city . "\n 
        geschickt. \n\n 
        Bestellte Stückzahl: " . $quantity . "\n\n 
        Du hast als Zahlungsmittel Paypal ausgewählt. Solltest du noch NICHT bezahlt haben, 
        ist hier nochmals der Link zur Paypal Seite: \n\n
        www.paypal.me/vollweiter/" . $quantity * 6.99 . "\n\n Mit sportlichen Grüßen \n Julien Vollweiter";

	$headers = "From: " . $from;

	mail( $ownEmail, $ownerSubject, $ownerContent, $headers );
	mail( $customerEmail, $customerSubject, $customerContent, $headers );
	// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
	header( "Location: weiterleitung.php" );
	// You can also use header('Location: thank_you.php'); to redirect to another page.
	// You cannot use header and echo together. It's one or the other.
}