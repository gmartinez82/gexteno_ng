<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ins_insumo_destino_transformacion = InsInsumoDestinoTransformacion::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ins_insumo_destino_transformacion->getId()) ?>" modulo="ins_insumo_destino_transformacion">

    <div class="titulo">
        <?php Lang::_lang('InsInsumoDestinoTransformacion') ?>: 
        <strong><?php Gral::_echo($ins_insumo_destino_transformacion->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_DESTINO_TRANSFORMACION_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('InsInsumoDestinoTransformacion') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

