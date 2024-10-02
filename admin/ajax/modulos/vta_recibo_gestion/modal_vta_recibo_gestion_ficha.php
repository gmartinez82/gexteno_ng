<?php
include "_autoload.php";

$vta_recibo_id = Gral::getVars(Gral::VARS_GET, 'vta_recibo_id', 0);
$vta_recibo = VtaRecibo::getOxId($vta_recibo_id);

$cntb_diario_asiento = $vta_recibo->getCntbDiarioAsiento();
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
        <?php if ((int) $vta_recibo->getCliClienteId() != 0): ?>
            <li>
                <a href="#tab_cliente">
                    <?php Lang::_lang('Cliente') ?>
                </a>
            </li>
        <?php endif; ?>

        <li>
            <a href="#tab_estados">
                <?php Lang::_lang('Estados') ?>
            </a>
        </li>

        <li>
            <a href="#tab_emails">
                <?php Lang::_lang('Email') ?>
            </a>
        </li>

        <li>
            <a href="#tab_items">
                <?php Lang::_lang('Items del Recibo') ?>
            </a>
        </li>

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
        <?php include "modal_vta_recibo_gestion_ficha_tab_general.php"; ?>  
    </div>

    <!-- Tab Cliente -->
    <?php if ((int) $vta_recibo->getCliClienteId() != 0): ?>
        <div id="tab_cliente" class="datos">
            <?php include "modal_vta_recibo_gestion_ficha_tab_cliente.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Estados -->
    <?php if ((int) $vta_recibo->getId() != 0): ?>
        <div id="tab_estados" class="datos">
            <?php include "modal_vta_recibo_gestion_ficha_tab_estados.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Email -->
    <?php if ((int) $vta_recibo->getId() != 0): ?>
        <div id="tab_emails" class="datos">
            <?php include "modal_vta_recibo_gestion_ficha_tab_email.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Ordenes de Venta -->
    <?php if ((int) $vta_recibo->getId() != 0): ?>
        <div id="tab_items" class="datos">
            <?php include "modal_vta_recibo_gestion_ficha_tab_items.php"; ?>  
        </div>
    <?php endif; ?>

    <?php if ($cntb_diario_asiento && $cntb_diario_asiento->getId() != 'null') { ?>
        <!-- Tab Notas de Credito -->
        <div id="tab_asiento" class="datos">
            <?php include Gral::getPathAbs() . "admin/ajax/modulos/cntb_diario_asiento_gestion/modal_cntb_diario_asiento_gestion_ficha_tab_asiento.php"; ?>  
        </div>
    <?php } ?>

</div>