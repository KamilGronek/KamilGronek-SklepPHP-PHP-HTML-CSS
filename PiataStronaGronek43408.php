<html lang="pl-PL">
<head><meta charset="UTF-8"></head>
<link rel="stylesheet" href="styleGronek.css">
  <title>Sklep Kamil Gronek</title>
  <?php
    $username = 'root';
    $password = '';
    $serwer = 'localhost';
    $database = 'SklepGronek';
    $br="<br>";

    $conn = new mysqli($serwer,$username,$password,$database);
    if ($conn->connect_error) die($conn->connect_error);

  ?>




<body>
<div id="container">
<article>
  <h1>Produkt do zmiany:</h1>
  </article>
  <form action ="PierwszaStronaGronek43408.php" method="POST">
	<select name="alter">
	<?php
		$query = "SELECT * from Produkty";
		$rs = $conn->query($query);
		$num = $rs->num_rows;
		$i=0;
		while($i< $num) {
			$rs->data_seek($i);
			$row = $rs->fetch_assoc();
			$option = "<option value=".$row["Produkt_id"].">";
			$option .=" ".$row["NazwaKG"];
			$option .=" ".$row["FirmaKG"];
			$option .=" ".$row["KategoriaKG"];
			$option .=" ".$row["CenaKG"];
			$option .=" ".$row["StanKG"];
			echo $option;
			$i++;
		}
	?>
	</select>

	<article>
  <h3>Dane produktu do zmiany:</h3>
  </article>
  <table>
		<tr><td></td><td>Wpisz dane do zmiany</td></tr>
		<tr><td></td><td>Nazwa produkty</td><td><input type="text" name="NazwaKG"></td></tr>
		<tr><td></td><td>Firma</td><td><input type="text" name="FirmaKG"></td></tr>
		<tr><td></td><td>Kategoria</td><td><input type="text" name="KategoriaKG"></td></tr>
		<tr><td></td><td>Cena</td><td><input type="text" name="CenaKG"></td></tr>
		<tr><td></td><td>Stan</td><td><input type="text" name="StanKG"></td></tr>


	</table>
	<br>
		<tr><td></td><td></td><td><input type="submit" value="Zmień"></td></tr>

  </form>
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
    <h6>Autor: Kamil Gronek</h6>
</body>
</html>
