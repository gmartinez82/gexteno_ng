<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_cotizacion = PdeCotizacion::getOxId($id);
//Gral::prr($pde_cotizacion);
?>

<div class="tabs ficha-pde_cotizacion" identificador="<?php echo $pde_cotizacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_cotizacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_cotizacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion pde_pedido_id">
            <div class="label"><?php Lang::_lang('PdePedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion->getPdePedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion fecha_entrega">
            <div class="label"><?php Lang::_lang('Fecha Entrega') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_cotizacion->getFechaEntrega())) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion importe_unidad">
            <div class="label"><?php Lang::_lang('Importe Unidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion->getImporteUnidad()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion importe_total">
            <div class="label"><?php Lang::_lang('Importe Total') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion->getImporteTotal()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

