<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<title> Nội Thất </title>
	<link rel = "stylesheet" type = "text/css" href = "css/style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

	
	<style>
        #table1 {
            border-collapse: collapse;
            width: 50%;
			text-align: center;
        }
        #table1, #table1 th, #table1 td {
            border: 1px solid black;
        }
		#table2 {
            border-collapse: collapse;
            width: 100%;
        }
        #table2, #table2 th, #table2 td {
            border: 1px solid black;
        }
	</style>
</head> 
<body>
	<div class = "wrapper"> 
		<?php
		        session_start();
			include("admincp/config/config.php");
			include("pages/header.php");
			include("pages/menu.php");
			include("pages/main.php");
			include("pages/footer.php");
		?>
	</div>
</body>
</html>
