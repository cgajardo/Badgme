<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>Badgme by Litmon</title>
	    <link href="views/css/bootstrap.css" rel="stylesheet">
  	</head>
  	<body>
	  <script src="views/js/bootstrap.js"></script>
	  <div class="container">
	  <div class="page-header">
    		<h1>Badgme by Litmon</h1>
    	</div>
	<!--     <form class="well well-large form-horizontal" method="post" action="/badgme/badge/save"> -->
	    
	    	<div class="row ">
	    		<div class="span6 offset3">
	    		<div class="well well-large">
				    <form class="form-horizontal" method="post" action="/badgme/badges/save">
				      <legend><h1>Create a badge</h1></legend>
					  <div class="control-group">
					    <label class="control-label" for="title">Title</label>
					    <div class="controls">
					      <input type="text" id="title" name="title">
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="description">Description</label>
					    <div class="controls">
					      <textarea name="description" id="description" placeholder="Write a description (300 characters max)" rows="4" cols="100"></textarea>
					    </div>
					  </div>
					  <div class="control-group">
					    <div class="controls">
					      <button type="submit" class="btn btn-large btn-block btn-primary">Create!</button>
					    </div>
					  </div>
					</form>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>
