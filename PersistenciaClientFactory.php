<?php
class PersistenciaClientFactory{
    static function createPersistencia($tipus, $cadena_de_connexio){
        switch(strtolower($tipus)){
            case 'mysql':
                return new PersistenciaClientMySql($cadena_de_connexio);
            default:
                return null;
        }
    }
}
?>