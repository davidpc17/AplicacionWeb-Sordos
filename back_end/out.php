
<?php
include('../controller/load.php');
session_destroy();
echo 'Cerraste sesión';
header("location:../file/login2.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Saliendo...</title>
	<meta charset="utf-8">
</head>
<body>
<script language="javascript">location.href = "../file/login2.php";</script>
</body>
</html>
?>


