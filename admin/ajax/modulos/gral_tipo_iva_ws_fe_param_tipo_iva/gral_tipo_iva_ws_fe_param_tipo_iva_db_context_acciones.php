<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gral_tipo_iva_ws_fe_param_tipo_iva = GralTipoIvaWsFeParamTipoIva::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getId()) ?>" modulo="gral_tipo_iva_ws_fe_param_tipo_iva">

    <div class="titulo">
        <?php Lang::_lang('GralTipoIvaWsFeParamTipoIva') ?>: 
        <strong><?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_WS_FE_PARAM_TIPO_IVA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GralTipoIvaWsFeParamTipoIva') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

