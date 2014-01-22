<?php 
$partner1 = $_POST['partner1'];
$partner2 = $_POST['partner2'];
$company = $_POST['partner3'];
$address = $_POST['partner4'];
$city = $_POST['partner5'];
$state = $_POST['partner6'];
$postcode = $_POST['partner7'];
$country = $_POST['partner8'];
$message = $_POST['partner9'];

// PREPARE THE BODY OF THE MESSAGE
$message = '<html><body>';
$message .= '<img src="http://www.maidsafe.net/images/email_partner_header.jpg" alt="MaidSafe Partner Contact" />';
$message .= '<table rules="all" style="border-color: #bdbdbd;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['partner1']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['partner2']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Company:</strong> </td><td>" . strip_tags($_POST['partner3']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Address:</strong> </td><td>" . strip_tags($_POST['partner4']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>City:</strong> </td><td>" . strip_tags($_POST['partner5']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>State:</strong> </td><td>" . strip_tags($_POST['partner6']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Post Code:</strong> </td><td>" . strip_tags($_POST['partner7']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Country:</strong> </td><td>" . strip_tags($_POST['partner8']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['partner9']) . "</td></tr>";	
$message .= "</table>";
$message .= "</body></html>";

//  MAKE SURE THE "FROM" EMAIL ADDRESS DOESN'T HAVE ANY NASTY STUFF IN IT
$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
if (preg_match($pattern, trim(strip_tags($_POST['partner2'])))) { 
	$cleanedFrom = trim(strip_tags($_POST['partner2'])); 
} else { 
	return "The email address you entered was invalid. Please try again!"; 
} 
       
//   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
$to = "info@maidsafe.net";
$subject = "MaidSafe Partner Contact";
$headers = "From: " . $cleanedFrom . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['partner2']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


if($partner2 == '') {print "You have not entered an email, please go back and try again";} 
else { 
$send = mail($to, $subject, $message, $headers); 
$send2 = mail($partner2, $subject, $message, $headers); 
if($send) 
{header( "Location: /thankyou.php" );} 
else 
{print "We encountered an error sending your mail, please notify info@maidsafe.net"; } 
}
?> 