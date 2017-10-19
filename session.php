<?php
// Membuat koneksi dengan database
$connection = mysqli_connect("localhost", "root", "", "u3124438_skpm-stan");

session_start();// Starting Session

// Storing Session
$user_check=$_SESSION['login_user'];

// SQL QUERY untuk Fetch user
// $ses_sql=mysqli_query($connection, "select nama from mahasiswa where nama='$user_check'");
$ses_sql=mysqli_query($connection, "select npm from mahasiswa where npm='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['npm'];
if(!isset($login_session)){
  mysqli_close($connection); // Keluar Koneksi
  header('Location: ../index.php'); // Kembali ke HomePage
}
?>
