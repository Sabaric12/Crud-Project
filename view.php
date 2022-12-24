<?php
//include 'connect.php';
$con= mysqli_connect('localhost','root','Sabari@123','crudoperation');
$id=$_GET['viewid'];
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
//echo "viewed successfully";
        header('Location:display.php');
    }else{
        die(mysqli_query($con));
    }
}
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Crud operation</title>
    <link rel="stylesheet" type="text/css" href="user.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<body>
<h3>Students Database System</h3>
<div class="container my-5">
    <button class="btn btn-success btn-sm my-5"><a href="display.php" class="text-light" style="text-decoration: none;">Back</a></button>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">username</th>
            <th scope="col">mail</th>
            <th scope="col">mobile</th>
            <th scope="col">password</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"><?php echo $id; ?></th>
            <td>'<?php echo $username; ?> '</td>
            <td>' <?php echo $email; ?>'</td>
            <td><?php echo $mobile; ?></td>
            <td>'<?php echo $password; ?>'</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
