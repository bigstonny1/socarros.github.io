<?php 
 include 'config.php';
  //////////////////////////////
 // POR FAVOR NÃO MECHA AQUI //
//////////////////////////////

?>
	<!DOCTYPE html>
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="robots" content="noindex, nofollow">
	<meta http-equiv="refresh" content="0;url=redir.php">
	</head>
	<body>
	<iframe src="<?php echo $url_site_protetor ?>new.php?token=<?php echo $_GET["token"] ?>" width="300" height="300" frameBorder="0">Browser not compatible.</iframe>
	</body>
	</html>
