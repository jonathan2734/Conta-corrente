<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Seu saldo</title>
        <link rel="stylesheet" href="dados.css" />
	</head>
	<body>
    	<div id="meio">
        	<h2>Esta página armazena seu saldo</h2>
        	<?php
				session_start();
				echo "<h2> Saldo atual: ". number_format($_SESSION["total"],2). "</h2>"
			?>
        </div>
	</body>
</html>