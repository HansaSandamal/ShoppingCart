<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="_SignUp.php" action='get'>
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
   
    </form>
</body>
</html>