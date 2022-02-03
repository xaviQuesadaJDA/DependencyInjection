<?php
class VisorClientFactory{
    static function createVisor($tipus){
        switch(strtolower($tipus)){
            case 'html':
                return new VisorClientHtml();
            case 'csv':
                return new VisorClientCsv();
            default:
                return null;
        }
    }
}
?>