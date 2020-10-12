<?php 
    $title="Галерея";
    $h1="Галерея фотографий"; 
    $year=date('Y');
 
    ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title><?= $title?></title>
	
</head>
<body>

	<div id="content">
		<h1><?= $h1?></h1>
		<?php
		$images = scandir("image");
		for ($i=2; $i<count($images) ; $i++):?>
		<a href="http://localhost/image/<?= $images[$i]?>" target="_blank"><img src="image/<?= $images[$i]?>" width="100" height="100" style="margin-right: 20px"></a>
			
		<?php
		endfor;
		?>
		
		
		<div id="footer">
			<p>Copyright &copy; <?=$year; ?> ><em>minimalistica</em> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a></p>
		</div>	
	</div>
</body>
</html>