<!DOCTYPE html>
<html lang="pl">
 <head>
  <title>Sklep Kamil Gronek</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="styleGronek.css">

  <?php

	$wpis = TRUE;
	if (isset($_POST['NazwaKG'])) {$NazwaKG = $_POST['NazwaKG'];} else {$wpis = FALSE;}
	if (isset($_POST['FirmaKG'])) {$FirmaKG = $_POST['FirmaKG'];} else {$wpis = FALSE;}
	if (isset($_POST['KategoriaKG'])) {$KategoriaKG = $_POST['KategoriaKG'];} else {$wpis = FALSE;}
	if (isset($_POST['CenaKG'])) {$CenaKG = $_POST['CenaKG'];} else {$wpis = FALSE;}
    if (isset($_POST['StanKG'])) {$StanKG = $_POST['StanKG'];} else {$wpis = FALSE;}

	$delete = TRUE;
	if (isset($_POST['delete'])) {$Produkt_id= $_POST['delete'];} else {$delete = False;}

	$username = 'root';
	$password = '';
	$serwer = 'localhost';
	$database = 'SklepGronek';
	$br = "<br/>";
	$conn = new mysqli($serwer, $username, $password, $database);

	if ($wpis) {
		$query = "INSERT INTO Produkty(NazwaKG, FirmaKG, KategoriaKG, CenaKG, StanKG)";
		$query .= "VALUES('".$NazwaKG."','".$FirmaKG."','".$KategoriaKG."','".$CenaKG."','".$StanKG."')";
		$conn->query($query);
	}
	if ($delete) {
		$query = "DELETE FROM Produkty WHERE produkt_id='".$Produkt_id."'";
		$conn->query($query);
	}

	$conn->close();
  ?>
  </head>

 <body>
    <div id="container">
    	<header>
					<h1>Wypożyczalnia sprzętu narciarskiego NARTEX </h1>
					<h3>Witamy!</h3>
			</header>
        <div class="content">
						<p>Wypożyczalnia sprzętu narciarskiego NARTEX
							Trudno wyobrazić sobie lepszy sposób spędzania zimy niż jazda na nartach po ośnieżonych stokach.
							Jednak, aby móc w pełni cieszyć się zimowym szaleństwem, należy zaopatrzyć się w odpowiedni sprzęt.
							Wybór właściwego modelu nart może okazać się wcale nie tak łatwym zadaniem, szczególnie dla początkujących.
							Dlatego, jeśli szukasz sklepu narciarskiego, w którym znajdziesz kompetentną i specjalistyczną obsługę, to koniecznie zawitaj do nas.
						</p>
						<p>
							Oferujemy Państwu szeroki wachlarz usług narciarskich. Poprzez doractwo w wyboże sprzętu narciarskiego,
							dokompletowanie sprzętu, doractwo w ubiorze narciarskim jak i komis.

							Wypożyczalnia sprzętu narciarskiego NARTEX znajdują się w 10 najczęsciej obleganych miastach
							na południu naszego kraju, dzięki temu łatwo jest odnaleźć nas na najbardziej znanych stokach.
						</p>
        </div>
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
