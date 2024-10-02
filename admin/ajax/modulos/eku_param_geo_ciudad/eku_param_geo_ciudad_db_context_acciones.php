<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_param_geo_ciudad = EkuParamGeoCiudad::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_param_geo_ciudad->getId()) ?>" modulo="eku_param_geo_ciudad">

    <div class="titulo">
        <?php Lang::_lang('EkuParamGeoCiudad') ?>: 
        <strong><?php Gral::_echo($eku_param_geo_ciudad->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_PARAM_GEO_CIUDAD_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuParamGeoCiudad') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

