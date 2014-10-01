<!DOCTYPE HTML>
<html>
<head>
<title>Discover Python</title>
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
<![endif]-->
<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
<!--<![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="prettyPhoto/css/prettyPhoto.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
    if(isset($_COOKIE['key']))
      echo "<script>
          window.location='site.php' </script>"

          ?>
<center>
<h3 class="exp">Welcome To DiscoverPython</h3>
<p class='sim'>Please enter your passkey below to proceed</p><br><br>
<form method="post" action="auth.php">

<input type="password" name="a" id="a" placeholder="Enter the Passkey "/>
<br><br>
<input class="pure-button" type='submit' value='Submit' />
</form></center>
</body>
</html>
