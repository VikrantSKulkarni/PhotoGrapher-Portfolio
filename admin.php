
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<title>Admin Page</title>
	<style>
		body{
			background-image:url('img/home-bg.jpg');
		}
	</style>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body >
	<?php  session_start();
	if(isset($_SESSION['user'])){
		echo"<h1>Hello Welcome to Admin Panel</h1>";
		echo"<h2>You Are Logged In As:".$_SESSION['user']."</h2>";
	} else {
		echo"<script>location.href='login.php' </script>"; 
	}?>
     <!-- Header Start -->
 <!--<header class="header">
 	<div class="container">
 		<div class="row justify-content-between align-items-center">
 			<div class="brand-name">
 				<a href="index.html">Photos</a>
 			</div>
      <div class="nav-toggle">
        <span></span>
      </div>
 			<nav class="nav">
 				<ul>
 					<li><a href="#home">Home</a></li>
 					<li><a href="#about">About</a></li>
 					<li><a href="#services">Services</a></li>
 					<li><a href="#works">Works</a></li>
					 <li><a href="#contact">Contact</a></li>
					 <li><a href="login.php">Login</a></li>
 				</ul>
 			</nav>
 		</div>
 	</div>
 </header>
	-->
<br><br><br>
<a href="logout.php" class="btn btn-danger" type="submit">Logout</a>
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="design" style="color:white;">
				<h3>Add Work Images</h3>
				<form class="form-group" action="" method="post" enctype="multipart/form-data">
					<label for="image"></label>
					<label for="name">Name Of Image  </label>
					<input class="form-control mb-3" type="text" name="name" placeholder="Enter Name of Image" required>
					<label for="file">Choose  Image File </label>
					<input type="file" name="uploadfile" class="form-control" placeholder="Choose File" required>
					<input type="submit" name="submit" value="Upload" class="btn btn-primary mt-4"> 
				</form>
			</div>
		</div>
			
		
	

	<div class="col-md-4">
			<div class="design" style="color:white;">
				<h3>Delete Work Images</h3>
				<form class="form-group" action="" method="post" enctype="multipart/form-data">
					<label for="image"></label>
					<label for="name">Name Of Image  </label>
					<input class="form-control mb-3" type="text" name="imgname" placeholder="Enter Name of Image" required>
					<input type="submit" name="delete" value="Delete" class="btn btn-danger mt-4"> 
				</form>
			</div>
		</div>
			
		
	</div>

	</div>
	
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>

<?php
		include("database.php");
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$filename = $_FILES['uploadfile']['name'];
			$tmpname =$_FILES['uploadfile']['tmp_name'];
			
			$folder = 'uploads/';
			move_uploaded_file($tmpname,$folder.$filename);
			$sql = "insert into photos(Name,Image) values('$name','$filename')";
			$query = mysqli_query($conn,$sql);
		
			if($query){
				echo"<html><head><script>alert('Image Uploaed Successfully');</script></head></html>";
			}
			else{
            	echo"Not Inserted !!";
        	} 
		}
		if(isset($_POST['delete'])){
			include("database.php");
			$IMGName=$_POST['imgname'];
			$sql = "Delete from photos where Name='$IMGName'";
			if($conn->query($sql)){
				echo"<html><head><script>alert('Image Delted  Successfully');</script></head></html>";
			}else{
				echo"Not Deleted..";
			}
		}
		?>