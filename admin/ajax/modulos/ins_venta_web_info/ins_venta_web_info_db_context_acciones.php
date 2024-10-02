<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ins_venta_web_info = InsVentaWebInfo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ins_venta_web_info->getId()) ?>" modulo="ins_venta_web_info">

    <div class="titulo">
        <?php Lang::_lang('InsVentaWebInfo') ?>: 
        <strong><?php Gral::_echo($ins_venta_web_info->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('INS_VENTA_WEB_INFO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('InsVentaWebInfo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

