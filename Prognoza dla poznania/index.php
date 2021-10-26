<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Prognoza pogody Poznań</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <section id="left_banner">
            <p>maj, 2019 r.</p>
        </section>
        <section id="middle_banner">
            <h2>Prognoza dla Poznania</h2>
        </section>
        <section id="right_banner">
            <img src="logo.png" alt="prognoza" />
        </section>
        <section id="left">
            <a target="_blank" href="kwerendy.txt"> Kwerendy </a>
        </section>
        <section id="right">
            <img src="obraz.jpg" alt="Polska, Poznań" />
        </section>
        <section id="main">
            <table>
                <tr>
                    <th>Lp</th>
                    <th>DATA</th>
                    <th>NOC - TEMPERATURA</th>
                    <th>DZIEŃ - TEMPERATURA</th>
                    <th>OPADY[mm/h]</th>
                    <th>CIŚNIENIE[hPa]</th>
                </tr>
                <?php 
                
                $connect = mysqli_connect("localhost","root","","pogoda");
                $question = "SELECT * FROM `pogoda` WHERE `miasta_id` = 2 ORDER BY data_prognozy DESC";
                $result = mysqli_query($connect,$question);
                while ($row = $result->fetch_assoc()){
                    echo "<tr><td>".$row['id'].".</td><td>".$row['data_prognozy']."</td><td>".$row['temperatura_noc']."</td><td>".$row['temperatura_dzien']."</td><td>".$row['opady']."</td><td>".$row['cisnienie']."</td></tr>";
                }

                ?>
            </table>
        </section>
        <section id="footer">
            <p>Strone wykonał: PESEL</p>
        </section>
    </body>
</html>