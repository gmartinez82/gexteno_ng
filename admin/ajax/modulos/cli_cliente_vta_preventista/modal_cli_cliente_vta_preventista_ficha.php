<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_cliente_vta_preventista = CliClienteVtaPreventista::getOxId($id);
//Gral::prr($cli_cliente_vta_preventista);
?>

<div class="tabs ficha-cli_cliente_vta_preventista" identificador="<?php echo $cli_cliente_vta_preventista->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_cliente_vta_preventista id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_preventista->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_cliente_vta_preventista descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_preventista->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_preventista cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_preventista->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_preventista vta_preventista_id">
            <div class="label"><?php Lang::_lang('VtaPreventista') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_preventista->getVtaPreventista()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_preventista predeterminado">
            <div class="label"><?php Lang::_lang('Predeterminado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_cliente_vta_preventista->getPredeterminado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_preventista codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_preventista->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_preventista observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_preventista->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_preventista orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_vta_preventista->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_vta_preventista estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_cliente_vta_preventista->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

