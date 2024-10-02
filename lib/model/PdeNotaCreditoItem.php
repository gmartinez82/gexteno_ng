<?php 
require_once "base/BPdeNotaCreditoItem.php"; 
class PdeNotaCreditoItem extends BPdeNotaCreditoItem
{
    public function getImporteTotal() {
        $importe = $this->getImporteUnitario() * $this->getCantidad();
        return Gral::rnd($importe);
    }
    
    public function getImporteIva() {
        $gral_tipo_iva = $this->getGralTipoIva();
        $valor_iva = $gral_tipo_iva->getValorIva();
        $coeficiente_iva = $valor_iva / 100;

        // se obtiene el importe total incluido en la nota de credito
        $importe = $this->getImporteTotal() * $coeficiente_iva;
        return Gral::rnd($importe);
    }
    
}
?>