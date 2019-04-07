   <?php  
	include("menu.php");	
	
	?>
	
<?php 
	 if(isset($_POST['submit']))
	{
		
		$pwd=mysql_real_escape_string(htmlentities(trim($_POST['pwd'])));
		$new_pwd=mysql_real_escape_string(htmlentities($_POST['new_pwd']));	
		$rep_new=mysql_real_escape_string(htmlentities($_POST['rep_new']));

			if($pwd && $new_pwd && $rep_new)
		{
				if($new_pwd==$rep_new){
				
				$pwd=sha1($pwd);
				$new_pwd=sha1($new_pwd);
	$login=$_SESSION['login'];
	$sql=mysql_query("SELECT * FROM user WHERE login='$login' AND password='$pwd'");
	$rows=mysql_num_rows($sql);
	if($rows ==1){
			$newpass=mysql_query("UPDATE user SET  password='$new_pwd' WHERE login='$login'");
			die('Votre mot de passe est changé , vous pouvez vous <a href="logout.php" id="conect"><u>connecter</u></a>');
	}else{
            echo '<body onLoad="alert(\'Votre ancien mot de passe est incorrect ! \')">';
           echo '<meta http-equiv="refresh" content="0;URL=modifier_information.php">';
	
	}
				
				
				
				}else{
					
                                        echo '<body onLoad="alert(\'Les deux champs de nouveau mot de passe doivent être identiques  ! \')">';
           echo '<meta http-equiv="refresh" content="0;URL=modifier_information.php">';
				}
		
		
		
		}else {
                    echo '<body onLoad="alert(\'Veuillez saisir tous les champs ! \')">';
           echo '<meta http-equiv="refresh" content="0;URL=modifier_information.php">';
			
		}
		
	}

 ?>


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
			

		$infos = recup_info();
		foreach ($infos as $info) 
		{
		?>	
		
			
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">	
                       <div class="panel panel-default">
                        
				 <div class="panel-heading">

<p class='passwoed'>Changer votre mot de passe</p></div>
<div class="panel-body">
		
<form action="" method="POST" >
				 <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Ancien mot de passe" name="pwd" />
                                        </div>
  <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input name="new_pwd" type="password" class="form-control" placeholder="Enter Password" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Retype Password" name="rep_new" />
                                        </div>
			<center>
				<?php	echo"	
					<button type='submit' name='submit' class='btn btn-primary' ".$click."><i class='fa fa-edit '></i> Edit</button>";

				?>
				
                                </center>
			

			</form>
		</div></div></div></div>

			
		<?php
		}

?>

