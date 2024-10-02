<?php
include "_autoload.php";
//Gral::setVerErroresPHP();
$vta_ajuste_debe_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_debe_id', 0);
$vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);

$vta_ajuste_debe_vta_orden_ventas = $vta_ajuste_debe->getVtaAjusteDebeVtaOrdenVentas();
$vta_ajuste_debe_items = $vta_ajuste_debe->getVtaAjusteDebeItems();
$vta_ajuste_debe_vta_nota_creditos = $vta_ajuste_debe->getVtaAjusteDebeVtaNotaCreditos();
$vta_ajuste_debe_vta_tributos = $vta_ajuste_debe->getVtaAjusteDebeVtaTributos();
$cntb_diario_asiento = $vta_ajuste_debe->getCntbDiarioAsiento();
//Gral::prr($vta_ajuste_debe_vta_nota_creditos);

//$cntb_diario_asientos = $vta_ajuste_debe->getCntbDiarioAsientosXCntbDiarioAsientoVtaAjusteDebe();
//Gral::prr($cntb_diario_asientos);
?>

<div class="tabs ficha-ajuste-debe" vta_ajuste_debe_id="<?php echo $vta_ajuste_debe->getId(); ?>">

    <?php include "modal_vta_ajuste_debe_gestion_ficha_top.php" ?>

    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>
        <?php if ((int) $vta_ajuste_debe->getCliClienteId() != 0) { ?>
            <li>
                <a href="#tab_cliente">
                    <?php Lang::_lang('Cliente') ?>
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

        <?php if (count($vta_ajuste_debe_vta_orden_ventas) > 0) { ?>
            <li>
                <a href="#tab_orden_venta">
                    <?php Lang::_lang('Ordenes de Venta') ?>
                </a>
            </li>
        <?php } ?>

        <?php if (count($vta_ajuste_debe_items) > 0) { ?>
            <li>
                <a href="#tab_items">
                    <?php Lang::_lang('Items del Comprobante') ?>
                </a>
            </li>
        <?php } ?>

        <?php if (count($cntb_diario_asientos) > 0) { ?>
            <li>
                <a href="#tab_asientos">
                    <?php Lang::_lang('Asientos Contables') ?>
                </a>
            </li>
        <?php } ?>

        <?php if (count($vta_ajuste_debe_vta_nota_creditos) > 0) { ?>
            <li>
                <a href="#tab_nota_credito">
                    <?php Lang::_lang('Notas de Credito') ?>
                </a>
            </li>
        <?php } ?>

        <?php if (count($vta_ajuste_debe_vta_tributos) > 0) { ?>
            <li>
                <a href="#tab_tributo">
                    <?php Lang::_lang('Tributos e Impuestos') ?>
                </a>
            </li>
        <?php } ?>

        <li>
            <a href="#tab_solicitud_afip">
                <?php Lang::_lang('Solicitud AFIP') ?>
            </a>
        </li>
        <?php if ($cntb_diario_asiento && $cntb_diario_asiento->getId() != 'null'){ ?>
            <li>
                <a href="#tab_asiento">
                    <?php Lang::_lang('Asiento Contable') ?>
                </a>
            </li>
        <?php } ?>
    </ul>


    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_vta_ajuste_debe_gestion_ficha_tab_general.php"; ?>  
    </div>

    <!-- Tab Cliente -->
    <?php if ((int) $vta_ajuste_debe->getCliClienteId() != 0) { ?>
        <div id="tab_cliente" class="datos">
            <?php include "modal_vta_ajuste_debe_gestion_ficha_tab_cliente.php"; ?>  
        </div>
    <?php } ?>

    <!-- Tab Estados -->
    <div id="tab_estados" class="datos">
        <?php include "modal_vta_ajuste_debe_gestion_ficha_tab_estados.php"; ?>  
    </div>

    <!-- Tab Email -->
    <div id="tab_emails" class="datos">
        <?php include "modal_vta_ajuste_debe_gestion_ficha_tab_email.php"; ?>  
    </div>

    <?php if (count($vta_ajuste_debe_vta_orden_ventas) > 0) { ?>
        <!-- Tab Ordenes de Venta -->
        <div id="tab_orden_venta" class="datos">
            <?php include "modal_vta_ajuste_debe_gestion_ficha_tab_orden_venta.php"; ?>  
        </div>
    <?php } ?>

    <?php if (count($vta_ajuste_debe_items) > 0) { ?>
        <!-- Tab Items -->
        <div id="tab_items" class="datos">
            <?php include "modal_vta_ajuste_debe_gestion_ficha_tab_items.php"; ?>  
        </div>
    <?php } ?>

    <?php if (count($cntb_diario_asientos) > 0) { ?>
        <!-- Tab Asientos -->
        <div id="tab_asientos" class="datos">
            <?php include "modal_vta_ajuste_debe_gestion_ficha_tab_asientos.php"; ?>  
        </div>
    <?php } ?>

    <?php if (count($vta_ajuste_debe_vta_nota_creditos) > 0) { ?>
        <!-- Tab Notas de Credito -->
        <div id="tab_nota_credito" class="datos">
            <?php include "modal_vta_ajuste_debe_gestion_ficha_tab_nota_credito.php"; ?>  
        </div>
    <?php } ?>

    <?php if (count($vta_ajuste_debe_vta_tributos) > 0) { ?>
        <!-- Tab Tributos -->
        <div id="tab_tributo" class="datos">
            <?php include "modal_vta_ajuste_debe_gestion_ficha_tab_tributos.php"; ?>  
        </div>
    <?php } ?>

    <!-- Tab Notas de Credito -->
    <div id="tab_solicitud_afip" class="datos">
        <?php include "modal_vta_ajuste_debe_gestion_ficha_tab_solicitud_afip.php"; ?>  
    </div>

    <?php if ($cntb_diario_asiento && $cntb_diario_asiento->getId() != 'null') { ?>
        <!-- Tab Notas de Credito -->
        <div id="tab_asiento" class="datos">
            <?php include "modal_vta_ajuste_debe_gestion_ficha_tab_asiento.php"; ?>  
        </div>
    <?php } ?>
</div>