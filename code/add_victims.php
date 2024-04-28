<?php
require_once('connect.php');
session_start();

        $name=$_POST['name'];
        $password=$_POST['password'];
        $age=$_POST['age'];

$Rq = $db->prepare('INSERT INTO `victims` (`firstname`,`password`,`age`) VALUES(?,?,?) ');
$Rq->execute([$name,$password,$age]);
if ($Rq)
{
        header("location: ../conn.php?error=Your account has been created successfully.");
        exit();
}  
                
  ?>