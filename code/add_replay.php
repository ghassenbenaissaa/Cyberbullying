<?php
require_once('connect.php');

        $id=$_POST['id'];
        $message=$_POST['message'];

$Rq = $db->prepare('INSERT INTO `reply` (`description`,`id_v`) VALUES(?,?) ');
$Rq->execute([$message,$id]);

if ($Rq)
{
        header("location: ../respense.php?error=Sent successfully");
        exit();
}               
  ?>