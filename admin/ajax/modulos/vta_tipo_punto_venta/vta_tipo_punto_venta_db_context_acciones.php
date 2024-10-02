<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_tipo_punto_venta = VtaTipoPuntoVenta::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_tipo_punto_venta->getId()) ?>" modulo="vta_tipo_punto_venta">

    <div class="titulo">
        <?php Lang::_lang('VtaTipoPuntoVenta') ?>: 
        <strong><?php Gral::_echo($vta_tipo_punto_venta->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_TIPO_PUNTO_VENTA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaTipoPuntoVenta') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

