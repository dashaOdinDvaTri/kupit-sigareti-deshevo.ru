<?php
if (!isset($_POST['type'])) die();

$ini = parse_ini_file('../config/config.ini'); 

$utmz = $_COOKIE['__utmz'];
$utmz = explode(".",$utmz);
$utmz = array_pop($utmz);
$utmz = explode('|',$utmz);
$utmz_out = array();
foreach ($utmz as &$part){
	$part = explode('=',$part);
	$utmz_out[$part[0]] = $part[1];
}
$time = time();
$date = date('d-m-Y H:i:s');

$title = '';

if ($_POST['type'] == 'catalog') {
	$mail = "
	<html>
	  <head>
		<title>Заявка на сигаретный прайс</title>
	  </head>
	  <body style='color:#111; font-family:13px Tahoma, Arial, sans-serif;'>
	<p><strong>Заявка на сигаретный прайс<strong></p>
	<p>Имя: {$_POST['name']}</p>
	<p>Телефон: {$_POST['phone']}</p>
	<p>Email: {$_POST['email']}</p>
	
	
	</body>
	</html>
	";

	if ($_POST['email'] && $ini['catalog_file']) {
		$usermail = '<html>
		  <head>
			<title>Прайс-лист на сигареты</title>
		  </head>
		  <body style="color:#111; font-family:13px Tahoma, Arial, sans-serif;">
		<p><strong>Прайс-лист на сигареты<strong></p>
		<p>Добрый день, '.$_POST['name'].'!</p>
		<p>Прайс во вложении.</p>
		
		
		<br/>
		<br/>
		
		
		<p>'.$ini['company_name'].'</p>
		</body>
		</html>';
		xmail($ini['from_email'],$_POST['email'],'Price',$usermail, $ini['catalog_file']);
	}
	$title = 'Заявка на прайс '.date('d-m-Y H:i:s');
}

if ($_POST['type'] == 'callback') {
	$mail = "
	<html>
	  <head>
		<title>Заявка на обратный звонок</title>
	  </head>
	  <body style='color:#111; font-family:13px Tahoma, Arial, sans-serif;'>
	<p><strong>Заявка на обратный звонок с сайта kupit-sigareti-deshevo<strong></p>
	<p>Имя: {$_POST['name']}</p>
	<p>Телефон: {$_POST['phone']}</p>
	
	</body>
	</html>
	";
	
	$title = 'Заявка на обратный звонок '.date('d-m-Y H:i:s');
}

$headers = 'Content-type: text/html; charset=utf-8'. "\r\n".
'From: '.$ini['company_name'].' <'.$ini['from_email'].'>' . "\r\n";
mail($ini['request_email'], $title, $mail, $headers);

function xmail( $from, $to, $subj, $text, $filename) {
$f         = fopen($filename,"rb");
$un        = strtoupper(uniqid(time()));
$head      = "From: $from\n";
$head     .= "To: $to\n";
$head     .= "Subject: $subj\n";
$head     .= "X-Mailer: PHPMail Tool\n";
$head     .= "Reply-To: $from\n";
$head     .= "Mime-Version: 1.0\n";
$head     .= "Content-Type:multipart/mixed;";
$head     .= "boundary=\"----------".$un."\"\n\n";
$zag       = "------------".$un."\nContent-Type:text/html; charset=utf-8\n";
$zag      .= "\n$text\n\n";
$zag      .= "------------".$un."\n";
$zag      .= "Content-Type: application/octet-stream;";
$zag      .= "name=\"".basename($filename)."\"\n";
$zag      .= "Content-Transfer-Encoding:base64\n";
$zag      .= "Content-Disposition:attachment;";
$zag      .= "filename=\"".basename($filename)."\"\n\n";
$zag      .= chunk_split(base64_encode(fread($f,filesize($filename))))."\n";
 
return @mail("$to", "$subj", $zag, $head);
}
