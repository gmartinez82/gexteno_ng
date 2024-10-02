<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_preventista = VtaPreventista::getOxId($id);
//Gral::prr($vta_preventista);
?>

<div class="tabs ficha-vta_preventista" identificador="<?php echo $vta_preventista->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_preventista id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_preventista->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_preventista descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_preventista->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_preventista apellido">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_preventista->getApellido()) ?>
            </div>
        </div>
		
        <div class="par vta_preventista nombre">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_preventista->getNombre()) ?>
            </div>
        </div>
		
        <div class="par vta_preventista email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_preventista->getEmail()) ?>
            </div>
        </div>
		
        <div class="par vta_preventista telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_preventista->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par vta_preventista celular">
            <div class="label"><?php Lang::_lang('Celular') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_preventista->getCelular()) ?>
            </div>
        </div>
		
        <div class="par vta_preventista porcentaje_comision">
            <div class="label"><?php Lang::_lang('Porc Comision') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_preventista->getPorcentajeComision()) ?>
            </div>
        </div>
		
        <div class="par vta_preventista codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_preventista->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_preventista observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_preventista->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_preventista orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_preventista->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_preventista estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_preventista->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

