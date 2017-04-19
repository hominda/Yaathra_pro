<!DOCTYPE HTML>
<html>
	<head>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="editor.js"></script>
		<script>
			$(document).ready(function() {
				$("#txtEditor").Editor();
			});
		</script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="editor.css" type="text/css" rel="stylesheet"/>
		
	</head>
	<body>
		<!--Ask a question form  -->
	<form action="" method="post"  >

 <select class="form-control" id="sel1">
        <option>Select a category</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>



		<!-- text editor -->
		<div class="col-lg-10 nopadding">
		<textarea id="txtEditor"  ></textarea> 	

		
		</form>
	</body>
</html>
