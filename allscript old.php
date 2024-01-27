<?php 
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
		
				
		echo getcode(10);


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
			$mail->FromName = 'Shri Traders';
			
			$mail->addAddress($receiver,' ');
			echo "<br>".$receiver;
			$mail->addReplyTo('shridemo04@gmail.com','Shri Traders');
			$mail->WordWrap = 50;                                
			$mail->isHTML(true); 
			
			$mail->Subject='Welcome to Shri Traders, Jaysingpur';
			$mail->Body="Welcome to shri traders jaysingpur. your login credentials are <br> user id :".$receiver."<br> Password :".$passcode;
			
			if(!$mail->send())
			{
		   	echo 'Message could not be sent.';
		   	echo 'Mailer Error: ' . $mail->ErrorInfo;
		   	exit;
			}
			return true;
			
		}


		/* Following Code indicates insertion of New registration in to database*/
		if(isset($_POST['finish']))
		{
			$pwd=getcode(10);
		
			$query="insert into register(title,name,store_name,email,phone_no,address,GST_no,city,state,pin_code,pay_mode,password) values('$_POST[title]','$_POST[name]','$_POST[store_name]','$_POST[email]','$_POST[mobile_no]','$_POST[address]','$_POST[gst]','$_POST[city]','$_POST[state]','$_POST[pincode]','$_POST[pay_mode]','$pwd')";
			
	 		mysqli_query($conn,$query);
			
			
			
			if(mailsent($_POST[email],$pwd))
			{
				echo "Mail send please check your inbox";
				
			}; // Send email to clinets
			

		echo "Record Saved";
		}
		elseif(isset($_POST['back']))

		{
			echo "Clicked on other button";
		}


?>