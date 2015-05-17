<!-- PEGA A URL -->
<?php 
	$protocolo = (strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === false) ? 'http://' : 'https://';
	$host = $_SERVER['HTTP_HOST'];
	$full_url = $protocolo .= $host;
	define ('BASE_URL',$full_url);
?>

