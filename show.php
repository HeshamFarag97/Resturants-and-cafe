<html>
    <head>
        <title>start</title>
    </head>
    <body>
        <form method="get">
			<?php
              include_once ("database.php");
              
               ?>
			   
			  <?php  
			  $id=$_GET['idcity'];
			 
			
                
				$rows=$db->getRows("select * from rest where city='$id'"); 

				foreach($rows as $res)
				{
				 ?>
				 <table>
				 <tr>
				 <th>Name </th>
				 <th> city  </th>
				 <th>Address </th>
				 <th>Rate</th>
				 </tr>
				 <tr>
				<td> <?php echo $res['name'] ;?> </td>
				 <td><?php echo  $res['city']; ?></td>
				 <td> <?php echo  $res['address']; ?></td>
				 <td><?php echo  $res['rate']; ?></td>
				 </tr>
				 <table>
				<img src="<?php echo  $res['photo1']; ?>" ><br>
				 <img src="<?php echo  $res['photo2']; ?>" ><br>
				<?php }?>
       
    </body>
</html>