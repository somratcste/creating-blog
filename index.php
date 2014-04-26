<?php 
 include_once("resources/connectDB.php");
 
 $posts=get_posts();
 ?>
<!DOCTYPE html>
<head>
<title>Welcome to Blog. </title>
<style>
ul{list-style:none;}
li{display:inline;margin-right:20px;}

</style>

</head>
<body>
<nav>
     <ul>
	     <li> <a href="index.php">Index</a></li>
	     <li><a href="add_post.php">Add Post</a></li>
	     <li> <a href="add_category.php">Category Add M</a> </li>
	     <li> <a href="category_list.php">Category List.</a></li>
	 </ul>
</nav>
<h1>Tino's Awsome blog.</h1>
<?php 
     foreach($posts as $post){
	     if(!category_exits('name',$post['name'])){
		     $post['name']='uncategorised';
		 
		 }
		 ?>
		 <h2><a href="index.php?id=<?php echo $post['post_id'] ?>"><?php echo $post['title'] ?>  </h2>
		 <p>Posted ON <?php echo date("d-m-y h:m:s" , starttime($posts['date_posted']); ?></p> in <a href="category.php?id=<?php echo $post['category_id'] ?>"><?php echo $post['name']; ?></a>
		 <div>
		     <?php echo nl2br($post['contents']) ?>
		 </div>
		 <?php
	 }

?>
</body>
</html>