<?php  
	include("menu.php");
	?>
   <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">	
              
                    <!-- Advanced Tables -->
                    <section>
                    <div class="panel panel-default">
                         <div class="panel-heading">
                           Votre HUB 
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
 <?php


$req="SELECT * FROM Hub ";
$res=mysql_query($req);
?>
                                <table width=75% class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>adresse</th>
                                            <th>adresse ip </th>
                                            <th>etat</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
 
 <?php
$var=0;
while($row=mysql_fetch_array($res))
{
 
if ($var==0)
{
?>
<tr bgcolor="#EEEEEE">
<td><?php echo $row[0];  ?></td>
<td><?php echo $row[1];  ?></td>
<td><?php echo $row[2]  ?></td>
<td bgcolor="#fedfc1"><?php echo $row[3]  ?></td>

</tr>
<?php
$var=1; 
 }
else
{
?>
<tr bgcolor="#EEEEEE">
<td><?php echo $row[0];  ?></td>
<td><?php echo $row[1];  ?></td>
<td><?php echo $row[2]  ?></td>
<td><?php echo $row[3]  ?></td>
</tr><undefined></undefined>
<?php
$var=0; 
 }
 }
?>

 
                                       
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    </section></div></div></div></div>
                    <!--End Advanced Tables -->
               
      


     <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>