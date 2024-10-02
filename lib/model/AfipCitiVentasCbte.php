<?php 
require_once "base/BAfipCitiVentasCbte.php"; 
class AfipCitiVentasCbte extends BAfipCitiVentasCbte
{
    
    /*
     * @creado_por Esteban Martinez
     * @creado 10/10/2018
     */
    public function setVtaComprobante($vta_comprobante)
    {
        $clase = get_class($vta_comprobante);
        
        if($clase == 'VtaFactura')
        {
            $this->setVtaFacturaId($vta_comprobante->getId());
        }
        elseif($clase == 'VtaNotaCredito')
        {
            $this->setVtaNotaCreditoId($vta_comprobante->getId());
        }
        elseif($clase == 'VtaNotaDebito')
        {
            $this->setVtaNotaDebitoId($vta_comprobante->getId());
        }
    } 
}
?>