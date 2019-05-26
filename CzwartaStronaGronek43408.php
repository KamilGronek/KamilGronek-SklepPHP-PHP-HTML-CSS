<!DOCTYPE html>
<html lang="pl">
 <head>
  <title>Sklep Kamil Gronek</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styleGronek.css">
   <?php
	$username = 'root';
	$password = '';
	$serwer = 'localhost';
	$database = 'SklepGronek';
	$br = "<br/>";
	$conn = new mysqli($serwer, $username, $password, $database);
	$query = "SELECT * FROM Produkty";
	$rs = $conn->query($query);
	$num = $rs->num_rows;
	$conn->close();
  ?>
  </head>
 <body>
 <div id="container">
	<header>
	<h1>Wypożyczalnia sprzętu narciarskiego NARTEX </h1>
	</header>

	<article>
		<h3>Usuwamy Produkty:</h3>
	</article>
	<form action="PierwszaStronaGronek43408.php" method="POST">
	<select name="delete">
	<?php
		$i=0;
		while ($i<$num)
		{
			$rs->data_seek($i);
			$row = $rs->fetch_assoc();
			$option = "<option value=" .$row["Produkt_id"].">";
			$option .= $row["NazwaKG"];
			$option .= $row["FirmaKG"];
			$option .= $row["KategoriaKG"];
			$option .= $row["CenaKG"];
			$option .= $row["StanKG"];

			$option .= "</option>";
			echo $option;
			$i++;
		}
		?>
		</select>
      <br><br>
        <input type="submit" value="usuń">
    </form>
		</article>
 </div>
 <div id="footer">
   <ul>
     <li><a href="PierwszaStronaGronek43408.php"><div class="title">Strona główna</div></a></li>
     <li><a href="DrugastronaGronek43408.php"><div class="title">Zobacz produkt</div></a></li>
     <li><a href="TrzeciaStronaGronek43408.php"><div class="title">Dodaj produkt</div></a></li>
     <li><a href="CzwartastronaGronek43408.php"><div class="title">Usuń produkty</div></a></li>
     <li><a href="PiataStronaGronek43408.php"><div class="title">Edytuj produkty</div></a></li>
   </ul>
	</div>
  <h6>Autor:Kamil Gronek </h6>
