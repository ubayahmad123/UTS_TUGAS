<?php
include "../koneksi.php";
$id_guru = $_GET['id_guru'];
$inihapus = mysqli_query($conn, "DELETE FROM guru where id_guru='$id_guru'");
if ($inihapus) {
    echo "<script>window.alert('berhasil dihapus');window.location.href='index.php'</script>";
} else
    echo "<script>window.alert('gagal dihapus');window.location.href='id_guru'</script>";
