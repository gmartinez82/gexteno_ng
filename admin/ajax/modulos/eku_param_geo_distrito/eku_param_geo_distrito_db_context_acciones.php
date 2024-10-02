<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_param_geo_distrito = EkuParamGeoDistrito::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_param_geo_distrito->getId()) ?>" modulo="eku_param_geo_distrito">

    <div class="titulo">
        <?php Lang::_lang('EkuParamGeoDistrito') ?>: 
        <strong><?php Gral::_echo($eku_param_geo_distrito->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_PARAM_GEO_DISTRITO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuParamGeoDistrito') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

