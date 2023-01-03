<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $phone = $_POST['phone'];
        $table = $_POST['table'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "tikumcontact@gmail.com"; //enter you email address
        $mail->Password = 'rxkhfboprqphdbin'; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("tikumcontact@gmail.com"); //enter you email address
        $mail->Subject = "Reservasi";
        $mail->Body = $mail->Body = "<h1>Reserve</h1></br><p>Nama = $name</p></br><p>Nomor Telepon = $phone</p></br><p>Tanggal Pesanan = $date</p></br><p>Waktu Pesanan = $time</p></br><p>Nomor Meja = $table</p>";

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>