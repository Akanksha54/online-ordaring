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
        include_once("header.php");
    ?>
    
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/product1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Easy <em>Register</em></h2>
                        <p>Just add nessecry information about yourself and you are good go to.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="allscript.php" method="post">
                           <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     <label>Title:</label>
                                     <select data-msg-required="This field is required." name="title">
                                          <option value="">-- Choose --</option>
                                          <option value="miss">Miss</option>
                                          <option value="mr"  >Mr.</option>
                                          <option value="mrs" >Mrs.</option>
                                          <option value="other">Other</option>
                                     </select>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                     <label>Name:</label>
                                     <input type="text" name="name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label>Store Name:</label>
                                    <input type="text" name="store_name">
                               </div>
                               <div class="col-sm-6 col-xs-12">
                                    <label>Email:</label>
                                    <input type="email" name="email" required>
                                </div>
                           </div>
                           <div class="row">
                                <!-- <div class="col-sm-6 col-xs-12">
                                     <label>Email:</label>
                                     <input type="text" name="email">
                                </div> -->
                                <div class="col-sm-6 col-xs-12">
                                     <label>Phone/ Mobile no.:</label>
                                     <input type="text" name="mobile_no" required>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>Address :</label>
                                    <input type="text" name="address" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label>GST No:</label>
                                    <input type="text" name="gst">
                            </div>
                                <div class="col-sm-6 col-xs-12">
                                     <label>City:</label>
                                     <input type="text" name="city" required>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>Pin code:</label>
                                    <input type="number" name="pincode" required>
                               </div>           
                
                                <div class="col-sm-6 col-xs-12">
                                     <label>State:</label>
                                     <select name="state">
                                     
                                          <option value="Maharashtra">-- Maharashtra --</option>
                                          <option value="Karnataka">-- Karnataka     --</option>
                                          <option value="Andhra Pradesh">-- Andhra Pradesh --</option>
                                          <option value="Goa">-- Goa --</option>
                                     </select>
                                </div>
                </div>
                <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label>Payment method</label>
                                    <select name="pay_mode">
                                     
                                         <option value="COD">Cash on delivery</option>
                                    </select>
                               </div>
                 </div>
                          </div>

                    
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-button">
                                        <div class="float-left">
                                            <input type="submit" value="Back" name="back">
                                        </div>

                                        <div class="float-right">
                                            <input type="submit" value="Finish" name="finish">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

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