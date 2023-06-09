<?php

    // Ajoutez ces deux lignes
    ini_set("SMTP","ssl://smtp.gmail.com");
    ini_set("smtp_port","587");


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        // UPDATE THIS SECTION WITH CUSTOMER MAIL ADRESS
        $to = 'baran.haris@gmail.com';
        $subject = 'Nouveau message de ' . $name;
        $content = "Nom: $name\nEmail: $email\nTéléphone: $phone\n\nMessage:\n$message";
        $headers = "From: $email\nReply-To: $email\n";
        if (mail($to, $subject, $content, $headers)) {
            // echo 'Votre message a été envoyé avec succès.';
            echo '
            <!DOCTYPE html>
            <html xmlns="http://www.w3.org/1999/xhtml" lang="en">
              <head>                  
                  <!-- PAGE TITLE -->
                  <title>Message - BRN MOTORS</title>            
                  <!-- META-DATA -->
                  <meta http-equiv="content-type" content="text/html; charset=utf-8" >
                  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
                  <meta name="description" content="" >
                  <meta name="keywords" content="" >            
                  <!-- FAVICON -->
                  <link rel="shortcut icon" href="assets/images/BRN_logo_white.svg" width="6" height="16">
                  <!-- CSS:: FONTS -->
                  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">            
                  <!-- CSS:: DATEPICKER -->
                  <link rel="stylesheet" type="text/css" href="assets/css/plugins/datepicker/datepicker.css">            
                  <!-- CSS:: ANIMATE -->
                  <link rel="stylesheet" type="text/css" href="assets/css/plugins/animate/animate.css">            
                  <!-- CSS:: MAIN -->
                  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
                  <link rel="stylesheet" type="text/css" id="r-color-roller" href="assets/color-files/color-04.css">            
              </head>
              <body> 
                  <div class="r-wrapper">
                    <!-- HEADER -->
                    <header>
                      <div class="r-header r-header-inner">
                        <div class="r-header-strip">
                          <div class="container">
                            <div class="row clearfix">
                              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="r-logo">
                                  <a href="index.html" class="d-inline-block"><img src="assets/images/BRN_logo_white.svg" class="img-fluid d-block" alt="BRN logo" width="271" height="55"></a>                                  
                                </div>
                                <a href="javaScript:void(0)" class="menu-icon"> <i class="fa fa-bars"></i> </a>
                              </div>
                              <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12"> 
                                <div class="r-nav-section float-right">
                                  <nav>
                                    <ul>
                                      <li><a href="index.html">ACCUEIL</a></li>
                                      <li><a href="about.html">A PROPOS DE NOUS</a></li>
                                      <li><a href="car-listing.html">VEHICULES</a></li>
                                      <li><a href="contact.html">CONTACTEZ-NOUS</a></li>
                                    </ul>
                                  </nav>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="r-header-inner-banner">
                          <div class="r-header-in-over">
                            <h1>Votre message a été envoyé avec succès.</h1>
                            <div class="r-breadcrum">
                              <ul>
                                <li><a href="index.html">ACCUEIL</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </header>             
                    <!-- FOOTER -->
                    <footer>
                      <div class="r-footer r-footer-dark pt-0">            
                        <div class="r-footer-strip">
                          <div class="container">
                            <div class="row clearfix">
                              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <img src="assets/images/BRN_logo_white.svg" class="r-footer-logo" alt="BRN logo" width="135" height="22"> 
                              </div>
                              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                  <ul>
                                    <li><a href="https://www.facebook.com/brn.motorss"><i class="fa fa-facebook"></i>. <span>Facebook</span></a></li>
                                    <li><a href="https://www.instagram.com/brn_motors/?hl=fr"><i class="fa fa-instagram"></i>.<span>Instagram</span></a></li>
                                    <li></li>
                                    <li></li>
                                  </ul>
                              </div>  
                              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <p class="r-copy-right-text">&copy;2023 Designed by <strong>HB2 Code</strong> </p>
                              </div>   
                            </div>
                          </div>
                        </div>
                      </div>
                      <a href="#header" class="r-scroll-up-icon"> <i class="fa fa-angle-double-up"></i> </a>
                    </footer>
                  </div>                  
                  <div id="r-to-top" class="r-to-top"><i class="fa fa-angle-up"></i></div>
                  <!-- JQUERY:: JQUERY.JS -->
                  <script src="assets/js/jquery.min.js"></script>
                  <!-- JQUERY:: BOOTSTRAP.JS -->
                  <script src="assets/js/tether.min.js"></script>
                  <script src="assets/js/bootstrap.min.js"></script>
                  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                  <!-- JQUERY:: CUSTOM -->
                  <script src="assets/js/custom.js"></script>  
              </body>
            </html>
            ';
        } else {
            // echo 'Une erreur s\'est produite lors de l\'envoi de votre message.';
            echo '
            <!DOCTYPE html>
            <html xmlns="http://www.w3.org/1999/xhtml" lang="en">
              <head>                  
                  <!-- PAGE TITLE -->
                  <title>Message - BRN MOTORS</title>            
                  <!-- META-DATA -->
                  <meta http-equiv="content-type" content="text/html; charset=utf-8" >
                  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
                  <meta name="description" content="" >
                  <meta name="keywords" content="" >            
                  <!-- FAVICON -->
                  <link rel="shortcut icon" href="assets/images/BRN_logo_white.svg" width="6" height="16">
                  <!-- CSS:: FONTS -->
                  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">            
                  <!-- CSS:: DATEPICKER -->
                  <link rel="stylesheet" type="text/css" href="assets/css/plugins/datepicker/datepicker.css">            
                  <!-- CSS:: ANIMATE -->
                  <link rel="stylesheet" type="text/css" href="assets/css/plugins/animate/animate.css">            
                  <!-- CSS:: MAIN -->
                  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
                  <link rel="stylesheet" type="text/css" id="r-color-roller" href="assets/color-files/color-04.css">            
              </head>
              <body> 
                  <div class="r-wrapper">
                    <!-- HEADER -->
                    <header>
                      <div class="r-header r-header-inner">
                        <div class="r-header-strip">
                          <div class="container">
                            <div class="row clearfix">
                              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="r-logo">
                                  <a href="index.html" class="d-inline-block"><img src="assets/images/BRN_logo_white.svg" class="img-fluid d-block" alt="BRN logo" width="271" height="55"></a>                                  
                                </div>
                                <a href="javaScript:void(0)" class="menu-icon"> <i class="fa fa-bars"></i> </a>
                              </div>
                              <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12"> 
                                <div class="r-nav-section float-right">
                                  <nav>
                                    <ul>
                                      <li><a href="index.html">ACCUEIL</a></li>
                                      <li><a href="about.html">A PROPOS DE NOUS</a></li>
                                      <li><a href="car-listing.html">VEHICULES</a></li>
                                      <li><a href="contact.html">CONTACTEZ-NOUS</a></li>
                                    </ul>
                                  </nav>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="r-header-inner-banner">
                          <div class="r-header-in-over">
                            <h1>Une erreur s\'est produite lors de l\'envoi de votre message.</h1>
                            <div class="r-breadcrum">
                              <ul>
                                <li><a href="index.html">ACCUEIL</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </header>             
                    <!-- FOOTER -->
                    <footer>
                      <div class="r-footer r-footer-dark pt-0">            
                        <div class="r-footer-strip">
                          <div class="container">
                            <div class="row clearfix">
                              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <img src="assets/images/BRN_logo_white.svg" class="r-footer-logo" alt="BRN logo" width="135" height="22"> 
                              </div>
                              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                  <ul>
                                    <li><a href="https://www.facebook.com/brn.motorss"><i class="fa fa-facebook"></i>. <span>Facebook</span></a></li>
                                    <li><a href="https://www.instagram.com/brn_motors/?hl=fr"><i class="fa fa-instagram"></i>.<span>Instagram</span></a></li>
                                    <li></li>
                                    <li></li>
                                  </ul>
                              </div>  
                              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <p class="r-copy-right-text">&copy;2023 Designed by <strong>HB2 Code</strong> </p>
                              </div>   
                            </div>
                          </div>
                        </div>
                      </div>
                      <a href="#header" class="r-scroll-up-icon"> <i class="fa fa-angle-double-up"></i> </a>
                    </footer>
                  </div>                  
                  <div id="r-to-top" class="r-to-top"><i class="fa fa-angle-up"></i></div>
                  <!-- JQUERY:: JQUERY.JS -->
                  <script src="assets/js/jquery.min.js"></script>
                  <!-- JQUERY:: BOOTSTRAP.JS -->
                  <script src="assets/js/tether.min.js"></script>
                  <script src="assets/js/bootstrap.min.js"></script>
                  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                  <!-- JQUERY:: CUSTOM -->
                  <script src="assets/js/custom.js"></script>  
              </body>
            </html>
            ';
        }
    }

?>


