<?php
include ('connexion.php');
	include ('function.php');

	if(isset($_POST['subbmit']))
	{
		
		$login=mysql_real_escape_string(htmlentities($_POST['nom']));
		$password=mysql_real_escape_string(htmlentities($_POST['pwd']));
		$maiil=mysql_real_escape_string(htmlentities($_POST['mail']));
               $cpwd=mysql_real_escape_string(htmlentities($_POST['cpwd']));

                
                
		if($login && $password && $maiil && $cpwd)
		{
				if($password==$cpwd){
				
		ajout_admin($login,$password,$maiil);
			echo"<script>alert('nouveau admin ajouter avec succès')</script>";
		 echo '<meta http-equiv="refresh" content="0;URL=index.php">';
				
				}else{
					echo "<script>alert('Les deux champs de votre mot de passe doivent être identiques')</script>";
				}
		
		
		
		}else {
			echo "<script>alert('Veuillez saisir tous les champs ')</script>";
		}
		
		}		

 ?>
 
<html>
    <head>
        <meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/set1.css" />
	<link href="css/style1.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/menu.css" />
	<link rel="stylesheet" href="css/buttons.css" />
	<link rel="stylesheet" href="css/style_acc.css" />
         <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">

  

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
   
    </head>
<body >
  <div class="section-title center">
    
                    <h2><center><strong>Creer </strong> Votre compte </center></h2>
                    <div class="line">
                        <hr>
                     </div>
                </div>
           
	<div id="wrapper">
 <form action="" method="POST" enctype="multipart/form-data">
			
			<section>
				
				<span class="input input--akira">
					<input class="input__field input__field--akira" type="text" id="input-22" name="nom" />
					<label class="input__label input__label--akira" for="input-22">
						<span class="input__label-content input__label-content--akira">Votre login</span>
					</label>
				</span>
			
                            <span class="input input--akira">
					<input class="input__field input__field--akira" type="email" id="input-25"  name='mail' />
					<label class="input__label input__label--akira" for="input-25">
						<span class="input__label-content input__label-content--akira">Entrer votre mail </span>
					</label>
				</span>
                           
                            <span class="input input--akira">
					<input class="input__field input__field--akira" type="password" id="input-27"  name='pwd' />
					<label class="input__label input__label--akira" for="input-27">
						<span class="input__label-content input__label-content--akira">Entrer votre mot de passe</span>
					</label>
				</span>
                            <span class="input input--akira">
					<input class="input__field input__field--akira" type="password" id="input-28"  name='cpwd' />
					<label class="input__label input__label--akira" for="input-28">
						<span class="input__label-content input__label-content--akira">Confirmer votre mot de passe </span>
					</label>
				</span>
			</section>
			
			
			
					
	<div class="container_boutton">
			
			
			
			<section class="content_boutton">
				
				<div class="box bg-1">
					<button type="submit" name="subbmit" class="button button--wapasha button--round-s">Ajouter</button>
				
				</div>
				</div>
			</section>
 </form>
 
 
 
 
        </div>


  </body>
 </html>