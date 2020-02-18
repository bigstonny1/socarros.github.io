<?php 
 include 'config.php';
  //////////////////////////////
 // POR FAVOR NÃO MECHA AQUI //
//////////////////////////////

?>
<?php
//settings
$cache_ext 	= '.html'; //file extension
$cache_time 	= 3600;  //Cache file expires afere these seconds (1 hour = 3600 sec)
$cache_folder 	= 'cache/'; //folder to store Cache files
$ignore_pages 	= array('', '');

$dynamic_url 	= 'http://'.$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']; // requested dynamic page (full url)
$cache_file 	= $cache_folder.md5($dynamic_url).$cache_ext; // construct a cache file
$ignore = (in_array($dynamic_url,$ignore_pages))?true:false; //check if url is in ignore list

if (!$ignore && file_exists($cache_file) && time() - $cache_time < filemtime($cache_file)) { //check Cache exist and it's not expired.
	ob_start('ob_gzhandler'); //Turn on output buffering, "ob_gzhandler" for the compressed page with gzip.
	readfile($cache_file); //read Cache file
	echo '<!-- cached page - '.date('l jS \of F Y h:i:s A', filemtime($cache_file)).', Page : '.$dynamic_url.' -->';
	ob_end_flush(); //Flush and turn off output buffering
	exit(); //no need to proceed further, exit the flow.
}
//Turn on output buffering with gzip compression.
ob_start('ob_gzhandler'); 
######## Your Website Content Starts Below #########
?>
	<!DOCTYPE html>
	<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
<?php
######## Your Website Content Ends here #########

if (!is_dir($cache_folder)) { //create a new folder if we need to
    mkdir($cache_folder);
}
if(!$ignore){
	$fp = fopen($cache_file, 'w');  //open file for writing
	fwrite($fp, ob_get_contents()); //write contents of the output buffer in Cache file
	fclose($fp); //Close file pointer
}
ob_end_flush(); //Flush and turn off output buffering

?>
