<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint ipsa in ab? Perferendis id doloremque, officiis cupiditate vero iusto, sed, quis voluptates suscipit delectus illo. Nobis quam ipsa distinctio nulla?";
    ?>

    <h2>Stampo la stringa in un paragrafo</h2>
    <p>
        <?php
        echo $lorem;
        ?>
    </p>

    <h2>Divido la stringa in base al delimitatore con explode</h2>
    <p>
        <?php
        $lorem_explode = explode(" ", $lorem);
        // echo $lorem_explode;
        // echo "<pre>";
        var_dump($lorem_explode);
        // echo "</pre>";
        ?>
    </p>

    <h2>Sostituizione di una sottostringa con replace</h2>
    <p>
        <?php
        $new_lorem = str_replace("ipsum", "Davide", $lorem);
        echo $new_lorem;
        ?>
    </p>

    <h2>Lunghezza della stringa</h2>
    <p>
        <?php
        $lorem_length = strlen($lorem);
        echo "La stringa è lunga " . $lorem_length . " caratteri";
        ?>
    </p>

    <h2>Cerca la posizione di una sottostringa</h2>
    <p>
        <?php
        $ipsum_pos = strpos($lorem, "ipsum");
        echo "Ipsum si trova in posizione " . $ipsum_pos;
        ?>
    </p>

    <h2>Trasformo lorem in uppercase</h2>
    <p>
        <?php
        $uppercaseLorem = ucwords($lorem);
        echo $uppercaseLorem;
        ?>
    </p>

</body>

</html>