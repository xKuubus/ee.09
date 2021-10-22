<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!--- Skrypt łączenia z bazą danych --->

    <?php
        $addr = "localhost";
        $user = "root";
        $passwd = "";
        $database = "warzywniak";

        $connect = mysqli_connect("$addr","$user","$passwd","$database");
    ?>          

    <section id="banner-left">
        <h1>Internetowy sklep z eko-warzywami</h1>
    </section>
    <section id="banner-right">
        <ol>
            <li>Warzywa</li>
            <li>Owoce</li>
            <li><a target="_blank" href="https://terapiasokami.pl/">Soki</a></li>
        </ol>
    </section>
    <section id="main">
        
    <!--- Skrypt no. 1 --->
    <?php

    $question = "SELECT `nazwa`,`ilosc`,`opis`,`cena`,`zdjecie` FROM `produkty` WHERE `Rodzaje_id` = 1 or 2;";
    $result = mysqli_query($connect,$question);
    
    while ($row = $result->fetch_assoc()) {
        echo '<section id="product">' . '<img src="img/'. $row['zdjecie']. '" alt="warzywniak"> <h5>' .$row['nazwa']. '</h5> <p>Opis: '.$row['opis']. '</p><p>Na stanie: ' .$row['ilosc']. '</p><h2>' .$row['cena']. 'zł</h2></section>';
    }
    ?>
 

    </section>
    <section id="footer">
    <form action="index.php" method="post">
        <label for="nazwa">Nazwa:</label>
        <input type="text" id="nazwa" name="nazwa">
        <label for="cena">Cena:</label>
        <input type="number" id="cena" name="cena">
        <input type="submit" name="submit" id="submit" value="Dodaj produkt">
    </form>

	<?php
	if (isset($_POST['submit'])) {
		$nazwa = $_POST['nazwa'];
		$cena = $_POST['cena'];
		$request2 = "INSERT INTO produkty (id,`Rodzaje_id`,`Producenci_id`,`nazwa`,`ilosc`,`opis`,`cena`,`zdjecie`) VALUES (NULL,'1','4','$nazwa','10','','$cena','owoce.jpg')";

		mysqli_query($connect, $request2);
        echo "<meta http-equiv='refresh' content='0'>";
	}
	?>

    <br />
    Strone wykonał: PESEL
    </section>
</body>
</html>
