<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ope_chofer = OpeChofer::getOxId($id);
//Gral::prr($ope_chofer);
?>

<div class="tabs ficha-ope_chofer" identificador="<?php echo $ope_chofer->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ope_chofer id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_chofer->getId()) ?>
            </div>
        </div>

	
        <div class="par ope_chofer descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_chofer->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ope_chofer apellido">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_chofer->getApellido()) ?>
            </div>
        </div>
		
        <div class="par ope_chofer nombre">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_chofer->getNombre()) ?>
            </div>
        </div>
		
        <div class="par ope_chofer email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_chofer->getEmail()) ?>
            </div>
        </div>
		
        <div class="par ope_chofer telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_chofer->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par ope_chofer celular">
            <div class="label"><?php Lang::_lang('Celular') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_chofer->getCelular()) ?>
            </div>
        </div>
		
        <div class="par ope_chofer codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_chofer->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ope_chofer observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_chofer->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ope_chofer orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_chofer->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ope_chofer estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ope_chofer->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

