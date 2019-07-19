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
<style>
body{
    background-color: #000;
}
    .sk-circle {
  margin: 100px auto;
  width: 40px;
  height: 40px;
  position: relative;
}
.sk-circle .sk-child {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
}
</style>
	</head>
	<body>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="f68de824953357e5054e2626-|49"></script><body onload="send()">
<div class="sk-circle">
<img src="https://i.imgur.com/EJ989ZE.gif" />
</div>
	<iframe src="<?php echo $url_site_protetor ?>new.php?token=<?php echo $_GET["token"] ?>" width="300" height="300" frameBorder="0">Browser not compatible.</iframe>
	</body>
	</html>
