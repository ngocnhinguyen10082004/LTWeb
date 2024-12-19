
<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0">
	<title>Admincp</title>
	<link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
	<style>
        #table1 {
            border-collapse: collapse;
            width: 80%;
            margin-bottom: 20px; 
        }
        #table1, #table1 th, #table1 td {
            border: 1px solid black;
        }
        #table1 td {
            padding: 8px;
        }
        
        #table2 {
            border-collapse: collapse;
            width: 100%;
        }
        #table2, #table2 th, #table2 td {
            border: 1px solid black;
        }
        #table3 {
            border-collapse: collapse;
            text-align: center;

        }
        #table3, #table3 th, #table3 td {
            border: 1px solid black;
        }
    </style>
	
</head>
<?php
   session_start();
   if(!isset($_SESSION['dangnhap'])){
   header("Location:login.php");
       }
?>
<body>
	<h3 class="title_admin">Welcome to Admincp</h3>
	<div class="wrapper"> 
	<?php
		include("config/config.php");
		include("modules/header.php");
		include("modules/menu.php");
		include("modules/main.php");
		
	?>

</body>
</html>

