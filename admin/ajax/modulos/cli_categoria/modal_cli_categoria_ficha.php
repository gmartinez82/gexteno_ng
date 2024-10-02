<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_categoria = CliCategoria::getOxId($id);
//Gral::prr($cli_categoria);
?>

<div class="tabs ficha-cli_categoria" identificador="<?php echo $cli_categoria->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_categoria id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_categoria->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_categoria descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_categoria->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_categoria codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_categoria->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_categoria observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_categoria->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_categoria orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_categoria->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_categoria estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_categoria->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

