
<?php 
	include"db.php";
	$uname=$_REQUEST["username"];
	$pass=$_REQUEST["password"];
	
	$sql="SELECT * FROM user WHERE username=:un AND password=:pass";
	$stmt=$conn->prepare($sql);
	$stmt->bindParam(':un',$uname);
	$stmt->bindParam(':pass',$pass);
	$stmt->execute();
	echo "<br>";

	if($stmt->rowCount()==1){
		echo "OK";
	}
	else{
		echo"NO";
	}
	
 ?>
