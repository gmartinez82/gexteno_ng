<?php 
require_once "base/BAfipCitiCabecera.php"; 
class AfipCitiCabecera extends BAfipCitiCabecera
{
    private $vta_comprobantes;
    private $pde_comprobantes;
    private $pde_comprobantes_importaciones;
    
    
    public function getVtaComprobantes()
    {
        if($this->vta_comprobantes)
        {
            return $this->vta_comprobantes;
        }
        else
        {
            return array();
        }
    }
    
    public function setVtaComprobantes($v)
    {
        $this->vta_comprobantes = $v;
    }
    
    public function getPdeComprobantes()
    {
        if($this->pde_comprobantes)
        {
            return $this->pde_comprobantes;
        }
        else
        {
            return array();
        }
    }
    
    public function setPdeComprobantes($v)
    {
        $this->pde_comprobantes = $v;
    }


    public function getPdeComprobantesImportaciones()
    {
        if($this->pde_comprobantes_importaciones)
        {
            return $this->pde_comprobantes_importaciones;
        }
        else
        {
            return array();
        }
    }
    
    public function setPdeComprobantesImportaciones($v)
    {
        $this->pde_comprobantes_importaciones = $v;
    }
}
?>