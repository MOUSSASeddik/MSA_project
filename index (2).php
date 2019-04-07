      
<!DOCTYPE html>
<html lang="en">
  <head>
     
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>NGT-SMART-HUB</title>
 
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">


    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

  </head>
  <body>
      <?php
      
      if(isset($_POST['submit'])) {
          $to="medseddikmoussa@gmail.com";
          $sujet="Demande d'informayion de l'administration  NGT  ";
          $message=$_POST['text'];
          
          $header=$_POST['exampleInputEmail1'];
          
          mail($to,$sujet,$message,$header) ; 
             
      }
    ?> 
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">NGT</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">Acceuil</a></li>
            <li><a href="#tf-about" class="page-scroll">à propos de nous</a></li>
            <li><a href="#tf-team" class="page-scroll">Team</a></li>
            <li><a href="#tf-services" class="page-scroll">Services</a></li>
            <li><a href="#tf-works" class="page-scroll">Produit</a></li>
            <li><a href="#tf-testimonials" class="page-scroll">Client</a></li>
            <li><a href="#tf-contact" class="page-scroll">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
          <div class="content">
                <h1><span class="lead"><img src="img/logo.png" width="143" height="121"></span>
                    Welcome on <strong><span class="color">SMART-HUB</span></strong></h1>
              <p class="lead">La domotique est conçu pour le <strong>CONFORT</strong>
              <p class="lead">&nbsp;</p>   
              <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>      
          </div>
        </div>
    </div>

    <!-- About Us Page
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/10.png" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h4>À propos de nous</h4>
                            <h2>c'est quoi la <strong>domotique ?</strong></h2>
                            <hr>
                            <div class="clearfix"></div><p>La domotique est une spécialité du bâtiment regroupant les techniques permettant de contrôler, d'automatiser et de programmer l'habitat.</p><p>Les tâches associées à la domotique dans un locale concernent des appareils techniques alimentés électriquement:</p>
                        <ul class="about-list">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Mission</strong> - <em>Assurer votre confort</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>compétences</strong> - <em>La programmation des appareils électriques</em>
                                                                    
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Clients</strong> - <em>Satisfaire nos clients graçe  à nos services</em>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Page
    ==========================================-->
    <div id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2>Meet <strong>our team</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

        <div id="team" class="owl-carousel owl-theme row" align="center"  >
                    
 
                     <div class="item" >
                        <div class="thumbnail" align="center">
                            <img src="img/team/balkiss.png" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3></h3>
                                <p>Balkiss</p>
                                 </div>
                        </div>
                    </div>

               <div class="item" >
                        <div class="thumbnail">
                            <img src="img/team/sdk.png" alt="..." class="img-circle team-img" align="center">
                            <div class="caption">
                                <h3>Moussa</h3>
                                <p>Seddik</p>
                                
                            </div>
                        </div>
                    </div>   

          
                </div> 
                
            </div>
        </div>
    </div>

    <!-- Services Section
    ==========================================-->
    <div id="tf-services" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Take a look at <strong>our services</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em</em></small>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-shield"></i>
                    <h4><strong>Sécurité</strong></h4>
                    <p>Le contrôle (alarme, contrôle d'accès, température, éclairage, incendie...)</p>
                </div>

                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-money"></i>
                    <h4><strong>Gestion d'énergie</strong></h4>
                    <p>Optimisation de l'utilisation des ressources</p>
                </div>

                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-users"></i>
                    <h4><strong>Confort</strong></h4>
                    <p>Satisfaction des utilisateur </p>
                </div>
                <div class="col-md-3 col-sm-6 service">
                    <i  class="fa fa-shield" ></i>
                    <h4><strong>Entertainment</strong></h4>
                    <p></p>
                </div>

                
            </div>
        </div>
    </div>

    <!-- Clients Section
    ==========================================-->
    <div id="tf-clients" class="text-center">
        <div class="overlay">
            <div class="container">

                <div class="section-title center">
                    <h2>Environement Globale de  <strong>sujet</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div id="clients" class="owl-carousel owl-theme">
                    <div class="item">
                        <FONT SIZE='4'><b> NGT</b></FONT>
                    </div>
                    <div class="item">
                        <FONT SIZE='4'><b>GOOGLE</b></FONT>
                    </div>
                    <div class="item">
                        <FONT SIZE='4'><b>DOMOTIQUE</b></FONT>
                    </div>
                    <div class="item">
                        <FONT SIZE='4'><b>RASPBERRY PI</b></FONT>
                    </div>
                    <div class="item">
                        <FONT SIZE='4'><b>ZENHOSTING</b></FONT>
                    </div>
                    <div class="item">
                        <FONT SIZE='4'><b>MYSQL</b></FONT>
                    </div>
                    <div class="item">
                        <FONT SIZE='4'><b>PHP</b></FONT>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Portfolio Section
    ==========================================-->
    <div id="tf-works">
        <div class="container"> <!-- Container -->
            <div class="section-title text-center center">
                <h2>Take a look at <strong>our produit </strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em> .....................................</em></small>
            </div>
            <div class="space"></div>

            <div class="categories">
                
                <ul class="cat">
                    <li class="pull-left"><h4>Filter by Type:</h4></li>
                    <li class="pull-right">
                        <ol class="type">
                            
                            <li><a href="#" data-filter=".web">HUB</a></li>
                            
                            <li><a href="#" data-filter=".app" >Mobile App</a></li>
                            
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div id="lightbox" class="row">

                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>HUB</h4>
                                    <small>DEVICE</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/05.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 app">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>mobile </h4>
                                    <small>application</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/06.PNG" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                

                <div class="col-sm-6 col-md-3 col-lg-3 app">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>mobile</h4>
                                    <small>application</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/08.PNG" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Objet</h4>
                                    <small>Connecté</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/007.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Testimonials Section
    ==========================================-->
    <div id="tf-testimonials" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2><strong>bienvenu </strong> espace clients </h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="testimonial" class="owl-carousel owl-theme">
                            
                            <form name="login-form" class="login-form" action="" method="post">
                                Welcome.


Vous pouvez gérer vos emplacements, concentrateurs et périphériques SmartThings à partir de ces écrans.

En outre, vous pouvez écrire vos propres SmartApps et créer de nouveaux types de périphériques connectés en accédant aux outils et à la documentation du développeur.

Déjà un compte SmartThings? <a href="login.php">Log in </a>. Otherwise you may register now. <a href="create.php">S'inscrire </a>
                                
                             
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section
    ==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2>Feel free to <strong>contact us</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <small><em></em></small>            
                    </div>

                    <form "<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Taper votre Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Message</label>
                            <textarea class="form-control" rows="3" name="text"></textarea>
                        </div>
                        
                        <button type="submit" class="btn tf-btn btn-default" name="submit">Envoyer</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>ALL RIGHTS RESERVED. COPYRIGHT © 2017</p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/seddik.adams.14"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>

    <script src="js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>
 
   
   </body>

   
  
</html>