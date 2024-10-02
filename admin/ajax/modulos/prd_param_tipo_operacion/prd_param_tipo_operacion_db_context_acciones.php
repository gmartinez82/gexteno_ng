<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$prd_param_tipo_operacion = PrdParamTipoOperacion::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($prd_param_tipo_operacion->getId()) ?>" modulo="prd_param_tipo_operacion">

    <div class="titulo">
        <?php Lang::_lang('PrdParamTipoOperacion') ?>: 
        <strong><?php Gral::_echo($prd_param_tipo_operacion->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PRD_PARAM_TIPO_OPERACION_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PrdParamTipoOperacion') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

