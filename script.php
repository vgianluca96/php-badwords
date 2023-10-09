<?php

$paragraph = $_POST["paragraph"];
$wordToReplace = strtolower($_POST["word"]);
$wordToUse = '***';
$paragaphCensored = str_replace($wordToReplace, $wordToUse, $paragraph);

?>


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
            <?php echo $paragraph; ?>
        </p>
        <h3>Parola da censurare:</h3>
        <p>
            <?php echo $wordToReplace; ?>
        </p>
        <h3>Paragrafo con parola censurata:</h3>
        <p>
            <?php echo $paragaphCensored; ?>
        </p>
    </div>

</body>

</html>