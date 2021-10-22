<!DOCTYPE html>
<html lang="en">
<?php 
    setcookie("ciasteczka", "visited", time()+7200, "/","", 0);
?>      
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port lotniczy</title>
</head>
<body>
    <div class="nav">
        <div class="banner1">
            <img src="zad5.png" alt="logo lotnisko">
        </div>
        <div class="banner2">
            <h1>Przyloty</h1>
        </div>
        <div class="banner3">
            <h3>Przydatne linki</h3>
            <a href="kwerendy.txt" target="blank">Pobierz...</a>
        </div>
    </div>

    <div class="main">
        <table>
            <tr>
                <th>czas</th>
                <th>kierunek</th>
                <th>numer rejsu</th>
                <th>status</th>
            </tr>
            <?php 
            $connect = mysqli_connect("localhost","root","","odloty");
            $question = "SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC";
            $result = mysqli_query($connect, $question);

            while ($show_result = mysqli_fetch_row($result)) {
                echo "<tr>";
                echo "<td>".$show_result[0]."</td>";
                echo "<td>".$show_result[1]."</td>";
                echo "<td>".$show_result[2]."</td>";
                echo "<td>".$show_result[3]."</td>";
                echo "</tr>";
            }
            
            mysqli_close($connect);
        ?>

        </table>
    </div>
    <div class="footer">
        <div class="footer1">
        <?php
            if( isset($_COOKIE["ciasteczka"]))
                echo "<p><i>Witaj ponownie na stronie lotniska</i></p>";
            
            else
                echo "<p><b>Dzień dobry! Strona lotniska używa ciasteczek</b></p>";
        ?>
        </div>
        <div class="footer2">
            Autor: 0000000000000000
        </div>
    </div>
</body>
</html>