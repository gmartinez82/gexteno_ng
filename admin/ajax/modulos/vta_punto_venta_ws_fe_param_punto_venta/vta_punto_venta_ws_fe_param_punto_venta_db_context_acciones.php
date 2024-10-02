<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_punto_venta_ws_fe_param_punto_venta = VtaPuntoVentaWsFeParamPuntoVenta::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_punto_venta_ws_fe_param_punto_venta->getId()) ?>" modulo="vta_punto_venta_ws_fe_param_punto_venta">

    <div class="titulo">
        <?php Lang::_lang('VtaPuntoVentaWsFeParamPuntoVenta') ?>: 
        <strong><?php Gral::_echo($vta_punto_venta_ws_fe_param_punto_venta->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_WS_FE_PARAM_PUNTO_VENTA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaPuntoVentaWsFeParamPuntoVenta') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

