   
  <?php  
	include("menu.php");	
	
		
		if(isset($_POST['submit'])){
                    
		$nomd=$_POST['nomd'];
                $typd=$_POST['typd'];
                $macd=$_POST['macd'];
                $lang=$_POST['lang'];
                $alt=$_POST['alt'];
                $freq=$_POST['freq'];
                $adip=$_POST['adip'];
                $res=mysql_query("INSERT INTO listebluedevice VALUES(NULL,'$macd','$nomd','$typd','$alt','$lang','$freq','$adip')");
			echo"<script>alert('Votre annonce ajouter avec succès')</script>";
			echo '<script>window.location.href = "accueil.php";</script>';
			$res2=mysql_query("select MAX(id) from device ");
			$n= mysql_num_rows ($res2);
		for ( $i = 0 ; $i<$n ; $i++)
		{ $l = mysql_fetch_array ($res2);
		$Id = $l[0];
		}
	
		}	
 ?>
 
 <html lang="en">
 <head>
 
 </head>
 <body>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
<div class="panel panel-default">
                        
				 <div class="panel-heading">
                         
                     Ajouter nouveau objet
				   </div>
    <div class="panel-body">
				<form action="" method="POST">
					
						
					
						<div class="form-group">
                                            <label>Nom objet</label>
                                            <input class="form-control" type="text" name="nomd"/>
                                            
                                        </div>
					
                                    <div class="form-group">
                                            <label>Select type</label>
                                            <select class="form-control" name="typd">
                                                <option>capteur</option>
                                                <option>Switch</option>
                                               
                                            </select>
                                        </div>
                                 
						<div class="form-group">
                                            <label>Adresse Mac</label>
                                            <input class="form-control" type="text" name="macd"/>
                                            
                                        </div>
				<div class="form-group">
							<label> Latitude </label>
                                                        <input type="text" class="form-control" name="alt" required>
							
						</div>
                                    <div class="form-group">
							<label> Longitude </label>
                                                        <input type="text" class="form-control" name="lang" required>
							
						</div>
                                    <div class="form-group">
							<label> Frequence </label>
                                                        <input type="text" class="form-control" name="freq" required>
							
						</div>
						<div class="form-group">
							<label> Adresse ip </label>
                                                        <input type="text" class="form-control" name="adip" required>
							
						</div>
				<center>
				<?php	echo"	
					<button type='submit' name='submit' class='btn btn-warning' ".$click."><i class='fa fa-check '></i>  Ajouter  </button>";

				?>
				
                                </center>
 </form> </div>
		</div>

	</div>  </div></div>
 
 
 
 
 

		
 
 
 
 
 
 </body>
 </html>