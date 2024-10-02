<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_cliente_cli_rubro = CliClienteCliRubro::getOxId($id);
//Gral::prr($cli_cliente_cli_rubro);
?>

<div class="tabs ficha-cli_cliente_cli_rubro" identificador="<?php echo $cli_cliente_cli_rubro->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_cliente_cli_rubro id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_cli_rubro->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_cliente_cli_rubro cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_cli_rubro->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_cli_rubro cli_rubro_id">
            <div class="label"><?php Lang::_lang('CliRubro') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_cli_rubro->getCliRubro()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

