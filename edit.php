<?php
// including the database connection file
include("menu.php");
$id = $_GET['id'];

if(isset($_POST['update']))
{	
                $nomd=$_POST['nomd'];
             
                $lang=$_POST['lang'];
                $alt=$_POST['alt'];
                $freq=$_POST['freq'];
                $adip=$_POST['adip'];
	// checking empty fields
	if(empty($nomd) || empty($lang)|| empty($alt)|| empty($freq)|| empty($adip)) {	
			
		echo '<body onLoad="alert(\'Veuillez saisir touts les champs  \')">';
      		
	} else {	
		//updating the table
		$result = mysql_query("UPDATE listebluedevice SET nom='$nomd',latitude='$alt',longitude='$lang',frequence='$freq',adresse_ip='$adip' WHERE id_device=$id ");
		
		echo '<body onLoad="alert(\'Modification effectuée...\')">';
	}
}

//selecting data associated with this particular id
$result = mysql_query("SELECT * FROM listebluedevice WHERE id_device=$id");

while($row= mysql_fetch_array($result))
{
	        $nomd=$row[2];
                $typd=$row[3];
                $macd=$row[1];
                $lang=$row[5];
                $alt=$row[4];
                $freq=$row[6];
                $adip=$row[7];
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
                         
                     Modifier l'Objet
				   </div>
    <div class="panel-body">
				<form action="" method="POST">
					
						
					
						<div class="form-group">
                                                    <div class="form-group">
                                                <label for="disabledSelect">id</label>
                                                <input class="form-control" id="disabledInput" name="id" type="text" value="<?php echo $_GET['id'];?>"   disabled />
                                            </div>
                                            <label>Nom objet</label>
                                            <input class="form-control" type="text" name="nomd" value="<?php echo $nomd ;?>"/>
                                            
                                        </div>
					
                                   
                                 
						<div class="form-group">
                                            <label>Adresse Mac</label>
                                            <input class="form-control" type="text" name="macd" value="<?php echo $macd ;?>" disabled/>
                                            
                                        </div>
                                    <div class="form-group">
                                            <label>Select type</label>
                                            <select class="form-control" name="typd">
                                                <option>capteur</option>
                                                <option>Switch</option>
                                               
                                            </select>
                                        </div>
				<div class="form-group">
							<label> Latitude </label>
                                                        <input type="text" class="form-control" name="alt" value="<?php echo $alt ;?>" required>
							
						</div>
                                    <div class="form-group">
							<label> Longitude </label>
                                                        <input type="text" class="form-control" name="lang" value="<?php echo $lang ;?>" required>
							
						</div>
                                    <div class="form-group">
							<label> Frequence </label>
                                                        <input type="text" class="form-control" name="freq" value="<?php echo $freq ;?>" required>
							
						</div>
						<div class="form-group">
							<label> Adresse ip </label>
                                                        <input type="text" class="form-control" name="adip" value="<?php echo $adip ;?>" required>
							
						</div>
				<center>
				<?php	echo"	
					<button type='submit' name='update' class='btn btn-warning' ><i class='fa fa-check '></i>  Update  </button>";

				?>
				
                                </center>
		
	</form></div></div></div></div></div></div>
</body>
</html>
