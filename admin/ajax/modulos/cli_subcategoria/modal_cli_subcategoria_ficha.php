<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_subcategoria = CliSubcategoria::getOxId($id);
//Gral::prr($cli_subcategoria);
?>

<div class="tabs ficha-cli_subcategoria" identificador="<?php echo $cli_subcategoria->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_subcategoria id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_subcategoria descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria cli_categoria_id">
            <div class="label"><?php Lang::_lang('CliCategoria') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria->getCliCategoria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria limite_ctacte_importe">
            <div class="label"><?php Lang::_lang('Limite Ctacte Imp') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria->getLimiteCtacteImporte()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria limite_ctacte_dias">
            <div class="label"><?php Lang::_lang('Limite Ctacte Dias') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria->getLimiteCtacteDias()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_subcategoria->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

