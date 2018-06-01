<?php
	// ????????? ???? ??????
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "shopping_cart");
	
	$con = mysql_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysql_error());
	mysql_select_db(DB_NAME) or die("Cannot select DB");
	
	

	
	if(isset($_POST["register"])){
	
	if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['telephone'])) {
  $full_name= htmlspecialchars($_POST['full_name']);
	$email=htmlspecialchars($_POST['email']);
 $address=htmlspecialchars($_POST['address']);
 $telephone=htmlspecialchars($_POST['telephone']);
 $query=mysql_query("SELECT * FROM tbl_customer WHERE address='".$address."'");
  $numrows=mysql_num_rows($query);
  
  
  
if($numrows==0)
   {
	$sql="INSERT INTO tbl_customer
  (full_name, email, address,telephone)
	VALUES('$full_name','$email', '$address', '$telephone')";
	
  $result=mysql_query($sql);
 if($result){
	$message = "Account Successfully Created";
} else {
 $message = "Failed to insert data information!";
  }
	} else {
	$message = "That username already exists! Please try another one!";
   }
	} else {
	$message = "All fields are required!";
	}
	}
	?>

	<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
	