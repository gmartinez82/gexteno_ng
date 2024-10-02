<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$not_video = NotVideo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($not_video->getId()) ?>" modulo="not_video">

    <div class="titulo">
        <?php Lang::_lang('NotVideo') ?>: 
        <strong><?php Gral::_echo($not_video->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('NOT_VIDEO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('NotVideo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

