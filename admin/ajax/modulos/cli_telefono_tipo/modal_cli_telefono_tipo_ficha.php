<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_telefono_tipo = CliTelefonoTipo::getOxId($id);
//Gral::prr($cli_telefono_tipo);
?>

<div class="tabs ficha-cli_telefono_tipo" identificador="<?php echo $cli_telefono_tipo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_telefono_tipo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_telefono_tipo->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_telefono_tipo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_telefono_tipo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_telefono_tipo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_telefono_tipo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_telefono_tipo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_telefono_tipo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_telefono_tipo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_telefono_tipo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_telefono_tipo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_telefono_tipo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

