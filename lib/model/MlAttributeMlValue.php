<?php 
require_once "base/BMlAttributeMlValue.php"; 
class MlAttributeMlValue extends BMlAttributeMlValue
{
    public function getDescripcion() {
        $texto = '';
        $texto.= $this->getMlAttribute()->getDescripcion();
        $texto.= ' - ';
        $texto.= $this->getMlValue()->getDescripcion();
        
        return $texto;
    }
}
?>