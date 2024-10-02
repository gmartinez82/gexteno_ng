<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_cliente_gral_actividad = CliClienteGralActividad::getOxId($id);
//Gral::prr($cli_cliente_gral_actividad);
?>

<div class="tabs ficha-cli_cliente_gral_actividad" identificador="<?php echo $cli_cliente_gral_actividad->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_cliente_gral_actividad id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_gral_actividad->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_cliente_gral_actividad descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_gral_actividad->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_gral_actividad cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_gral_actividad->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_gral_actividad gral_actividad_id">
            <div class="label"><?php Lang::_lang('GralActividad') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_gral_actividad->getGralActividad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_gral_actividad codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_gral_actividad->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_gral_actividad observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_gral_actividad->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_gral_actividad orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_gral_actividad->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_gral_actividad estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_cliente_gral_actividad->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

