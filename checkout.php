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

		if(isset($_GET['order']))
		{
			if($_GET['order']=='empty')
			{
				echo "<script>alert('Cart is empty! Please add some item before checkout')</script>";
			}
		}

	?>
    

    <!-- ***** Call to Action Start ***** -->
	<?php 
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "shri";
				$conn = new mysqli($servername, $username, $password,$dbname);
                $gtotal=0;
				
				
				if(isset($_GET['productid']))
				{
				
				
				$query="select product_id, product_name,details,price,imagepath from product where product_id=$_GET[productid]";
				//echo $query;
                

				$result=$conn->query($query);
				$row=$result->fetch_assoc();
					
				$id=$row['product_id'];
				$price=$row['price'];
				$name=$row['product_name'];
				$image=$row['imagepath'];
				$info=$row['details'];
				$qty=$_POST['qty'];
				
				$total=$qty*$price;
				
						/* Check where item is already exist */
						
						$checkq="select count(product_id) as id from cart where login_id='".$_SESSION['user']."' and product_id='$_GET[productid]'";
						$resultcheck=$conn->query($checkq);
						$rowcheck=$resultcheck->fetch_assoc();
						$q="";
						if($rowcheck['id']==0)
							$q="insert into cart(login_id,product_id,name,qty,price,total) values('$_SESSION[user]',$id,'$name',$qty,$price,$total)";
						else
							$q="update cart set qty=$qty, price=$price, total=$total where login_id='".$_SESSION['user']."' and product_id='$_GET[productid]'";
						
					echo $q;
					mysqli_query($conn,$q);
				}
				elseif(isset($_GET['del']))
				{
				
					$delq="delete from cart where login_id='".$_SESSION['user']."' and product_id='$_GET[del]'";
						echo $delq;
					mysqli_query($conn,$delq);
				}
                
			?>
	
	
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/product1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2> CHECKOUT - ORDERS</h2>
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
            
        <form id="contact" action="allscript.php" method="post">
            <br>
            <br>
            <?php
            $query1="select title, name,store_name,email,address from register where email='".$_SESSION['user']."'";
            $result1=$conn->query($query1);
            $row1=$result1->fetch_assoc();
            
            $t= $row1['title'];
            $name=$row1['name'];
            $email=$row1['email'];
            $sname=$row1['store_name'];
            $address=$row1['address'];
            ?>
			<table>
            <tr  colspan="3"  style="height:50px;">
				<th>Delivery Details :</th>
			</tr>
			<tr  style="height:50px;">
				<td>&nbsp;</td>
				<td><strong>Name : </strong></td>
				<td><?php echo  $t." ".$name;?></td>
			</tr>
			<tr style="height:50px;">
				<td>&nbsp;</td>
				<td><strong>Store name : </strong></td>
				<td><?php echo  $sname;?></td>
			</tr>
			<tr style="height:50px;">
				<td>&nbsp;</td>
				<td><strong>Address : </strong></td>
				<td><?php echo  $address;?></td>
			</tr>
			<tr style="height:50px;">
				<td>&nbsp;</td>
				<td><strong>If you want want to deliver this order to new address <br> Please Enter New Address : </strong></td>
				<td><textarea name="n_address" rows="2"></textarea></td>
			</tr>
			<tr  style="height:50px;">
				<td>&nbsp;</td>
				<td><strong>Payment Method : </strong></td>
				<td>Cash On Delivery</td>
			</tr>
			</table><br>
			<strong> ORDER SUMMARY </strong>
            
            
            <div class="row">
              
              <div class="col-md-12">
                <div class="contact-form">
                    <table width="100%" border=1>
                    <tr  style="vertical-align:middle; background-color:#CCCCCC">
							<th width="5%">Sr. No.</th>
							<th width="30%">ITEM</th>
							<th width="20%">PRICE(INR)</th>
							<th width="20%">QUANTITY</th>
							<th width="20%">TOTAL(INR)</th>
                            <th width="5%"></th>
						</tr>
						<?php
						
						$getq="select product_id,name,qty,price,total from cart where login_id='".$_SESSION['user']."'";
						//echo $getq;
						$srno=1;
						$resultx=$conn->query($getq);
						while($rowx=$resultx->fetch_assoc())
						{
							$gtotal=$gtotal+$rowx['total'];
						?>
						<tr style="vertical-align:middle;">
                        <td>&nbsp;&nbsp<?php echo $srno;?></td>
							<td><?php echo $rowx['name'];?></td>
							<td><?php echo $rowx['price'];?></td>
							<td style="vertical-align:middle"><?php echo $rowx['qty'];?></td>
							<td><?php 
                            $total=$rowx['total'];
                            echo $total;?></td>
                            <td><a href="cart.php?del=<?php echo $rowx['product_id'];?>">del</a></td>
					    </tr>
					<?php
					$srno++;
					}
					?>
						
					</table>
					 <table width="100%" border=1>
						<tr style="vertical-align:middle;">
							<th width="75%" colspan="3">GRAND TOTAL ( INR )</th>
							<th width="25%"><?php echo $gtotal; ?></th>
						</tr>
					</table>
                    
                    <!-- <label>Extra 1</label> -->

                    <!-- <select>
                        <option value="0">Extra A</option>
                        <option value="1">Extra B</option>
                        <option value="2">Extra C</option>
                    </select> -->

                    
                   <?php  
                    $_SESSION['gtotal']=$gtotal;
					?>
                        <input type="submit" name="order" value="Order"/>
                   
                  </form>
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