 
<?php

include_once("database.php");
if (isset($_GET['page']))
{
    $page=$_GET['page'];
}
else{
    $page="start";
}

?>
<html>
<head>
	<title> Egypt Restaurant </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="header" >
       <h1 id="a" > Egypt Restaurant</h1>
    </div>
	
    <div id="container">
		<div id="main">
			<?php require($page.".php"); ?>	
		</div>
	</div>
	
   
	
</body>
</html>