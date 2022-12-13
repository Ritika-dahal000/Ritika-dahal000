<?php
session_start();
if(isset($_SESSION['username'])){
  header('Location:dashboard.php');
}
  if(isset($_POST['log'])){
    // echo "iamhere";
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $connection = mysqli_connect("localhost","root","","login");
    if($connection){
      $sql = "select * from signup where username='$user'";//sql query
      $query = mysqli_query($connection,$sql);//execute
      while($row=mysqli_fetch_assoc($query)){
           if($user==$row['username'] && $pass==$row['password']){
            $_SESSION['username']=$user;
            $_SESSION['address']=$row['address'];
            header('location:dashboard.php');
           }
      }
    }
    // if($user=="admin" && $pass=="admin123"){
        
    //     $_SESSION['username']=$user;
        
    //     // location:()
    //     header('location:dashboard.php');
    // }else{
    //   echo "<script>alert('Username and password does not match')</script>";
    // }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="login" method="post" action="">
   <input type="text" name="username" />
   <input type="password" name="password">
   <input type="submit" value="Login" name="log"/>
</form>
</body>
</html>