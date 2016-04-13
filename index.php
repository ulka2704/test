<!DOCTYPE html>

<html>
	
	<head>
		<title>Click on the square</title>
		<meta charset = "utf-8">
		<link rel="stylesheet" type="text/css" href="main.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	</head>

	<body>

		<div id = "square"></div>
		<div id = "inf"> Click on the square! <br /> Change the color! </div>

	</body>

	<script type = "text/javascript">

				var randomcolor;
				
				function get_random_color(){
						randomcolor="#"+((1<<24)*Math.random()|0).toString(16); }
				
				$(document).ready(function(){
					$('#square').click(function(){
						get_random_color();
						$(this).css('background',randomcolor);
					});
				});

	</script>

</html>