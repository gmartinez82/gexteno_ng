<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_ruta_geo_localidad_cli_centro_recepcion = GralRutaGeoLocalidadCliCentroRecepcion::getOxId($id);
//Gral::prr($gral_ruta_geo_localidad_cli_centro_recepcion);
?>

<div class="tabs ficha-gral_ruta_geo_localidad_cli_centro_recepcion" identificador="<?php echo $gral_ruta_geo_localidad_cli_centro_recepcion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_ruta_geo_localidad_cli_centro_recepcion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_ruta_geo_localidad_cli_centro_recepcion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_geo_localidad_cli_centro_recepcion gral_ruta_id">
            <div class="label"><?php Lang::_lang('GralRuta') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getGralRuta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_geo_localidad_cli_centro_recepcion geo_localidad_id">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getGeoLocalidad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_geo_localidad_cli_centro_recepcion cli_centro_recepcion_id">
            <div class="label"><?php Lang::_lang('CliCentroRecepcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getCliCentroRecepcion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_geo_localidad_cli_centro_recepcion cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_geo_localidad_cli_centro_recepcion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_geo_localidad_cli_centro_recepcion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_geo_localidad_cli_centro_recepcion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_geo_localidad_cli_centro_recepcion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_ruta_geo_localidad_cli_centro_recepcion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

