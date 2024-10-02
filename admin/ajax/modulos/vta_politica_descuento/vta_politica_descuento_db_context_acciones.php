<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_politica_descuento = VtaPoliticaDescuento::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_politica_descuento->getId()) ?>" modulo="vta_politica_descuento">

    <div class="titulo">
        <?php Lang::_lang('VtaPoliticaDescuento') ?>: 
        <strong><?php Gral::_echo($vta_politica_descuento->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaPoliticaDescuento') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

