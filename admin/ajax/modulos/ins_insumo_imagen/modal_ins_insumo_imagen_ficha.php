<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo_imagen = InsInsumoImagen::getOxId($id);
//Gral::prr($ins_insumo_imagen);
?>

<div class="tabs ficha-ins_insumo_imagen" identificador="<?php echo $ins_insumo_imagen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_insumo_imagen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_imagen->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_insumo_imagen ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_imagen->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_imagen ins_tipo_imagen_id">
            <div class="label"><?php Lang::_lang('InsTipoImagen') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_imagen->getInsTipoImagen()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_imagen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_imagen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_imagen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_imagen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_imagen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_imagen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_imagen archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_imagen->getArchivo()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_imagen peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_imagen->getPeso()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_imagen tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_imagen->getTipo()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_imagen alto">
            <div class="label"><?php Lang::_lang('Alto') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_imagen->getAlto()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_imagen ancho">
            <div class="label"><?php Lang::_lang('Ancho') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_imagen->getAncho()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_imagen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_imagen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_imagen estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_imagen->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

