<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub wędkowania</title>
</head>
<body>

    <section id="banner">
        <h2>Wędkuj z nami!</h2>
    </section>

    <section id="left">
        <img src="ryba2.jpg" alt="Szczupak">
    </section>

    <section id="right">
        <h3>Ryby spokojnego żeru(białe)</h3>

        <?php

        $connect = mysqli_connect("localhost", "root", "", "wedkowanie2");
        $question = "SELECT id, nazwa , wystepowanie FROM `ryby` WHERE styl_zycia = 2";
        $result = mysqli_query($connect, $question);

        while ($row = $result->fetch_assoc()) {
            echo $row['id'] .'  '. $row['nazwa'] .', występuje w: '. $row['wystepowanie'] .'<br />';
        }

        mysqli_close($connect);

        ?>

        <ol>
            <li><a href="https://wedkuje.pl/" target="blank">Odwiedź także</a></li>
            <li><a href="http://pzw.org.pl/" target="blank">Polski Związek Wędkarski</a></li>
        </ol> 
    </section>

    <section id="footer">
        <p>Strone wykonał: PESEL</p>
    </section>
    
</body>
</html>