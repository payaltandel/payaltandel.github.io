<?php

// configure
//require_once 'mailer/PHPMailerAutoload.php';

$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';
$errorMessage = 'There was an error while submitting the form. Please try again later';
/*$email_to = "tanvi.desai96@gmail.com";
$name=$_POST['name'];
//$phone=$_POST['phoneno'];
$email=$_POST['email'];
//$company=$_POST['company'];
$message=$_POST['comment'];

 $email_message = "\n\n";

   $email_message .= "Name: ".$name."\n";
  // $email_message .= "Company: ".$company."\n";
   $email_message .= "Email: ".$email."\n";
   //$email_message .= "Telephone: ".$phone."\n";
   $email_message .= "Subject: "."You have new message from your website"."\n";
   $email_message .= "Comments: ".$message."\n";

//PHPMailer Object
$mail = new PHPMailer;

  $mail->isSendmail();
   $mail->setFrom($email, $name);
   $mail->addAddress($email_to, 'Tanvi');
   $mail->Subject = "You have new message from your website";
   $mail->Body= $email_message;
$responseArray=array();
if(!$mail->send()) 
{
   // echo "Mailer Error: " . $mail->ErrorInfo;
	// $array = array('emailMessage' => 'error');
	$responseArray = array('type' => 'danger', 'message' => $errorMessage);

} 
else 
{
 //   echo "Message has been sent successfully";
	// $array = array('emailMessage' => 'success');
	*/ 
	  $responseArray = array('type' => 'success', 'message' => $okMessage);
//} 

echo json_encode($responseArray);

// let's do the sending
/*
try
{
    $emailText = "You have new message from contact form\n=============================\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from,
    );
    
    mail($sendTo, $subject, $emailText, implode("\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') { */
/*$responseArray = array('type' => 'success', 'message' => $okMessage);
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded; */
/*}
else {
    echo $responseArray['message'];
}*/
