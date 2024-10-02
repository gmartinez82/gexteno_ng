<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$conf_variable = ConfVariable::getOxId($id);
//Gral::prr($conf_variable);
?>

<div class="tabs ficha-conf_variable" identificador="<?php echo $conf_variable->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par conf_variable id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($conf_variable->getId()) ?>
            </div>
        </div>

	
        <div class="par conf_variable descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($conf_variable->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par conf_variable conf_categoria_id">
            <div class="label"><?php Lang::_lang('Categoria') ?></div>
            <div class="dato">
                <?php Gral::_echo($conf_variable->getConfCategoria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par conf_variable valor">
            <div class="label"><?php Lang::_lang('Valor') ?></div>
            <div class="dato">
                <?php Gral::_echo($conf_variable->getValor()) ?>
            </div>
        </div>
		
        <div class="par conf_variable codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($conf_variable->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par conf_variable observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($conf_variable->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par conf_variable orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($conf_variable->getOrden()) ?>
            </div>
        </div>
		
        <div class="par conf_variable estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($conf_variable->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

