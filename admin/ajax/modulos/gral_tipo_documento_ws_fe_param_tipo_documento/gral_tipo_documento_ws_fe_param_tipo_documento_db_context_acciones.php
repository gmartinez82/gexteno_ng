<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gral_tipo_documento_ws_fe_param_tipo_documento = GralTipoDocumentoWsFeParamTipoDocumento::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gral_tipo_documento_ws_fe_param_tipo_documento->getId()) ?>" modulo="gral_tipo_documento_ws_fe_param_tipo_documento">

    <div class="titulo">
        <?php Lang::_lang('GralTipoDocumentoWsFeParamTipoDocumento') ?>: 
        <strong><?php Gral::_echo($gral_tipo_documento_ws_fe_param_tipo_documento->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_WS_FE_PARAM_TIPO_DOCUMENTO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GralTipoDocumentoWsFeParamTipoDocumento') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

