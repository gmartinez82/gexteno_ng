<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_recepcion = PdeRecepcion::getOxId($id);
//Gral::prr($pde_recepcion);
?>

<div class="tabs ficha-pde_recepcion" identificador="<?php echo $pde_recepcion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_recepcion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_recepcion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion nro_comprobante">
            <div class="label"><?php Lang::_lang('Nro Comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getNroComprobante()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion pde_tipo_recepcion_id">
            <div class="label"><?php Lang::_lang('PdeTipoRecepcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getPdeTipoRecepcion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion pde_centro_recepcion_id">
            <div class="label"><?php Lang::_lang('PdeCentroRecepcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getPdeCentroRecepcion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion pde_pedido_id">
            <div class="label"><?php Lang::_lang('PdePedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getPdePedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion pde_oc_id">
            <div class="label"><?php Lang::_lang('PdeOc') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getPdeOc()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion pde_recepcion_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdeRecepcionTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getPdeRecepcionTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion pde_recepcion_tipo_estado_facturacion_id">
            <div class="label"><?php Lang::_lang('PdeRecepcionTipoEstadoFacturacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getPdeRecepcionTipoEstadoFacturacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion fecha_entrega">
            <div class="label"><?php Lang::_lang('Fecha Entrega') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_recepcion->getFechaEntrega())) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion importe_unidad">
            <div class="label"><?php Lang::_lang('Importe Unidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getImporteUnidad()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion importe_total">
            <div class="label"><?php Lang::_lang('Importe Total') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getImporteTotal()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion vencimiento">
            <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_recepcion->getVencimiento())) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion pde_recepcion_agrupacion_id">
            <div class="label"><?php Lang::_lang('PdeRecepcionAgrupacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getPdeRecepcionAgrupacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

