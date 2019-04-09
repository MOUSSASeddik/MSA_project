<?php

$servername = "localhost";
$username = "ngttn_balkiss";
$password = "balkiss123";
$dbname = "ngttn_ngthub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}        
$req="SELECT (adresse,nom) FROM listebluedevice where id_device='MAX(id_device)'";
$result =$conn->query($req);

     if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
         
         $nom= $row["nom"];
         $adresse= $row["adresse"];
      
         }}
?>
<html>
<head><title>formulaire</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
	color: #0000FF;
}
.style2 {font-size: 24px; font-weight: bold; color: #000066; font-family: Georgia, "Times New Roman", Times, serif; }
-->
</style>
</head> 
<body>

<h2>&nbsp;</h2>
<h2 align="center" class="style1">
  <legend class="style2">Ajout device</legend>
</h2>
<p>&nbsp;</p>
<form method="post" action="ajout2.php" >

<table width="206" height="241" border="0" cellspacing="10" bordercolor="#999999">
  <tr>
    <th width="90" bordercolor="#F0F0F0"  scope="row"><div align="left"> Name </div></th>
    <td width="30"><?php echo"$nom"; ?></td>
  </tr>
  <tr>
    <th bordercolor="#F0F0F0"  scope="row"><div align="left"> Selectionner type </div></th>
    <td><SELECT name="type" size="1">
<OPTION value="Capteur_temperature">Capteur_temperature </option>
<OPTION value="Capteur_humidite" >Capteur_humidite </option>
<OPTION value="Switch">Switch </option>
<OPTION value="capteur_presence">capteur_presence </option>
<OPTION value="android_device">android_device</option>
</SELECT> </td>
  </tr>

</table>

<input name="ajouter" type="submit" value="Ajouter" />
</form>


</body>
</html>