<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_param_tipo_presencia_gral_escenario = EkuParamTipoPresenciaGralEscenario::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_param_tipo_presencia_gral_escenario->getId()) ?>" modulo="eku_param_tipo_presencia_gral_escenario">

    <div class="titulo">
        <?php Lang::_lang('EkuParamTipoPresenciaGralEscenario') ?>: 
        <strong><?php Gral::_echo($eku_param_tipo_presencia_gral_escenario->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuParamTipoPresenciaGralEscenario') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

