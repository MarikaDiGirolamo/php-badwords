<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <title>php-badwords/response</title>
    <style>
        body{background-color: #222; color: white;}
        label{display: block;}
        .button{margin-top: 1rem;} /*Aggiunto correggendo con Luca*/
    </style>
</head>

<body>
    <?php
    $text = $_POST["text"];
    $no_words = $_POST["badWord"];
    $replace = "*****";
    $censText = str_ireplace($no_words, $replace, $text);
    $length = strlen($censText);
    ?>

    <div class="container">
        <div class="string p-3">
            <h1>Hai scritto: (<?php echo strlen($text) ?>)</h1>
            <p><?php echo $text ?></p> 

            <h2>La Bad Word che hai scelto è:(<?php echo strlen($text) ?>)</h2>
            <p> <?php echo $no_words ?></p>

            <h2>Ho censurato:</h2>
            <p> <?php echo $censText ?></p>

            <h2>La stringa è lunga</h2>
            <p> <?php echo $length ?> caratteri! </p>

            <h2>Bad Word debug:</h2>
            <?php
            var_dump($_POST); //parametro su cui il var dump mi andrà a controllare array e lunghezze delle stringhe /*Aggiunto correggendo con Luca*/
            ?>
        </div>

    </div>

</body>

</html>