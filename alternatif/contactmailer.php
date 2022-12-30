<!-- php -->
<?php
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


    if(isset($_POST['name']) && isset ($_POST['email'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];        
}


//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';

//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "ncgamer21@gmail.com";
//Set gmail password
	$mail->Password = "satpukfyvydjspnu";
//Email subject
	$mail->Subject = ("$email ($subject)");
//Set sender email
	$mail->setFrom('$email, $name');
//Enable HTML
	$mail->isHTML(true);
//Email body
	$mail->Body = $body;
//Finally send email
	if ( $mail->send() ) {
		echo "Email Sent..!";
	}else{
		$status = "Message could not be sent";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
	}

exit(json_encode(array("status" => $status, "response" => $response)));  
//Closing smtp connection
	$mail->smtpClose();
<<<<<<< HEAD
?>
=======
?>
>>>>>>> ff676c5d76aafc0b069808f04a9c8c23439f4e34
