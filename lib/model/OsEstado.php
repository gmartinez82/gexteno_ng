<?php 
require_once "base/BOsEstado.php"; 
class OsEstado extends BOsEstado
{
    /**
     * 
     * @return type
     * @creado_por Esteban Martinez
     * @creado 15/11/2016
     */
    public function getDescripcion()
    {
        return $this->getOsTipoEstado()->getDescripcion();
    }
}
?>