<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_email = CliEmail::getOxId($id);
//Gral::prr($cli_email);
?>

<div class="tabs ficha-cli_email" identificador="<?php echo $cli_email->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_email id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_email->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_email cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_email->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_email descripcion">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_email->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_email codigo">
            <div class="label"><?php Lang::_lang('codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_email->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_email observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_email->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_email orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_email->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_email estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_email->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

