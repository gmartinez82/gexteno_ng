<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gral_centro_costo_vta_vendedor = GralCentroCostoVtaVendedor::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gral_centro_costo_vta_vendedor->getId()) ?>" modulo="gral_centro_costo_vta_vendedor">

    <div class="titulo">
        <?php Lang::_lang('GralCentroCostoVtaVendedor') ?>: 
        <strong><?php Gral::_echo($gral_centro_costo_vta_vendedor->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_VTA_VENDEDOR_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GralCentroCostoVtaVendedor') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

