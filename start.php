<html>
    <head>
        <title>start</title>
    </head>
    <body>
	<h1> country! <h1>
        <form method="get">
          
			<?php
              include_once ("database.php");
              
               ?>
			   
			  
			   <select name="idcity" id="idcity">
                <?php
				$rows=$db->getRows("SELECT distinct city FROM rest"); 
				foreach($rows as $res) {
                   ?>   
				<option value='<?php echo $res['city']?>' > <?php echo $res['city']?></option>"
				<?php }?>
				</select><br><br>
				
		       <input type ="hidden"  name="page" value ="show"> 
			    
          <input type="submit" value="show" id="sub">
       
        </form>
    </body>
</html>