<?php
include "db.php";
$usname=$_REQUEST["usename"];
$pass=$_REQUEST["pword"];
$dname=$_REQUEST["displayName"];
$role=$_REQUEST["role"];
$pro=$_REQUEST["profilePicture"];

$sql="INSERT INTO user VALUES (:uname,:pas,:dsname,:roll,:propic)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':uname', $usname);
$stmt->bindParam(':pas',md5($pass));
$stmt->bindParam(':dsname', $dname);
$stmt->bindParam(':roll', $role);
$stmt->bindParam(':propic', $pro);
$stmt->execute();

?>