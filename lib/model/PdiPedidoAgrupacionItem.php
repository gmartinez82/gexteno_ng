<?php 
require_once "base/BPdiPedidoAgrupacionItem.php"; 
class PdiPedidoAgrupacionItem extends BPdiPedidoAgrupacionItem
{
    public function getDescripcionFull() {
        $texto = "";

        $pdi_pedido_agrupacion = $this->getPdiPedidoAgrupacion();
        $ins_insumo = $this->getInsInsumo();
        $ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
        $pan_panol_destino = $pdi_pedido_agrupacion->getPanPanolDestinoObj();

        $texto.= $this->getCantidad();
        $texto.= " ";
        $texto.= ($ins_unidad_medida) ? substr($ins_unidad_medida->getDescripcion(), 0, 3) : "";
        $texto.= " (";
        $texto.= $pan_panol_destino->getDescripcion();
        $texto.= ") el ";
        $texto.= Gral::getFechaToWEB($pdi_pedido_agrupacion->getCreado());

        return $texto;
    } 
}
?>