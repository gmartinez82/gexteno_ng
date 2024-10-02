<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($id);
//Gral::prr($ins_tipo_lista_precio);
?>

<div class="tabs ficha-ins_tipo_lista_precio" identificador="<?php echo $ins_tipo_lista_precio->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_tipo_lista_precio id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_lista_precio->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_tipo_lista_precio descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_lista_precio descripcion_corta">
            <div class="label"><?php Lang::_lang('Descripcion Corta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_lista_precio->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_lista_precio codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_lista_precio->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_lista_precio porcentaje_incremento">
            <div class="label"><?php Lang::_lang('Porc Increm') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeIncremento()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_lista_precio importe_minimo">
            <div class="label"><?php Lang::_lang('Imp Min') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_lista_precio->getImporteMinimo()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_lista_precio incluye_logistica">
            <div class="label"><?php Lang::_lang('Incl Log') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ins_tipo_lista_precio->getIncluyeLogistica())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_lista_precio bulto_cerrado">
            <div class="label"><?php Lang::_lang('Bulto Cerrado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ins_tipo_lista_precio->getBultoCerrado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_lista_precio porcentaje_comision">
            <div class="label"><?php Lang::_lang('Porc Comis') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeComision()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_lista_precio porcentaje_logistica">
            <div class="label"><?php Lang::_lang('Porc Logis') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeLogistica()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_lista_precio porcentaje_descuento_maximo">
            <div class="label"><?php Lang::_lang('Porc Desc Max') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeDescuentoMaximo()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_lista_precio por_default">
            <div class="label"><?php Lang::_lang('Por Default') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ins_tipo_lista_precio->getPorDefault())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_lista_precio observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_lista_precio->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_lista_precio orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_lista_precio->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_lista_precio estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_lista_precio->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

