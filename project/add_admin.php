<?php
//print_r($conn);


///////////////
if(isset($_POST['submit'])){
    $fullname=$_POST['full_name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="insert into admins set username='$username', fullname='$fullname', password='$password'";
    $res=mysqli_query($conn,$sql);
    if($res){
        $_SESSION['admin']= "admin is added";
        header("locatin:manage-admin.php");
    }else{
       $_SESSION['admin']="admin is not added";
       header("locatin:manage-admin.php");
    }

}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login | By Code Info</title>
    <link rel="stylesheet" href="Css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="login-box">
      <h1>add admin</h1>
      <form>
      <label>fullname</label>
        <input type="fullname" placeholder="" />
        <label>username</label>
        <input type="username" placeholder="" />
        <label>Password</label>
        <input type="password" placeholder="" />
        <input type="button" value="Submit" />
      <closeform></closeform></form>
    </div>