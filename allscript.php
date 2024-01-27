<?php 
	session_start();
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "shri";
		$conn = new mysqli($servername, $username, $password,$dbname);


		if ($conn->connect_error) 
		{
  			die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully";
		
		 //Random Code generator for max 10 carachetrs 
		
					function getcode($n) 
					{
						$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
						$randomString = '';
					  
						for ($i = 0; $i < $n; $i++) {
							$index = rand(0, strlen($characters) - 1);
							$randomString .= $characters[$index];
						}
					  
						return $randomString;
					}
		

		/* For sending Email to the client*/
		function mailsent($receiver,$passcode) 
		{
			require 'PHPMailer/PHPMailerAutoload.php';
			
			$mail = new PHPMailer;
 			$mail->isSMTP();                                    
			$mail->Host = 'smtp.gmail.com'; 
			$mail->SMTPAuth = true;                               
			$mail->Username = 'shridemo04@gmail.com';                            
			$mail->Password = 'squad1234';                        
			$mail->SMTPSecure = 'tls';                            
			$mail->Port = 587;// extra added 
			$mail->From = 'shridemo04@gmail.com';
			$mail->FromName = 'Shri Enterprises';
			
			$mail->addAddress($receiver,' ');
			echo "<br>".$receiver;
			$mail->addReplyTo('shridemo04@gmail.com','Shri Enterprises');
			$mail->WordWrap = 50;                                
			$mail->isHTML(true); 
			
			$mail->Subject='Welcome to Shri Enterprises, Jaysingpur';
			$mail->Body="Welcome to shri Enterprises jaysingpur. your login credentials are <br> user id :".$receiver."<br> Password :".$passcode;
			
			if(!$mail->send())
			{
		   	echo 'Message could not be sent.';
		   	echo 'Mailer Error: ' . $mail->ErrorInfo;
		   	exit;
			}
			return true;
			
		}
		/* For sending Email to the client about order placed*/
		function order($receiver) 
		{
			require 'PHPMailer/PHPMailerAutoload.php';
			
			$mail = new PHPMailer;
 			$mail->isSMTP();                                    
			$mail->Host = 'smtp.gmail.com'; 
			$mail->SMTPAuth = true;                               
			$mail->Username = 'shridemo04@gmail.com';                            
			$mail->Password = 'squad1234';                        
			$mail->SMTPSecure = 'tls';                            
			$mail->Port = 587;// extra added 
			$mail->From = 'shridemo04@gmail.com';
			$mail->FromName = 'Shri Enterprises';
			
			$mail->addAddress($receiver,' ');
			echo "<br>".$receiver;
			$mail->addReplyTo('shridemo04@gmail.com','Shri Enterprises');
			$mail->WordWrap = 50;                                
			$mail->isHTML(true); 
			
			$mail->Subject='Password : Shri Enterprises';
			$mail->Body="Your order has been placed successfully!";
			
			if(!$mail->send())
			{
		   	echo 'Message could not be sent.';
		   	echo 'Mailer Error: ' . $mail->ErrorInfo;
		   	exit;
			}
			return true;
			
		}
		/* For sending reseted password to the client*/
		function resetpass($receiver,$passcode) 
		{
			require 'PHPMailer/PHPMailerAutoload.php';
			
			$mail = new PHPMailer;
 			$mail->isSMTP();                                    
			$mail->Host = 'smtp.gmail.com'; 
			$mail->SMTPAuth = true;                               
			$mail->Username = 'shridemo04@gmail.com';                            
			$mail->Password = 'squad1234';                        
			$mail->SMTPSecure = 'tls';                            
			$mail->Port = 587;// extra added 
			$mail->From = 'shridemo04@gmail.com';
			$mail->FromName = 'Shri Enterprises';
			
			$mail->addAddress($receiver,' ');
			echo "<br>".$receiver;
			$mail->addReplyTo('shridemo04@gmail.com','Shri Enterprises');
			$mail->WordWrap = 50;                                
			$mail->isHTML(true); 
			
			$mail->Subject='Welcome to Shri Enterprises, Jaysingpur';
			$mail->Body="Welcome to shri Enterprises jaysingpur. your new login credentials are <br> user id :".$receiver."<br> Password :".$passcode;
			
			if(!$mail->send())
			{
		   	echo 'Message could not be sent.';
		   	echo 'Mailer Error: ' . $mail->ErrorInfo;
		   	exit;
			}
			return true;
			
		}
		/*function checkEmail($email)
		{
			$email=mysql_real_escape_string('$_POST[email]');
			$sql=mysql_query("SELECT * FROM register WHERE email='$_POST[email]'");
			if (mysql_num_rows($sql)==0)
			{
				return true;
			}
			return false;
		}*/


		/* Following Code indicates insertion of New registration in to database*/

			if(isset($_POST['finish']))
			{
				
					$password=getcode(6);
					$query="insert into register(title,name,store_name,email,phone_no,address,GST_no,city,state,pin_code,pay_mode,password) values('$_POST[title]','$_POST[name]','$_POST[store_name]','$_POST[email]','$_POST[mobile_no]','$_POST[address]','$_POST[gst]','$_POST[city]','$_POST[state]','$_POST[pincode]','$_POST[pay_mode]','$password')";
				
		 			mysqli_query($conn,$query);
		 			echo "Record Saved";
		 			mailsent($_POST['email'],$password);
					echo "please check your mail for login credentials";
			}
			/* Following code check login id and password to login*/
			elseif(isset($_POST['Login']))
			{
				$query="select * from register where email='".$_POST['email']."'";
				echo $query;
				$result=$conn->query($query);
			
			
				$row=$result->fetch_assoc();
				if($row['password']==$_POST['password'])
				{
					
					$_SESSION['user']=$_POST['email'];
					$_SESSION['name']=$row['name'];
					$_SESSION['title']=$row['title'];
					$_SESSION['store_name']=$row['store_name'];
					$_SESSION['phone_no']=$row['phone_no'];
					$_SESSION['address']=$row['address'];
					$_SESSION['gst_no']=$row['GST_no'];
					$_SESSION['city']=$row['city'];
					$_SESSION['state']=$row['state'];
					$_SESSION['pin_code']=$row['pin_code'];
					
					
					echo $_SESSION['gst_no'];
					header("location:index.php");
				}
				else
					header("location:login.php?login=failed");
			}
			elseif(isset($_POST['order']))
			{	
			/* Check where cart is empty */
				if($_SESSION['gtotal']==0)
					header("location:checkout.php?order=empty");
				else
				{	
					$query1="select email from register where email='".$_SESSION['user']."'";
					$result1=$conn->query($query1);
					$row1=$result1->fetch_assoc();
					
					$email=$row1['email'];
						order($email);//this code is to sent a mail to user about order status
						$address=$_SESSION['address'];
						/* Check new and old address*/
						if($_POST['n_address']!="")
							$address=$_POST['n_address'];
						
						/* Generate orders table entry*/
						$order_query="insert into orders(user_id,order_amount,new_address) values('$_SESSION[user]',$_SESSION[gtotal],'$address')";
						if(mysqli_query($conn,$order_query))
						{
							/* get latest order number from orders trable*/
							$get_order_query="select max(order_id) as orderid from orders where user_id='".$_SESSION['user']."'";
							$orderid_result=$conn->query($get_order_query);
							$row_orderid=$orderid_result->fetch_assoc();
							
							$orderid=$row_orderid['orderid'];
							
							/*query to retrive cart values and update to order_details table*/
							$cart_query="select product_id, name, qty, price, total from cart where login_id='".$_SESSION['user']."'";
							$cart_result=$conn->query($cart_query);
							while($cart=$cart_result->fetch_assoc())
							{
								/* Query to update order details table with order id generated*/
								$order_details_query="insert into order_details (order_id, product_id, product_name, qty, price, total) values($orderid,$cart[product_id],'$cart[name]',$cart[qty],$cart[price],$cart[total])";
								mysqli_query($conn,$order_details_query);
							}
							
						}
						echo "Order Successfully places.";
						header("location:index.php?order=placed");	
					}
			}
			elseif(isset($_GET['logout']))
			{
				unset($_SESSION['user']);
				unset($_SESSION['name']);
				session_destroy();
				header("location:index.php");
			}
			elseif(isset($_POST['storeup']))
			{
				$email1=$_SESSION['user'];
				$query1="update register set store_name='$_POST[store_name]' where email='$email1'";
				
				mysqli_query($conn,$query1);
				echo "<script>alert('Order Successfully places.')</script>";
				header("location:index.php");
			}
			elseif(isset($_POST['mobileup']))
			{
				$email1=$_SESSION['user'];
				$query1="update register set phone_no='$_POST[mobile_no]' where email='$email1'";
				
				mysqli_query($conn,$query1);
				// echo 'updated';
				header("location:edit.php");
			}
			elseif(isset($_POST['addressup']))
			{
				$email1=$_SESSION['user'];
				$query1="update register set address='$_POST[address]' where email='$email1'";
				
				mysqli_query($conn,$query1);
				// echo 'updated';
				header("location:edit.php");
			}
			elseif(isset($_POST['gstup']))
			{
				$email1=$_SESSION['user'];
				$query1="update register set GST_no='$_POST[gst]' where email='$email1'";
				
				mysqli_query($conn,$query1);
				// echo 'updated';
				header("location:edit.php");
			}
			elseif(isset($_POST['cityup']))
			{
				$email1=$_SESSION['user'];
				$query1="update register set city='$_POST[city]' where email='$email1'";
				
				mysqli_query($conn,$query1);
				// echo 'updated';
				header("location:edit.php");
			}
			elseif(isset($_POST['Reset']))
			{
				//call to random code generator function to provide new password
				$password=getcode(6);
				//following code is for fetch email from database
				// $email1=$_SESSION['user'];

				resetpass($_POST['email'],$password);
				$query1="update register set password='$password' where email='$_POST[email]'";
				mysqli_query($conn,$query1);
				// echo "successful";
				header("location:login.php");
			}
?>