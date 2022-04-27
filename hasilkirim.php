<?php
date_default_timezone_set("Asia/Jakarta"); //untuk mengubah time default agar sesuai dengan domisili
//apabila nama ATAU email kosong maka
if (empty($_POST['nama']) || empty($_POST['email'])) {
    //mengalihkan halaman
    header("Location:kosong.php");
}//apabila nama dan email lengkap
else {
    //menampilkan data nama, email, tanggal dilakukan login, jam dilakukan login
    echo "<center> Nama: ".$_POST['nama']. //menampilkan nama
    "<br>Email: ".$_POST['email']. //menampilkan email
    "<br>Tanggal Login: ".date("l, d F Y"). //menampilkan hari dan tanggal
    "<br>Waktu Login: ".date("H:i:s")."</center>"; //menampilkan waktu 
}
?>