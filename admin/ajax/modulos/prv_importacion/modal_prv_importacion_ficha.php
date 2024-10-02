<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_importacion = PrvImportacion::getOxId($id);
//Gral::prr($prv_importacion);
?>

<div class="tabs ficha-prv_importacion" identificador="<?php echo $prv_importacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_importacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_importacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion prv_importacion_tipo_estado_id">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion->getPrvImportacionTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion ins_marca_id">
            <div class="label"><?php Lang::_lang('InsMarca') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion->getInsMarca()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion ins_marca_pieza">
            <div class="label"><?php Lang::_lang('Marca Pieza') ?></div>
            <div class="dato">
                <?php Gral::_echo(($prv_importacion->getInsMarcaPieza() != 'null') ? InsMarca::getOxId($prv_importacion->getInsMarcaPieza())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par prv_importacion prv_convenio_descuento_id">
            <div class="label"><?php Lang::_lang('Conv Desc') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion->getPrvConvenioDescuento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion descuento">
            <div class="label"><?php Lang::_lang('Desc') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion->getDescuento()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion cantidad_tab1">
            <div class="label"><?php Lang::_lang('Cant T1') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion->getCantidadTab1()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion cantidad_tab2">
            <div class="label"><?php Lang::_lang('Cant T2') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion->getCantidadTab2()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion cantidad_tab3">
            <div class="label"><?php Lang::_lang('Cant T3') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion->getCantidadTab3()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion cantidad_tab4">
            <div class="label"><?php Lang::_lang('Cant T4') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion->getCantidadTab4()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion seleccionar_todos">
            <div class="label"><?php Lang::_lang('Sel Todos') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prv_importacion->getSeleccionarTodos())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion seleccionar_todos_descripcion">
            <div class="label"><?php Lang::_lang('Sel Todos Desc') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prv_importacion->getSeleccionarTodosDescripcion())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

