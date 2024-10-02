<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_factura_estado = VtaFacturaEstado::getOxId($id);
//Gral::prr($vta_factura_estado);
?>

<div class="tabs ficha-vta_factura_estado" identificador="<?php echo $vta_factura_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_factura_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_factura_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_estado vta_factura_id">
            <div class="label"><?php Lang::_lang('VtaFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_estado->getVtaFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_estado vta_factura_tipo_estado_id">
            <div class="label"><?php Lang::_lang('VtaFacturaTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_estado->getVtaFacturaTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_factura_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_factura_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_factura_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

