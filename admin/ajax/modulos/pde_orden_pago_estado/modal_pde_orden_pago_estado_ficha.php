<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_orden_pago_estado = PdeOrdenPagoEstado::getOxId($id);
//Gral::prr($pde_orden_pago_estado);
?>

<div class="tabs ficha-pde_orden_pago_estado" identificador="<?php echo $pde_orden_pago_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_orden_pago_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_orden_pago_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_estado pde_orden_pago_id">
            <div class="label"><?php Lang::_lang('PdeOrdenPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_estado->getPdeOrdenPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_estado pde_orden_pago_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdeOrdenPagoTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_estado->getPdeOrdenPagoTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_orden_pago_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_orden_pago_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_estado prv_preventista_id">
            <div class="label"><?php Lang::_lang('PrvPreventista') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_estado->getPrvPreventista()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_estado gral_empresa_transportadora_id">
            <div class="label"><?php Lang::_lang('GralEmpresaTransportadora') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_estado->getGralEmpresaTransportadora()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_estado guia">
            <div class="label"><?php Lang::_lang('Guia') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_estado->getGuia()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_estado nota_interna">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_estado->getNotaInterna()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_estado nota_publica">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_estado->getNotaPublica()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_orden_pago_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

