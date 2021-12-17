<?php
session_start();
    if(isset($_POST['submit'])){
        $uname=$_POST['username'];
        $upass=$_POST['password'];
        
        echo $upass; echo $uname;
        if($uname=='admin' and $upass=='admin'){
            header("Location:admin.php");
            $_SESSION['user']=$uname;
        }else{
            echo"You Don't have permision to access this page!";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<style>
    body{
        background-image:url('img/home-bg.jpg');
    }
</style>

</head>
<body>
    <div class="container p-4">
                <div class="row justify-content-center " >
            <div class="col-md-6">
            <h1 class="display-3 p-4"> Admin Login </h1>
            <div class="design">
            <form action=""  method="post" class="form-group" >
                    <label for="username">User Name </label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                    <label for="password">Password </label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    <input type="submit"  name="submit" class="btn btn-outline-info mt-3">

            </form>
            </div>
                
            </div>
        </div>
    </div>
        
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>
</html>
