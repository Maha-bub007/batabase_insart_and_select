<?php
include "confiq.php";
if(isset($_GET["id"])){
    $id=$_GET["id"];
$que1="DELETE FROM information WHERE id=$id";
$result=mysqli_query($connetion,$que1);
if($result){
    header("location:index.php");
}
}


?>