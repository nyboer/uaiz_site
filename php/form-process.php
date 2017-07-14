<?php

$errorMSG = "";

$phone = "init";

// NAME
if (empty($_POST["name"])) {
		$errorMSG = "Name is required ";
} else {
		$name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
		$errorMSG .= "Email is required ";
} else {
		$email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["message"])) {
		$errorMSG .= "Message is required ";
} else {
		$message = $_POST["message"];
}

// MESSAGE
if (empty($_POST["phone"])) {
		$phone = "(left blank)";
} else {
		$phone = $_POST["phone"];
}


//$EmailTo = "peboer@gmail.com";
$EmailTo = "urbanagriculture@sacredheartcs.org";
$Subject = "UAIZ Contact Form Submitted";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "\n";
$Body .= "MESSAGE: ";
$Body .= "\n";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
	 echo "success";
} else {
		if($errorMSG == ""){
				echo "Something went wrong :(";
		} else {
				echo $errorMSG;
		}
}

?>