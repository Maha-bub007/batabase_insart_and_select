<?php
include "confiq.php";


if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $roll=$_POST["roll"];
    $class=$_POST["class"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    
  $que= "INSERT INTO information (name,roll,class,email,phone,address) VALUES ('$name','$roll','$class','$email','$phone','$address')";
  mysqli_query($connetion,$que);
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light m-5">
  <a class="navbar-brand" href="index.php">HOME</a>
  <a class="navbar-brand" href="creat.php">CREAT</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
<form action="" method="post" class="m-5">
  <div class="form-group ">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Roll</label>
    <input type="number" name="roll" class="form-control" max="" id="exampleInputPassword1" require>
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Class</label>
    <input type="text" name="class" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Phone</label>
    <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>