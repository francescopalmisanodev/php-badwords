<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>

<body>
    <p>
        <?php
        $paragraph = "Ciao utente, come va?";
        echo ($paragraph);
        echo (strlen($paragraph));
        $badWord = $_GET["badWord"];
        $paragraph = str_replace($badWord, "***", $paragraph);
        echo ($paragraph);
        echo (strlen($paragraph));
        ?>
    </p>
</body>

</html>