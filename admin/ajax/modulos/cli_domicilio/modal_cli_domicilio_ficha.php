<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_domicilio = CliDomicilio::getOxId($id);
//Gral::prr($cli_domicilio);
?>

<div class="tabs ficha-cli_domicilio" identificador="<?php echo $cli_domicilio->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_domicilio id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_domicilio->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_domicilio cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_domicilio->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_domicilio descripcion">
            <div class="label"><?php Lang::_lang('Domicilio') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_domicilio->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_domicilio codigo">
            <div class="label"><?php Lang::_lang('codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_domicilio->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_domicilio observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_domicilio->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_domicilio orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_domicilio->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_domicilio estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_domicilio->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

