<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_preventista = PrvPreventista::getOxId($id);
//Gral::prr($prv_preventista);
?>

<div class="tabs ficha-prv_preventista" identificador="<?php echo $prv_preventista->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_preventista id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_preventista->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_preventista descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_preventista->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_preventista prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_preventista->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_preventista apellido">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_preventista->getApellido()) ?>
            </div>
        </div>
		
        <div class="par prv_preventista nombre">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_preventista->getNombre()) ?>
            </div>
        </div>
		
        <div class="par prv_preventista email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_preventista->getEmail()) ?>
            </div>
        </div>
		
        <div class="par prv_preventista telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_preventista->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par prv_preventista celular">
            <div class="label"><?php Lang::_lang('Celular') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_preventista->getCelular()) ?>
            </div>
        </div>
		
        <div class="par prv_preventista codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_preventista->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prv_preventista observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_preventista->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_preventista orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_preventista->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prv_preventista estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prv_preventista->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

