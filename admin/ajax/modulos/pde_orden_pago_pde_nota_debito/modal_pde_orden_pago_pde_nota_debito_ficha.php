<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_orden_pago_pde_nota_debito = PdeOrdenPagoPdeNotaDebito::getOxId($id);
//Gral::prr($pde_orden_pago_pde_nota_debito);
?>

<div class="tabs ficha-pde_orden_pago_pde_nota_debito" identificador="<?php echo $pde_orden_pago_pde_nota_debito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_orden_pago_pde_nota_debito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_pde_nota_debito->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_orden_pago_pde_nota_debito descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_pde_nota_debito->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_pde_nota_debito pde_orden_pago_id">
            <div class="label"><?php Lang::_lang('PdeOrdenPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_pde_nota_debito->getPdeOrdenPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_pde_nota_debito pde_nota_debito_id">
            <div class="label"><?php Lang::_lang('PdeNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_pde_nota_debito->getPdeNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_pde_nota_debito importe_afectado">
            <div class="label"><?php Lang::_lang('Imp Afectado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_pde_nota_debito->getImporteAfectado()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_pde_nota_debito codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_pde_nota_debito->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_pde_nota_debito observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_pde_nota_debito->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_pde_nota_debito orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_pde_nota_debito->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_pde_nota_debito estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_orden_pago_pde_nota_debito->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

