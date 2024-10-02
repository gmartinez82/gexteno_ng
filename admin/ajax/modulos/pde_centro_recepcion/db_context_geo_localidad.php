<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_centro_recepcion_id = Gral::getVars(2, 'pde_centro_recepcion_id');
$pde_centro_recepcion = PdeCentroRecepcion::getOxId($pde_centro_recepcion_id);
$geo_localidad = $pde_centro_recepcion->getGeoLocalidad();

?>
<div class="datos" id="<?php Gral::_echo($geo_localidad->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GeoLocalidad') ?>: 
        <strong><?php Gral::_echo($geo_localidad->getId()) ?> - <?php Gral::_echo($geo_localidad->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="geo_localidad_alta.php?id=<?php echo($geo_localidad->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GeoLocalidad') ?>: <strong><?php Gral::_echo($geo_localidad->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeCentroRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_centro_recepcion->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeCentroRecepcions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($geo_localidad->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

