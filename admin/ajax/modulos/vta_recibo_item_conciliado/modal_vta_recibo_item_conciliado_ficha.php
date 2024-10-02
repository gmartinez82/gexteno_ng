<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_recibo_item_conciliado = VtaReciboItemConciliado::getOxId($id);
//Gral::prr($vta_recibo_item_conciliado);
?>

<div class="tabs ficha-vta_recibo_item_conciliado" identificador="<?php echo $vta_recibo_item_conciliado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_recibo_item_conciliado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_conciliado->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_recibo_item_conciliado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_conciliado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_conciliado vta_recibo_item_id">
            <div class="label"><?php Lang::_lang('VtaReciboItem') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_conciliado->getVtaReciboItem()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_conciliado importe_original">
            <div class="label"><?php Lang::_lang('Imp Original') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_conciliado->getImporteOriginal()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_conciliado importe_conciliado">
            <div class="label"><?php Lang::_lang('Imp Conciliado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_conciliado->getImporteConciliado()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_conciliado importe_diferencia">
            <div class="label"><?php Lang::_lang('Imp Diferencia') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_conciliado->getImporteDiferencia()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_conciliado fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_recibo_item_conciliado->getFecha())) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_conciliado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_conciliado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_conciliado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_conciliado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_conciliado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_conciliado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_conciliado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_recibo_item_conciliado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

