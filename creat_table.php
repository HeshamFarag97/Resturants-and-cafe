<?php
  include ("database.php");

  $tab=" create table rest (id int not null primary key auto_increment ,
  name char(30) not null  ,
  city char(30) not null,
  address  char(30) not null,
  photo1 varchar(100) NOT NULL,
	photo2 varchar(250) NOT NULL,

 rate int not null);";
  $r=$db->myExec($tab);
  
  if($r===false)
  {
    echo" Erorre in creat table";
  }
  else
  echo "sucsses";
 
?>