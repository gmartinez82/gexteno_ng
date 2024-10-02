<?php
include "_autoload.php";

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0);
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);

$vta_presupuesto_estados = $vta_presupuesto->getVtaPresupuestoEstados();
$vta_factura = $vta_presupuesto->getVtaFactura();
if($vta_factura){
    $vta_factura_estados = $vta_factura->getVtaFacturaEstados();
}
?>
<div class="tabs ficha-presupuesto" vta_presupuesto_id="<?php echo $vta_presupuesto->getId(); ?>">
    <?php
    if ((int) $vta_presupuesto->getId() != 0):
        include "modal_vta_presupuesto_gestion_ficha_top.php";
    endif;
    ?>

    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>
        <?php if ((int) $vta_presupuesto->getId() != 0): ?>
            <?php if ((int) $vta_presupuesto->getCliClienteId() != 0) { ?>
                <li>
                    <a href="#tab_cliente">
                        <?php Lang::_lang('Cliente') ?>
                    </a>
                </li>
            <?php } ?>

            <?php if ((int) $vta_presupuesto->getVtaCompradorId() != 0) { ?>
                <li>
                    <a href="#tab_comprador">
                        <?php Lang::_lang('Comprador') ?>
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
                    <?php Lang::_lang('Email') ?>
                </a>
            </li>

            <li>
                <a href="#tab_items">
                    <?php Lang::_lang('Items') ?>
                </a>
            </li>

            <li>
                <a href="#tab_conflicto">
                    <?php Lang::_lang('Conflictos') ?>
                </a>
            </li>

            <li>
                <a href="#tab_cancelado">
                    <?php Lang::_lang('Cancelado') ?>
                </a>
            </li>

        <?php endif; ?>
    </ul>


    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_vta_presupuesto_gestion_ficha_tab_general.php"; ?>  
    </div>
    
    <!-- Tab Cliente -->
    <?php if ((int) $vta_presupuesto->getCliClienteId() != 0): ?>
        <div id="tab_cliente" class="datos">
            <?php include "modal_vta_presupuesto_gestion_ficha_tab_cliente.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Comprador -->
    <?php if ((int) $vta_presupuesto->getVtaCompradorId() != 0): ?>
        <div id="tab_comprador" class="datos">
            <?php include "modal_vta_presupuesto_gestion_ficha_tab_comprador.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Estados -->
    <?php if ((int) $vta_presupuesto->getId() != 0): ?>
        <div id="tab_estados" class="datos">
            <?php include "modal_vta_presupuesto_gestion_ficha_tab_estados.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Email -->
    <?php if ((int) $vta_presupuesto->getId() != 0): ?>
        <div id="tab_emails" class="datos">
            <?php include "modal_vta_presupuesto_gestion_ficha_tab_email.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Items -->
    <?php if ((int) $vta_presupuesto->getId() != 0): ?>
        <div id="tab_items" class="datos">
            <?php include "modal_vta_presupuesto_gestion_ficha_tab_items.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Conflictos -->
    <?php if ((int) $vta_presupuesto->getId() != 0): ?>
        <div id="tab_conflicto" class="datos">
            <?php include "modal_vta_presupuesto_gestion_ficha_tab_conflicto.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Cancelacion -->
    <?php if ((int) $vta_presupuesto->getId() != 0): ?>
        <div id="tab_cancelado" class="datos">
            <?php include "modal_vta_presupuesto_gestion_ficha_tab_cancelado.php"; ?>  
        </div>
    <?php endif; ?>


</div>