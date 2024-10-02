<?php
include "_autoload.php";

$oc_id = Gral::getVars(2, 'oc_id', 0);
$pde_oc = new PdeOc();
if ($pde_oc != 0) {
    $pde_oc = PdeOc::getOxId($oc_id);
}
$pde_oc->setPdeOcLeido();
//$pde_oc->setPdeOcDestinatarios();

$pde_oc_estados = $pde_oc->getPdeOcEstados();
$pde_oc_estados_recepcions = $pde_oc->getPdeOcEstadoRecepcions();
$pde_oc_estados_facturacions = $pde_oc->getPdeOcEstadoFacturacions();
$pde_recepcions = $pde_oc->getPdeRecepcions();

$pde_oc_destinatarios = $pde_oc->getPdeOcDestinatarios();
//Gral::prr($pde_oc_destinatarios);
//exit;
?>
<div class="tabs">
    <?php include "pde_oc_gestion_modal_top.php" ?>   
    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>
        <li><a href="#tab_estados"><?php Lang::_lang('Estados de la OC') ?></a></li>        
        <li><a href="#tab_estados_recepcion"><?php Lang::_lang('Estados de Recepcion') ?></a></li>        
        <li><a href="#tab_estados_facturacion"><?php Lang::_lang('Estados de Facturacion') ?></a></li>        
        <li><a href="#tab_recepciones"><?php Lang::_lang('Recepciones') ?></a></li>        
        <li><a href="#tab_destinatarios"><?php Lang::_lang('Destinatarios') ?></a></li>        
    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_oc_ficha_general.php" ?>
    </div>

    <!-- Tab Estados -->
    <div id="tab_estados" class="datos">
        <?php include "modal_oc_ficha_estados.php" ?>
    </div>

    <!-- Tab Estados Recepcion -->
    <div id="tab_estados_recepcion" class="datos">
        <?php include "modal_oc_ficha_estados_recepcion.php" ?>
    </div>

    <!-- Tab Estados Facturacion -->
    <div id="tab_estados_facturacion" class="datos">
        <?php include "modal_oc_ficha_estados_facturacion.php" ?>
    </div>
    
    <!-- Tab Recepciones -->
    <div id="tab_recepciones" class="datos">
        <?php include "modal_oc_ficha_recepciones.php" ?>
    </div>        

    <!-- Tab Destintarios -->
    <div id="tab_destinatarios" class="datos">
        <?php include "modal_oc_ficha_destinatarios.php" ?>
    </div>        
    
</div>