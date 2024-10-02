<?php
include "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$fnd_caja_id = Gral::getVars(Gral::VARS_GET, 'fnd_caja_id', 0);
$fnd_caja = FndCaja::getOxId($fnd_caja_id);

$fnd_caja_estados = $fnd_caja->getFndCajaEstados();

$vta_recibos = $fnd_caja->getVtaRecibosActivos();
$vta_recibos_inactivos = $fnd_caja->getVtaRecibosInactivos();
$vta_ajuste_habers = $fnd_caja->getVtaAjusteHabersActivos();
$vta_ajuste_habers_inactivos = $fnd_caja->getVtaAjusteHabersInactivos();

$pde_recibos = $fnd_caja->getPdeRecibosActivos();
$pde_orden_pagos = $fnd_caja->getPdeOrdenPagosActivos();
$fnd_caja_ingresos = $fnd_caja->getFndCajaIngresosActivos();
$fnd_caja_egresos = $fnd_caja->getFndCajaEgresosActivos();
$fnd_caja_tipo_estado = $fnd_caja->getFndCajaTipoEstado();

$fnd_caja_movimientos_origen = $fnd_caja->getMovimientosCaja('origen', false);
$fnd_caja_movimientos_destino = $fnd_caja->getMovimientosCaja('destino', false);
?>

<div class="tabs ficha-caja" fnd_caja_id="<?php echo $fnd_caja->getId(); ?>">
    <?php include "modal_fnd_caja_gestion_ficha_top.php" ?>
    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>

        <li>
            <a href="#tab_estados">
                <?php Lang::_lang('Estados') ?> <?php echo (count($fnd_caja_estados) > 0) ? '('. count($fnd_caja_estados).')' : '' ?>
            </a>
        </li>

        <li>
            <a href="#tab_cobros">
                <?php Lang::_lang('Cobros') ?> <?php echo (count($vta_recibos) > 0) ? '('. count($vta_recibos).')' : '' ?>
            </a>
        </li>

        <?php if(count($vta_recibos_inactivos) > 0){ ?>
        <li>
            <a href="#tab_cobros_inactivos">
                <?php Lang::_lang('Cobros Anulados') ?> <?php echo (count($vta_recibos_inactivos) > 0) ? '('. count($vta_recibos_inactivos).')' : '' ?>
            </a>
        </li>
        <?php } ?>
        
        <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ALCANCE_VTA_AJUSTES')) { ?>
        <li>
            <a href="#tab_ajustes_haber">
                <?php Lang::_lang('Ajustes de Habers') ?> <?php echo (count($vta_ajuste_habers) > 0) ? '('. count($vta_ajuste_habers).')' : '' ?>
            </a>
        </li>
        
            <?php if(count($vta_ajuste_habers_inactivos) > 0){ ?>
            <li>
                <a href="#tab_ajustes_haber_inactivos">
                    <?php Lang::_lang('Ajustes de Habers Anulados') ?> <?php echo (count($vta_ajuste_habers_inactivos) > 0) ? '('. count($vta_ajuste_habers_inactivos).')' : '' ?>
                </a>
            </li>
            <?php } ?>
        
        <?php } ?>
        
        
        <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ALCANCE_PAGO_PROVEEDORES')) { ?>
            <li>
                <a href="#tab_pagos">
                    <?php Lang::_lang('Pagos') ?> <?php echo (count($pde_recibos) > 0) ? '('. count($pde_recibos).')' : '' ?>
                </a>
            </li>

            <li>
                <a href="#tab_ordenes_pago">
                    <?php Lang::_lang('Ordenes de Pago') ?> <?php echo (count($pde_orden_pagos) > 0) ? '('. count($pde_orden_pagos).')' : '' ?>
                </a>
            </li>
        <?php } ?>

        <li>
            <a href="#tab_ingresos">
                <?php Lang::_lang('Ingresos') ?> <?php echo (count($fnd_caja_ingresos) > 0) ? '('. count($fnd_caja_ingresos).')' : '' ?>
            </a>
        </li>

        <li>
            <a href="#tab_egresos">
                <?php Lang::_lang('Egresos') ?> <?php echo (count($fnd_caja_egresos) > 0) ? '('. count($fnd_caja_egresos).')' : '' ?>
            </a>
        </li>

        <?php if (false) { ?>
            <li>
                <a href="#tab_movimientos">
                    <?php Lang::_lang('Movimientos') ?>
                </a>
            </li>
        <?php } ?>

    </ul>


    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_fnd_caja_gestion_ficha_tab_general.php"; ?>  
    </div>

    <!-- Tab Estados -->
    <div id="tab_estados" class="datos">
        <?php include "modal_fnd_caja_gestion_ficha_tab_estados.php"; ?>  
    </div>

    <!-- Tab Cobros -->
    <div id="tab_cobros" class="datos">
        <?php include "modal_fnd_caja_gestion_ficha_tab_cobros.php"; ?>  
    </div>

    <?php if(count($vta_recibos_inactivos) > 0){ ?>
        <!-- Tab Cobros Inactivos -->
        <div id="tab_cobros_inactivos" class="datos">
            <?php include "modal_fnd_caja_gestion_ficha_tab_cobros_inactivos.php"; ?>  
        </div>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ALCANCE_VTA_AJUSTES')) { ?>
    <!-- Tab Ajuste Haber -->
    <div id="tab_ajustes_haber" class="datos">
        <?php include "modal_fnd_caja_gestion_ficha_tab_cobros_ajustes_haber.php"; ?>  
    </div>
        <?php if(count($vta_ajuste_habers_inactivos) > 0){ ?>
            <!-- Tab Ajuste Haber Inactivos -->
            <div id="tab_ajustes_haber_inactivos" class="datos">
                <?php include "modal_fnd_caja_gestion_ficha_tab_cobros_ajustes_haber_inactivos.php"; ?>  
            </div>
        <?php } ?>
    <?php } ?>
    
    <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ALCANCE_PAGO_PROVEEDORES')) { ?>
        <!-- Tab Pagos -->
        <div id="tab_pagos" class="datos">
            <?php include "modal_fnd_caja_gestion_ficha_tab_pagos.php"; ?>  
        </div>

        <!-- Tab Ordenes de Pago -->
        <div id="tab_ordenes_pago" class="datos">
            <?php include "modal_fnd_caja_gestion_ficha_tab_ordenes_pago.php"; ?>  
        </div>
    <?php } ?>

    <!-- Tab Ingresos -->
    <div id="tab_ingresos" class="datos">
        <?php include "modal_fnd_caja_gestion_ficha_tab_ingresos.php"; ?>  
    </div>

    <!-- Tab Egresos -->
    <div id="tab_egresos" class="datos">
        <?php include "modal_fnd_caja_gestion_ficha_tab_egresos.php"; ?>  
    </div>

    <?php if (false) { ?>
        <!-- Tab Movimientos -->
        <div id="tab_movimientos" class="datos">
            <?php include "modal_fnd_caja_gestion_ficha_tab_movimientos.php"; ?>  
        </div>
    <?php } ?>

</div>