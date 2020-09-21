
<?php 
	include"db.php";
	$uname=$_REQUEST["username"];
	$pass=$_REQUEST["password"];
	
	$sql="SELECT role FROM user WHERE username=:un AND password=:pass";
	$stmt=$conn->prepare($sql);
	$stmt->bindParam(':un',$uname);
	$stmt->bindParam(':pass',$pass);
	$stmt->execute();
	// echo "<br>";

	if($stmt->rowCount()==1){
		// echo "OK<br>";
		$result=$stmt->fetchAll();
	
	foreach($result as $row){
		
		// echo $row['role'];
		if($row['role']==1){
			include"admin.php";
		}
		else if($row['role']==2){
			include"supplier.php";
		}
		else if($row['role']==3){
			include"user.php";
		}
		
	}
	
		
	}
	else{
		echo"NO";
	}
	
 ?>
