<?php
date_default_timezone_set("Asia/Jakarta"); //untuk mengubah time default agar sesuai dengan domisili
//apabila salah satu data kosong
if (empty($_POST['namad']) || empty($_POST['namab']) || empty($_POST['npm']) || empty($_POST['usia']) || empty($_POST['ins']) || empty($_POST['fakultas']) || empty($_POST['jurusan'])) {
    //mengalihkan halaman 
    header("Location:halamankosong.php");
}//apabila nama dan email lengkap
else {
    //menampilkan data nama, email, tanggal dilakukan login, jam dilakukan login
    echo "Nama: ".$_POST['namad']." ".$_POST['namab']. //menampilkan nama
    "<br>NPM: ".$_POST['npm']. //menampilkan NPM
    "<br>Usia: ".$_POST['usia'].//menampilkan usia
    "<br>Instansi: ".$_POST['ins']. //menampilkan instansi
    "<br>Fakultas: ".$_POST['fakultas']. //menampilkan fakultas
    "<br>Jurusan: ".$_POST['jurusan']. //menampilkan jurusan
    "<br><br>Data dimasukkan pada ".date("l, d F Y"). //menampilkan hari dan tanggal
    "<br>pukul ".date("H:i:s")."<br>"; //menampilkan waktu 
}
?>