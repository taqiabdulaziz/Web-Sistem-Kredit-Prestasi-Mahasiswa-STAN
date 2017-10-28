<!DOCTYPE html>
<html>

<head>
<?php
include('connect_mysql.php'); // memasukkan script connect_mysql
//Cek Session
//if(isset($_SESSION['login_user'])){
//  header("location: dashboard/profile.php");
//}
?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SKPM - PKN STAN</title>

<link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="img/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- for unminified version add this -->
	<link rel="stylesheet" type="text/css" href="font/fonts.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- for minified version add this -->
	<link rel="stylesheet" type="text/css" href="font/fonts.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css" />
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>

<body>
 <?php
    //KODING UNTUK LOGIN
    session_start(); // Starting Session
    if(isset($_SESSION['login_user'])){
  header("location: dashboard/profile.php");} else {
    if (isset($_POST['login'])) {
        // $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];

        // injeksi keamanan
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);


        // SQL query to fetch information of registerd users and finds user match.
        $query = mysqli_query($connection, "select * from mahasiswa where npm='$password' AND nama='$username'");
        //Proses Login
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
          $_SESSION['login_user']=$password; // Initializing Session
          header("location: dashboard/profile.php");

          } else {
            $error = "Username or Password is invalid";
          }
          mysqli_close($connection); // Closing Connection
      }
    else {
        $error = " ";
    }
    }
    ?>
 <div class="bg-header"></div>
	<div class="login-box">
		<img src="img/logo.png"/><br>
		<h4>SISTEM KREDIT PRESTASI MAHASISWA</h4>
		<span>Sign In</span>
		<div class="row">
    <form class="col" action="" method="post" name="login">
      <div class="row">
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="username">
          <label for="icon_prefix">Nama</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">vpn_key</i>
          <input class="validate" id="password" type="password" name="password">
          <label for="password">Nomor Pokok Mahasiswa</label>
        </div>
      </div>
      <input class="button btn-login" type="submit" name="login" value="login">
        <?php echo $error;  /*Koding tampil error*/?>
    </form>

  </div>
  <span style="font-size: 10px; margin-left: 30px;">Copyright © 2017 Politeknik Keuangan Negara STAN</span>
	</div>
</body>

</html>
