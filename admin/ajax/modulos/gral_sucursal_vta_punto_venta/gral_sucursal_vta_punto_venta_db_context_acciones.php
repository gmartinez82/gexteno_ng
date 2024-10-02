<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gral_sucursal_vta_punto_venta = GralSucursalVtaPuntoVenta::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gral_sucursal_vta_punto_venta->getId()) ?>" modulo="gral_sucursal_vta_punto_venta">

    <div class="titulo">
        <?php Lang::_lang('GralSucursalVtaPuntoVenta') ?>: 
        <strong><?php Gral::_echo($gral_sucursal_vta_punto_venta->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VTA_PUNTO_VENTA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GralSucursalVtaPuntoVenta') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

