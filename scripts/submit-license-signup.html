<?php

define('DB_NAME', 'online_license_signing');
define('DB_USER', 'license_signup');
define('DB_PASSWORD', 'AllTheGoldInTheWorld');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}
    
$db_selected = mysql_select_db(DB_NAME, $link);
    
if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}






$first_name = $_POST['first_name'];
$surname = $_POST['surname'];
$company = $_POST['company'];
$position = $_POST['position'];
$department = $_POST['department'];
$address = $_POST['address'];
$address2 = $_POST['address2'];
$town = $_POST['town'];
$country = $_POST['country'];
$postcode = $_POST['postcode'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$agree_commercial_license = (isset($_POST['agree_commercial_license'])) ? 1 : 0;

$sql = "INSERT INTO customer_info (first_name, surname, company, position, department, address, address2, town, country, postcode, email, phone, agree_commercial_license) 
		VALUES ('$first_name', '$surname', '$company', '$position', '$department', '$address', '$address2', '$town', '$country', '$postcode', '$email', '$phone', '$agree_commercial_license')";

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}

mysql_close();




// PREPARE THE BODY OF THE MESSAGE

			$message = '<html><body>';
			$message .= '<img src="http://www.maidsafe.net/commercial_license_signup/header.jpg" alt="MaidSafe Commercial License Signing" />';
			$message .= '<table rules="all" style="border-color: #bdbdbd;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>First Name:</strong> </td><td>" . strip_tags($_POST['first_name']) . "</td></tr>";
			$message .= "<tr style='background: #eee;'><td><strong>Surname:</strong> </td><td>" . strip_tags($_POST['surname']) . "</td></tr>";
			$message .= "<tr style='background: #eee;'><td><strong>Company:</strong> </td><td>" . strip_tags($_POST['company']) . "</td></tr>";
			$message .= "<tr style='background: #eee;'><td><strong>Position:</strong> </td><td>" . strip_tags($_POST['position']) . "</td></tr>";
			$message .= "<tr style='background: #eee;'><td><strong>Department:</strong> </td><td>" . strip_tags($_POST['department']) . "</td></tr>";
			$message .= "<tr style='background: #eee;'><td><strong>Address:</strong> </td><td>" . strip_tags($_POST['address']) . "</td></tr>";
			$message .= "<tr style='background: #eee;'><td><strong>Town:</strong> </td><td>" . strip_tags($_POST['town']) . "</td></tr>";
			$message .= "<tr style='background: #eee;'><td><strong>Country:</strong> </td><td>" . strip_tags($_POST['country']) . "</td></tr>";
			$message .= "<tr style='background: #eee;'><td><strong>Post Code:</strong> </td><td>" . strip_tags($_POST['postcode']) . "</td></tr>";
			$message .= "<tr style='background: #eee;'><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";	
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
			$message .= "<tr><td><strong>I have read and accept the MaidSafe Commercial License terms and conditions:</strong> </td><td>" . strip_tags($_POST['agree_commercial_license']) . "</td></tr>";
			$message .= "<tr><td><strong>MaidSafe Commercial License Download here. http://www.maidsafe.net/assets/commercial_license.pdf </strong></td></tr>";
			$message .= "</table>";
			$message .= "</body></html>";

			//  MAKE SURE THE "FROM" EMAIL ADDRESS DOESN'T HAVE ANY NASTY STUFF IN IT
			
			$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
            if (preg_match($pattern, trim(strip_tags($_POST['email'])))) { 
                $cleanedFrom = trim(strip_tags($_POST['email'])); 
            } else { 
                return "The email address you entered was invalid. Please try again!"; 
            } 

            
           
	 //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS

			//$to = "$email, stephen.cosh@maidsafe.net, nick.lambert@maidsafe.net, lorraine.mcnally-jones@maidsafe.net, scott.mackenzie@maidsafe.net";
			$to = "$email, scott.mackenzie@maidsafe.net";
			//$to = "$email, stephen.cosh@maidsafe.net";
			//$to2 = "$email, stephen.cosh@maidsafe.net, nick.lambert@maidsafe.net, lorraine.mcnally-jones@maidsafe.net, scott.mackenzie@maidsafe.net";
			//$email = "macchiparoo2@hotmail.com";
			$subject = "MaidSafe Commercial License Agreement Signing";
			$headers = "From: " . $cleanedFrom . "\r\n";
			$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			
			if($email == '') {print "You have not entered an email, please go back and try again";} 
			else { 
			$send = mail($to, $subject, $message, $headers); 
			//$send2 = mail($to2, $subject, $message, $headers); 
			if($send) 
			{header( "Location: /thankyou.php" );} 
			else 
			{print "We encountered an error sending your mail, please notify dev@maidsafe.net"; } 
			}
 
?>