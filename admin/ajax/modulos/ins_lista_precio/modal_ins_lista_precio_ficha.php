<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_lista_precio = InsListaPrecio::getOxId($id);
//Gral::prr($ins_lista_precio);
?>

<div class="tabs ficha-ins_lista_precio" identificador="<?php echo $ins_lista_precio->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_lista_precio id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_lista_precio->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_lista_precio ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_lista_precio->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_lista_precio ins_tipo_lista_precio_id">
            <div class="label"><?php Lang::_lang('InsTipoListaPrecio') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_lista_precio->getInsTipoListaPrecio()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_lista_precio importe_calculado">
            <div class="label"><?php Lang::_lang('Imp Calc') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_lista_precio->getImporteCalculado()) ?>
            </div>
        </div>
		
        <div class="par ins_lista_precio importe_manual">
            <div class="label"><?php Lang::_lang('Imp Manual') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_lista_precio->getImporteManual()) ?>
            </div>
        </div>
		
        <div class="par ins_lista_precio importe_venta">
            <div class="label"><?php Lang::_lang('Imp Venta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_lista_precio->getImporteVenta()) ?>
            </div>
        </div>
		
        <div class="par ins_lista_precio porcentaje_incremento">
            <div class="label"><?php Lang::_lang('Porc Increm') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_lista_precio->getPorcentajeIncremento()) ?>
            </div>
        </div>
		
        <div class="par ins_lista_precio porcentaje_descuento">
            <div class="label"><?php Lang::_lang('Porc Increm') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_lista_precio->getPorcentajeDescuento()) ?>
            </div>
        </div>
		
        <div class="par ins_lista_precio porcentaje_descuento_fijo">
            <div class="label"><?php Lang::_lang('Porc Increm Fijo') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ins_lista_precio->getPorcentajeDescuentoFijo())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_lista_precio cantidad_minima_venta">
            <div class="label"><?php Lang::_lang('Cantidad Minima Venta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_lista_precio->getCantidadMinimaVenta()) ?>
            </div>
        </div>
		
        <div class="par ins_lista_precio habilitado">
            <div class="label"><?php Lang::_lang('Habilitado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ins_lista_precio->getHabilitado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

