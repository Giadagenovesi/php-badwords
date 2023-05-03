<?php
$phrase = $_GET["phrase"];
$badword = $_GET["bad-word"];
$censored = "***";
$censored_phrase = str_replace($badword, $censored, $phrase);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Stampo la frase inserita dall'utente -->
    <h2>Il tuo testo è:</h2>
    <p> 
        <?php echo $phrase; ?> 
    </p>

    <!-- prendo la lunghezza della stringa della frase dell'utente -->
    <h3>La lunghezza del tuo testo è: <?php echo strlen($phrase); ?></h3>

    <!-- Stampo la frase inserita dall'utente con il testo censurato-->

    <h2>Questo è il tuo testo censurato:</h2>
    <p>
        <?php echo $censored_phrase; ?>
    </p>

    <!-- prendo la nuova lunghezza della stringa della frase dell'utente -->

    <h3>La lunghezza del tuo testo censurato è: <?php echo strlen($censored_phrase); ?></h3>

</body>
</html>