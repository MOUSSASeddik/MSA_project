 <?php  
	include("menu.php");
        $sql1 = "SELECT etat_hub FROM Hub ORDER BY id_hub DESC LIMIT 1 ";
	 $result1 =mysql_query($sql1);
	  $row=mysql_fetch_array($result1);
          $etat=$row["etat_hub"];
          
	  

echo "<script>
 function attention ()
 {
 var res = window.confirm('voulez vous vraiment supprimer cette information ?');
 
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
	
	?>
<html>
   <?php
    	echo ("
            
	<!-- bootstrap -->
	<link href='css2/bootstrap/bootstrap.css' rel=\"stylesheet\" />
	
	<link rel='stylesheet' href='css2/font-awesome-4.0.3/css/font-awesome.min.css'>
	<link rel='stylesheet' href='css2/jquery-ui.css' />
	<link rel='stylesheet' type='text/css' href='css2/toastr.css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'/>
        



<script type='text/javascript' src='js1/prefixfree.min.js'></script>
	<script type='text/javascript' src='js1/jquery-1.10.2.min.js'></script>
	<script type='text/javascript' src='js1/jquery-ui.js'></script>
	<script type='text/javascript' src='js1/bootstrap.min.js'></script>
	<script type='text/javascript' src='js1/excanvas.min.js'></script>
	<script type='text/javascript' src='js1/jquery.flot.js'></script>
	<script type='text/javascript' src='js1/jquery.flot.resize.js'></script>
	<script type='text/javascript' src='js1/jquery.sparkline.min.js'></script>
	<script type='text/javascript' src='js1/jquery.hashchange.min.js'></script>
	<script type='text/javascript' src='js1/jquery.easytabs.min.js'></script>
	<script type='text/javascript' src='js1/toastr.min.js'></script>

	<script type='text/javascript'>

		$(window).load(function(){
			$('#loading').fadeOut(1000);

			toastr.options = {
			  \"closeButton\": true,
			  \"debug\": false,
			  \"positionClass\": \"toast-bottom-right\",
			  \"onclick\": null,
			  \"showDuration\": \"300\",
			  \"hideDuration\": \"1000\",
			  \"timeOut\": \"5000\",
			  \"extendedTimeOut\": \"1000\",
			  \"showEasing\": \"swing\",
			  \"hideEasing\": \"linear\",
			  \"showMethod\": \"fadeIn\",
			  \"hideMethod\": \"fadeOut\"
			}
			setTimeout(function(){
				toastr.info('<span style=\"color:#333;\">Welcome to NGT plateforme System ! .</span>');	
			},2000) ;
                        setTimeout(function(){
				toastr.info('<span style=\"color:#333;\">Everything is working fine. :)</span>');
				},3500) ;"
                );
        
        if($etat == "offline"){
		echo(" setTimeout(function(){
		toastr.warning('<span style=\"color:#333;\">Following Raspberry-Pi have not responded.</span>'); 
                },4500) ; ");}
				
	
   
   echo("
		// $(document).ready(function(){

			$('.collapsible > a').click(function(){
				$(this).parent().toggleClass('open');
				if( $(this).parent().siblings().hasClass('open') ){
					$(this).parent().siblings().removeClass('open');
				}
			return false;
			}) // Collapsible


			// -------------------------- SPARKLINE miniCHARTS -----------------------------//

			$(\"#stats_visits\").sparkline('html',{
		        type: 'pie',
		        sliceColors: ['#499ac7','transparent'],
		        offset:-90,
		        tooltipClassname:'tooltip-sp',
		        disableHighlight:true
		    });
		    $(\"#stats_users\").sparkline('html',{
		        type: 'pie',
		        sliceColors: ['#37343b','transparent'],
		        offset:-90,
		        tooltipClassname:'tooltip-sp',
		        disableHighlight:true 
		    });
		    $(\"#stats_orders\").sparkline('html',{
		        type: 'pie',
		        sliceColors: ['#83a854','transparent'],
		        offset:-90,
		        tooltipClassname:'tooltip-sp',
		        disableHighlight:true
		    });

		    
		 

		}) // Ready.
	</script>
        ");?>
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
    <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                          Acceuil 
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><div align="center"><strong> Hub</strong></div></th>
                                            <th><div align="center"><strong>Mes objets</strong></div/th>
                                            <th><div align="center"><strong>Mes smartApps</strong></div></th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        <tr class="warning">
                                            <td><div align="center"><a href='Hub.php'>Visualiser etat du Hub</a></td>
                                            <td><div align="center"><a href='Device.php'>Visualiser mes objets connectés</a></td>
                                            <td><div align="center"><a href='app.php'>Visualiser mes smartApps</a></td>
                                           
                                        </tr>
                                        
                                    </tbody>
                                </table>

					
		
    </div></div></div></div>
</html>

  