<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twój wskaźnik BMI</title>
</head>
<body>
    
<section id="banner1">
    <h2>Oblicz wskaźnik BMI</h2>
</section>
<section id="logo">
    <img src="wzor.png" alt="liczymy BMI">
</section>
<section id="left">
    <img src="rys1.png" alt="zrzuć kalorie!">
</section>
<section id="right">
    <h1>Podaj dane</h1>
    <form action="#" method="post">
        <label for="waga">Waga:</label>
        <input type="number" id="waga" name="waga"><br>
        <label for="wzrost">Wzrost[cm]:</label>
        <input type="number" id="wzrost" name="wzrost"><br>
        <input type="submit" value="Licz BMI i zapisz wynik">
    </form>
    <?php
    if(isset($_POST['waga']) && isset($_POST['wzrost'])){
        $connect = mysqli_connect("localhost","root","","z4");
        $waga = $_POST['waga'];
        $wzrost = $_POST['wzrost'];
        $obliczanie = ($waga/($wzrost*$wzrost));
        $results = ($obliczanie*10000);
        $data_pomiaru = date("Y-m-d"); 

        echo "Waga: " .$waga. "<br /> Wzrost: " .$wzrost. "<br /> BMI Wynosi: " .$results;

        if($results >=0 && $results<19){
            echo "<br />Niedowaga";
            $sql = "INSERT INTO bmi2 (`bmi_id`, `data_pomiaru`, `wynik`) VALUES ('1', '$data_pomiaru', '$results')";
        } elseif($results >=19 && $results<26){
            echo "<br />Waga prawidlowa";
            $sql = "INSERT INTO bmi2 (`bmi_id`, `data_pomiaru`, `wynik`) VALUES ('2', '$data_pomiaru', '$results')";
        } elseif($results >=26 && $results<31){
            echo "<br />Nadwaga";
            $sql = "INSERT INTO bmi2 (`bmi_id`, `data_pomiaru`, `wynik`) VALUES ('3', '$data_pomiaru', '$results')";
        } elseif($results >=31){
            echo "<br />Otylosc";
            $sql = "INSERT INTO bmi2 (`bmi_id`, `data_pomiaru`, `wynik`) VALUES ('4', '$data_pomiaru', '$results')";
        }

        if(mysqli_query($connect, $sql)){
            echo "<br />Dodano do bazy danych.";
        } else{
            echo "<br />ERROR: Nie można wykonać polecenia: $sql. " . mysqli_error($connect);
        }

        mysqli_close($connect);}
    ?>
</section>
<section id="main">
    <table>
        <tr>
            <th>lp.</th>
            <th>Interpretacja</th>
            <th>zaczyna się od...</th>
        </tr>
        <?php 
            $connect = mysqli_connect("localhost","root","","bmi");
            $question = "SELECT id, informacja, wart_min FROM bmi ORDER BY id ASC";
            $result = mysqli_query($connect, $question);

            while ($show_result = mysqli_fetch_row($result)) {
                echo "<tr>";
                echo "<td>".$show_result[0]."</td>";
                echo "<td>".$show_result[1]."</td>";
                echo "<td>".$show_result[2]."</td>";
                echo "</tr>";
            }
            
            mysqli_close($connect);
        ?>
    <table>
</section>
<section id="footer">
    Autor:00000000000000
    <a href="#" target="blank">Wynik działania kwerendy 2</a>
</section>
</body>
</html>