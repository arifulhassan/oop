<?php include "init.php"; ?>
<?php if(!isset($_SESSION['id'])): ?>
    <?php header("location:login.php"); ?>
    <?php endif; ?>

    



 <?php

   $conn = mysqli_connect('localhost','root','','login');

   $sql = "SELECT * FROM users";
   $result = mysqli_query($conn,$sql);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Users Details!</title>
  </head>
  <body>


  <div class="contain">
         <?php if(isset($_SESSION['login_success'])): ?>
            <div class="success">
                <?php echo $_SESSION['login_success']; ?>
            </div>
         <?php endif; ?>
         <?php unset($_SESSION['login_success']); ?>
         <h2>Welcome to the dashboard</h2><hr>
         <a class= "btn btn-info col-md-3" href="logout.php">New USER</a>
     </div>

<br><br><br>  
  
    <div class="container">
        <div class="row">

            </div>
            <div class="col-md-12">
            <h2>Users List</h2>
                 <table class="table" border="2">
                     <thead>
                         <th>ID</th>
                         <th>NAME</th>
                         <th>Email</th>
                         <th>Password</th>
                        
                       
                         <th>Action</th>

                     </thead>
                     <tbody>
                     <?php while($row = mysqli_fetch_assoc($result)){ ?>
                         <tr>
                            <td><?php echo $row['id'] ?></td>
                             <td><?php echo $row['name'] ?></td>
                             <td><?php echo $row['email'] ?></td>
                             <td><?php echo $row['password'] ?></td>
                             
                             <td>

                             <!-- <a class="btn btn-info" href="show.php?id=<?php echo $row['ID']; ?>"> View</a>
                             <a class="btn btn-warning" href="edit.php?id=<?php echo $row['ID']; ?>">Edit</a> -->
                             <a class="btn btn-danger" onclick="return confirm('Are You Sure')" href="delete.php?ROLL=<?php echo $row['ID']; ?>">Delete</a>
                             
                             </td>
                               
                         </tr>
                     <?php } ?>
                     </tbody>
                 </table>
            </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>