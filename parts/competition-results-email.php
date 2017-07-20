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

	$date    = $_POST['date']; // Customer details
	$place   = $_POST['place'];
	$rank    = $_POST['rank'];
	$test    = $_POST['test'];
	$horse   = $_POST['horse'];
	$name    = $_POST['name'];
	$message = $_POST['message'];

	$subject = "Neuer Turniererfolg von " . $name; // Email subject

	// Email for me
	$content = "Hier sind die Details: \n\n" .
	           "Datum: " . $date . "\n 
	           Name: " . $name . "\n 
	           Pferd: " . $horse . "\n 
	           Ort: " . $place . "\n 
	           Prüfung: " . $test . "\n 
	           Platzierung: " . $rank . "\n
               Kommentar: \n" . $message . "\n\n 
               Email Adresse: " . $customerEmail;

	$headers = "From: " . $from;

	mail( $ownEmail, $subject, $content, $headers );

	header( "Location: " . get_template_directory_uri() );
}