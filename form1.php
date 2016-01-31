<!Doctype html>
<html long="en">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
    <body>
        <p>Login form</p>


</form avtion="form1.php" method="post">
   username<input type="text" name="username">
   password<input type="password" name="username">
   <input type="submit" name="submit" name"Log in" value="login">

</form>

<?php
/*echo "<pre>";
var_dump($_POST);
echo "</pre>";*/
if (!empty($_POST["submit"])) {
	echo $_POST['username'];
}
?>

</body>
</head>
</html>