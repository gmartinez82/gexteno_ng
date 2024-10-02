<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$not_tipo_imagen = NotTipoImagen::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($not_tipo_imagen->getId()) ?>" modulo="not_tipo_imagen">

    <div class="titulo">
        <?php Lang::_lang('NotTipoImagen') ?>: 
        <strong><?php Gral::_echo($not_tipo_imagen->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('NOT_TIPO_IMAGEN_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('NotTipoImagen') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

