<!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
	<?php
		if(isset($_SESSION['user']))
		{
		
    ?>
    
   <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">Shree Enterprises </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="products.php">Products</a></li>
                            <!--<li><a href="register.php">checkout</a></li>-->
                            <li class="dropdown">
                                <a class="dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Orders</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"  href="cart.php">Chart</a>
                                    <a class="dropdown-item " href="checkout.php">Checkout</a>
                                    <a class="dropdown-item" href="orders.php">Orders</a>
                                 </div>
                            </li>
							<li class="dropdown">
                                <a class="dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php $_SESSION['user']; ?></a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"  href="about.html">Change Password</a>
                                    <a class="dropdown-item " href="blog.html">Edit Profile</a>
                                    <a class="dropdown-item" href="testimonials.html">Logout</a>
                                 </div>
                            </li>
                             
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
	<?php
	
	
		}
		else
		{
	?>
    
   <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">Shree Enterprises </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="products.php">Products</a></li>
                            <li><a href="register.php">New Register</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="about.php">About Us</a></li> 
                            <li><a href="contact.php">Contact</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
	<?php
	}
	?>