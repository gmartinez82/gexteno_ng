<?php
include "_autoload.php";

$fnd_chq_cheque_id = Gral::getVars(Gral::VARS_GET, 'fnd_chq_cheque_id', 0);
$fnd_chq_cheque = FndChqCheque::getOxId($fnd_chq_cheque_id);


//$pde_recibo->setRecalcularEstado();
?>


<div class="tabs ficha-cheque" fnd_chq_cheque_id="<?php echo $fnd_chq_cheque->getId(); ?>">
    <?php
    if ((int) $fnd_chq_cheque->getId() != 0):
        include "modal_fnd_chq_cheque_gestion_ficha_top.php";
    endif;
    ?>

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
    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_fnd_chq_cheque_gestion_ficha_tab_general.php"; ?>  
    </div>

    <!-- Tab Estados -->
    <div id="tab_estados" class="datos">
        <?php include "modal_fnd_chq_cheque_gestion_ficha_tab_estados.php"; ?>  
    </div>
</div>