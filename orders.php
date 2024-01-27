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
	<?php 
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "shri";
				$conn = new mysqli($servername, $username, $password,$dbname);
               
							
			?>
	
	
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/product1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2> ALL - ORDERS</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section">
        <div class="container">
            <br>
            <br>

            <div class="row">
              
              <div class="col-md-12">
                <div class="contact-form">
                
                    <table width="100%" border=1>
                    <tr  style="vertical-align:middle; background-color:#CCCCCC">
							<th width="10%">ORDER ID</th>
							<th width="30%">ORDER DATE</th>
							<th width="20%">GRNAD TOTAL (INR)</th>
							<th width="40%">SHIPPING ADDRESS</th>
                            <th width="40%">STATUS  </th>
						</tr>
						<?php
						
						$query="select order_id, order_date, order_amount,new_address,status from orders where user_id='".$_SESSION['user']."'";
						//echo $query;
						$result=$conn->query($query);
						while($row=$result->fetch_assoc())
						{
						?>
						<tr style="vertical-align:middle;">
                        	<td><a href="order_details.php?orderid=<?php echo $row['order_id'];?>" target="_blank">#<?php echo $row['order_id'];?></a></td>
							<td><?php echo $row['order_date'];?></td>
							<td><?php echo $row['order_amount'];?></td>
							<td><?php echo $row['new_address'];?></td>
                            <td><?php echo $row['status'];?></td>
					    </tr>
					<?php
					
					}
					?>
						
					</table>
					
                    
                    <!-- <label>Extra 1</label> -->

                    <!-- <select>
                        <option value="0">Extra A</option>
                        <option value="1">Extra B</option>
                        <option value="2">Extra C</option>
                    </select> 

                    
                    
                    <div class="main-button">
                        <a href="checkout.php">Checkout</a>
                    </div>-->
                 
                </div>

                <br>
              </div>
            </div>
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