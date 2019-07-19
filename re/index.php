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
	<meta name="theme-color" content="#120f0f">
        <meta name="apple-mobile-web-app-status-bar-style" content="#120f0f">
        <meta name="msapplication-navbutton-color" content="#120f0f">
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
/* 
1200px – Desktops, notebooks com monitores widescreen
***********************************************************/
@media screen and (max-width:1200px){
      
}
/* 
960px – Tablets no formato paisagem e alguns monitores mais antigos
***********************************************************/
@media screen and (max-width:960px){
      
}
/* 
768px – Tablets no formato retrato, como o iPad
***********************************************************/
@media screen and (max-width:768px){
}
/* 
480px – Smartphones no formato paisagem com tela pequena
***********************************************************/
@media screen and (max-width:480px){
	
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
