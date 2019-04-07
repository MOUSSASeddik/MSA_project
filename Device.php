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
                             Device Table
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
 <?php


$req="SELECT * FROM listebluedevice ";
$res=mysql_query($req);
?>
                                <table width=75% class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>adresse</th>
                                            <th>Nom</th>
                                            <th>Type</th>
                                            <th>latitude</th>
                                            <th>longitude</th>
                                            <th>frequence</th>
                                            <th>adresse_ip</th>
                                          <th>Update</th>
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
<td><?php echo $row[3]  ?></td>
<td><?php echo $row[4]  ?></td>
<td><?php echo $row[5]  ?></td>
<td><?php echo $row[6]  ?></td>
<td><?php echo $row[7]  ?></td>
<?php echo "<td><a href=\"edit.php?id=$row[0]\">Edit</a> | <a href=\"delete.php?id=$row[0]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";?>		


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
<td><?php echo $row[4]  ?></td>
<td><?php echo $row[5]  ?></td>
<td><?php echo $row[6]  ?></td>
<td><?php echo $row[7]  ?></td>
<?php echo "<td><a href=\"edit.php?id=$row[0]\">Edit</a> | <a href=\"delete.php?id=$row[0]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";?>		

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
               
      


<script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>