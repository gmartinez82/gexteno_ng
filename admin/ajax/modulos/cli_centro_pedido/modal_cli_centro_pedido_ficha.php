<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_centro_pedido = CliCentroPedido::getOxId($id);
//Gral::prr($cli_centro_pedido);
?>

<div class="tabs ficha-cli_centro_pedido" identificador="<?php echo $cli_centro_pedido->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_centro_pedido id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_pedido->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_centro_pedido descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_pedido->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_pedido cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_pedido->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_pedido vta_comprador_id">
            <div class="label"><?php Lang::_lang('VtaComprador') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_pedido->getVtaComprador()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_pedido geo_localidad_id">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_pedido->getGeoLocalidad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_pedido domicilio">
            <div class="label"><?php Lang::_lang('Domicilio') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_pedido->getDomicilio()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_pedido email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_pedido->getEmail()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_pedido telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_pedido->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_pedido responsable">
            <div class="label"><?php Lang::_lang('Responsable') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_pedido->getResponsable()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_pedido codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_pedido->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_pedido observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_pedido->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_pedido orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_centro_pedido->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_centro_pedido estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_centro_pedido->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

