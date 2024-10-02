<?php
include "_autoload.php";

$pde_oc_agrupacion_id = Gral::getVars(2, 'pde_oc_agrupacion_id', 0);
$pde_oc_agrupacion = new PdeOcAgrupacion();
if ($pde_oc_agrupacion != 0) {
    $pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);
}

$pde_oc_agrupacion_estados = $pde_oc_agrupacion->getPdeOcAgrupacionEstados();
$pde_ocs = $pde_oc_agrupacion->getPdeOcs();
$pde_oc_agrupacion_items = $pde_oc_agrupacion->getPdeOcAgrupacionItems();

$pde_oc_agrupacion_tipo_estado = $pde_oc_agrupacion->getPdeOcAgrupacionTipoEstado();
?>
<div class="tabs">
    <?php include "pde_oc_agrupacion_modal_top.php" ?>   
    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>
        <li><a href="#tab_estados"><?php Lang::_lang('Estados de la AOC') ?></a></li>        
        
        <?php if ($pde_oc_agrupacion_tipo_estado->getCodigo() == PdeOcAgrupacionTipoEstado::TIPO_ESTADO_GENERADO) { ?>
            <li><a href="#tab_oc_agrupacion_items"><?php Lang::_lang('Items Temporales') ?></a></li>        
        <?php } else { ?>
            <li><a href="#tab_ocs"><?php Lang::_lang('Ordenes de Compra') ?></a></li>        
        <?php } ?>
    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_oc_ficha_general.php" ?>
    </div>

    <!-- Tab Estados -->
    <div id="tab_estados" class="datos">
        <?php include "modal_oc_ficha_estados.php" ?>
    </div>        

    <?php if ($pde_oc_agrupacion_tipo_estado->getCodigo() == PdeOcAgrupacionTipoEstado::TIPO_ESTADO_GENERADO) { ?>
        <!-- Tab Items Temporales -->
        <div id="tab_oc_agrupacion_items" class="datos">
            <?php include "modal_oc_ficha_oc_agrupacion_items.php" ?>
        </div>            
    <?php } else { ?>
        <!-- Tab OCs -->
        <div id="tab_ocs" class="datos">
            <?php include "modal_oc_ficha_ocs.php" ?>
        </div>            
    <?php } ?>

</div>