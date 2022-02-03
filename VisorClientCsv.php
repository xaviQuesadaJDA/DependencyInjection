<?php
class VisorClientCsv implements iVisorClient{
    public function toString($client){
        $resultat = $client->getDni().', ';
        $resultat .= $client->getNom().', ';
        $resultat .= $client->getCognoms(). PHP_EOL;
        return $resultat;
    }
}
?>