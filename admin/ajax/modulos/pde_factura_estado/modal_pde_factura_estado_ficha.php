<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_factura_estado = PdeFacturaEstado::getOxId($id);
//Gral::prr($pde_factura_estado);
?>

<div class="tabs ficha-pde_factura_estado" identificador="<?php echo $pde_factura_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_factura_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_factura_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_estado pde_factura_id">
            <div class="label"><?php Lang::_lang('PdeFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_estado->getPdeFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_estado pde_factura_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdeFacturaTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_estado->getPdeFacturaTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_factura_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_factura_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_factura_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

