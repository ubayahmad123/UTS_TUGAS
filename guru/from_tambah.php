<?php
include "../koneksi.php";
$id_guru = $_POST["id_guru"];
$nama_guru = $_POST["nama_guru"];
$keahlian = $_POST["keahlian"];
$mata_pelajaran = $_POST["mata_pelajaran"];


$tambah = mysqli_query($conn, "INSERT INTO guru(id_guru, nama_guru, keahlian, mata_pelajaran) value (NULL,'$nama_guru','$keahlian','$mata_pelajaran')");
if ($tambah) {
    echo "<script>window.alert('berhasil ditambah');window.location.href='index.php'</script>";
} else
    echo "<script>window.alert('gagal ditambah');window.location.href='index.php'</script>";
