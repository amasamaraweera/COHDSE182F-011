<html>
<head>
  <title>Login</title>
</head>
<body>
<form action="login.php" method = "post">
  Username: <input type="text"  name="username"><br /><br />
  Password: <input type="password"  name="pass"><br /><br />
  <input type = "submit" value="login" name="submit">
</form>
</body>
</html>
<?php
    if(isset($_POST['submit']))
{ $username = $_POST['username'];
  $password = $_POST['pass'];
if ($_SESSION['login']==true || ($_POST['username']=="admin" && $_POST['password']=="password")) 
{
    echo "password accepted";
    $_SESSION['login']=true;
}
    else
 {
      echo "incorrect login";
}
}
?>