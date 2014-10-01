<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php



if (isset($_POST['a']))
  $pass = $_POST['a'];
  if ($pass=='pythonisgreat123')
    setcookie("key","yes",time()+3600*24*365);
    echo "\n\n<script>\n \nwindow.location = 'site.php';\n\n\n</script>";
















?>
</body>
</html>


