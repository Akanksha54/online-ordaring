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
		}
		else
			include("header.php");
		
		
		
		
	?>
    
	
	

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/product1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Our <em>Products</em></h2>
                        <p>Now have lots of product at retailers price, with just one easy step</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
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
				
				$query="select product_id, product_name,details,price,imagepath from product";
				//echo $query;
				$result=$conn->query($query);
				while($row=$result->fetch_assoc())
				{
			?>
			
			
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="<?php echo 'assets/images/products/'.$row['imagepath'];?>" alt="">
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
                <!--
				<div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/p2.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>Rs</sup>17.00
                            </span>

                            <h4>EVEREST's Biryani Masala</h4>

                            <p>Largely a combination of flavouring spices used along with taste-agents like black pepper & chilli to impart a pleasantly textured flavour to ordinary rice.</p>

                            <ul class="social-icons">
                                <li><a href="product-details.php">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/p3.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>Rs</sup>17.00
                            </span>

                            <h4>Everest Meat Masala</h4>

                            <p>The masala is a vital ingredient while cooking meals and this particular spice has the potential to make your mouth-water with its perfectly balanced flavour blend.</p>

                            <ul class="social-icons">
                                <li><a href="product-details.php">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/p4.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>Rs</sup>17.00
                            </span>

                            <h4>Dehydrated Green Chilly Powder</h4>

                            <p>We are considered a reputed name manufacturing and trading Dehydrated Green Chilly Powder.</p>

                            <ul class="social-icons">
                                <li><a href="product-details.php">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/p5.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>Rs</sup>17.00
                            </span>

                            <h4>Kissan Mixed Fruit Jam</h4>

                            <p>Kissan Mixed Fruit Jam has a flavorsome appeal with its fresh, delicious mixed fruits.</p>

                            <ul class="social-icons">
                                <li><a href="product-details.php">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/p6.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>Rs</sup>17.00
                            </span>

                            <h4>Everest Cumin (Jeera) Powde</h4>

                            <p>It is sourced from the well drained, loamy regions of Gujarat and Rajasthan.</p>

                            <ul class="social-icons">
                                <li><a href="product-details.php">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>-->
            </div>

            <br>
                
            <nav>
              <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>

        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

    
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