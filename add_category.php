<?php 
  include_once("resources/connectDB.php");
 

 if(isset($_POST['name'])){
     $name=trim($_POST['name']);
	
     if(empty($name)){
	     $error="You must submit a category name.";
	 
	 } //else if (category_exits('name',$name)){
	 
	  //   $error="That category already exits";
	 //}
	 else if (strlen($name) >24 ) {
	 
	   $error="Category name only up to be 24 character's";
	 }
	 
	 if(!isset($error)){
	   
	   
		 $name=mysql_real_escape_string($name);
   mysql_query("INSERT INTO categories SET name = $name");
		
	 }
 }

?>

<!DOCTYPE html>
<head>
 <title>Welcome to Blog</title>
</head>
<body>
  <h1>Add a category</h1>
   <?php 
     if(isset($error)){
	   echo "<p> $error </p> \n " ;
	 }
     
   ?>
     
    <form action="" method="post">
	     <div>
		     Name <input type="text" name="name" value="">
		 </div>
		 <div>
		     <input type="submit" value="Add Category">
		 </div>
	
	
	</form>


</body>
</html>