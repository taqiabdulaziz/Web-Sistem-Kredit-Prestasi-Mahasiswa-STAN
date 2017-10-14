<style type="text/css">
@import url("style.css");
</style>
<?php

include('connect_mysql.php');

$jumlah = $_POST['txtNilai1']+$_POST['txtNilai2']+$_POST['txtNilai3'];
$rata = $jumlah/3;

$query = "INSERT INTO nilai_siswa
(nis,nilai1,nilai2,nilai3,rata,jumlah)
VALUES
('".$_POST['txtNIS']."',
'".$_POST['txtNilai1']."',
'".$_POST['txtNilai2']."',
'".$_POST['txtNilai3']."',
'".$rata."',
'".$jumlah."')
";
$hasil_query = mysqli_query($koneksi,$query);


header("Location: exam_form.php");
 ?>
