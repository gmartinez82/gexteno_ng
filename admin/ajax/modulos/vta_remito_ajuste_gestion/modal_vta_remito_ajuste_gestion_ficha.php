<?php
include "_autoload.php";

$vta_remito_ajuste_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_ajuste_id', 0);
$vta_remito_ajuste = VtaRemitoAjuste::getOxId($vta_remito_ajuste_id);

?>


<div class="tabs ficha-remito" vta_remito_ajuste_id="<?php echo $vta_remito_ajuste->getId(); ?>">
    
    <?php include "modal_vta_remito_ajuste_gestion_ficha_top.php" ?>

    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>
        <?php if ((int) $vta_remito_ajuste->getId() != 0): ?>
            <?php if ((int) $vta_remito_ajuste->getCliClienteId() != 0): ?>
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
                <a href="#tab_orden_venta">
                    <?php Lang::_lang('Ordenes de Venta') ?>
                </a>
            </li>

        <?php endif; ?>
    </ul>


    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_vta_remito_ajuste_gestion_ficha_tab_general.php"; ?>  
    </div>
    
    <!-- Tab Cliente -->
    <?php if ((int) $vta_remito_ajuste->getCliClienteId() != 0): ?>
        <div id="tab_cliente" class="datos">
            <?php include "modal_vta_remito_ajuste_gestion_ficha_tab_cliente.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Estados -->
    <?php if ((int) $vta_remito_ajuste->getId() != 0): ?>
        <div id="tab_estados" class="datos">
            <?php include "modal_vta_remito_ajuste_gestion_ficha_tab_estados.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Email -->
    <?php if ((int) $vta_remito_ajuste->getId() != 0): ?>
        <div id="tab_emails" class="datos">
            <?php include "modal_vta_remito_ajuste_gestion_ficha_tab_email.php"; ?>  
        </div>
    <?php endif; ?>
    
    <!-- Tab Ordenes de Venta -->
    <?php if ((int) $vta_remito_ajuste->getId() != 0): ?>
        <div id="tab_orden_venta" class="datos">
            <?php include "modal_vta_remito_ajuste_gestion_ficha_tab_orden_venta.php"; ?>  
        </div>
    <?php endif; ?>


</div>