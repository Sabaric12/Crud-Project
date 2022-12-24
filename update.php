<?php
//include 'connect.php';
$con= mysqli_connect('localhost','root','Sabari@123','crudoperation');
$id=$_GET['updateid'];
$sql="select * from crud2 where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$username=$row['username'];
$email=$row['mail'];
$mobile=$row['mobile'];
$password=$row['password'];
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['mail'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="update crud2 set id=$id,username='$username',mail='$email',mobile='$mobile',password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
//echo "updated successfully";
      header('Location:display.php');
    }else{
        die(mysqli_query($con));
    }
}
?>
<html>
<head>
    <title>Crud operation</title>
    <link rel="stylesheet" type="text/css" href="user.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<body>
<h3>Students Database System</h3>
<div class="container my-5">
    <form method="post">
        <div class="form-group">
            <label >User Name</label>
            <input type="text" class="form-control" placeholder="Enter the user name" name="username" autocomplete="off" required value=<?php
            echo $username; ?>>
        </div>
        <div class="form-group">
            <label >Email address</label>
            <input type="text" class="form-control" placeholder="Enter the mail id" name="mail" autocomplete="off" required value=<?php echo $email; ?>>
        </div>
        <div class="form-group">
            <label >Mobile no</label>
            <input type="text" class="form-control" placeholder="Enter the mobile no" name="mobile" autocomplete="off" required value=<?php echo $mobile; ?>>
        </div>
        <div class="form-group">
            <label >Password</label>
            <input type="text" class="form-control" placeholder="Enter the password" name="password" required value=<?php echo $password; ?>>
        </div>
        <button type="submit" class="btn btn-success btn-sm" name="submit">Update</button>
    </form>
</div>
</body>
</html>
