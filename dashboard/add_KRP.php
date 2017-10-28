<html>
<header>
<!-- css date picker. jangan dihapus ya -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $(document).ready(function() {
      $('#datepicker').datepicker({
        dateFormat: 'yy-mm-dd'
      });
      $('#datepickera').datepicker({
        dateFormat: 'yy-mm-dd'
       });
  } );
  </script>
</header>

<body>
    <h1>Tambah Kartu Rencana Prestasi</h1>

<form method="post" enctype="multipart/form-data">
<table>
    <tr><td>KRPM</td></tr>
    <tr><td><input type="text" name="krpm" required></td></tr>
    <tr><td>Kode</td></tr>
    <tr><td><input type="text" name="kode" required></td></tr>
    <tr><td>Nama Kegiatan</td></tr>
    <tr><td><input type="text" name="keg" required></td></tr>
    <tr>
        <td>Lingkup</td>
        <td>Tanggal Mulai</td>
        <td>Tanggal Selesai</td>
    </tr>
    <tr>
        <td><input type="text" name="lingk" required></td>
        <td><input type="text" name="tglm" required id="datepicker"></td>
        <td><input type="text" name="tgls" required id="datepickera"></td>
    </tr>
    <tr>
        <td>Nilai</td>
        <td>Upload Dokumen</td>
    </tr>
    <tr>
        <td><input type="text" name="nilai" required></td>
        <td><input type="file" name="dok" required></td>
    </tr>
    <tr><td>Keterangan</td></tr>
    <tr><td><input type="text" name="ket" required></td></tr>
</table>
<input type="submit" name="submit" id="submit" value="Tambah KRP">
</form>


<?php
include('../session.php');
if (isset($_POST['submit'])) { 
	$krpm = $_POST['krpm'];
	$kode = $_POST['kode'];
	$keg = $_POST['keg'];
	$lingk = $_POST['lingk'];
	$tglm=$_POST['tglm'];
    $tgls=$_POST['tgls'];
	$nilai=$_POST['nilai'];
	$ket=$_POST['ket'];
	$dok = $_FILES['dok']['name'];
	$dok_tmp = $_FILES['dok']['tmp_name'];
	$lokasi= "upload/$dok";
    move_uploaded_file($dok_tmp, $lokasi);
    
    
    if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
$apa = "INSERT INTO kegiatan (NPM, krpm, kode, nama_kegiatan, lingkup, tgl_mulai, tgl_selesai, nilai, keterangan, dokumen) VALUES ('$user_check', $krpm, '$kode', '$keg', '$lingk', '$tglm', '$tgls', $nilai, '$ket', '$dok')";

if (mysqli_query($connection, $apa)) {
    //echo $apa;
    header('Location: profile.php');
    exit();
} else {
    echo "Error: " . $apa . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
}
?>
</body>

    
<footer></footer>
</html>
