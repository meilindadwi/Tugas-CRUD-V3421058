<?php

class penduduk{
    /* Method untuk menyimpan data ke tabel penduduk */
    function insert($nik,$nama,$jk,$alamat, $status, $pekerjaan, $kewarganegaraan, $tempatlahir,$tanggallahir, $goldar) {
        // memanggil file database.php
        require_once "koneksi.php";

        // membuat objek db dengan nama $db
        $db = new database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        // sql statement untuk insert data penduduk
        $sql = "INSERT INTO penduduk (nik, nama, jk, alamat, status, pekerjaan, kewarganegaraan, tempatlahir,tanggallahir, goldar) 
                VALUES ('$nik','$nama','$jk','$alamat','$status', '$pekerjaan', '$kewarganegaraan', '$tempatlahir','$tanggallahir', '$goldar')";

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman penduduk dan tampilkan pesan = 2 */
            header("Location: index.php");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman penduduk dan tampilkan pesan = 1 */
            header("Location: index.php");
        }

        // menutup koneksi database
        $mysqli->close();
    }
}