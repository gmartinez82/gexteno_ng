<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_cliente_vta_comprador = CliClienteVtaComprador::getOxId($id);
//Gral::prr($cli_cliente_vta_comprador);
?>

<div class="tabs ficha-cli_cliente_vta_comprador" identificador="<?php echo $cli_cliente_vta_comprador->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_cliente_vta_comprador id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_comprador->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_cliente_vta_comprador descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_comprador->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_comprador cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_comprador->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_comprador vta_comprador_id">
            <div class="label"><?php Lang::_lang('VtaComprador') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_comprador->getVtaComprador()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_comprador predeterminado">
            <div class="label"><?php Lang::_lang('Predeterminado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_cliente_vta_comprador->getPredeterminado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_comprador codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_comprador->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_comprador observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_comprador->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_comprador orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_comprador->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_comprador estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_cliente_vta_comprador->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

