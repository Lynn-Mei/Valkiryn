<html>
<head>
	<link rel="stylesheet" href="index.css" />
</head>
<body>

<?php

session_start();

include ("head.html");
include ("navbar.html");

if(isset($_SESSION['name'])){
	echo $_SESSION['name'];

}

?>

</body>
</html>