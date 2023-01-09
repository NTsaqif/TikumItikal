<?php
        $conn = mysqli_connect("localhost", "wsmifint_tikumitikal", "Polije1234", "wsmifint_tikumitikal");
         
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         

        if (isset($_POST['name']) && isset($_POST['email'])) {
            $name = $_POST['Name'];
            $email = $_POST['Email'];
            $date = $_POST['Date'];
            $time = $_POST['Time'];
            $phone = $_POST['Phone'];
            $table = $_POST['Table Number'];
         
        $sql = "UPDATE reservasi  SET Nama='$name', Email='$email', Tanggal='$date', No_HP='$phone', Durasi='$time' WHERE No_Meja='$table'";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>reservasi berhasil !</h3>";
 
        } else{
            echo "<h3>mohon maaf , meja dengan nomor $table telah digunakan</h3>";
        }
         
        mysqli_close($conn);
    }
        ?>