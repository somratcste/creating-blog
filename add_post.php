<?php 
 include_once("resources/connectDB.php");
 if(isset($_POST['title'],$_POST['contents'],$_POST['category'])){
 
     $errors=array();
     $title=trim($_POST['title']);
     $contents=trim($_POST['contents']);
     if(empty($title)){
	     $errors[]="You need to supply a title";
	 } else if (strlen($title) >255 ) {
	 
	   $errors[]="Title cannot be larger than 255 character's";
	 }
	 
	  if(empty($contents)){
	     $errors[]="You need to supply some text";
	 }
	 if(!category_exits(id,$_POST['category'])){
	 
	     $errors[]="That category does not exists";
	 }
	 if(empty($errors)){
	     add_post($title,$contents,$_POST['category']);
		 $id=mysql_insert_id();
		 
		 header("Location:index.php?id= {$id}");
		 die();
	 }
	 

 }
 
?>
<!DOCTYPE html>
<head>
   <title>Add a Post</title>
</head>
<body>
<h1>Add a post </h1>
    <?php 
     if(isset($errors) && !empty($errors)){
	   echo "<ul><li>", implode("</li><li>",$errors), "</li></ul>" ;
	 }
     
   ?>

<form action="" method="post">
<div>
 Title <input type="text" name="title" value="<?php if (isset($_POST['title'])) echo $_POST['title']; ?>">
</div>
     <div>
	     Contents<br /> <textarea name="text" rows="15" cols="50" ><?php if (isset($_POST['contents'])) echo $_POST['contents']; ?></textarea>
	 
	 </div> 
	 <div>
	     <select name="category">
		      <?php 
     foreach(get_categories() as $category){
	   ?>
	     <option value="<?php echo $category["id"];?>"><?php echo $category["name"] ;?></option>
	     
	   <?php
	 
	 }
   
   ?>
		 </select>
	 </div>
	 <div>
	     <input type="submit" value="Add Post">
	 </div>

</form>

</body>
</html>	