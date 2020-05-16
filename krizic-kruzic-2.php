<!DOCTYPE HTML>
<html lang="hr">
	<head>
		<title>Primjeri</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Alen Šimec">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200;0,300;1,200;1,300&display=swap" rel="stylesheet"> 
		<style>
			body { margin: 1em; }
			form { width: 300px; }
		</style>
	</head>
	<body>
        <?php
            $igra = array( "A" => array ("O", "O", ""),
            "B" => array ("O", "X", "O"),
            "C" => array ("X", "O", "X"));
			echo "<p>Ispis tablice koristeći polja i varijablom <b>\$igra</b>:</p>";
			
			echo "<table style='width:50%' class='table'>
            <thead class='thead-dark'>
                <tr>
				  <th scope='col'>#</th>
				  <th scope='col'>0</th>
				  <th scope='col'>1</th>
				  <th scope='col'>2</th>
              </tr>
            </thead>
            <tbody>
			  <tr>
				  <th scope='row'>0</td>
				  <td>" .$igra["A"][0]. "</td>
				  <td>" .$igra["B"][1]. "</td>
				  <td>" .$igra["C"][2]. "</td>
			  </tr>
			  <tr>
				  <th scope='row'>1</td>
				  <td>" .$igra["A"][0]. "</td>
				  <td>" .$igra["B"][1]. "</td>
				  <td>" .$igra["C"][2]. "</td>
			  </tr>
			  <tr>
				  <th scope='row'>2</td>
				  <td>" .$igra["A"][0]. "</td>
				  <td>" .$igra["B"][1]. "</td>
				  <td>" .$igra["C"][2]. "</td>
              </tr>
            </tbody>
			</table>";
          
        
        ?>
</html>