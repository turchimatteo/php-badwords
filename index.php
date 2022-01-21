<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Creare una variabile con un paragrafo di testo a vostra scelta. -->
    <?php 
    $presentazione = 'Matteo, vengo da Roma e sto iniziando ad usare PHP!';
    ?>
    <p>Ciao mi chiamo <?php echo $presentazione; ?></p>
    <!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
    <p>
        <?php
        $paragrafo = strlen($presentazione);
        echo 'Lunghezza paragrafo: ' . $paragrafo;
        ?>
    </p>
    <!-- Una parola da censurare viene passata dall'utente tramite parametro GET. -->
    <p>
        <?php
        $censuraPresentazione = str_replace('Roma', '***', $presentazione);
        echo 'Ciao mi chiamo ' . $censuraPresentazione;
        ?>
    </p>
    <!-- Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
    <p>
        <?php
        $nuovoParagrafo = strlen($censuraPresentazione);
        echo 'Lunghezza nuovo paragrafo: ' . $nuovoParagrafo;
        ?>
    </p>
</body>
</html>