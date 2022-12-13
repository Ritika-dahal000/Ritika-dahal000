<?php
if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
$con = mysqli_connect("localhost","root","","login");
$sql="insert into signup(username,password,address) values('$username','$password','$address')";
$query = mysqli_query($con,$sql);
if(!$query){
    echo "Data inserted!";
}else{
    echo 'test';
}


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Sign up Form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="" method="post" action="">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username"/>
                    <label>password</label>
                    <input type="password" class="form-control" name="password"/>
                    <label>address</label>
                    <input type="text" class="form-control" name="address"/>
                <br>
                <input type=submit name=signup class="btn btn-primary" value="SignUp"/>
                </form>
            </div>
        </div>
    </div>
</body>
</html>