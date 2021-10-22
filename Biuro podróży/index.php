<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>

</head>
<body>

<?php

    $addr = "localhost";
    $user = "root";
    $passwd = "";
    $database = "wycieczki";

    $connect = mysqli_connect("$addr","$user","$passwd","$database");

?>
    
    <section id="banner">
        <h1>BIURO PODRÓŻY</h1>
    </section>
    <section id="left">
        <h2>KONTAKT</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </section>
    <section id="middle">
        <h2>GALERIA</h2>
        <?php
        $question = "SELECT `nazwaPliku`,`podpis` FROM `zdjecia` ORDER BY podpis ASC";
        $result = mysqli_query($connect,$question);

        while ($row = $result->fetch_assoc()) {
            echo '<img src="img/'.$row['nazwaPliku'] .'" alt="'. $row['podpis'] .'">';
        }
        ?>
    </section>
    <section id="right">
        <h2>PROMOCJE</h2>
        <table>
            <tr>
                <th>Jesień</th>
                <th>Grupa 4+</th>
                <th>Grupa 10+</th>
            </tr>
            <tr>
                <td>5%</td>
                <td>10%</td>
                <td>15%</td>
            </tr>   
        </table>
    </section>
    <section id="data">
        <h2>LISTA WYCIECZEK</h2>

        <?php
            $question2 = "SELECT `id`,`dataWyjazdu`,`cel`,`cena` FROM `wycieczki` WHERE `dostepna` = 1";
            $result2 = mysqli_query($connect,$question2);
            while ($row = $result2->fetch_assoc()) {
                echo $row['id'] .'.  '. $row['dataWyjazdu'] .', '. $row['cel'] .', cena: '. $row['cena'] .'<br />';
            }


            mysqli_close($connect);
        ?>

    </section>
    <section id="footer">
        <p>Stronę wykonał: PESEL</p>
    </section>

</body>
</html>