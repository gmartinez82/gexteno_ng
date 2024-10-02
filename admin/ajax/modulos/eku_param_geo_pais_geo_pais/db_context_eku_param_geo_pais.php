<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$eku_param_geo_pais_geo_pais_id = Gral::getVars(2, 'eku_param_geo_pais_geo_pais_id');
$eku_param_geo_pais_geo_pais = EkuParamGeoPaisGeoPais::getOxId($eku_param_geo_pais_geo_pais_id);
$eku_param_geo_pais = $eku_param_geo_pais_geo_pais->getEkuParamGeoPais();

?>
<div class="datos" id="<?php Gral::_echo($eku_param_geo_pais->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('EkuParamGeoPais') ?>: 
        <strong><?php Gral::_echo($eku_param_geo_pais->getId()) ?> - <?php Gral::_echo($eku_param_geo_pais->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="eku_param_geo_pais_alta.php?id=<?php echo($eku_param_geo_pais->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamGeoPais') ?>: <strong><?php Gral::_echo($eku_param_geo_pais->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo EkuParamGeoPaisGeoPais::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_geo_pais_geo_pais->getFiltrosArrXCampo('EkuParamGeoPais', 'eku_param_geo_pais_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('EkuParamGeoPaisGeoPaiss') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($eku_param_geo_pais->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

