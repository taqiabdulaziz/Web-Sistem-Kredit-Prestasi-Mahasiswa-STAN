
<?php
include('connect_mysql.php'); // memasukkan script connect_mysql

if(isset($_SESSION['login_user'])){
  header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Form in PHP with Session</title>
<style type="text/css" media="screen">
@import url("style.css");
</style>
</head>
<body>
  <div id="main">
    <h1>SISTEM KREDIT MAHASISWA</h1>
    <div id="login">
      <h2>Login Form</h2>
      <form action="" method="POST">
        <label></label>
        <input id="name" name="username" placeholder="Nama Mahasiswa" type="text">
        <label></label>
        <input id="password" name="password" placeholder="NPM " type="password">
        <input name="submit" type="submit" value=" Login ">
        <span><?php echo $error; ?></span>
      </form>
    </div>
  </div>
</body>
</html>
