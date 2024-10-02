<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_recepcion_agrupacion = PdeRecepcionAgrupacion::getOxId($id);
//Gral::prr($pde_recepcion_agrupacion);
?>

<div class="tabs ficha-pde_recepcion_agrupacion" identificador="<?php echo $pde_recepcion_agrupacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_recepcion_agrupacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_agrupacion->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_recepcion_agrupacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_agrupacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_agrupacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_agrupacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_agrupacion nro_comprobante">
            <div class="label"><?php Lang::_lang('Nro Comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_agrupacion->getNroComprobante()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_agrupacion pde_tipo_recepcion_id">
            <div class="label"><?php Lang::_lang('PdeTipoRecepcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_agrupacion->getPdeTipoRecepcion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_agrupacion pde_centro_recepcion_id">
            <div class="label"><?php Lang::_lang('PdeCentroRecepcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_agrupacion->getPdeCentroRecepcion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_agrupacion prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_agrupacion->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_agrupacion fecha_entrega">
            <div class="label"><?php Lang::_lang('Fecha Entrega') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_recepcion_agrupacion->getFechaEntrega())) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_agrupacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_agrupacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_agrupacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_agrupacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_agrupacion estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_agrupacion->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

