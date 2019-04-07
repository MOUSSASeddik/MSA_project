<?php  
	include("menu.php");			
?>

<?php 

	if(isset($_POST['submit']))
	{
		
		$login=mysql_real_escape_string(htmlentities($_POST['login']));
		$password=mysql_real_escape_string(htmlentities($_POST['password']));
                $mail=mysql_real_escape_string(htmlentities($_POST['mail']));
		
		if(empty($login)){
		   
		 $errors[]="Veuillez saisir votre Identifiant "; 
	   }
		if(empty($password)){
		   
		 $errors[]="Veuillez saisir votre mot de passe ";  
	   }
	   
	   if(!empty($errors)){
	   
			foreach($errors as $err){
			   echo "<div class='error3' >".$err."</div>";
			}
			}else{
                             $sql = "SELECT * FROM user WHERE login='$login' OR maiil='$mail'";
 
                               $check = mysql_fetch_array(mysql_query($sql));
 
                                if(isset($check)){
                                echo "<script>alert('username or email already exist')</script>";
                                }else{
		                  ajout_admin($login,$password,$mail);
			echo"<script>alert('nouveau admin ajouter avec succès')</script>";
			echo '<script>window.location.href = "accueil.php";</script>';
			
                                }}
				
	
		
	}

 ?>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">		

<p class='passwoed'>Ajouter nouveau Client </p>
 <form action="" method="POST">
			
			
				
				  <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Username " name="login" />
                                        </div>	
     <div class="form-group input-group">
  <span class="input-group-addon">@</span>
  <input type="mail" class="form-control" placeholder="Mail" name='mail'/>
</div>
                            <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Mot de passe" name='password' />
                                        </div>
			
                            
				
			
			
			
			
					
				<center>
				<?php	echo"	
					<button type='submit' name='submit' class='btn btn-warning' ".$click."><i class='fa fa-check '></i>  Ajouter  </button>";

				?>
				
                                </center>
 </form></div></div></div>
         </div>
         
         
