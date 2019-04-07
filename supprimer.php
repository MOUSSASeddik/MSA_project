 <?php 

	$x=$_GET['x'];
		
	$res=mysql_query("delete from device where id='$x'");
	
	header("Location:index1.php?page=gestion");
 ?>