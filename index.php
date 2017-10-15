
<!-- Login PAGE -->
<?php
include('connect_mysql.php'); // memasukkan script connect_mysql
//Cek Session
if(isset($_SESSION['login_user'])){
  header("location: dashboard/profile.php");
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Mahasiswa</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/login_style.css">
</head>
<body>
    <?php
    //KODING UNTUK LOGIN
    session_start(); // Starting Session
    if (isset($_POST['submit'])) {
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
          $_SESSION['login_user']=$username; // Initializing Session
          header("location: dashboard/profile.php");

          } else {
            $error = "Username or Password is invalid";
          }
          mysqli_close($connection); // Closing Connection
      }
    else {
        $error = " ";
    }
    ?>
    
<div class="login-page">
  <div class="form">
    <form class="login-form" action="" method="post">
      <div class="title">
        <p> SISTEM KREDIT MAHASISWA </p>
      </div>
      <input type="text" class="input-block-level" placeholder="Nama Mahasiswa" name="username" required />
      <input type="text" class="input-block-level" placeholder="NPM" name="password" required />
        <button type="submit" name="submit" value="Login">Login</button>
        <?php echo $error;  /*Koding tampil error*/?>
              <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
    
  <script src='js/jquery311.min.js'></script>
    <script  src="js/index.js"></script>

</body>
</html>
