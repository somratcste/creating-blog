<?php 
 include_once("resources/connectDB.php");
?>


<!DOCTYPE html>
<head>
 <title>Category List </title>
</head>
<body>
   <?php 
     foreach(get_categories() as $category){
	   ?>
	    <p><a href="category.php?id = <?php echo $category["id"];?>"><?php echo $category["name"]; ?></a> - <a href="delete_category.php?id = <?php echo $category["id"];?>">Delete</a> </p>
	   
	   <?php
	 
	 }
   
   ?>
</body>
</html>