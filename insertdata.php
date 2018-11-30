<?php
include("database.php");
$db->myExec("SET NAMES 'utf8'");
$db->myExec('SET CHARACTER SET utf8');
$inse= " insert into rest (name ,city,address,rate,photo1,photo2)values
('sobhy kaber','cairo','151 ebied asahel',9,'images/images.jpeg','images/images1.jpeg'),
('koshary eltahrer','cairo','92 eltahrir bab allouq',7,'images/FB_IMG_1543530851790.jpg','images/FB_IMG_1543530916095.jpg'),
('elbrens','cairo','imbaba',8,'images/FB_IMG_1543530517531.jpg','images/FB_IMG_1543530732496.jpg'),
('abo shaqra','assiut','ard el maard',8,'images/FB_IMG_1543539139304.jpg','images/FB_IMG_1543539062418.jpg'),
('spectra','assiut','ard el maard',9,'images/FB_IMG_1543538633184.jpg','images/FB_IMG_1543538787699.jpg'),
('om hasan','assiut','gomhorya st',6,'images/FB_IMG_1543539298312.jpg','images/FB_IMG_1543539235295.jpg'),
('mcdonalds','aswan','kornash el nill',6,'images/FB_IMG_1543538482613.jpg','images/Screenshot_2018-11-30-05-18-19.png'),
('kfc','aswan','kornash el nill',6,'images/Screenshot_2018-11-30-05-20-29.png','images/Screenshot_2018-11-30-05-20-17.png'),
('hosny','aswan','mall aswan blaza',8,'images/FB_IMG_1543531140860.jpg','images/images (2).jpg')";
      
      
$r=$db->myExec($inse);
  if($r===false)
  {
    echo" Erorre in insert table";
  }
  else
  echo "sucsses";
 
?>