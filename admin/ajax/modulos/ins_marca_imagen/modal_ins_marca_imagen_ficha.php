<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_marca_imagen = InsMarcaImagen::getOxId($id);
//Gral::prr($ins_marca_imagen);
?>

<div class="tabs ficha-ins_marca_imagen" identificador="<?php echo $ins_marca_imagen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_marca_imagen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_marca_imagen->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_marca_imagen ins_marca_id">
            <div class="label"><?php Lang::_lang('InsMarca') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_marca_imagen->getInsMarca()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_marca_imagen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_marca_imagen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_marca_imagen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_marca_imagen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_marca_imagen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_marca_imagen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_marca_imagen archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_marca_imagen->getArchivo()) ?>
            </div>
        </div>
		
        <div class="par ins_marca_imagen peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_marca_imagen->getPeso()) ?>
            </div>
        </div>
		
        <div class="par ins_marca_imagen tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_marca_imagen->getTipo()) ?>
            </div>
        </div>
		
        <div class="par ins_marca_imagen alto">
            <div class="label"><?php Lang::_lang('Alto') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_marca_imagen->getAlto()) ?>
            </div>
        </div>
		
        <div class="par ins_marca_imagen ancho">
            <div class="label"><?php Lang::_lang('Ancho') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_marca_imagen->getAncho()) ?>
            </div>
        </div>
		
        <div class="par ins_marca_imagen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_marca_imagen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_marca_imagen estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_marca_imagen->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

