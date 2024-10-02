<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_param_geo_pais_geo_pais = EkuParamGeoPaisGeoPais::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_param_geo_pais_geo_pais->getId()) ?>" modulo="eku_param_geo_pais_geo_pais">

    <div class="titulo">
        <?php Lang::_lang('EkuParamGeoPaisGeoPais') ?>: 
        <strong><?php Gral::_echo($eku_param_geo_pais_geo_pais->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_GEO_PAIS_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuParamGeoPaisGeoPais') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

