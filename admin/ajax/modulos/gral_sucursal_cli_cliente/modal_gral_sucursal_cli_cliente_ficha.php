<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_sucursal_cli_cliente = GralSucursalCliCliente::getOxId($id);
//Gral::prr($gral_sucursal_cli_cliente);
?>

<div class="tabs ficha-gral_sucursal_cli_cliente" identificador="<?php echo $gral_sucursal_cli_cliente->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_sucursal_cli_cliente id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_cli_cliente->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_sucursal_cli_cliente descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_cli_cliente->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_cli_cliente gral_sucursal_id">
            <div class="label"><?php Lang::_lang('GralSucursal') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_cli_cliente->getGralSucursal()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_cli_cliente cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_cli_cliente->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_cli_cliente automatico">
            <div class="label"><?php Lang::_lang('Autom') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_sucursal_cli_cliente->getAutomatico())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_cli_cliente codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_cli_cliente->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_cli_cliente observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_cli_cliente->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_cli_cliente orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_cli_cliente->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_cli_cliente estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_sucursal_cli_cliente->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

