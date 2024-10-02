<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$prd_proceso_productivo = PrdProcesoProductivo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($prd_proceso_productivo->getId()) ?>" modulo="prd_proceso_productivo">

    <div class="titulo">
        <?php Lang::_lang('PrdProcesoProductivo') ?>: 
        <strong><?php Gral::_echo($prd_proceso_productivo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PRD_PROCESO_PRODUCTIVO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PrdProcesoProductivo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

