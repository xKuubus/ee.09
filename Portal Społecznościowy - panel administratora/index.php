<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel administratora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--- Skrypt No.0 --->
    <?php
        $addr = "localhost";
        $user = "root";
        $passwd = "";
        $database = "panel";

        $connect = mysqli_connect("$addr","$user","$passwd","$database");
    ?>
    
    <section id="banner">
        <h3>Portal Społecznościowy - panel administratora</h3>
    </section>
    <section id="left">
        <h4>Użytkownicy</h4>
        <!--- Skrypt No.1 --->

        <?php

            $question = "SELECT `id`,`imie`,`nazwisko`,`rok_urodzenia`,`zdjecie` FROM `osoby` LIMIT 30;";
            $result = mysqli_query($connect,$question);

            while ($row = $result->fetch_assoc()) {

                $data = date("Y");
                $rok = $row['rok_urodzenia'];
                $obliczanie = ($data-$rok);

                echo $row['id']. '. ' .$row['imie']. ' ' .$row['nazwisko']. ', ' .$obliczanie. ' lat<br />';
            }

        ?>

        <a href="settings.html">Inne ustawienia</a>
    </section>
    <section id="right">
        <h4>Podaj id użytkownika</h4>
        <form action="index.php" method="post">
            <input type="number" id="id" name="id">
            <input class="btn-id" type="submit" name="submit" id="submit" value="ZOBACZ">
        </form>
        <hr>
        <!--- Skrypt No.2 --->

        <?php
            if (isset($_POST['submit'])) {
                $id = $_POST['id'];
                $request2 = "SELECT osoby.id, osoby.imie, osoby.nazwisko, osoby.rok_urodzenia, osoby.opis, osoby.zdjecie, hobby.nazwa FROM osoby JOIN hobby ON osoby.hobby_id = hobby.id WHERE osoby.id = $id";
                $result2 = mysqli_query($connect, $request2);

                while ($row = $result2->fetch_assoc()) {

                    echo '<h2>' .$id. '. ' .$row['imie']. ' ' .$row['nazwisko']. '</h2>';
                    echo '<img src="img/' .$row['zdjecie']. '" alt="' .$id. '">';
                    echo '<p>Rok urodzenia: ' .$row['rok_urodzenia']. '</p>';
                    echo '<p>Opis: ' .$row['opis']. '</p>';
                    echo '<p>Hobby: ' .$row['nazwa']. '</p>';
            }
        }
        ?>

    </section>
    <section id="footer">
        Strone wykonał: PESEL
    </section>
</body>
</html>