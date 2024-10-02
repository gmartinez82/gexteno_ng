<?php
include_once '_autoload.php';

include 'pdf_pdi_pedido_agrupacion_gestion_plantilla.php';

$pdf->Output($pdi_pedido_agrupacion->getNombreArchivoAdjuntoPedidoAgrupacion(), 'I');
?>