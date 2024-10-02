<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_factura_pde_recepcion = PdeFacturaPdeRecepcion::getOxId($id);
//Gral::prr($pde_factura_pde_recepcion);
?>

<div class="tabs ficha-pde_factura_pde_recepcion" identificador="<?php echo $pde_factura_pde_recepcion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_factura_pde_recepcion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_recepcion->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_factura_pde_recepcion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_recepcion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_recepcion pde_factura_id">
            <div class="label"><?php Lang::_lang('PdeFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_recepcion->getPdeFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_recepcion pde_recepcion_id">
            <div class="label"><?php Lang::_lang('PdeRecepcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_recepcion->getPdeRecepcion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_recepcion ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_recepcion->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_recepcion ins_unidad_medida_id">
            <div class="label"><?php Lang::_lang('InsUnidadMedida') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_recepcion->getInsUnidadMedida()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_recepcion gral_tipo_iva_id">
            <div class="label"><?php Lang::_lang('GralTipoIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_recepcion->getGralTipoIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_recepcion importe_unitario">
            <div class="label"><?php Lang::_lang('Imp Unitario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_recepcion->getImporteUnitario()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_recepcion cantidad">
            <div class="label"><?php Lang::_lang('cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_recepcion->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_recepcion ins_insumo_costo_id">
            <div class="label"><?php Lang::_lang('InsInsumoCosto') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_recepcion->getInsInsumoCosto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_recepcion importe_costo">
            <div class="label"><?php Lang::_lang('Imp Costo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_recepcion->getImporteCosto()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_recepcion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_recepcion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_recepcion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_recepcion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_recepcion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_recepcion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_recepcion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_factura_pde_recepcion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

