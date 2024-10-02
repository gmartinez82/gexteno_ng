<?php 
require_once "base/BAfipCitiComprasImportaciones.php"; 
class AfipCitiComprasImportaciones extends BAfipCitiComprasImportaciones
{
    /*
     * @creado_por Esteban Martinez
     * @creado 10/10/2018
     */
    public function setPdeComprobante($pde_comprobante)
    {
        $clase = get_class($pde_comprobante);
        if($clase == 'PdeFactura')
        {
            $this->setPdeFacturaId($pde_comprobante->getId());
        }
        elseif($clase == 'PdeNotaCredito')
        {
            $this->setPdeNotaCreditoId($pde_comprobante->getId());
        }
        elseif($clase == 'PdeNotaDebito')
        {
            $this->setPdeNotaDebitoId($pde_comprobante->getId());
        }
    } 
}
?>