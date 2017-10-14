<?php
// Membuat koneksi dengan database
$connection = mysql_connect("localhost", "root", "");

// Pilih Database
$db = mysql_select_db("u3124438_skpm-stan", $connection);
session_start();// Starting Session

// Storing Session
$user_check=$_SESSION['login_user'];

// SQL QUERY untuk Fetch user
$ses_sql=mysql_query("select nama from mahasiswa where nama='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['nama'];
if(!isset($login_session)){
  mysql_close($connection); // Keluar Koneksi
  header('Location: index.php'); // Kembali ke HomePage
}
?>
