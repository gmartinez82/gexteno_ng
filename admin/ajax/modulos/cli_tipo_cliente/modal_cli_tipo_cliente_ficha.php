<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_tipo_cliente = CliTipoCliente::getOxId($id);
//Gral::prr($cli_tipo_cliente);
?>

<div class="tabs ficha-cli_tipo_cliente" identificador="<?php echo $cli_tipo_cliente->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_tipo_cliente id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_tipo_cliente->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_tipo_cliente descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_tipo_cliente->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_tipo_cliente codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_tipo_cliente->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_tipo_cliente observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_tipo_cliente->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_tipo_cliente orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_tipo_cliente->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_tipo_cliente estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_tipo_cliente->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

