<?php

$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';
$errorMessage = 'There was an error while submitting the form. Please try again later';
$message=
'Full Name:	'.$_POST['name'].'<br />
Email:	'.$_POST['email'].'<br />
Comments:	'.$_POST['comment'].'
';
    require "phpmailer/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "youremail@gmail.com"; // Your full Gmail address
    $mail->Password   = "yourpassword"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['email'], $_POST['name']);
    $mail->AddReplyTo($_POST['email'], $_POST['name']);
    $mail->Subject = "New Contact Form Enquiry from your website";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("recipientemail@gmail.com", "Recipient Name"); // Where to send it - Recipient
   // $result = $mail->Send();		// Send!  
	$responseArray=array();
    if($result) 
  {
	  $responseArray = array('type' => 'danger', 'message' => $errorMessage);
  }
  else
  {
	   $responseArray = array('type' => 'success', 'message' => $okMessage);
  }
	//$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
	unset($mail);
echo json_encode($responseArray);
?>