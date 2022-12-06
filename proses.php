<?php
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


    if(isset($_POST['submit'])){
        
        $tanggal = $_['time'];
        $nama = $_POST['nama'];
        $telpon = $_POST['telpon'];
        $nomor = $_POST['nomeja'];
        $jml = $_POST['jumlah'];        
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
	$mail->Subject = "Order";
//Set sender email
	$mail->setFrom('sritoyo21@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Email body
	$mail->Body = "<h1>ORDER</h1></br><p>Nama = $nama</p></br><p>Nomor Telepon = $telpon</p></br><p>Tanggal Pesanan = $tanggal</p></br><p>Nomor Meja = $nomor</p></br><p>Jumlah Orang = $jml</p>";
//Add recipient
	$mail->addAddress('ncgamer21@gmail.com');
//Finally send email
	if ( $mail->send() ) {
		echo "Email Sent..!";
	}else{
		echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
	}
//Closing smtp connection
	$mail->smtpClose();
?>