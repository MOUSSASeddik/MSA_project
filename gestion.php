<?php
include("menu.php");	?>

<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">	

<form  method="post" action="affiche.php">
  
	<table width='601' border='0' align='center'>
    <tr>
     <td width='151' height='46' bgcolor='#ffb400'><label>
  <input name="rechercher" type="submit" id="rechercher" value="Rechercher" />
     </label></td>

     <td width='440' bgcolor='#ffb400'>
   
     <div align='center' class='style6'>
      <input name="t_rechercher" type="text" id="t_rechercher" />
    
      <strong>Recherche par login </strong></div></td>
   </tr>
   <tr>
     <td><div align='center'><strong>mail</strong></div></td>
     <td><label>
    <input name='tmail' type='text' id='tmail' />
     </label></td>
   </tr>


     <tr>
<td><div align='center'><strong>Login</strong></div></td>
     <td ><label>
    <input name='tlogin' type='text' id='tlogin'  />
     </label></td>
     </tr>
     <tr>
<td><div align='center'><strong>Mot de passe</strong></div></td>
     <td ><label>
    <input name='tmp' type='text' id='tmp'  />
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
</form></div></div>
<? 

$req="select * from  user";
mysql_query($req);
$res=mysql_query($req);  
?>
                
                    <div class="col-md-12">	
              
                    <!-- Advanced Tables -->
                    <section>
                    <div class="panel panel-default">
                         <div class="panel-heading">
                             Device Table
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
 <table width=75% class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
                                        <tr>
                                            <th>login</th>
                                            <th>email</th>
                                            <th>mot de passe</th>
                                        
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
<?
$var=0;
while($row=mysql_fetch_array($res))
{
 
if ($var==0)
{
?>
<tr bgcolor="#EEEEEE">
<td><? echo $row[1];  ?></td>
<td><? echo $row[3];  ?></td>
<td><? echo $row[2]  ?></td>

</tr>
<?
$var=1; 
 }
else
{
?>
<tr bgcolor="#FFCCCC">
<td><? echo $row[1];  ?></td>
<td><? echo $row[3];  ?></td>
<td><? echo $row[2]  ?></td>

</tr><undefined></undefined>
<?
$var=0; 
 }
 }
?>
                                     </tbody>
</table>
                                     </div>
                            
                        </div>
                    </div>
                    </section></div></div></div>
             
</body>
</html>