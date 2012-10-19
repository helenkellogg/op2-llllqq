<!DOCTYPE html>
 <html>
   <head>
   	  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	
   </head>
 


  <body>
   <?php
	mysql_connect('localhost', 'root', '111111');
	mysql_select_db('llllqq');
	$sql = "select id, title from topic";
	$result = mysql_query($sql);
	?>
	
	
	<ol>
	  <?php
		while($row = mysql_fetch_assoc($result))
		
		{
			
	     ?>
    	  <li>
   			<a href="llllqqre.php?id=<?=$row['id']?>"><?=$row['title']?></a>
   		  </li>
			
	     <?php
	    }
	  ?>
	</ol>
	
	
	<?php
	print_r($_GET['id']);
	
	$sql = "select * from topic where id = ".$_GET['id'];
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	print_r($row);
	echo $sql;
	
	?>
  </body>
 </html>
