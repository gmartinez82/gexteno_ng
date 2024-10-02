<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_grupo = CliGrupo::getOxId($id);
//Gral::prr($cli_grupo);
?>

<div class="tabs ficha-cli_grupo" identificador="<?php echo $cli_grupo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_grupo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_grupo->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_grupo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_grupo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_grupo documento">
            <div class="label"><?php Lang::_lang('Documento') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_grupo->getDocumento()) ?>
            </div>
        </div>
		
        <div class="par cli_grupo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_grupo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_grupo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_grupo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_grupo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_grupo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_grupo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_grupo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

