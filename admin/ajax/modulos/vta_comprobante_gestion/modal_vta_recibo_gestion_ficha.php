<?php
include "_autoload.php";

$vta_recibo_id = Gral::getVars(Gral::VARS_GET, 'vta_recibo_id', 0);
$vta_recibo = VtaRecibo::getOxId($vta_recibo_id);

$vta_nota_debito_vta_recibos = $vta_recibo->getVtaNotaDebitoVtaRecibos(null, null, true);
$vta_factura_vta_recibos = $vta_recibo->getVtaFacturaVtaRecibos(null, null, true);
?>


<div class="tabs ficha-recibo" vta_recibo_id="<?php echo $vta_recibo->getId(); ?>">
    <?php
    if ((int) $vta_recibo->getId() != 0):
        include "modal_vta_recibo_gestion_ficha_top.php";
    endif;
    ?>

    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>
        <?php if ((int) $vta_recibo->getId() != 0): ?>
            <li>
                <a href="#tab_comprobantes_vinculado">
                    <?php Lang::_lang('Comprobantes Vinculados') ?>
                </a>
            </li>
        <?php endif; ?>
    </ul>


    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_vta_recibo_gestion_ficha_tab_general.php"; ?>  
    </div>

    <!-- Tab Comprobantes Vinculado -->
    <?php if ((int) $vta_recibo->getId() != 0): ?>
        <div id="tab_comprobantes_vinculado" class="datos">
            <?php include "modal_vta_recibo_gestion_ficha_tab_comprobantes_vinculado.php"; ?>  
        </div>
    <?php endif; ?>


</div>