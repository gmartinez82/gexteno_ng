<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pan_ubi_celda = PanUbiCelda::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pan_ubi_celda->getId()) ?>" modulo="pan_ubi_celda">

    <div class="titulo">
        <?php Lang::_lang('PanUbiCelda') ?>: 
        <strong><?php Gral::_echo($pan_ubi_celda->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PAN_UBI_CELDA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PanUbiCelda') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

