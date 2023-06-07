<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>php-badwords</title>
</head>

<body>
    <main>
        <?php
        // $text = "La forza è potente in te";
        // $no_words = ["forza", "potente"];
        // $string = "*****";
        ?>

        <div class="container p-4 text-center">
            <h1> Inserisci la parola che vuoi censurare</h1>
            <div class="form">
                <form class="p-3" action="response.php" method="POST">
                    <input type="text" name="text" placeholder="Write Something...">
                    <input type="text" name="badWord" placeholder="Write your bad word...">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </main>


</body>

</html>