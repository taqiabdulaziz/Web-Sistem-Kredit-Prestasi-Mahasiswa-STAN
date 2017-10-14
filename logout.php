<?php
session_start();
if(session_destroy()) // Destoy semua sesi login
{
header("Location: index.php"); // Redirecting ke Home Page
}
?>
