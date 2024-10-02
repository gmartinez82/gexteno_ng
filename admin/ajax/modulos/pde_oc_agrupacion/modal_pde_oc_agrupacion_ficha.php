<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_oc_agrupacion = PdeOcAgrupacion::getOxId($id);
//Gral::prr($pde_oc_agrupacion);
?>

<div class="tabs ficha-pde_oc_agrupacion" identificador="<?php echo $pde_oc_agrupacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_oc_agrupacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_oc_agrupacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion pde_oc_tipo_origen_id">
            <div class="label"><?php Lang::_lang('PdeOcTipoOrigen') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getPdeOcTipoOrigen()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion pde_centro_pedido_id">
            <div class="label"><?php Lang::_lang('PdeCentroPedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getPdeCentroPedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion pde_centro_recepcion_id">
            <div class="label"><?php Lang::_lang('PdeCentroRecepcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getPdeCentroRecepcion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion pde_oc_agrupacion_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdeOcAgrupacionTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getPdeOcAgrupacionTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion prv_descuento_financiero_id">
            <div class="label"><?php Lang::_lang('PrvDescuentoFinanciero') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getPrvDescuentoFinanciero()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion fecha_entrega">
            <div class="label"><?php Lang::_lang('Fecha Entrega') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_oc_agrupacion->getFechaEntrega())) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion vencimiento">
            <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_oc_agrupacion->getVencimiento())) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion nota_publica">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getNotaPublica()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion nota_interna">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getNotaInterna()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

