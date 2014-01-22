<?php 
$investor1 = $_POST['investor1'];
$investor2 = $_POST['investor2'];
$investor3 = $_POST['investor3'];
$investor4 = $_POST['investor4'];
$investor5 = $_POST['investor5'];
$investor6 = $_POST['investor6'];
$investor7 = $_POST['investor7'];
$investor8 = $_POST['investor8'];
$investor9 = $_POST['investor9'];

// PREPARE THE BODY OF THE MESSAGE
$message = '<html><body>';
$message .= '<img src="http://dev.maidsafe.net/images/email_investor_header.jpg" alt="MaidSafe Investor Contact" />';
$message .= '<table rules="all" style="border-color: #bdbdbd;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['investor1']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['investor2']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Company:</strong> </td><td>" . strip_tags($_POST['investor3']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Address:</strong> </td><td>" . strip_tags($_POST['investor4']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>City:</strong> </td><td>" . strip_tags($_POST['investor5']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>State:</strong> </td><td>" . strip_tags($_POST['investor6']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Post Code:</strong> </td><td>" . strip_tags($_POST['investor7']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Country:</strong> </td><td>" . strip_tags($_POST['investor8']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['investor9']) . "</td></tr>";	
$message .= "</table>";
$message .= "</body></html>";

//  MAKE SURE THE "FROM" EMAIL ADDRESS DOESN'T HAVE ANY NASTY STUFF IN IT
$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
if (preg_match($pattern, trim(strip_tags($_POST['investor2'])))) { 
	$cleanedFrom = trim(strip_tags($_POST['investor2'])); 
} else { 
	return "The email address you entered was invalid. Please try again!"; 
} 
       
//   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
$to = "info@maidsafe.net";
$subject = "MaidSafe Investor Contact";
$headers = "From: " . $cleanedFrom . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['investor2']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


if($investor2 == '') {print "You have not entered an email, please go back and try again";} 
else { 
$send = mail($to, $subject, $message, $headers); 
$send2 = mail($investor2, $subject, $message, $headers); 
if($send) 
{header( "Location: /thankyou.php" );} 
else 
{print "We encountered an error sending your mail, please notify info@maidsafe.net"; } 
}
?> 