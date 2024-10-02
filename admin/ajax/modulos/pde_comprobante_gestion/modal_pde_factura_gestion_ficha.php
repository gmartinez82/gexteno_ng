<?php
include "_autoload.php";

$pde_factura_id = Gral::getVars(Gral::VARS_GET, 'pde_factura_id', 0);
$pde_factura = PdeFactura::getOxId($pde_factura_id);

$pde_factura_pde_nota_creditos = $pde_factura->getPdeFacturaPdeNotaCreditos(null, null, true);
$pde_factura_pde_nota_creditos_desvinculados = $pde_factura->getPdeFacturaPdeNotaCreditos(null, null, false);

$pde_factura_pde_recibos = $pde_factura->getPdeFacturaPdeRecibos(null, null, true);
$pde_factura_pde_recibos_desvinculados = $pde_factura->getPdeFacturaPdeRecibos(null, null, false);

$pde_factura_pde_ocs = $pde_factura->getPdeFacturaPdeOcs();
$pde_factura_items = $pde_factura->getPdeFacturaItems();
?>


<div class="tabs ficha-factura" pde_factura_id="<?php echo $pde_factura->getId(); ?>">
    <?php
    if ((int) $pde_factura->getId() != 0):
        include "modal_pde_factura_gestion_ficha_top.php";
    endif;
    ?>

    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
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
        
        <?php if (count($pde_factura_pde_nota_creditos) > 0 || count($pde_factura_pde_recibos) > 0) { ?>
            <li>
                <a href="#tab_comprobantes_vinculados">
                    <?php Lang::_lang('Comprobantes Vinculados') ?>
                </a>
            </li>
        <?php } ?>

        <?php if (count($pde_factura_pde_nota_creditos_desvinculados) > 0 || count($pde_factura_pde_recibos_desvinculados) > 0) { ?>
            <li>
                <a href="#tab_comprobantes_desvinculados">
                    <?php Lang::_lang('Comprobantes Desvinculados') ?>
                </a>
            </li>
        <?php } ?>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_pde_factura_gestion_ficha_tab_general.php"; ?>  
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

    <!-- Tab Comprobantes Vinculado -->
    <?php if (count($pde_factura_pde_nota_creditos) > 0 || count($pde_factura_pde_recibos) > 0) { ?>
        <div id="tab_comprobantes_vinculados" class="datos">
            <?php include "modal_pde_factura_gestion_ficha_tab_comprobantes_vinculado.php"; ?>  
        </div>
    <?php } ?>

    <!-- Tab Comprobantes Desvinculado -->
    <?php if (count($pde_factura_pde_nota_creditos_desvinculados) > 0 || count($pde_factura_pde_recibos_desvinculados) > 0) { ?>
        <div id="tab_comprobantes_desvinculados" class="datos">
            <?php include "modal_pde_factura_gestion_ficha_tab_comprobantes_desvinculado.php"; ?>  
        </div>
    <?php } ?>

</div>