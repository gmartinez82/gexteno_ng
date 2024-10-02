<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_medio_digital = CliMedioDigital::getOxId($id);
//Gral::prr($cli_medio_digital);
?>

<div class="tabs ficha-cli_medio_digital" identificador="<?php echo $cli_medio_digital->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_medio_digital id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_medio_digital->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_medio_digital descripcion">
            <div class="label"><?php Lang::_lang('Enlace') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_medio_digital->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_medio_digital cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_medio_digital->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_medio_digital cli_tipo_medio_digital_id">
            <div class="label"><?php Lang::_lang('CliTipoMedioDigital') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_medio_digital->getCliTipoMedioDigital()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_medio_digital codigo">
            <div class="label"><?php Lang::_lang('codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_medio_digital->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_medio_digital observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_medio_digital->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_medio_digital orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_medio_digital->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_medio_digital estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_medio_digital->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

