<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <div class="baner1">
        <h2>Odloty z lotnisko</h2></div>
        <div class="banner2">
        <img src="zad6.png" alt="logotyp"></div>
    </header>

    <content>

    <div class="baner">
        <h4>TABELA ODLOTÓW</h4>
    <table>
    <tr>
        <th>Lp.</th>
        <th>Numer rejsu</th>
        <th>Czas</th>
        <th>Status</th>
    </tr>
    <?php 
        $connect = mysqli_connect("localhost","root","","airport");
        $question = "SELECT id, nr_rejsu, kierunek, czas, status_lotu FROM odloty ORDER BY czas DESC";
        $result = mysqli_query($connect, $question);

        while ($show_result = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo "<td>".$show_result[0]."</td>";
            echo "<td>".$show_result[1]."</td>";
            echo "<td>".$show_result[2]."</td>";
            echo "<td>".$show_result[3]."</td>";
            echo "<td>".$show_result[4]."</td>";
            echo "</tr>";
        }
        
        mysqli_close($connect);
    ?>
    </table>
    </div>


    </content>

    <footer>

        <div class="stopka1">
        <a href="kw1.png" target="blank" >Pobierz obraz</a></div>

        <div class="stopka2">
        <p>Miło nam że nas znowu odwiedziłeś</p>    
        </div>
        <!--script2-->

        <div class="stopka3">
    Autor: 020200...
        </div>

    </footer>
    

</body>
</html>