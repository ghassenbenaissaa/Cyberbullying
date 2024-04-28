<?php
require_once('connect.php');

        $id=$_POST['id'];
        $message=$_POST['message'];

$Rq = $db->prepare('INSERT INTO `message` (`descrption`,`id_v`) VALUES(?,?) ');
$Rq->execute([$message,$id]);
$query2 = "SELECT password FROM victims WHERE id_v = :id_v ";  
$statement2 = $db->prepare($query2);  
$statement2->execute(  array(  'id_v'     =>     $_POST["id"],  )  );  
while ($donnees = $statement2->fetch())
  {
      $password=$donnees['password'];
          
    }   

if ($Rq)
{
        header("location: ../profil.php?name=$password&error=Sent successfully");
        exit();
}  
                
  ?>