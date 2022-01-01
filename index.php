<!DOCTYPE html>
<html lang="ro-RO">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PAGE TITLE</title>
    <link href="assets/lightbox.min.css" rel="stylesheet">
    <style>
        body{font-family:"Lucida Grande","Lucida Sans Unicode",Verdana,Helvetica,Arial,sans-serif;margin:15px 0;background:#333}
        .container{margin:0 auto;padding:0 15px;max-width:1064px}
        a{color:#fff;text-decoration:none}
        .grid-item{float:left;width:260px;height:160px;border:3px solid white;overflow:hidden}
        img{width:100%;height:100%;object-fit:cover}
    </style>
</head>
<body>
<div class="container">
	<p style="text-align:center;font-weight:bold"><a href="archive.zip">Descarcă toate pozele într-o arhivă .ZIP</a></p>
	
	<div class="grid">
		<?php $files = []; ?>
		<?php foreach (new DirectoryIterator('./thumbs') as $fileInfo) : ?>
			<?php if($fileInfo->isDot()) continue;  ?>
			<?php $files[] = $fileInfo->getFilename(); ?>			
		<?php endforeach; ?>

		<?php asort($files); ?>
		<?php foreach ($files as $file) : ?>
			<div class="grid-item">
				<a href="img/<?php echo $file ?>" target="blank" data-lightbox="botez">
					<img src="thumbs/<?php echo $file ?>" loading="lazy">
				</a>
			</div>
		<?php endforeach; ?>
	</div>
<script src="assets/jquery-3.6.0.min.js"></script>
<script src="assets/lightbox.min.js"></script>
</div>
</html>
