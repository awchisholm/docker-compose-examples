<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<!DOCTYPE html>
<html>
<body>

<p>PHP test page</p>

<?php
echo "PHP_SELF: ";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo "SERVER_ADDR: ";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo "HTTP_HOST: ";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo "SERVER_SIGNATURE: ";
echo $_SERVER['SERVER_SIGNATURE'];
echo "<br>";
echo "HTTP_USER_AGENT: ";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "SCRIPT_NAME: ";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "REMOTE_ADDR: ";
echo $_SERVER['REMOTE_ADDR']
?>

<p>Cookie</p>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
