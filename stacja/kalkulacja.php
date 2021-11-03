<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nasza stacja paliw</title>
</head>
<body>
    <section id="banner">
        <h2>Witamy na stacji paliw!</h2>
    </section>
    <section id="left">
        <a href="index.php"><img src="home.png"></a><br />
        <a href="kalkulacja.php"><img src="znak.png"></a>
    </section>
    <section id="right">
        <img src="samochod.png" alt="grafika: samochod">
    </section>
    <section id="main">
        <h2>Oblicz, ile litrów musisz zatankować</h2>
        <label>dystans do przejechania w km:</label><br />
        <input type="number" id="a"><br />
        <label>spalanie samochodu w l/100km:</label><br />
        <input type="number" id="b"><br />
        <button type="button" onclick="count()">OBLICZ</button><br />

        <p id="result"><p>
    </section>
    <script type="text/javascript">
    function count(){
        var a = document.getElementById("a").value;
        var b = document.getElementById("b").value;
        {
        var fuel = a * b / 100;
        document.getElementById("result").innerHTML = "Potrzebujesz: " + fuel + " litrów paliwa.";
        }       
    }
    </script>
    <section id="footer_left">
        <p>Strone wykonał: PESEL</p>
    </section>
    <section id="footer_right">
        <a href="kwerendy.txt">Tu pobierzesz zapytania</a>
    </section>
</body>
</html>