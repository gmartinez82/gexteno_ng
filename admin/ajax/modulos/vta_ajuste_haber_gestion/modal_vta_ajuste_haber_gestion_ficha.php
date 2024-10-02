<?php
include "_autoload.php";

$vta_ajuste_haber_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_haber_id', 0);
$vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_ajuste_haber_id);

?>


<div class="tabs ficha-ajuste_haber" vta_ajuste_haber_id="<?php echo $vta_ajuste_haber->getId(); ?>">
    <?php
    if ((int) $vta_ajuste_haber->getId() != 0):
        include "modal_vta_ajuste_haber_gestion_ficha_top.php";
    endif;
    ?>

    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>
            <?php if ((int) $vta_ajuste_haber->getCliClienteId() != 0): ?>
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
                    <?php Lang::_lang('Items del AjusteHaber') ?>
                </a>
            </li>
            
    </ul>


    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_vta_ajuste_haber_gestion_ficha_tab_general.php"; ?>  
    </div>
    
    <!-- Tab Cliente -->
    <?php if ((int) $vta_ajuste_haber->getCliClienteId() != 0): ?>
        <div id="tab_cliente" class="datos">
            <?php include "modal_vta_ajuste_haber_gestion_ficha_tab_cliente.php"; ?>  
        </div>
    <?php endif; ?>
    
    <!-- Tab Estados -->
    <?php if ((int) $vta_ajuste_haber->getId() != 0): ?>
        <div id="tab_estados" class="datos">
            <?php include "modal_vta_ajuste_haber_gestion_ficha_tab_estados.php"; ?>  
        </div>
    <?php endif; ?>

    <!-- Tab Email -->
    <?php if ((int) $vta_ajuste_haber->getId() != 0): ?>
        <div id="tab_emails" class="datos">
            <?php include "modal_vta_ajuste_haber_gestion_ficha_tab_email.php"; ?>  
        </div>
    <?php endif; ?>
    
    <!-- Tab Ordenes de Venta -->
    <?php if ((int) $vta_ajuste_haber->getId() != 0): ?>
        <div id="tab_items" class="datos">
            <?php include "modal_vta_ajuste_haber_gestion_ficha_tab_items.php"; ?>  
        </div>
    <?php endif; ?>
    

</div>