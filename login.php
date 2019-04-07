<?php 
	include ('connexion.php');
	include ('function.php');

?>

<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>NGT</title>
        
	
		<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/set1.css" />
	<link href="css/style1.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/menu.css" />
	<link rel="stylesheet" href="css/buttons.css" />
	<link rel="stylesheet" href="css/style_acc.css" />
	
	
	    
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>   
	<script type="text/javascript">

</script>
   </head>
   
   <body>
  
<div id="wrapper">

	
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    

<form name="login-form" class="login-form" action="" method="post">

	
    <div class="header">
	<h1><center>Login Client</center></h1>
    <span><br><br></span>
    </div>
	
    <div class="content">
	<input name="login" type="text" class="input username" value="Account" onfocus="this.value=''" />
    <input name="password" type="password" class="input password" value="Password" onfocus="this.value=''" />
    </div>
   <div class="footer">
   <input type="submit" name="submit" value="Login" class="button" />
   
    </div>

</form>


</div>




   </body>
   
   <?php 
   
   if(isset($_POST['submit'])){
	  $pseudo=mysql_real_escape_string(htmlentities($_POST['login']));
	  $password=mysql_real_escape_string(htmlentities($_POST['password']));
	   
	   
	   
	   if(empty($pseudo)){
                 echo '<body onLoad="alert(\'Veuillez saisir votre Identifiant \')">';
           echo '<meta http-equiv="refresh" content="0;URL=login.php?">';
           
	
	   }
	   if(empty($password)){
		         echo '<body onLoad="alert(\'Veuillez saisir votre mot de passe \')">';
           echo '<meta http-equiv="refresh" content="0;URL=login.php">';
		
	   }
	   if(!empty($errors)){
		   
		   foreach($errors as $err){
			   echo "<div class='error' >".$err."</div>";
		   }
	   }else{
		 if(verifier_login($pseudo,$password)==0){
                     	         echo '<body onLoad="alert(\'Identifiant ou mot de passe incorrect \')">';
           echo '<meta http-equiv="refresh" content="0;URL=login.php?">';
		
		 }else{
			 $_SESSION['login']=$_POST['login'];
			 header("Location:accueil.php");
		 }
	   }
   }
   
   
   ?>
   
   
  


		

