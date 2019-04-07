<?php 
	
        function verifier_login($pseudo,$password){
	$login=mysql_real_escape_string(htmlentities($_POST['login'])); //Protège une commande SQL de la présence de caractères spéciaux//htmlentities : Convertit tous les caractères éligibles en entités HTML
        $password=mysql_real_escape_string(htmlentities($_POST['password']));
	$password=sha1($password);
	$req=mysql_query("SELECT login,password FROM user WHERE login='$login' AND password='$password'");
	$rows = mysql_num_rows($req);
	return $rows;
}
	// function recup info utilisateuradre
		function recup_info(){
		$infos=array();
		$login=$_SESSION['login'];
		$query=mysql_query("SELECT * FROM user WHERE login='$login'");
		while($row=mysql_fetch_assoc($query))
		{
			$infos[]=$row;
		}
		return $infos;
	}
	
	 //function recup info ulilisateur connect
 
 function info_membre_conecte(){
	 
	 $infos = array();
	 $pseudo=$_SESSION['login'];
	 
	$query = mysql_query("SELECT * FROM user WHERE login='$pseudo'"); 
	 while($row = mysql_fetch_assoc($query))
	 {
		 $infos[]= $row;
	 }
		return $infos;
 }
 
 
 //function recup info 
 
 
 /// ajouter admin

function ajout_admin($login,$password,$mail)
	{
		$password=sha1($password);
		mysql_query("INSERT INTO user(id_user,login,password,maiil) VALUES('','$login','$password','$mail')") or die(mysql_error());	
	}
	
?>	