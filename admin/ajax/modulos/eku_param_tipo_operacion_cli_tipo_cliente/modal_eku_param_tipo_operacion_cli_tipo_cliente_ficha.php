<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_operacion_cli_tipo_cliente = EkuParamTipoOperacionCliTipoCliente::getOxId($id);
//Gral::prr($eku_param_tipo_operacion_cli_tipo_cliente);
?>

<div class="tabs ficha-eku_param_tipo_operacion_cli_tipo_cliente" identificador="<?php echo $eku_param_tipo_operacion_cli_tipo_cliente->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_operacion_cli_tipo_cliente id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_operacion_cli_tipo_cliente->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_operacion_cli_tipo_cliente eku_param_tipo_operacion_id">
            <div class="label"><?php Lang::_lang('EkuParamTipoOperacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_operacion_cli_tipo_cliente->getEkuParamTipoOperacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_operacion_cli_tipo_cliente cli_tipo_cliente_id">
            <div class="label"><?php Lang::_lang('CliTipoCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_operacion_cli_tipo_cliente->getCliTipoCliente()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

