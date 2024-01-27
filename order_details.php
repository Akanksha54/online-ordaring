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
                
				$queryq="select order_id, order_date, order_amount,new_address from orders where order_id=".$_GET['orderid']."";
				$resultq=$conn->query($queryq);
				$rowq=$resultq->fetch_assoc();
			?>
	
	
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/product1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2> ORDERS DETAILS</h2>
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
               	<center>
			   		<table width="80%" border="1">
						<tr>
							<td colspan="3"><center><strong>ORDER DETAILS</strong></center></td>
						</tr>
						<tr>
							<td width="33%">
								<table width="100%" border="0">
									<tr><td><strong>Order ID :</strong> <?php echo $rowq['order_id'];?></td></tr>
									<tr><td><strong>Order Date :</strong><?php echo $rowq['order_date'];?></td></tr>
									<tr><td><strong>GST No :</strong> <?php echo $_SESSION['gst_no'];?></td></tr>
								</table>
							</td>
							<td width="33%"  style="vertical-align:top">
								<table width="100%" border="0">
									<tr><td  style="vertical-align:top"><strong>Billing Address (COD):</strong><br><?php echo $rowq['new_address'];?>
									
									</td></tr>
									
									
								</table>
							</td>
							<td width="33%"  style="vertical-align:top">
								<table width="100%" border="0">
									<tr><td><strong>Shipping Address :</strong><br><?php echo $rowq['new_address'];?>
									
									</td></tr>
									
									
								</table>
							</td>
						
						</tr>
						</table> <br>
					
					
                    <table width="80%" border=1>
                    <tr  style="vertical-align:middle; background-color:#CCCCCC">
							<th width="5%">Sr. No.</th>
							<th width="35%">ITEM</th>
							<th width="20%">PRICE(INR)</th>
							<th width="20%">QUANTITY</th>
							<th width="20%">TOTAL(INR)</th>
                            
						</tr>
						<?php
						
						$getq="select product_id,product_name,qty,price,total from order_details where order_id=".$_GET['orderid']."";
						//echo $getq;
						$srno=1;
						$resultx=$conn->query($getq);
						while($rowx=$resultx->fetch_assoc())
						{
							
						?>
						<tr style="vertical-align:middle;">
                        <td>&nbsp;&nbsp<?php echo $srno;?></td>
							<td><?php echo $rowx['product_name'];?></td>
							<td><?php echo $rowx['price'];?></td>
							<td style="vertical-align:middle"><?php echo $rowx['qty'];?></td>
							<td><?php echo $rowx['total'];?></td>
                            
					    </tr>
					<?php
					$srno++;
					}
					?>
						
					</table>
					 <table width="80%" border=1>
						<tr style="vertical-align:middle;">
							<th width="80%" colspan="3">GRAND TOTAL ( INR )</th>
							<th width="20%"><?php echo $rowq['order_amount'];?></th>
						</tr>
					</table>
					<center>This computer generated summary</center><br><br><br>
					<table width="80%" border=0>
						<tr style="vertical-align:bottom; text-align:right">
							<th width="80%" colspan="3">Authorized Signature</th>
						</tr>
					</table>
                    
                    <!-- <label>Extra 1</label> -->

                    <!-- <select>
                        <option value="0">Extra A</option>
                        <option value="1">Extra B</option>
                        <option value="2">Extra C</option>
                    </select> -->

                    
                    
                    <div class="main-button">
                        <a href="cancelorder.php"></a>
                    </div>
                 </center>
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
                      Copyright � 2022 Shree Enterprises
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