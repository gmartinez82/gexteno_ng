<?php
include "_autoload.php";

$vta_factura_id = Gral::getVars(Gral::VARS_GET, 'vta_factura_id', 0);
$vta_factura = VtaFactura::getOxId($vta_factura_id);

$vta_factura_vta_nota_creditos = $vta_factura->getVtaFacturaVtaNotaCreditos(null, null, true);
$vta_factura_vta_nota_creditos_desvinculados = $vta_factura->getVtaFacturaVtaNotaCreditos(null, null, false);

$vta_factura_vta_recibos = $vta_factura->getVtaFacturaVtaRecibos(null, null, true);
$vta_factura_vta_recibos_desvinculados = $vta_factura->getVtaFacturaVtaRecibos(null, null, false);
?>

<div class="tabs ficha-factura" vta_factura_id="<?php echo $vta_factura->getId(); ?>">
    <?php
    if ((int) $vta_factura->getId() != 0):
        include "modal_vta_factura_gestion_ficha_top.php";
    endif;
    ?>

    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>

        <?php if (count($vta_factura_vta_nota_creditos) > 0 || count($vta_factura_vta_recibos) > 0) { ?>
            <li>
                <a href="#tab_comprobantes_vinculados">
                    <?php Lang::_lang('Comprobantes Vinculados') ?>
                </a>
            </li>
        <?php } ?>

        <?php if (count($vta_factura_vta_nota_creditos_desvinculados) > 0 || count($vta_factura_vta_recibos_desvinculados) > 0) { ?>
            <li>
                <a href="#tab_comprobantes_desvinculados">
                    <?php Lang::_lang('Comprobantes Desvinculados') ?>
                </a>
            </li>
        <?php } ?>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_vta_factura_gestion_ficha_tab_general.php"; ?>  
    </div>

    <!-- Tab Comprobantes Vinculado -->
    <?php if (count($vta_factura_vta_nota_creditos) > 0 || count($vta_factura_vta_recibos) > 0) { ?>
        <div id="tab_comprobantes_vinculados" class="datos">
            <?php include "modal_vta_factura_gestion_ficha_tab_comprobantes_vinculado.php"; ?>  
        </div>
    <?php } ?>

    <!-- Tab Comprobantes Desvinculado -->
    <?php if (count($vta_factura_vta_nota_creditos_desvinculados) > 0 || count($vta_factura_vta_recibos_desvinculados) > 0) { ?>
        <div id="tab_comprobantes_desvinculados" class="datos">
            <?php include "modal_vta_factura_gestion_ficha_tab_comprobantes_desvinculado.php"; ?>  
        </div>
    <?php } ?>

</div>