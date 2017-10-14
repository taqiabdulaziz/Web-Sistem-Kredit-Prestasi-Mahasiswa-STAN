<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
  if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "Username or Password is invalid";
  }
  else
  {
    // $username and $password
    $username=$_POST['username'];
    $password=$_POST['password'];
    //koneksi
    $connection = mysql_connect("localhost", "root", "");

    // injeksi keamanan
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    // Selecting Database
    $db = mysql_select_db("u3124438_skpm-stan", $connection);

    // SQL query to fetch information of registerd users and finds user match.
    $query = mysql_query("select * from mahasiswa where npm='$password' AND nama='$username'", $connection);
    $rows = mysql_num_rows($query);
    if ($rows == 1) {
      $_SESSION['login_user']=$username; // Initializing Session
      header("location: profile.php");

      } else {
        $error = "Username or Password is invalid";
      }
      mysql_close($connection); // Closing Connection
    }
  }
  ?>
