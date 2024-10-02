<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$not_noticia_imagen = NotNoticiaImagen::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($not_noticia_imagen->getId()) ?>" modulo="not_noticia_imagen">

    <div class="titulo">
        <?php Lang::_lang('NotNoticiaImagen') ?>: 
        <strong><?php Gral::_echo($not_noticia_imagen->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('NOT_NOTICIA_IMAGEN_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('NotNoticiaImagen') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

