<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TIKUM Cookery & Coffee</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.html" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">TIKUM</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <a href="menu.html" class="nav-item nav-link">Menu</a>
                    <a href="reservation.php" class="nav-item nav-link active">Reservation</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid reservation-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Reservation</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Reservation Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="text-white">Online Table Booking</h1>
                            </div>
                            <img src="img/denah.jpg" alt="Image" width="500" height="500">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                            <h1 class="text-white mb-4 mt-5">Book Your Table</h1>
                            <form class="mb-5" name="pesan" method="post" action="proses.php" onsubmit="return onFormSubmit(this);">
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control bg-transparent border-primary p-4" placeholder="Nama"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="telpon" class="form-control bg-transparent border-primary p-4" placeholder="Nomor Telepon"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <div class="date" id="time" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Tanggal Pemesanan" data-target="#date" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="nomeja" class="form-control bg-transparent border-primary p-4" placeholder="Nomor Meja"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="jumlah" class="form-control bg-transparent border-primary p-4" placeholder="Jumlah Orang"
                                        required="required" />
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block font-weight-bold py-3" name="submit" type="submit">Pesan Sekarang</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->


    <!-- Footer Start -->
  <div class="container-fluid reservation-footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Our Contact</h4>
                <p><i class="fas fa-phone mr-2"></i>0813 3403 4507</p>
                <p><i class="fa fa-envelope mr-2"></i>cookeryandcoffeetikum@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">More Information</h4>
                <p>Cek informasi kami untuk mendapatkan detail yang lebih lengkap</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="https://instagram.com/tikum.cookeryandcoffee?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="https://goo.gl/maps/fTwGqR8i4tWdKDun8"><i class="fa fa-map-marker-alt mr-2"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="https://gofood.link/a/yQykwQC"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Open Hours</h4>
                <div>
                    <h6 class="text-white text-uppercase">Senin - Sabtu</h6>
                    <p>10.00 - 00.00</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Our Rating</h4>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- php -->
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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
