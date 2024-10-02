<?php
include "_autoload.php";

$pde_factura_id = Gral::getVars(Gral::VARS_GET, 'pde_factura_id', 0);
$pde_factura = PdeFactura::getOxId($pde_factura_id);

$pde_factura_pde_ocs = $pde_factura->getPdeFacturaPdeOcs();
$pde_factura_items = $pde_factura->getPdeFacturaItems();
$pde_factura_pde_tributos = $pde_factura->getPdeFacturaPdeTributos();
$pde_factura_pde_nota_creditos = $pde_factura->getPdeFacturaPdeNotaCreditos();

$cntb_diario_asiento = $pde_factura->getCntbDiarioAsiento();
?>
<div class="tabs ficha-factura" pde_factura_id="<?php echo $pde_factura->getId(); ?>">
    <?php include "modal_pde_factura_gestion_ficha_top.php" ?>
    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>
        <?php if ((int) $pde_factura->getPrvProveedorId() != 0) { ?>
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

        <?php if (count($pde_factura_pde_ocs) > 0) { ?>
            <li>
                <a href="#tab_oc">
                    <?php Lang::_lang('Ordenes de Compra') ?>
                </a>
            </li>
        <?php } ?>

        <?php if (count($pde_factura_items) > 0) { ?>
            <li>
                <a href="#tab_item">
                    <?php Lang::_lang('Items del Comprobante') ?>
                </a>
            </li>
        <?php } ?>
            
        <?php if (count($pde_factura_pde_tributos) > 0) { ?>
            <li>
                <a href="#tab_tributo">
                    <?php Lang::_lang('Tributos e Impuestos') ?>
                </a>
            </li>
        <?php } ?>

        <?php if (count($pde_factura_pde_nota_creditos) > 0) { ?>
            <li>
                <a href="#tab_nota_credito">
                    <?php Lang::_lang('Notas de Credito') ?>
                </a>
            </li>
        <?php } ?>

        <?php if ($cntb_diario_asiento && $cntb_diario_asiento->getId() != 'null') { ?>
            <li>
                <a href="#tab_asiento">
                    <?php Lang::_lang('Asiento Contable') ?>
                </a>
            </li>
        <?php } ?>
            
    </ul>


    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_pde_factura_gestion_ficha_tab_general.php"; ?>  
    </div>

    <!-- Tab Proveedor -->
    <?php if ((int) $pde_factura->getPrvProveedorId() != 0) { ?>
        <div id="tab_proveedor" class="datos">
            <?php include "modal_pde_factura_gestion_ficha_tab_proveedor.php"; ?>  
        </div>
    <?php } ?>

    <!-- Tab Estados -->
    <div id="tab_estados" class="datos">
        <?php include "modal_pde_factura_gestion_ficha_tab_estados.php"; ?>  
    </div>

    <?php if (count($pde_factura_pde_ocs) > 0) { ?>
        <!-- Tab Ordenes de Venta -->
        <div id="tab_oc" class="datos">
            <?php include "modal_pde_factura_gestion_ficha_tab_oc.php"; ?>  
        </div>
    <?php } ?>

    <?php if (count($pde_factura_items) > 0) { ?>
        <!-- Tab Items -->
        <div id="tab_item" class="datos">
            <?php include "modal_pde_factura_gestion_ficha_tab_items.php"; ?>  
        </div>
    <?php } ?>

    <?php if (count($pde_factura_pde_tributos) > 0) { ?>
        <!-- Tab Tributos -->
        <div id="tab_tributo" class="datos">
            <?php include "modal_pde_factura_gestion_ficha_tab_tributos.php"; ?>  
        </div>
    <?php } ?>
        
    <?php if (count($pde_factura_pde_nota_creditos) > 0) { ?>
        <!-- Tab Notas de Credito -->
        <div id="tab_nota_credito" class="datos">
            <?php include "modal_pde_factura_gestion_ficha_tab_nota_credito.php"; ?>  
        </div>
    <?php } ?>

    <?php if ($cntb_diario_asiento && $cntb_diario_asiento->getId() != 'null') { ?>
        <!-- Tab Notas de Credito -->
        <div id="tab_asiento" class="datos">
            <?php include Gral::getPathAbs() . "admin/ajax/modulos/cntb_diario_asiento_gestion/modal_cntb_diario_asiento_gestion_ficha_tab_asiento.php"; ?>  
        </div>
    <?php } ?>

</div>