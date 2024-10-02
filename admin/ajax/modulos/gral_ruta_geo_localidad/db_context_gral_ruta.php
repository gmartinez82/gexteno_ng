<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_ruta_geo_localidad_id = Gral::getVars(2, 'gral_ruta_geo_localidad_id');
$gral_ruta_geo_localidad = GralRutaGeoLocalidad::getOxId($gral_ruta_geo_localidad_id);
$gral_ruta = $gral_ruta_geo_localidad->getGralRuta();

?>
<div class="datos" id="<?php Gral::_echo($gral_ruta->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralRuta') ?>: 
        <strong><?php Gral::_echo($gral_ruta->getId()) ?> - <?php Gral::_echo($gral_ruta->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_ruta_alta.php?id=<?php echo($gral_ruta->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralRuta') ?>: <strong><?php Gral::_echo($gral_ruta->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralRutaGeoLocalidad::getFiltrosArrGral() ?>&arr=<?php echo $gral_ruta_geo_localidad->getFiltrosArrXCampo('GralRuta', 'gral_ruta_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralRutaGeoLocalidads') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_ruta->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

