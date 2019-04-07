 
  <?php  
  include ('connexion.php');
	include ('function.php');
	
 $infos = info_membre_conecte();
  

  if(!isset($_SESSION['login'])){
	  
	  header("Location:login.php");
  }
  ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NGT</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style_acc.css" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="modifier_information.php"><?php	
				foreach ($infos as $info) {
					echo $info['login'];
					}
				?></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  <a href="logout.php" class="btn btn-danger square-btn-adjust">Déconnecter</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                   <a href="accueil.php">  <img src="assets/img/loggo.png" class="user-image img-responsive"/>
                   </a>  </li>
					
                    <li>
                        <a href="accueil.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                 
                      <li  >
                        <a   href="Device.php"><i class="fa fa-desktop fa-3x"></i> Visualiser mes objets </a>
                    </li>
                    <li  >
                        <a    href="ajouter.php"><i class="fa fa-table fa-3x"></i> Ajouter objet</a>
                    </li>
               		 <li  >
                        <a  href="modifier_information.php"><i class="fa fa-bolt fa-3x"></i> Modifier mon profil </a>
                    </li>	
                    	
                    <?php 

echo "
	<script>
		function attention ()
		{
			var res = window.confirm('voulez vous vraiment modifier cet informations?');
				if ( res == 1)
				{
				}
				else
				{
					return false;
				}
		} 
	</script>";
		$click = "onclick='return attention();'";
			if($_SESSION['login']=='admin'){
                          echo "  <li  >
                        <a   href='new_admin.php'><i class='fa fa-edit fa-3x'></i> ajouter nouveau client </a>
                    </li>				
					 <li  >
                        <a   class='active-menu' href='gestion.php'><i class='fa fa-qrcode fa-3x'></i> gérer clients</a>
                    </li>";

			}

		$infos = recup_info();
		foreach ($infos as $info) 
		{
		?>
				
                </ul>
               
            </div>
            
        </nav>  
   
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
  
 
    	
		<?php
		}

?>               
	 