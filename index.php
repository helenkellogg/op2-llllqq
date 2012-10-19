<!DOCTYPE html>
 <html>
   <head>
	   	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="./bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
   </head>
 


  <body>
   <?php
		mysql_connect('localhost', 'root', '111111');
		mysql_select_db('llllqq');
		$sql = "select id, title from topic";
		$result = mysql_query($sql);
   ?>
	<div class="row">
		<div class="span12">
			<h1>titleitleitle</h1>
			
		</div>
		
		
	</div>
	<div class="row">
		   <div class="span2">
			 <ul class="nav nav-pills nav-stacked">
				  <?php
					while($row = mysql_fetch_assoc($result))
					
					{
						
				  ?>
			    	  <li>
			   			<a href="index.php?id=<?=$row['id'] ?>"><?=$row['title'] ?></a>
			   		  </li>
						
				  <?php
				    }
				  ?>
			  </ul>
			</div>
			
	 
			<?php
		
			$sql = "select * from topic where id = " . $_GET['id'];
			$result = mysql_query($sql);
			$row = mysql_fetch_assoc($result);
			?>
			
			<div class="span8">
				<div>
					<h2><?=$row['title'] ?></h2>
				    <div><?=$row['description'] ?></div>
			    </div>
				<?php ?>
				<script src="http://code.jquery.com/jquery-latest.js"></script>
				<script src="./bootstrap/js/bootstrap.min.js"></script>
					
		    </div>
	 </div>
 
  </body>
 </html>
