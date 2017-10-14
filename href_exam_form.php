<?php
include('connect_mysql.php');

$query = "DELETE FROM nilai_siswa WHERE nis='" . $_GET['nis'] ."'";
$hasil_query = mysqli_query($koneksi,$query);

header("Location: exam_form.php");



 ?>
