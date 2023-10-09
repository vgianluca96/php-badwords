<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <h2>Paragrafo:</h2>
        <p>
            <?php echo $_POST["paragraph"]; ?>
        </p>
        <h3>Parola da censurare:</h3>
        <p>
            <?php echo $_POST["word"]; ?>
        </p>
    </div>

</body>

</html>