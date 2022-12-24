<?php
//include 'connect.php';
$con= mysqli_connect('localhost','root','Sabari@123','crudoperation');
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Crud operation</title>
    <link rel="stylesheet" type="text/css" href="user.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
</head>
<body>
<h2>Students Database System</h2>
<div class="container">
    <button class="btn btn-success btn-sm my-5"><a href="user.php" class="text-light" style="text-decoration: none;">Add users</a></button>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">username</th>
            <th scope="col">mail</th>
            <th scope="col">mobile</th>
            <th scope="col">password</th>
            <th scope="col">update</th>
            <th scope="col">view</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
$sql="select * from crud2";
$result=mysqli_query($con,$sql);
if($result){
while ($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $username=$row['username'];
    $email=$row['mail'];
    $mobile=$row['mobile'];
    $password=$row['password'];
    echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$username.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
        <td> <button class="btn btn-success btn-sm"><a href="update.php?updateid='.$id.'" class="text-light" style="text-decoration: none;" >Update</a> </button>
 </td>
 <td> <button class="btn btn-primary btn-sm"><a href="view.php?viewid='.$id.'" class="text-light" style="text-decoration: none;">view</a></button></td>
             <td> <button  class="btn btn-danger btn-sm"><a href="delete.php?deleteid='.$id.'" class="text-light" style="text-decoration: none;">Delete</a></button>
</td>
        </tr>';
}
}
        ?>
        </tbody>
    </table>
</div>
</body>
</html>