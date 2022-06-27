<?php
$konek = mysqli_connect('localhost', 'root', '', 'sikrepsi');
if (!$konek){
    echo "Gagal koneksi ke database : " . mysqli_connect_error();
}
