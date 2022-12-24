<?php
//include 'connect.php';
$con= mysqli_connect('localhost','root','Sabari@123','crudoperation');
if(isset($_POST['submit'])){
   $username=$_POST['username'];
   $email=$_POST['mail'];
   $mobile=$_POST['mobile'];
   $password=$_POST['password'];
   $sql="INSERT INTO crud2(username,mail,mobile,password)
         VALUES('$username','$email','$mobile','$password')";
$result=mysqli_query($con,$sql);
if($result){
//echo "Data is inserted in the databases successfully";
    header('Location:display.php');
}else{
    die("data base connection is fail".mysqli_connect_errno());
}
}
?>
<html>
<head>
    <title>Crud operations</title>
    <link rel="stylesheet" type="text/css" href="user.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<h1 >Students Database System </h1>
<div class="container my-5">
    <form method="post">
        <div class="form-group">
            <label >User Name</label>
            <input type="text" class="form-control" placeholder="Enter the user name" name="username" autocomplete="off"required>
        </div>
        <div class="form-group">
            <label >Email address</label>
            <input type="email" class="form-control" placeholder="Enter the mail id" name="mail" autocomplete="off"required>
        </div>
        <div class="form-group">
            <label >Mobile no</label>
            <input type="number" class="form-control" placeholder="Enter the mobile no" name="mobile" autocomplete="off"required>
        </div>
        <div class="form-group">
            <label >Password</label>
            <input type="password" class="form-control" placeholder="Enter the password" name="password" autocomplete="off"required>
        </div>
        <button type="submit" class="btn btn-success btn-sm" name="submit">Login</button>
    </form>
</div>
</body>
</html>
