<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_insumo_costo = PrvInsumoCosto::getOxId($id);
//Gral::prr($prv_insumo_costo);
?>

<div class="tabs ficha-prv_insumo_costo" identificador="<?php echo $prv_insumo_costo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_insumo_costo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo_costo->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_insumo_costo prv_insumo_id">
            <div class="label"><?php Lang::_lang('PrvInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo_costo->getPrvInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo_costo importe_bruto">
            <div class="label"><?php Lang::_lang('Importe Bruto') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo_costo->getImporteBruto()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo_costo descuento">
            <div class="label"><?php Lang::_lang('Descuento') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo_costo->getDescuento()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo_costo inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo_costo->getInicial()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo_costo actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo_costo->getActual()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo_costo numero_importacion">
            <div class="label"><?php Lang::_lang('Nro Importac') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo_costo->getNumeroImportacion()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo_costo fecha_actualizacion">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo_costo->getFechaActualizacion())) ?>
            </div>
        </div>
		
        <div class="par prv_insumo_costo prv_importacion_id">
            <div class="label"><?php Lang::_lang('PrvImportacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo_costo->getPrvImportacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo_costo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo_costo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo_costo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo_costo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo_costo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo_costo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

