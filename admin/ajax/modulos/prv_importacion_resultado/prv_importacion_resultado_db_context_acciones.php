<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$prv_importacion_resultado = PrvImportacionResultado::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($prv_importacion_resultado->getId()) ?>" modulo="prv_importacion_resultado">

    <div class="titulo">
        <?php Lang::_lang('PrvImportacionResultado') ?>: 
        <strong><?php Gral::_echo($prv_importacion_resultado->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PRV_IMPORTACION_RESULTADO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PrvImportacionResultado') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

