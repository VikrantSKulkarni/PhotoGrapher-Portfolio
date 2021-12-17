<?php  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>The- Photographer</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.min.css">
</head>
<body>

  <!-- Preloader Start  -->
 <!-- <div class="preloader">
     <div class="loader">
     </div>
  </div>-->
  <!-- Preloader End  -->
 
 <!-- Header Start -->
 <header class="header">
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
					<?php
						if(isset($_SESSION['user'])){
							echo"<li><a href='logout.php'>LogOut</a></li>";
						}else{
							echo"<li><a href='login.php'>Login</a></li>";
						}
					?>
					
					
					<li><a href="admin.php">My Acount</a></li>
					
 				</ul>
 			</nav>
 		</div>
 	</div>
 </header>
 <!-- Header End -->

 <!-- Home Section Start -->
 <section class="home-section" id="home">
 	<!-- shape -->
 	<div class="shape-01d">
 	</div>
 	<div class="container">
 		<div class="row align-items-center">
 			<div class="home-content">
 				<h4>I'm the greate</h4>
 				<h1>Photographer</h1>
 			</div>
 		</div>
 	</div>

 </section>
 <!-- Home Section End -->

 <!-- About Section Start -->
 <section class="about-section" id="about">
 	<div class="container">
 		<div class="row">
 			<div class="about-img">
 				<div class="img-box">
 					<div class="shape-022">
 					</div>
 					<img src="img/pexels-hassan-ouajbir-1214566.jpg" alt="about me">
 				</div>
 			</div>
 			<div class="about-content">
 			   <div class="row">
                 <div class="section-title">
               	   <h1>About Me</h1>
                 </div>
               </div>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

               <div class="stats">
               	  <div class="row">
               	  	 <div class="stat-box">
               	  	 	<h2>15</h2>
               	  	 	<h5>Awards Won</h5>
               	  	 </div>
               	  	 <div class="stat-box">
               	  	 	<h2>50</h2>
               	  	 	<h5>Projects Done</h5>
               	  	 </div>
               	  	 <div class="stat-box">
               	  	 	<h2>45</h2>
               	  	 	<h5>Happy Clients</h5>
               	  	 </div>
               	  	 <div class="stat-box">
               	  	 	<h2>5000</h2>
               	  	 	<h5>All Shoots</h5>
               	  	 </div>
               	  </div>
               </div>
               <!-- contact btn -->
               <a href="#contact" class="btn btn-01">Contact Me</a>

 			</div>
 		</div>
 	</div>
 </section>
 <!-- About Section End -->

 <!-- Service Section Start -->
 <section class="service-section" id="services">
 	<div class="container">
 		<div class="row">
 			<div class="section-title">
 				<h1>What I Do ?</h1>
 			</div>
 		</div>
 		<div class="row">
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img/service/1.jpg" alt="service">
 					<div class="overlay">
 						<h4>Wedding Photography</h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img/service/2.jpg" alt="service">
 					<div class="overlay">
 						<h4>Portrait Photography</h4>
 					</div>
 				</div>
 			</div>
			 <!-- service Item End -->
			
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img/service/3.jpg" alt="service">
 					<div class="overlay">
 						<h4>Fashion Photography</h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img/service/4.jpg" alt="service">
 					<div class="overlay">
 						<h4>Travel Photography</h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img/service/5.jpg" alt="service">
 					<div class="overlay">
 						<h4>Anniversary Photography</h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img/service/6.jpg" alt="service">
 					<div class="overlay">
 						<h4>Event Photography</h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 		</div>
 	</div>
 </section>
 <!-- Service Section End -->

 <!-- Work Section Start -->
 <section class="work-section" id="works">
 	<div class="container">
 		<div class="row">
 			<div class="section-title">
 				<h1>My Works</h1>
 			</div>
		</div>
	</div>

	<div class="row justify-content-center">
        <div class="col-sm-10">
			<div class="container-box" style="text-align:center;">
			<div class="gallery">
			<?php include("database.php");
				$sql = "SELECT Name,Image FROM photos";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						$picture = $row['Image'];
						$Name =$row['Name'];
						
					 ?>
					
                <a  href="uploads/<?php echo $picture;?>" data-title="<?php echo $Name;?>" data-lightbox="mygallery"><img class="image" src="uploads/<?php echo $picture;?>" alt=""></a>
				<?php }
			   }?>
            </div>

			</div>
			
        </div>
    </div>  


 <!-- Work Section End -->


