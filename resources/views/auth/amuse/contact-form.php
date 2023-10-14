<?php

//Add your information here
$recipient = "themefunctions@gmail.com";

//Don't edit anything below this line

//import form information
$name = $_POST['name'];
$email = $_POST['email'];
// $phone = $_POST['phone'];
// $pekerjaan = $_POST['pekerjaan'];
// $image = $_POST['file'];

$name=stripslashes($name);
$email=stripslashes($email);
// $phone=stripslashes($phone);
// $pekerjaan=stripslashes($pekerjaan);
$pekerjaan= "Name: $name, phone: $phone \n\n pekerjaan: $pekerjaan";

/*
Simple form validation
check to see if an email and pekerjaan were entered
*/

// //if no pekerjaan entered and no email entered print an error
// if (empty($pekerjaan) && empty($email)){
// print "No email address and no pekerjaan was entered. <br>Please include an email and a pekerjaan";
// }
// //if no pekerjaan entered send print an error
// elseif (empty($pekerjaan)){
// print "No pekerjaan was entered.<br>Please include a pekerjaan.<br>";
// }
// //if no email entered send print an error
// elseif (empty($email)){
// print "No email address was entered.<br>Please include your email. <br>";
// }


//mail the form contents
// if(mail("$recipient", "$phone", "$pekerjaan", "From: $email" )) {
if($email != null) {

	// Email has sent successfully, echo a success page.

	echo '<div class="alert alert-success alert-dismissable fade in">
		<button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">&times;</button>
    
		<p>Payment Sent Successfully! We Will get back to you shortly</p></div>';

	} else {

	echo 'ERROR!';

	}

