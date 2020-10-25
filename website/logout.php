<?php
session_start();
if(isset($_SESSION['id']))
{
  echo "hello".$_SESSION['email'];
}
else
{
  header('location:index.php');
}
session_destroy();
header('location:index.php');
?>