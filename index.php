<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <form action="paragraph.php" method="GET">
        <label for="phrase">Inserisci una frase</label>
        <input type="text" id="phrase" name="phrase">

        <label for="bad-word">Che parola vuoi censurare?</label>
        <input type="text"  id="bad-word" name="bad-word">

        <button type="submit">Inserisci</button>

    </form>
    
</body>
</html>