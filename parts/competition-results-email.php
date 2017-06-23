<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 13.06.17
 * Time: 14:12
 */
session_start();
if ( isset( $_POST['send'] ) ) {
	$ownEmail      = "ju.vollweiter@gmail.com"; // Receiver of the message
	$customerEmail = $_POST['email']; // customer email
	$from          = " viergelenker@web.de"; // Official sender. Insert new domain email here.

	$date = $_POST['date']; // Customer details
	$place  = $_POST['place'];
	$rank     = $_POST['rank'];
	$test        = $_POST['test'];
	$horse       = $_POST['horse'];
	$name    = $_POST['name'];
	$message   = $_POST['message'];

	$subject    = "Neuer Turniererfolg von " . $name; // Email subject

	// Email for me
	$content = "Ein neuer Turniererfolg! \n\n" .
	                $name . " " . $horse . "\n" .
	                $date . "\n" .
	                $place . " " . $test . "\n\n 
        Rang: " . $rank . "\n
        Kommentar: \n" . $message . "\n\n 
        Reiter Email: " . $customerEmail;

	$headers = "From: " . $from;

	mail( $ownEmail, $subject, $content, $headers );
	// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
	header( "Location: " . get_template_directory_uri() );
	// You can also use header('Location: thank_you.php'); to redirect to another page.
	// You cannot use header and echo together. It's one or the other.
}