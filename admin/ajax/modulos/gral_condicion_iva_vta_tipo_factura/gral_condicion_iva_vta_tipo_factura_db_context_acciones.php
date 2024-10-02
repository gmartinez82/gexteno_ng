<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gral_condicion_iva_vta_tipo_factura = GralCondicionIvaVtaTipoFactura::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gral_condicion_iva_vta_tipo_factura->getId()) ?>" modulo="gral_condicion_iva_vta_tipo_factura">

    <div class="titulo">
        <?php Lang::_lang('GralCondicionIvaVtaTipoFactura') ?>: 
        <strong><?php Gral::_echo($gral_condicion_iva_vta_tipo_factura->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_VTA_TIPO_FACTURA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoFactura') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

