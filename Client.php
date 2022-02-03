<?php
require_once('iVisorClient.php');
require_once('VisorClientHtml.php');
require_once('VisorClientCsv.php');
require_once('VisorClientFactory.php');

class Client{
    private $dni;
    private $nom;
    private $cognoms;
    private $puntsFidelitat;
    private $visor;

    public function __construct($visor)
	{
		$this->puntsFidelitat = 0;
        $this->visor = $visor;
	}

    // Getters
    public function getDni(){
        return $this->dni;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getCognoms(){
        return $this->cognoms;
    }
    public function getPuntsFidelitat(){
        return $this->puntsFidelitat;
    }

    // Setters
    public function setDni($value){
        $this->dni = $value;
    }
    public function setNom($value){
        $this->nom = $value;
    }
    public function setCognoms($value){
        $this->cognoms = $value;
    }

    // Public functions
    public function compra(){
        // TODO: omplir el mètode amb les operacions necessàries
        $this->puntsFidelitat += 1;
    }

    public function toString(){
        return $this->visor->toString($this);
    }
}
?>