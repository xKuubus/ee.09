<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia papiernicza</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="banner">
        <h1>W naszej hurtowni kupisz najtaniej</h1>
    </section>
    <section id="left">
        <h3>Ceny wybranych artykułów w hurtowni:</h3>
        <table>
            <?php
            
            $conn = mysqli_connect('localhost', 'root', '', 'sklep');
            $sql = "SELECT nazwa, cena FROM towary LIMIT 4";
            $result = mysqli_query($conn,$sql);
    
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>". $row['nazwa']."</td>";
                echo "<td>". $row['cena']." zł</td>";
                echo "</tr>";
            }
            
            mysqli_close($conn);
            ?>
        </table>
    </section>
    <section id="middle">
        <h3>Ile będą kosztować Twoje zakupy?</h3>
        <form action="index.php" method="post">
           Wybierz artykuł <select name="list">
                <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                <option value="Cyrkiel">Cyrkiel</option>
                <option value="Linijka 30 cm">Linijka 30 cm</option>
                <option value="Ekierka">Ekierka</option>
                <option value="Linijka 50 cm">Linijka 50 cm</option>
            </select><br />
            Liczba sztuk: <input type="number" value="1" name="count" /><br />
            <input type="submit" name="submit" id="submit" />
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $list = $_POST['list'];
            $count = $_POST['count'];
            $conn2 = mysqli_connect('localhost', 'root', '', 'sklep');
            $sql2 = "SELECT cena FROM towary WHERE nazwa='$list'";
            $result2 = mysqli_query($conn2,$sql2);

            while ($row2 = $result2->fetch_assoc()) {
                $price = $row2['cena']*$count;
                $newprice = round($price, 1);
                echo $newprice;
            }
            
            mysqli_close($conn2);
        }
        ?>
    </section>
    <section id="right">
        <img src="zakupy.png" alt="hurtownia">
        <h3>Kontatk</h3>
        <p>telefon:<br /> 111222333<br /> email:<br /> <a href="mailto:hurt@wp.pl">hurt@wp.pl</a></p>
    </section>
    <section id="footer">
        <h4>Witrne wykonal PANP ESELSELFDS sfdGDSAWQa</h4>
    </section>
</body>
</html>