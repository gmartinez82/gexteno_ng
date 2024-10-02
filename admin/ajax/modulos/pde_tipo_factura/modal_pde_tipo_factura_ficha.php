<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_tipo_factura = PdeTipoFactura::getOxId($id);
//Gral::prr($pde_tipo_factura);
?>

<div class="tabs ficha-pde_tipo_factura" identificador="<?php echo $pde_tipo_factura->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_tipo_factura id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_factura->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_tipo_factura descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_factura->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_tipo_factura codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_factura->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_tipo_factura codigo_min">
            <div class="label"><?php Lang::_lang('Codigo Min') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_factura->getCodigoMin()) ?>
            </div>
        </div>
		
        <div class="par pde_tipo_factura informa">
            <div class="label"><?php Lang::_lang('Informa') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_tipo_factura->getInforma())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_tipo_factura observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_factura->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_tipo_factura orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_factura->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_tipo_factura estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_factura->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

