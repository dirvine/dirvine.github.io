<?php 
$base1 = $_POST['base1'];
$base2 = $_POST['base2'];
$base3 = $_POST['base3'];

// PREPARE THE BODY OF THE MESSAGE
$message = '<html><body>';
$message .= '<img src="http://dev.maidsafe.net/images/email_enquiry_header.jpg" alt="MaidSafe General Enquiry" />';
$message .= '<table rules="all" style="border-color: #bdbdbd;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['base1']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['base2']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['base3']) . "</td></tr>";	
$message .= "</table>";
$message .= "</body></html>";

//  MAKE SURE THE "FROM" EMAIL ADDRESS DOESN'T HAVE ANY NASTY STUFF IN IT
$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
if (preg_match($pattern, trim(strip_tags($_POST['base2'])))) { 
	$cleanedFrom = trim(strip_tags($_POST['base2'])); 
} else { 
	return "The email address you entered was invalid. Please try again!"; 
} 
       
//   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
$to = "info@maidsafe.net";
$subject = "MaidSafe General Enquiry";
$headers = "From: " . $cleanedFrom . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['base2']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


if($base2 == '') {print "You have not entered an email, please go back and try again";} 
else { 
$send = mail($to, $subject, $message, $headers); 
$send2 = mail($base2, $subject, $message, $headers); 
if($send) 
{header( "Location: /thankyou.php" );} 
else 
{print "We encountered an error sending your mail, please notify info@maidsafe.net"; } 
}
?> 