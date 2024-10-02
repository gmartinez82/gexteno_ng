<?php 
require_once "base/BGralEmpresa.php"; 
class GralEmpresa extends BGralEmpresa
{
    static function getGralEmpresaPorDefault(){
        return GralEmpresa::getOxId(1);
    }

    /**
     * 
     */
    public function getRuc(){
        return $this->getCuit();
    }
    
    /**
     * 
     */
    public function getRucNumero(){
        $arr = explode('-', $this->getCuit());
        return $arr[0];
    }
    
    /**
     * 
     */
    public function getRucDV(){
        $arr = explode('-', $this->getCuit());
        return $arr[1];        
    }
}
?>