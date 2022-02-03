<?php
class VisorClientHtml implements iVisorClient{
    public function toString($client){
        $resultat = '<div class="client" id="client_'. $client->getDni() .'"><p><strong>Dni:</strong>'.$client->getDni().'</p>';
        $resultat .= '<p><strong>Nom:</strong>'.$client->getNom().'</p>';
        $resultat .= '<p><strong>Cognoms:</strong>'.$client->getCognoms().'</p>';
        $resultat .= '</div>';
        return $resultat;
    }
}
?>