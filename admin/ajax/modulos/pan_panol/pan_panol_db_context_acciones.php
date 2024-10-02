<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pan_panol = PanPanol::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pan_panol->getId()) ?>" modulo="pan_panol">

    <div class="titulo">
        <?php Lang::_lang('PanPanol') ?>: 
        <strong><?php Gral::_echo($pan_panol->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PAN_PANOL_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PanPanol') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

