<?php
include "_autoload.php";

$vta_comision_id = Gral::getVars(Gral::VARS_GET, 'vta_comision_id', 0);
$vta_comision = VtaComision::getOxId($vta_comision_id);

$vta_comision_estados = $vta_comision->getVtaComisionEstados();
$vta_comision_vta_comprobantes = $vta_comision->getVtaComisionVtaComprobantes();
$vta_comision_enviados = $vta_comision->getVtaComisionEnviados();
?>

<div class="tabs ficha-comision" vta_comision_id="<?php echo $vta_comision->getId(); ?>">
    <?php include "modal_vta_comision_gestion_ficha_top.php" ?>
    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>
        <li>
            <a href="#tab_estados">
                <?php Lang::_lang('Estados') ?>
            </a>
        </li>

        <li>
            <a href="#tab_emails">
                <?php Lang::_lang('Emails Enviados') ?>
            </a>
        </li>

        <?php if (count($vta_comision_vta_comprobantes) > 0) { ?>
            <li>
                <a href="#tab_comprobantes">
                    <?php Lang::_lang('Comprobantes') ?>
                </a>
            </li>
        <?php } ?>

    </ul>


    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_vta_comision_gestion_ficha_tab_general.php"; ?>  
    </div>

    <!-- Tab Estados -->
    <div id="tab_estados" class="datos">
        <?php include "modal_vta_comision_gestion_ficha_tab_estados.php"; ?>  
    </div>

    <!-- Tab Email -->
    <div id="tab_emails" class="datos">
        <?php include "modal_vta_comision_gestion_ficha_tab_email.php"; ?>  
    </div>

    <?php if (count($vta_comision_vta_comprobantes) > 0) { ?>
        <!-- Tab Ordenes de Venta -->
        <div id="tab_comprobantes" class="datos">
            <?php include "modal_vta_comision_gestion_ficha_tab_comprobantes.php"; ?>  
        </div>
    <?php } ?>


</div>
