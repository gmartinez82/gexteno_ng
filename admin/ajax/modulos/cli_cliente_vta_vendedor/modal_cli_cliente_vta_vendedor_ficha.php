<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_cliente_vta_vendedor = CliClienteVtaVendedor::getOxId($id);
//Gral::prr($cli_cliente_vta_vendedor);
?>

<div class="tabs ficha-cli_cliente_vta_vendedor" identificador="<?php echo $cli_cliente_vta_vendedor->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_cliente_vta_vendedor id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_vendedor->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_cliente_vta_vendedor descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_vendedor->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_vendedor cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_vendedor->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_vendedor vta_vendedor_id">
            <div class="label"><?php Lang::_lang('VtaVendedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_vendedor->getVtaVendedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_vendedor predeterminado">
            <div class="label"><?php Lang::_lang('Predeterminado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_cliente_vta_vendedor->getPredeterminado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_vendedor codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_vendedor->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_vendedor observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_vendedor->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_vendedor orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_vendedor->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_vendedor estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_cliente_vta_vendedor->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

