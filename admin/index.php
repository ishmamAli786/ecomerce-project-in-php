<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<div class="container-fluid">
<div class="container-fluid one" style=" background-color:black;
            color:white;">
<div class="container">
<p class="pull-right">ishmamalikhan@gmail.com </p>
</div>
</div>
<div class="container"><h1><font face="Centuar">Online Vegetable Shop</font></h1>
</div>
<div class="container">
<div class="container" style="background:blue;color:white;">
<div class="row">
<div class="col-sm-12 mymanu">
<nav class="navbar">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mystyle">
<span class="icon-bar">----</span>
<span class="icon-bar">----</span>
<span class="icon-bar">----</span>
</button>
</div>
<div class="collapse nav-bar collpase" id="mystyle">
<ul class="nav navbar-nav">
<li><a href="index.php" class="active"><font color="white">Home</font></a></li>
<li><a href="#"><font color="white">About Us</font></a></li>
<li><a href="#"><font color="white">Contact Us</font></a></li>
<li><a href="#"><font color="white">Help</font></a></li>
</ul>
<div>
</nav>
</div>
</div>
</div>
</div>
<div class="container">
<h1>Admin Login</h1><br><br>
<form action="" method="POST">
<table class="table">
<tr>
<td>Enter UserName: </td>
<td><input type="text" name="un" placeholder="Enter Username" class="form-control" required></td>
</tr> 
<tr>
<td>Enter Password: </td>
<td><input type="password" name="ps" placeholder="Enter Password" class="form-control" required></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="sub" value="Login"class="btn btn-primary" ></td>
</tr>
</table>
</form><br><br>
<?php
if(isset($_POST['sub'])){
    $un=$_POST['un'];
    $ps=$_POST['ps'];

    $q="select * from admin";
    $result=mysqli_query($con,$q);
    $row=mysqli_fetch_assoc($result);
     $u=$row['email'];
    $p=$row['password'];
    if($un==$u && $ps==$p){
        header('location:ahome.php');
    }
    else{
        header('location:index.php');
    }
}
?>
</div>
<div class="container" style="background-color:silver;color:white;">
<h1 align="center">My Ecomerce Website</h1>
</div>
</div>
</div>
</body>
</html>