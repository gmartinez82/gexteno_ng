<?php 
require_once "base/BPdeReciboItem.php"; 
class PdeReciboItem extends BPdeReciboItem
{
    public function getImporteTotal() {
        $importe = $this->getImporteUnitario() * $this->getCantidad();
        return Gral::rnd($importe);
    }
    
    public function getImporteIva() {
        $gral_tipo_iva = $this->getGralTipoIva();
        $valor_iva = $gral_tipo_iva->getValorIva();
        $coeficiente_iva = $valor_iva / 100;

        // se obtiene el importe total incluido en la nota de debito
        $importe = $this->getImporteTotal() * $coeficiente_iva;
        return Gral::rnd($importe);
    }
}
?>