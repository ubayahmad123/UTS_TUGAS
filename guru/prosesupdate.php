<?php
include "../koneksi.php";
$id_asrama = $_POST["Id_asrama"];
$nama_asrama = $_POST["Nama_asrama"];
$no_asrama = $_POST["no_asrama"];
$nama_santri = $_POST["nama_santri"];

$iniupdate = mysqli_query($conn, "UPDATE asrama set Nama_asrama='$nama_asrama',no_asrama='$no_asrama',nama_santri='$nama_santri' where Id_asrama=$id_asrama");
if ($iniupdate) {
    echo "<script>window.alert('berhasil diubah');window.location.href='#'</script>";

} else
    echo "<script>window.alert('gagal diubah');window.location.href='#'</script>";


    