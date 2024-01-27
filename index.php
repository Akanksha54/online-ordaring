<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Shree Enterprises</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
	<?php
		session_start();
		$flag=1;
		if(isset($_SESSION['user']))
		{
			include("login-header.php");
			$flag=0;
            // echo "<script>alert('Successfully Loged-in')</script>";
		}
		else
			include("header.php");
		
		if(isset($_GET['order']))
		{
			if($_GET['order']=='placed')
			{
				echo "<script>alert('Order placed successfully')</script>";
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "shri";
				$conn = new mysqli($servername, $username, $password,$dbname);
                	$query="delete from cart where login_id='$_SESSION[user]'";
					mysqli_query($conn,$query);
				//echo $query;
                
			
			}
		}
        if(isset($_GET['register']))
        {
            if($_GET['register']=='done')
            {
                echo "<script>alert('Register successful. Please check your mail for login credentials')</script>";
            }
        }
        if(isset($_GET['reset']))
        {
            if($_GET['reset']=='done')
            {
                echo "<script>alert('Password reseted successful.')</script>";
            }
        }
	?>
    

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/spices.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Get any product at retail price </h6>
                <h2>Best <em> Retailar Store</em> in town</h2>
                <div class="main-button">
                    <a href="http://localhost/template/contact.php">Contact us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Products</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Now, have lots of product at retailers price, with just one easy step</p>
                    </div>
                </div>
            </div>
            <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div class="row">
			<?php
			
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "shri";
				$conn = new mysqli($servername, $username, $password,$dbname);
				
				$query="select product_id, product_name,details,price,imagepath from offers";
				//echo $query;
				$result=$conn->query($query);
				while($row=$result->fetch_assoc())
				{
			?>
			
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="<?php echo 'pro/'.$row['imagepath'];?>" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>Rs</sup><?php echo $row['price'];?>
                            </span>

                            <h4><?php echo $row['product_name'];?></h4>

                            <p><?php echo $row['details'];?></p>

                            <ul class="social-icons">
                                <li><a href="product-details.php?productid=<?php echo $row['product_id'];?>">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
				<?php
				}
				$conn->close();
				?>
                <!-- <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/p2.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>Rs</sup>10.00
                            </span>

                            <h4>EVEREST's Biryani Masala</h4>

                             <p>Largely a combination of flavouring spices used along with taste-agents like black pepper & chilli to impart a pleasantly textured flavour to ordinary rice.</p> 

                            <ul class="social-icons">
                                <li><a href="product-details.html">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/p3.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>Rs</sup>10.00
                            </span>

                            <h4>Everest Meat Masala</h4>

                             <p>The masala is a vital ingredient while cooking meals and this particular spice has the potential to make your mouth-water with its perfectly balanced flavour blend.</p> 

                            <ul class="social-icons">
                                <li><a href="product-details.html">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>

            <br>

            <div class="main-button text-center">
                <a href="products.html">More products</a>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <section class="section section-bg" id="schedule" style="background-image: url(assets/images/index1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Read <em>About Us</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Coming from a small city, We are distributing our products all over the india</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>We sell our products at retailers price so, everyone can get them at lowest price. We serve our best product to your door steps. </p>

                        <p>We are maximisers. We're out on our own journeys to maximise - be the best at what we choose and care about the most - whether it be our impact, voice, potential, ideas, influence, well-being or more. Because when we maximise ourselves in our inclusive teams,We are able to deliver the best imaginable value for our customers, stakeholders and the planet!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2022 Shree Enterprises
                        - WebPage Designed by: Gayatri Hogale, Divya Chikodi, Vedika Gavali, Akanksha Pise
                        
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>