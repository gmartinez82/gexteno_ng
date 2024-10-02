<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$eku_param_geo_ciudad_geo_localidad_id = Gral::getVars(2, 'eku_param_geo_ciudad_geo_localidad_id');
$eku_param_geo_ciudad_geo_localidad = EkuParamGeoCiudadGeoLocalidad::getOxId($eku_param_geo_ciudad_geo_localidad_id);
$eku_param_geo_ciudad = $eku_param_geo_ciudad_geo_localidad->getEkuParamGeoCiudad();

?>
<div class="datos" id="<?php Gral::_echo($eku_param_geo_ciudad->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('EkuParamGeoCiudad') ?>: 
        <strong><?php Gral::_echo($eku_param_geo_ciudad->getId()) ?> - <?php Gral::_echo($eku_param_geo_ciudad->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="eku_param_geo_ciudad_alta.php?id=<?php echo($eku_param_geo_ciudad->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamGeoCiudad') ?>: <strong><?php Gral::_echo($eku_param_geo_ciudad->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo EkuParamGeoCiudadGeoLocalidad::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_geo_ciudad_geo_localidad->getFiltrosArrXCampo('EkuParamGeoCiudad', 'eku_param_geo_ciudad_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('EkuParamGeoCiudadGeoLocalidads') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($eku_param_geo_ciudad->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

