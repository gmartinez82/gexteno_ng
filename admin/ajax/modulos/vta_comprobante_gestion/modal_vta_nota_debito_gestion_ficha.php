<?php
include "_autoload.php";

$vta_nota_debito_id = Gral::getVars(Gral::VARS_GET, 'vta_nota_debito_id', 0);
$vta_nota_debito = VtaNotaDebito::getOxId($vta_nota_debito_id);

$vta_nota_debito_vta_nota_creditos = $vta_nota_debito->getVtaNotaDebitoVtaNotaCreditos(null, null, true);
$vta_nota_debito_vta_recibos = $vta_nota_debito->getVtaNotaDebitoVtaRecibos(null, null, true);
?>


<div class="tabs ficha-nota_debito" vta_nota_debito_id="<?php echo $vta_nota_debito->getId(); ?>">
    <?php
    if ((int) $vta_nota_debito->getId() != 0):
        include "modal_vta_nota_debito_gestion_ficha_top.php";
    endif;
    ?>

    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>
        <?php if ((int) $vta_nota_debito->getId() != 0): ?>
            <li>
                <a href="#tab_comprobantes_vinculado">
                    <?php Lang::_lang('Comprobantes Vinculados') ?>
                </a>
            </li>
        <?php endif; ?>
    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_vta_nota_debito_gestion_ficha_tab_general.php"; ?>  
    </div>

    <!-- Tab Comprobantes Vinculado -->
    <?php if ((int) $vta_nota_debito->getId() != 0): ?>
        <div id="tab_comprobantes_vinculado" class="datos">
            <?php include "modal_vta_nota_debito_gestion_ficha_tab_comprobantes_vinculado.php"; ?>  
        </div>
    <?php endif; ?>

</div>