<?php
//include 'connect.php';
$con= mysqli_connect('localhost','root','Sabari@123','crudoperation');
if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];
$sql="delete from crud2 where id=$id";
$result=mysqli_query($con,$sql);
if($result){
//echo "Deleted successfully";
   header("Location:display.php");
}else{
    die("data base connection is fail".mysqli_connect_errno());
}
}
?>
