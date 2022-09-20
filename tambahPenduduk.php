<?php 
// memanggil file siswa.php
require_once 'penduduk.php';

if (isset($_POST['submit'])) {
    // membuat objek siswa
    $penduduk = new penduduk();
    
    // ambil data hasil submit dari form
    $nik           = $_POST['nik'];
    $nama          = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $status  = $_POST['status'];
    $pekerjaan     = $_POST['pekerjaan'];
    $kewarganegaraan= $_POST['kewarganegaraan'];
    $tempatlahir  = $_POST['tempatlahir'];
    $tanggallahir       = $_POST['tanggallahir'];
    $goldar     = $_POST['goldar'];


    // insert data penduduk
    $penduduk->insert($nik,$nama,$jk,$alamat, $status, $pekerjaan, $kewarganegaraan, $tempatlahir,$tanggallahir, $goldar);
}			


?>