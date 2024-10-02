<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_recepcion_estado_facturacion = PdeRecepcionEstadoFacturacion::getOxId($id);
//Gral::prr($pde_recepcion_estado_facturacion);
?>

<div class="tabs ficha-pde_recepcion_estado_facturacion" identificador="<?php echo $pde_recepcion_estado_facturacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_recepcion_estado_facturacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_estado_facturacion->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_recepcion_estado_facturacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_estado_facturacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_estado_facturacion pde_recepcion_id">
            <div class="label"><?php Lang::_lang('PdeRecepcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_estado_facturacion->getPdeRecepcion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_estado_facturacion pde_recepcion_tipo_estado_facturacion_id">
            <div class="label"><?php Lang::_lang('PdeRecepcionTipoEstadoFacturacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_estado_facturacion->getPdeRecepcionTipoEstadoFacturacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_estado_facturacion inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_recepcion_estado_facturacion->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_estado_facturacion actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_recepcion_estado_facturacion->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_estado_facturacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_estado_facturacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_estado_facturacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_estado_facturacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_estado_facturacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_estado_facturacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_estado_facturacion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_recepcion_estado_facturacion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

