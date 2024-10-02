<?php 
require_once "base/BCliCategoria.php"; 
class CliCategoria extends BCliCategoria
{
    //const CATEGORIA_MAYORISTA = 'MAYORISTA';
    //const CATEGORIA_MINORISTA = 'MINORISTA';
    const CATEGORIA_CONSUMIR_FINAL = 'CONSUMIR_FINAL'; 
    
    
    public function getEsMayorista(){
        switch ($this->getCodigo()){
            case self::CATEGORIA_CONSUMIR_FINAL: 
                return false;
                break;
            default:
                return true;
        }
        
        return false;
    }
    
    
}
?>