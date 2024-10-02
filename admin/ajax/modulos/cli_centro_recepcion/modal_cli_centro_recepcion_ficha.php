<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_centro_recepcion = CliCentroRecepcion::getOxId($id);
//Gral::prr($cli_centro_recepcion);
?>

<div class="tabs ficha-cli_centro_recepcion" identificador="<?php echo $cli_centro_recepcion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_centro_recepcion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_recepcion->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_centro_recepcion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_recepcion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_recepcion cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_recepcion->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_recepcion geo_localidad_id">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_recepcion->getGeoLocalidad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_recepcion domicilio">
            <div class="label"><?php Lang::_lang('Domicilio') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_recepcion->getDomicilio()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_recepcion email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_recepcion->getEmail()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_recepcion telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_recepcion->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_recepcion responsable">
            <div class="label"><?php Lang::_lang('Responsable') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_recepcion->getResponsable()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_recepcion codigo_postal">
            <div class="label"><?php Lang::_lang('Codigo Postal') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_recepcion->getCodigoPostal()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_recepcion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_recepcion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_recepcion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_recepcion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_recepcion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_recepcion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_recepcion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_centro_recepcion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

