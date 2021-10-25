<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja wszystkie smaki</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $addr = "";
        $user = "";
        $passwd = "";
        $database = "";
    ?>

    <section id="banner">
        <h1>Witamy w restauracji "Wszystkie Smaki"</h1>
    </section>
    <section id="left">
        <img src="menu.jpg" alt="Nasze danie">
    </section>
    <section id="right">
        <h4>U nas dobrze zjesz!</h4>
        <ol>
            <li>Obiady od 40 zł</li>
            <li>Przekąski od 10 zł</li>
            <li>Kolacje od 20 zł</li>
        </ol>   
    </section>
    <section id="bottom">
        <h2>Zarezerwuj stolik on-line</h2>
        <form action="rezerwacja.php" method="POST">
            Data (format-rrrr-mm-dd):<br />
            <input type="text" id="data" name="data"><br />
            Ile osób?:<br />
            <input type="number" id="ile" name="ile"><br />
            Twój numer telefonu:<br />
            <input type="text" id="numer" name="numer"><br />
            <label for="Dane"><input type="checkbox" name="ToU" id="Dane">Zgadzam się na przetwarzanie moich
                danych osobowych.</label><br />
                <button class="btn" type="reset">RESETUJ</button> <button class="btn" type="submit">REZERWUJ</button>
        </form>
    </section>
    <section id="footer">
        Stronę internetową opracował: PESEL
    </section>
</body>
</html>