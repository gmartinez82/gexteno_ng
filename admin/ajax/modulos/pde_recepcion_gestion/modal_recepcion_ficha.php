<?php
include "_autoload.php";

$recepcion_id = Gral::getVars(2, 'recepcion_id', 0);
$pde_recepcion = new PdeRecepcion();
if($pde_recepcion != 0){
        $pde_recepcion = PdeRecepcion::getOxId($recepcion_id);
}
$pde_recepcion->setPdeRecepcionLeido();

$pde_oc = $pde_recepcion->getPdeOc();

?>
<div class="datos">

    <?php include "pde_recepcion_gestion_modal_top.php" ?>   

    <div class="par">
    	<div class="label"><?php Lang::_lang('PdeOc') ?></div>
    	<div class="dato"><?php Gral::_echo($pde_oc->getCodigo()) ?></div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('PdeRecepcion') ?></div>
    	<div class="dato"><?php Gral::_echo($pde_recepcion->getCodigo()) ?></div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Insumo') ?></div>
    	<div class="dato"><?php Gral::_echo($pde_recepcion->getInsInsumo()->getDescripcion()) ?></div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Cantidad') ?></div>
    	<div class="dato"><?php Gral::_echo($pde_recepcion->getCantidad()) ?> - (<?php Gral::_echo($pde_oc->getCantidad()) ?>)</div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Importe Unitario') ?></div>
    	<div class="dato"><?php Gral::_echoImp($pde_recepcion->getImporteUnidad()) ?>  - (<?php Gral::_echoImp($pde_oc->getImporteUnidad()) ?>)</div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Importe Total') ?></div>
    	<div class="dato"><?php Gral::_echoImp($pde_recepcion->getImporteTotal()) ?> - (<?php Gral::_echoImp($pde_oc->getImporteTotal()) ?>)</div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Fecha Entrega') ?></div>
    	<div class="dato"><?php Gral::_echo(Gral::getFechaToWeb($pde_recepcion->getFechaEntrega())) ?> - (<?php Gral::_echo(Gral::getFechaToWeb($pde_oc->getVencimiento())) ?>)</div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('PdeCentroRecepcion') ?></div>
    	<div class="dato"><?php Gral::_echo($pde_recepcion->getPdeCentroRecepcion()->getDescripcion()) ?> - (<?php Gral::_echo($pde_oc->getPdeCentroRecepcion()->getDescripcion()) ?>)</div>
    </div>
    
    <div class="par">
    	<div class="label"><?php Lang::_lang('Nro Comprobante') ?></div>
        <div class="dato"><?php Gral::_echo($pde_recepcion->getNroComprobante()) ?></div>
    </div>

</div>