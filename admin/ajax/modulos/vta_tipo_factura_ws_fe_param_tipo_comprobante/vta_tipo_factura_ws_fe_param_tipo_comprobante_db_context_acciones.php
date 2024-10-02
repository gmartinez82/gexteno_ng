<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_tipo_factura_ws_fe_param_tipo_comprobante = VtaTipoFacturaWsFeParamTipoComprobante::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_tipo_factura_ws_fe_param_tipo_comprobante->getId()) ?>" modulo="vta_tipo_factura_ws_fe_param_tipo_comprobante">

    <div class="titulo">
        <?php Lang::_lang('VtaTipoFacturaWsFeParamTipoComprobante') ?>: 
        <strong><?php Gral::_echo($vta_tipo_factura_ws_fe_param_tipo_comprobante->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaTipoFacturaWsFeParamTipoComprobante') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