<!-- Contact Section Start -->
<section class="contact-section" id="contact">
	<div class="container">
		<div class="row">
			<div class="contact-img">
				<div class="img-box">
					<div class="section-title">
						<h1>Contact Me</h1>
					</div>
				</div>
			</div>
		</div>
        <div class="row">
        	<div class="contact-form">
        		<form class="form" action="" method="post">
        			<div class="row">
        				<div class="left input-group">
        					<label>Name</label>
        					<input type="text" name="txtname" placeholder="Your Name Here" class="input-control" required>
        				</div>
        				<div class="right input-group">
        					<label>Email or Phone</label>
        					<input type="text" name="txtemail" placeholder="Your Email or Phone Here" class="input-control" required>
        				</div>
        			</div>
        			<div class="row">
        				<div class="input-group">
        					<label>Message</label>
        					<textarea name="txtmessage" class="input-control" placeholder="Your Message Here" required></textarea>
        				</div>
        			</div>
        			<div class="form-btn">
        				<input type="submit"  name="submit" value="Send Message" class="btn btn-01">
        			</div>
        		</form>

	<?php
		include("database.php");
		if(isset($_POST['submit'])){
			$name=$_POST['txtname'];
			$email=$_POST['txtemail'];
			$message=$_POST['txtmessage'];
			$sql = "INSERT INTO contacts(u_name,u_email,u_message) VALUES ('$name','$email','$message')";
			
			if ($conn->query($sql) === TRUE) {
				echo "<script>alert('Thanks For FeedBack');</script>";
			  } else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			  }
			  
			
		}
		
		?>
        	</div>
        </div>
        <div class="row">
        	<div class="contact-info">
        		<div class="row">
        			<!-- info item start -->
        			<div class="info-item">
        				<h5>Address</h5>
        				<p>Sec - 123, New Delhi, 121211</p>
        			</div>
        			<!-- info item end -->
        			<!-- info item start -->
        			<div class="info-item">
        				<h5>Phone</h5>
        				<p>91 000 000 0000</p>
        			</div>
        			<!-- info item end -->
        			<!-- info item start -->
        			<div class="info-item">
        				<h5>Email</h5>
        				<p>yourmail@gmail.com</p>
        			</div>
        			<!-- info item end -->
        		</div>
        	</div>
        </div>

        <div class="row">
        	<div class="social-links">
        		<a href="#" title="facebook"><img src="img/icons/facebook.svg" alt="facebook"></a>
        		<a href="#" title="twitter"><img src="img/icons/twitter.svg" alt="twitter"></a>
        		<a href="#" title="linkedin"><img src="img/icons/linkedin.svg" alt="linkedin"></a>
        		<a href="#" title="instagram"><img src="img/icons/instagram.svg" alt="instagram"></a>
        	</div>
        </div>

	</div>
</section>
<!-- Contact Section End -->

<!-- copyright text -->
<p class="copyright">&copy; 2020 All Rights Reserved</p>


 <!-- lightbox start -->
<!--<div class="lightbox">
  <div class="img-box">
    <div class="lightbox-close">&times;</div>
    <img src="img/works/large/2.jpg" class="lightbox-img" alt="img">
    <div class="lightbox-caption">
      <div class="lightbox-category">
        
      </div>
      <div class="lightbox-counter">
        
      </div>
    </div>
    <div class="lightbox-controls">
      <div class="prev">
        <img src="img/icons/prev.svg" alt="prev">
            </div>
            <div class="next">
              <img src="img/icons/next.svg" alt="next">
            </div>
    </div>
  </div>
</div>-->
<!-- lightbox end -->


<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>


