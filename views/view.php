<!DOCTYPE html>
<html lang="en">
  <head>
  	<!-- facebook bullshit -->
<!-- 	<meta property="fb:app_id" content="184736818309827" />  -->
<!-- 	<meta property="og:type" content="mfondue:meal"/> -->
	<meta property="og:title" content="<?php echo ucwords($title);?>"/>
	<meta property="og:description" content="<?php echo $content;?>"/>
	<meta property="og:image" content="http://api.qrserver.com/v1/create-qr-code/?data=<?php echo urlencode($title).": ".urlencode($content); ?>&amp;size=300x300"/>
	<meta property="og:url" content="http://litmon.com/badgme/badges/view?d=<?php echo $id;?>">
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
				Share this badge on <a href="https://www.facebook.com/sharer/sharer.php?u=http://litmon.com/badgme/badges/view?d=<?php echo $id;?>" target="_blank" type="icon_link">Facebook</a> or using this url : <?php echo $url; ?>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>
