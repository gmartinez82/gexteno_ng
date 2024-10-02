<?php
include "_autoload.php";

$pde_orden_pago_id = Gral::getVars(Gral::VARS_GET, 'pde_orden_pago_id', 0);
$pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);

$pde_orden_pago_estados = $pde_orden_pago->getPdeOrdenPagoEstados();
$pde_orden_pago_pde_comprobantes = $pde_orden_pago->getPdeOrdenPagoPdeComprobantes();
$pde_orden_pago_enviados = $pde_orden_pago->getPdeOrdenPagoEnviados();

$pde_orden_pago_gral_forma_pagos = $pde_orden_pago->getPdeOrdenPagoGralFpFormaPagos();
$pde_orden_pago_gral_forma_pago_cheques = $pde_orden_pago->getPdeOrdenPagoGralFpFormaPagoCheques();

$pde_recibo = $pde_orden_pago->getPdeRecibo();
?>

<div class="tabs ficha-orden_pago" pde_orden_pago_id="<?php echo $pde_orden_pago->getId(); ?>">
    <?php include "modal_pde_orden_pago_gestion_ficha_top.php" ?>
    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>
        <?php if ((int) $pde_orden_pago->getPrvProveedorId() != 0) { ?>
            <li>
                <a href="#tab_proveedor">
                    <?php Lang::_lang('Proveedor') ?>
                </a>
            </li>
        <?php } ?>

        <li>
            <a href="#tab_estados">
                <?php Lang::_lang('Estados') ?>
            </a>
        </li>
        
        <li>
            <a href="#tab_emails">
                <?php Lang::_lang('Emails Enviados') ?>
            </a>
        </li>

        <?php if (count($pde_orden_pago_gral_forma_pagos) > 0) { ?>
            <li>
                <a href="#tab_formas_pago">
                    <?php Lang::_lang('Formas de Pago') ?>
                </a>
            </li>
        <?php } ?>
        
        <?php if (count($pde_orden_pago_pde_comprobantes) > 0) { ?>
            <li>
                <a href="#tab_comprobantes">
                    <?php Lang::_lang('Comprobantes') ?>
                </a>
            </li>
        <?php } ?>

    </ul>


    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_pde_orden_pago_gestion_ficha_tab_general.php"; ?>  
    </div>

    <!-- Tab Proveedor -->
    <?php if ((int) $pde_orden_pago->getPrvProveedorId() != 0) { ?>
        <div id="tab_proveedor" class="datos">
            <?php include "modal_pde_orden_pago_gestion_ficha_tab_proveedor.php"; ?>  
        </div>
    <?php } ?>

    <!-- Tab Estados -->
    <div id="tab_estados" class="datos">
        <?php include "modal_pde_orden_pago_gestion_ficha_tab_estados.php"; ?>  
    </div>

    <!-- Tab Email -->
    <div id="tab_emails" class="datos">
        <?php include "modal_pde_orden_pago_gestion_ficha_tab_email.php"; ?>  
    </div>

    <?php if (count($pde_orden_pago_gral_forma_pagos) > 0) { ?>
        <!-- Tab Formas de Pago -->
        <div id="tab_formas_pago" class="datos">
            <?php include "modal_pde_orden_pago_gestion_ficha_tab_formas_pago.php"; ?>  
        </div>
    <?php } ?>
    
    <?php if (count($pde_orden_pago_pde_comprobantes) > 0) { ?>
        <!-- Tab Comprobantes Afectados -->
        <div id="tab_comprobantes" class="datos">
            <?php include "modal_pde_orden_pago_gestion_ficha_tab_comprobantes.php"; ?>  
        </div>
    <?php } ?>


</div>