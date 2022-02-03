<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple d'injecció de dependències</title>
    <style>
        .client{
            display: inline-block;
            border-style: solid;
            border-width: 2px;
            border-radius: 5px;
            background-color: lightgray;
            padding: 5px;
            margin: 10px;
            min-width: 15%;
        }
    </style>
</head>
<body>
    <?php
        require_once('Client.php');
        $visor = new VisorClientHtml();
        $client = new Client($visor);
        $client->setNom("Xavi");
        $client->setCognoms("Quesada");
        $client->setDni("12345678A");
        echo $client->toString();
        $client->setNom("Anna");
        $client->setCognoms("Lea");
        $client->setDni("22345678A");
        echo $client->toString();
        $client->setNom("Cristian");
        $client->setCognoms("Montañés");
        $client->setDni("32345678A");
        echo $client->toString();
    ?>
</body>
</html>