<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$geo_localidad_id = Gral::getVars(2, 'geo_localidad_id');
$geo_localidad = GeoLocalidad::getOxId($geo_localidad_id);
$geo_provincia = $geo_localidad->getGeoProvincia();

?>
<div class="datos" id="<?php Gral::_echo($geo_provincia->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GeoProvincia') ?>: 
        <strong><?php Gral::_echo($geo_provincia->getId()) ?> - <?php Gral::_echo($geo_provincia->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="geo_provincia_alta.php?id=<?php echo($geo_provincia->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GeoProvincia') ?>: <strong><?php Gral::_echo($geo_provincia->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GeoLocalidad::getFiltrosArrGral() ?>&arr=<?php echo $geo_localidad->getFiltrosArrXCampo('GeoProvincia', 'geo_provincia_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GeoLocalidads') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($geo_provincia->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

