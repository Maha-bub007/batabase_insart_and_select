


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
<table class="table m-5">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Roll</th>
      <th scope="col">Class</th>
      <th scope="col">Email</th>
      <th scope="col">PHONE</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
        include "confiq.php";
        $queary="SELECT * FROM information";
        $result= mysqli_query($connetion,$queary);
        if($result){
            while($database=mysqli_fetch_assoc($result)){
                $id=$database["id"];
                $name=$database["name"];
                $roll=$database["roll"];
                $class=$database["class"];
                $email=$database["email"];
                $phone=$database["phone"];
                $address=$database["address"];

echo '<tr>
      <th >'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$roll.'</td>
      <td>'.$class.'</td>
      <td>'.$email.'</td>
      <td>'.$phone.'</td>
      <td>'.$address.'</td>
      <td>
      <a href="" class="btn btn-success">Edit</a>
      <a href="delete.php?id='.$id.'" class="btn btn-danger">Delete</a>
      </td>
</tr>';
            }
        }
            
        
        ?>
  </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>