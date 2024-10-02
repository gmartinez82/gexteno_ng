<?php
include "_autoload.php";
//Gral::setVerErroresPHP();
$vta_factura_id = Gral::getVars(Gral::VARS_GET, 'vta_factura_id', 0);
$vta_factura = VtaFactura::getOxId($vta_factura_id);

$vta_factura_vta_orden_ventas = $vta_factura->getVtaFacturaVtaOrdenVentas();
$vta_factura_items = $vta_factura->getVtaFacturaItems();
$vta_factura_vta_nota_creditos = $vta_factura->getVtaFacturaVtaNotaCreditos();
$vta_factura_vta_tributos = $vta_factura->getVtaFacturaVtaTributos();

$cntb_diario_asiento = $vta_factura->getCntbDiarioAsiento();
?>

<div class="tabs ficha-factura" vta_factura_id="<?php echo $vta_factura->getId(); ?>">

    <?php include "modal_vta_factura_gestion_ficha_top.php" ?>

    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>
        <?php if ((int) $vta_factura->getCliClienteId() != 0) { ?>
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

        <?php if (count($vta_factura_vta_orden_ventas) > 0) { ?>
            <li>
                <a href="#tab_orden_venta">
                    <?php Lang::_lang('Ordenes de Venta') ?>
                </a>
            </li>
        <?php } ?>

        <?php if (count($vta_factura_items) > 0) { ?>
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

        <?php if (count($vta_factura_vta_nota_creditos) > 0) { ?>
            <li>
                <a href="#tab_nota_credito">
                    <?php Lang::_lang('Notas de Credito') ?>
                </a>
            </li>
        <?php } ?>

        <?php if (count($vta_factura_vta_tributos) > 0) { ?>
            <li>
                <a href="#tab_tributo">
                    <?php Lang::_lang('Tributos e Impuestos') ?>
                </a>
            </li>
        <?php } ?>

        <li>
            <a href="#tab_solicitud_sifen">
                <?php Lang::_lang('Solicitud SIFEN') ?>
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
        <?php include "modal_vta_factura_gestion_ficha_tab_general.php"; ?>  
    </div>

    <!-- Tab Cliente -->
    <?php if ((int) $vta_factura->getCliClienteId() != 0) { ?>
        <div id="tab_cliente" class="datos">
            <?php include "modal_vta_factura_gestion_ficha_tab_cliente.php"; ?>  
        </div>
    <?php } ?>

    <!-- Tab Estados -->
    <div id="tab_estados" class="datos">
        <?php include "modal_vta_factura_gestion_ficha_tab_estados.php"; ?>  
    </div>

    <!-- Tab Email -->
    <div id="tab_emails" class="datos">
        <?php include "modal_vta_factura_gestion_ficha_tab_email.php"; ?>  
    </div>

    <?php if (count($vta_factura_vta_orden_ventas) > 0) { ?>
        <!-- Tab Ordenes de Venta -->
        <div id="tab_orden_venta" class="datos">
            <?php include "modal_vta_factura_gestion_ficha_tab_orden_venta.php"; ?>  
        </div>
    <?php } ?>

    <?php if (count($vta_factura_items) > 0) { ?>
        <!-- Tab Items -->
        <div id="tab_items" class="datos">
            <?php include "modal_vta_factura_gestion_ficha_tab_items.php"; ?>  
        </div>
    <?php } ?>

    <?php if (count($cntb_diario_asientos) > 0) { ?>
        <!-- Tab Asientos -->
        <div id="tab_asientos" class="datos">
            <?php include "modal_vta_factura_gestion_ficha_tab_asientos.php"; ?>  
        </div>
    <?php } ?>

    <?php if (count($vta_factura_vta_nota_creditos) > 0) { ?>
        <!-- Tab Notas de Credito -->
        <div id="tab_nota_credito" class="datos">
            <?php include "modal_vta_factura_gestion_ficha_tab_nota_credito.php"; ?>  
        </div>
    <?php } ?>

    <?php if (count($vta_factura_vta_tributos) > 0) { ?>
        <!-- Tab Tributos -->
        <div id="tab_tributo" class="datos">
            <?php include "modal_vta_factura_gestion_ficha_tab_tributos.php"; ?>  
        </div>
    <?php } ?>

    <!-- Tab Solicitudes SIFEN -->
    <div id="tab_solicitud_sifen" class="datos">
        <?php include "modal_vta_factura_gestion_ficha_tab_solicitud_sifen.php"; ?>  
    </div>
    
    <?php if ($cntb_diario_asiento && $cntb_diario_asiento->getId() != 'null') { ?>
        <!-- Tab ASIENTO -->
        <div id="tab_asiento" class="datos">
            <?php include Gral::getPathAbs()."admin/ajax/modulos/cntb_diario_asiento_gestion/modal_cntb_diario_asiento_gestion_ficha_tab_asiento.php"; ?>  
        </div>
    <?php } ?>

</div>
