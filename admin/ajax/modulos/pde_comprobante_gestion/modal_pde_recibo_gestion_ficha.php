<?php
include "_autoload.php";

$pde_recibo_id = Gral::getVars(Gral::VARS_GET, 'pde_recibo_id', 0);
$pde_recibo = PdeRecibo::getOxId($pde_recibo_id);

$pde_nota_debito_pde_recibos = $pde_recibo->getPdeNotaDebitoPdeRecibos(null, null, true);
$pde_factura_pde_recibos = $pde_recibo->getPdeFacturaPdeRecibos(null, null, true);

$pde_recibo_items = $pde_recibo->getPdeReciboItems();
?>


<div class="tabs ficha-recibo" pde_recibo_id="<?php echo $pde_recibo->getId(); ?>">
    <?php
    if ((int) $pde_recibo->getId() != 0):
        include "modal_pde_recibo_gestion_ficha_top.php";
    endif;
    ?>

    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>

        <li>
            <a href="#tab_items">
                <?php Lang::_lang('Items del Recibo') ?>
            </a>
        </li>

        <?php if ((int) $pde_recibo->getId() != 0): ?>
            <li>
                <a href="#tab_comprobantes_vinculado">
                    <?php Lang::_lang('Comprobantes Vinculados') ?>
                </a>
            </li>
        <?php endif; ?>
    </ul>


    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_pde_recibo_gestion_ficha_tab_general.php"; ?>  
    </div>

    <!-- Tab Items -->
    <?php if ((int) $pde_recibo->getId() != 0): ?>
        <div id="tab_items" class="datos">
            <?php include "modal_pde_recibo_gestion_ficha_tab_items.php"; ?>  
        </div>
    <?php endif; ?>
        
    <!-- Tab Comprobantes Vinculado -->
    <?php if ((int) $pde_recibo->getId() != 0): ?>
        <div id="tab_comprobantes_vinculado" class="datos">
            <?php include "modal_pde_recibo_gestion_ficha_tab_comprobantes_vinculado.php"; ?>  
        </div>
    <?php endif; ?>


</div>