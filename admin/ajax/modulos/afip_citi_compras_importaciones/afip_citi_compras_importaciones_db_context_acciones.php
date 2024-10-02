<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$afip_citi_compras_importaciones = AfipCitiComprasImportaciones::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($afip_citi_compras_importaciones->getId()) ?>" modulo="afip_citi_compras_importaciones">

    <div class="titulo">
        <?php Lang::_lang('AfipCitiComprasImportaciones') ?>: 
        <strong><?php Gral::_echo($afip_citi_compras_importaciones->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_IMPORTACIONES_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('AfipCitiComprasImportaciones') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

