<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Badgme by Litmon</title>
    <link href="/badgme/views/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <script src="/badgme/views/js/bootstrap.js"></script>
    <div class="container">
    	<div class="page-header">
    		<h1>Badgme by Litmon</h1>
    	</div>
	    <div class="row">
	  		<div class="span9 offset2">
	  			<h1><?php echo $title; ?></h1>
	  		</div>
	  	</div>
	  	<div class="row ">
	  		<div class="span4 offset2"><img src="http://api.qrserver.com/v1/create-qr-code/?data=<?php echo urlencode($title).": ".urlencode($content); ?>&amp;size=300x300" class="img-polaroid" alt="QR Code"></div>
	  		<div class="span4 offset1"><p><?php echo $content; ?></p></div>
		</div>
		<div class="row">
			<div class="span9 offset2" style="margin-top: 40px;">
				<div class="well well-small">
				Share this badge on Facebook or using this url : <?php echo $url; ?>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>
