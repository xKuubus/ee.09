<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video on Demand</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--- Skrypt łączenia z bazą danych --->

    <?php
        $addr = "localhost";
        $user = "root";
        $passwd = "";
        $database = "filmy";

        $connect = mysqli_connect("$addr","$user","$passwd","$database");
    ?>          

    <section id="left-banner">
        <h1>Internetowa wypożyczalnia filmów</h1>
    </section>
    <section id="right-banner">
        <table>
            <tr></tr>
                <th>Kryminał</th>
                <th>Horror</th>
                <th>Przygodowy</th>
            <tr></tr>
                <td>20</td>
                <td>30</td>
                <td>20</td>
        </table>
    </section>
    <section id="list-1">
        <h3>Polecamy</h3>

    <!--- Skrypt no. 1 --->
    <?php

    $question = "SELECT `id`,`nazwa`,`zdjecie`,`opis` FROM `filmy` WHERE `polecane` = 1;";
    $result = mysqli_query($connect,$question);
    
    while ($row = $result->fetch_assoc()) {
        echo '<section id="film">' . '<h4>' .$row['id']. '. ' .$row['nazwa']. '</h4>' . '<img src="img/' .$row['zdjecie']. '" alt="film"> <p>' .$row['opis']. '</p></section>';
    }
    ?>

    </section>
    <section id="list-2">
        <h3>Filmy fantastyczne</h3>
        <?php

        $question = "SELECT `id`,`nazwa`,`zdjecie`,`opis` FROM `filmy` WHERE `polecane` = 0;";
        $result = mysqli_query($connect,$question);

        while ($row = $result->fetch_assoc()) {
            echo '<section id="film">' . '<h4>' .$row['id']. '. ' .$row['nazwa']. '</h4>' . '<img src="img/' .$row['zdjecie']. '" alt="film"> <p>' .$row['opis']. '</p></section>';
        }
        ?>
    </section>
    <section id="footer">
        <form action="index.php" method="post">
            <label for="id">Usuń film nr:</label>
            <input type="number" id="id" name="id">
            <input type="submit" name="submit" id="submit" value="Usuń film">
        </form>

    <!-- Skrypt No. 2 -->

	<?php
	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
        $request2 = "DELETE FROM filmy WHERE id=$id";

		mysqli_query($connect, $request2);
        echo "<meta http-equiv='refresh' content='0'>";
	}
	?>

        <a href="mailto:ja@poczta.pl">Stronę wykonał: PESEL</a>
    </section>
</body>
</html>