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
            <h1>Hai scritto: <?php echo $text ?></h1>

            <h2>La Bad Word che hai scelto è: <?php echo $no_words ?></h2>

            <h2>Ho censurato: <?php echo $censText ?></h2>

            <h2>La stringa è lunga <?php echo $length ?> caratteri! </h2>
        </div>

    </div>

</body>

</html>