<?php
include "_autoload.php";

$pde_nota_credito_id = Gral::getVars(Gral::VARS_GET, 'pde_nota_credito_id', 0);
$pde_nota_credito = PdeNotaCredito::getOxId($pde_nota_credito_id);

$pde_nota_credito_items = $pde_nota_credito->getPdeNotaCreditoItems();
$pde_nota_credito_pde_tributos = $pde_nota_credito->getPdeNotaCreditoPdeTributos();

$cntb_diario_asiento = $pde_nota_credito->getCntbDiarioAsiento();
?>
<div class="tabs ficha-nota_credito" pde_nota_credito_id="<?php echo $pde_nota_credito->getId(); ?>">
    <?php
    if ((int) $pde_nota_credito->getId() != 0):
        include "modal_pde_nota_credito_gestion_ficha_top.php";
    endif;
    ?>

    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>
        <?php if ((int) $pde_nota_credito->getPrvProveedorId() != 0): ?>
            <li>
                <a href="#tab_cliente">
                    <?php Lang::_lang('Proveedor') ?>
                </a>
            </li>
        <?php endif; ?>

        <li>
            <a href="#tab_estados">
                <?php Lang::_lang('Estados') ?>
            </a>
        </li>

        <li>
            <a href="#tab_items">
                <?php Lang::_lang('Items del Comprobante') ?>
            </a>
        </li>

        <?php if (count($pde_nota_credito_pde_tributos) > 0) { ?>
            <li>
                <a href="#tab_tributo">
                    <?php Lang::_lang('Tributos e Impuestos') ?>
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
        <?php include "modal_pde_nota_credito_gestion_ficha_tab_general.php"; ?>  
    </div>

    <!-- Tab Proveedor -->
    <?php if ((int) $pde_nota_credito->getPrvProveedorId() != 0): ?>
        <div id="tab_cliente" class="datos">
            <?php include "modal_pde_nota_credito_gestion_ficha_tab_cliente.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Estados -->
    <?php if ((int) $pde_nota_credito->getId() != 0): ?>
        <div id="tab_estados" class="datos">
            <?php include "modal_pde_nota_credito_gestion_ficha_tab_estados.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Items -->
    <?php if ((int) $pde_nota_credito->getId() != 0): ?>
        <div id="tab_items" class="datos">
            <?php include "modal_pde_nota_credito_gestion_ficha_tab_items.php"; ?>  
        </div>
    <?php endif; ?>

    <?php if (count($pde_nota_credito_pde_tributos) > 0) { ?>
        <!-- Tab Tributos -->
        <div id="tab_tributo" class="datos">
            <?php include "modal_pde_nota_credito_gestion_ficha_tab_tributos.php"; ?>  
        </div>
    <?php } ?>

    <?php if ($cntb_diario_asiento && $cntb_diario_asiento->getId() != 'null') { ?>
        <!-- Tab Notas de Credito -->
        <div id="tab_asiento" class="datos">
            <?php include Gral::getPathAbs() . "admin/ajax/modulos/cntb_diario_asiento_gestion/modal_cntb_diario_asiento_gestion_ficha_tab_asiento.php"; ?>  
        </div>
    <?php } ?>
        
</div>