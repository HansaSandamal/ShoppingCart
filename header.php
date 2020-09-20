<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        
        padding:0;
        margin:0;
    }
    .head{
        color:#ffffff;
        display: block;
        background-color: #2d601c;opacity:0.8;
        height:85px;
        margin-bottom:0px;
         padding-bottom:0px;
         clear:none;  
        
    }
    .name{
        
        float:left;
        margin-top:0;
    }
    .name img{
        margin-right:10px;
        margin-right:20px;
        /* filter: opacity(0); */
        /* filter:drop-shadow(10px 10px 4px #ffffff); */
    }
    .name h1{
        float:right;
        margin-top:10px;
        color:#ffffff;
        text-shadow: 2px 2px 4px #000000;
    } 
    .select{
        float:right;
        margin-top:10px;
        margin-right:10px;
    }
    .button {
        background-color: #e7e7e7; color:#2d601c ;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;

    }
    .popup{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50%;
        display: none;
        /* border: 3px solid #f1f1f1; */
        color:#000000;
        background-color: #808080;
        border-radius: 5px;
        padding: 20px;
        

    }
    .popup1{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50%;
        display: none;
        /* border: 3px solid #f1f1f1; */
        color:#000000;
        background-color: #808080;
        border-radius: 5px;
        padding: 20px;
        

    }
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 40px;
        width:48%;
        
    }
    .popup input[type=button] {
        background-color: #f20000;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 40px;
        width:48%;
        float:right;
        
    }
    .popup1 input[type=button] {
        background-color: #f20000;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 40px;
        width:48%;
        float:right;
        
    }
   
    input[type=submit]:hover {
        background-color: #45a049;
    }
    .popup input[type=button]:hover {
        background-color: #c80000;
    }
    .popup1 input[type=button]:hover {
        background-color: #c80000;
    }
    
    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }
    input[type=text],input[type=password],select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
    </style>
</head>
<body>
<div class="head">
        <div class=name>
            <img src="images/logo3.png" alt="logo" width="100px" height="60px" >
            <h1>Online Plant Shop</h1>
            
        </div>
        
        <div class="select">

                <!-- <a href="login.php"><input type="button" class="button" value="Login" ></a> -->
                <input type="button" class="button" value="Login" onclick="openForm()">
                <!-- <a href="SignUp.php"><input type="button" class="button" value="SignUp"></a> -->
                <input type="button" class="button" value="SignUp" onclick="openForm2()">

        </div>
        <form class="popup" id="myForm" action="_login.php" action="get">
	        <label>User Name :</label><br>
	        <input type="text" name="username">
	        <br>
	        <label>Password :</label><br>
	        <input type="password" name="password">
	        <br>
	        <a href=""><input type="submit" name="submit"></a>
            <input type="button" name="cancel" value="Cancel" onclick="closeForm()">
        </form>
        <form class="popup1" id="myForm2" action="_SignUp.php" action='get'>
            <label for="">User Name</label>
            <input type="text" name="username" id="username">
            <br>
            <label for="">Password</label>
            <input type="text" name="password" id="password">
            <br>
            <label for="">Display Name</label>
            <input type="text" name="displayName" id="displayName">
            <br>
            <label for="">Role</label>
            <select name="role" id="role">
                <option value="1">Admin</option>
                <option value="2">Supplier</option>
                <option value="3">User</option>
            </select>
            <a href=""><input type="submit" name="submit" value="Register"></a>
            <input type="button" name="cancel" value="Cancel" onclick="closeForm2()">
   
    </form>
</div>


<?php

?> 
<script>
function openForm() {
  document.getElementById("myForm2").style.display = "none";
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function openForm2() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("myForm2").style.display = "block";
}
function closeForm2() {
  document.getElementById("myForm2").style.display = "none";
}
</script>
</body>
</html>

