<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gral_caja_tipo = GralCajaTipo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gral_caja_tipo->getId()) ?>" modulo="gral_caja_tipo">

    <div class="titulo">
        <?php Lang::_lang('GralCajaTipo') ?>: 
        <strong><?php Gral::_echo($gral_caja_tipo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GRAL_CAJA_TIPO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GralCajaTipo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

