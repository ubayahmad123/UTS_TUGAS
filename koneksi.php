<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'gurunya';

$conn = mysqli_connect("localhost", "root", "", "gurunya");
if ($conn) {
    echo "";
} else {
    echo "gagal";
}
