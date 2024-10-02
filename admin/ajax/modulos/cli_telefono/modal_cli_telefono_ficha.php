<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_telefono = CliTelefono::getOxId($id);
//Gral::prr($cli_telefono);
?>

<div class="tabs ficha-cli_telefono" identificador="<?php echo $cli_telefono->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_telefono id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_telefono->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_telefono cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_telefono->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_telefono cli_telefono_tipo_id">
            <div class="label"><?php Lang::_lang('CliTelefonoTipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_telefono->getCliTelefonoTipo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_telefono descripcion">
            <div class="label"><?php Lang::_lang('descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_telefono->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_telefono geo_pais_id">
            <div class="label"><?php Lang::_lang('GeoPais') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_telefono->getGeoPais()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_telefono codigo">
            <div class="label"><?php Lang::_lang('Cod Area') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_telefono->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_telefono telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_telefono->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par cli_telefono observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_telefono->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_telefono orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_telefono->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_telefono estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_telefono->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

