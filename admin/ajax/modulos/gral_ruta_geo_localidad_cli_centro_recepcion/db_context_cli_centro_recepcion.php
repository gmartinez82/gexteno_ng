<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_ruta_geo_localidad_cli_centro_recepcion_id = Gral::getVars(2, 'gral_ruta_geo_localidad_cli_centro_recepcion_id');
$gral_ruta_geo_localidad_cli_centro_recepcion = GralRutaGeoLocalidadCliCentroRecepcion::getOxId($gral_ruta_geo_localidad_cli_centro_recepcion_id);
$cli_centro_recepcion = $gral_ruta_geo_localidad_cli_centro_recepcion->getCliCentroRecepcion();

?>
<div class="datos" id="<?php Gral::_echo($cli_centro_recepcion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CliCentroRecepcion') ?>: 
        <strong><?php Gral::_echo($cli_centro_recepcion->getId()) ?> - <?php Gral::_echo($cli_centro_recepcion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cli_centro_recepcion_alta.php?id=<?php echo($cli_centro_recepcion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliCentroRecepcion') ?>: <strong><?php Gral::_echo($cli_centro_recepcion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralRutaGeoLocalidadCliCentroRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $gral_ruta_geo_localidad_cli_centro_recepcion->getFiltrosArrXCampo('CliCentroRecepcion', 'cli_centro_recepcion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralRutaGeoLocalidadCliCentroRecepcions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cli_centro_recepcion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

