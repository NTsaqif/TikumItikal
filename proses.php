<?php

function send($target, $pesan){
    $curl = curl_init();
    
    $data = [
        'target' => $target,
        'message' => $pesan
    ];
    
    curl_setopt($curl, CURLOPT_HTTPHEADER,
        array(
            "Authorization: TOKEN MU",
        )
    );
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_URL, "https://api.fonnte.com/send");
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    $result = curl_exec($curl);
    curl_close($curl);
    
    return $result;
}

if (isset($_POST['nomer']) and isset($_POST['nama']) and isset($_POST['pesan'])) {
    
    $nomer = $_POST['nomer'];
    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];
    
    if ($nomer == "" or $nama == "" or $pesan == "") {
        echo "Ulangi Lagi"; exit;
    } else {
        
        if(strpos(substr($nomer,0,3), '08') !== false){
        	$awal = str_replace("08", "628", substr($nomer,0,3));
        	$nomer = $awal. substr($nomer,3);
        }
        
        $kirim = json_decode(send($nomer, "Halo ada yang mengisi form dengan data\n\nnama: ".$nama."\npesan: ".$pesan."\n\nsegera follow up!\n\n*ini pesan untuk admin"), true);
        $kirim1 = json_decode(send($nomer, "Terimakasih telah menghubungi kami. ini adalah pesan notifikasi bahwa kami telah menerima pesan anda. kami akan segera menghubungi kembali.\n\nTerimakasih\n\n*ini pesan untuk customer"), true);
        if ($kirim['status'] == true and $kirim1['status'] == true) {
            echo "Pesan telah dikirim"; exit;
        } else {
            echo "Pesan gagal dikirim"; exit;
        }
            
    }
    
} else {
    echo "Silahkan coba lagi";
}



?>
