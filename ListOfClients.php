<?php
        require_once('Client.php');
        $visor = new VisorClientCsv();
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