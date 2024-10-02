<?php
include "_autoload.php";

$vta_orden_venta_id = Gral::getVars(Gral::VARS_GET, 'vta_orden_venta_id', 0);
$vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
?>

<div class="tabs ficha-orden-venta" vta_orden_venta_id="<?php echo $vta_orden_venta->getId(); ?>">
    <?php
    if ((int) $vta_orden_venta->getId() != 0):
        include "modal_vta_orden_venta_gestion_ficha_top.php";
    endif;
    ?>

    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>
        <?php if ((int) $vta_orden_venta->getId() != 0): ?>
            <li>
                <a href="#tab_estados">
                    <?php Lang::_lang('Estados') ?>
                </a>
            </li>
            
            <li>
                <a href="#tab_estados_remision">
                    <?php Lang::_lang('Estados Remision') ?>
                </a>
            </li>
            
            <li>
                <a href="#tab_estados_facturacion">
                    <?php Lang::_lang('Estados Facturacion') ?>
                </a>
            </li>

            <li>
                <a href="#tab_remitos">
                    <?php Lang::_lang('Remitos') ?>
                </a>
            </li>

            <li>
                <a href="#tab_remito_ajustes">
                    <?php Lang::_lang('Remitos Ajuste') ?>
                </a>
            </li>
            
            <li>
                <a href="#tab_facturas">
                    <?php Lang::_lang('Facturas') ?>
                </a>
            </li>

            <li>
                <a href="#tab_ajuste_debes">
                    <?php Lang::_lang('Ajustes Debe') ?>
                </a>
            </li>
            
            <li>
                <a href="#tab_cliente">
                    <?php Lang::_lang('Cliente') ?>
                </a>
            </li>

        <?php endif; ?>
    </ul>


    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_vta_orden_venta_gestion_ficha_tab_general.php"; ?>  
    </div>

    <!-- Tab Estados -->
    <?php if ((int) $vta_orden_venta->getId() != 0): ?>
        <div id="tab_estados" class="datos">
            <?php include "modal_vta_orden_venta_gestion_ficha_tab_estados.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Estados Remision-->
    <?php if ((int) $vta_orden_venta->getId() != 0): ?>
        <div id="tab_estados_remision" class="datos">
            <?php include "modal_vta_orden_venta_gestion_ficha_tab_estados_remision.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Estados Facturacion -->
    <?php if ((int) $vta_orden_venta->getId() != 0): ?>
        <div id="tab_estados_facturacion" class="datos">
            <?php include "modal_vta_orden_venta_gestion_ficha_tab_estados_facturacion.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Remito -->
    <?php if ((int) $vta_orden_venta->getId() != 0): ?>
        <div id="tab_remitos" class="datos">
            <?php include "modal_vta_orden_venta_gestion_ficha_tab_remitos.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Remito Ajuste -->
    <?php if ((int) $vta_orden_venta->getId() != 0): ?>
        <div id="tab_remito_ajustes" class="datos">
            <?php include "modal_vta_orden_venta_gestion_ficha_tab_remito_ajustes.php"; ?>  
        </div>
    <?php endif; ?>
    
    <!-- Tab Facturas -->
    <?php if ((int) $vta_orden_venta->getId() != 0): ?>
        <div id="tab_facturas" class="datos">
            <?php include "modal_vta_orden_venta_gestion_ficha_tab_facturas.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Facturas -->
    <?php if ((int) $vta_orden_venta->getId() != 0): ?>
        <div id="tab_ajuste_debes" class="datos">
            <?php include "modal_vta_orden_venta_gestion_ficha_tab_ajuste_debes.php"; ?>  
        </div>
    <?php endif; ?>
    
    <!-- Tab Empresa -->
    <?php if ((int) $vta_orden_venta->getId() != 0): ?>
        <div id="tab_cliente" class="datos">
            <?php include "modal_vta_orden_venta_gestion_ficha_tab_cliente.php"; ?>  
        </div>
    <?php endif; ?>

</div>
