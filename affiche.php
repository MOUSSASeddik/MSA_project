<?php
include("menu.php");	?>
<?php
$rech=$_POST['t_rechercher'];

$tlogin=$_POST['tlogin'];
$tmail=$_POST['tmail'];
$tmp=$_POST['tmp']; 

 if (isset($_POST['rechercher']))
{
$req="select * from  user where login='$rech'";
 
mysql_query($req);
$res=mysql_query($req);
$enrg=mysql_fetch_row($res);
 
 if ($enrg[1] == $rech)
{
 
   echo "
       <div id='page-wrapper' >
            <div id='page-inner'>
                <div class='row'>
                    <div class='col-md-12'>	
                        <form  method='post' action='affiche.php'>
<table width='601' border='0' align='center'>
    <tr>
     <td width='151' height='46' bgcolor='#ffb400'><label>
    <input name='rechercher' type='submit' id='rechercher' value='Rechercher' />
     </label></td>

     <td width='440' bgcolor='#ffb400'><label>
     <div align='center' class='style6'>
     <div align='center' class='style6'>
       <input name='t_rechercher' type='text' id='t_rechercher' value='$enrg[1]' />
       </label>
      <strong>Recherche par nom</strong></div></td>
   </tr>
   <tr>
     <td><div align='center'><strong>mail</strong></div></td>
     <td><label>
    <input name='tmail' type='text' id='tmail'  value='$enrg[3]'/>
     </label></td>
   </tr>


     <tr>
<td><div align='center'><strong>Login</strong></div></td>
     <td ><label>
    <input name='tlogin' type='text' id='tlogin'  value='$enrg[1]'/>
     </label></td>
     </tr>
     <tr>
<td><div align='center'><strong>Mot de passe</strong></div></td>
     <td ><label>
    <input name='tmp' type='text' id='tmp'  value='$enrg[2]'/>
     </label></td>
   </tr>
   <tr>
     <td colspan='2'><label>
 
    <input name='modifier' type='submit' id='modifier' value='Modifier' />
    <input name='supprimer' type='submit' id='supprimer' value='Supprimer' />
     </label></td>
   </tr>
  </table>
    <p> </p>
           </form>";
}
  else
   {
  echo '<body onLoad="alert(\'Client introuvable...\')">';
  echo '<meta http-equiv="refresh" content="0;URL=gestion.php">';
  }
} 
 
  else
  {
  
                 
      
          if (isset($_POST['modifier']))
        
                                    if($tlogin=='')
          {
          
          echo '<body onLoad="alert(\'fair une recherch avant la modification ou verifiez les champs obligatoire...\')">';
                                   echo '<meta http-equiv="refresh" content="0;URL=gestion.php">';
          }
          else
          {
$rqt=mysql_query("UPDATE user SET  password='$tmp',mail='$tmail' WHERE login='$tlogin'");     
          echo '<body onLoad="alert(\'Modification effectuée...\')">';
       
        mysql_close();
         }
       elseif(isset($_POST['supprimer']))       
         {
         
         $rqt="delete  FROM user  where login ='$rech'";
         
        mysql_query($rqt);
         echo '<body onLoad="alert(\'Suppression effectuée...\')">';
        
        mysql_close();
         }
      
  
  }

?>
<? 
	
$req="select * from  user";
mysql_query($req);
$res=mysql_query($req); 
?>
<table width="630" align="center" bgcolor="#CCCCCC">
<tr >
 
<td width="152">Login</td>
<td width="66">Email</td>
<td width="248">mot de passe</td>
</tr>
<?
$var=0;
while($row=mysql_fetch_array($res))
{
 
if ($var==0)
{
?>
<tr bgcolor="#EEEEEE">
<td><? echo $row[0];  ?></td>
<td><? echo $row[1];  ?></td>
<td><? echo $row[2]  ?></td>

</tr>
<?
$var=1; 
 }
else
{
?>
<tr bgcolor="#FFCCCC">
<td><? echo $row[0];  ?></td>
<td><? echo $row[1];  ?></td>
<td><? echo $row[2]  ?></td>

</tr>
<?
$var=0; 
 }
 }
?>
</table>
</html>
