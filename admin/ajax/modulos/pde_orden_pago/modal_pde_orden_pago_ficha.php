<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_orden_pago = PdeOrdenPago::getOxId($id);
//Gral::prr($pde_orden_pago);
?>

<div class="tabs ficha-pde_orden_pago" identificador="<?php echo $pde_orden_pago->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_orden_pago id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_orden_pago descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago pde_orden_pago_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdeOrdenPagoTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getPdeOrdenPagoTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago gral_tipo_personeria_id">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getGralTipoPersoneria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago pde_centro_pedido_id">
            <div class="label"><?php Lang::_lang('PdeCentroPedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getPdeCentroPedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago fecha_emision">
            <div class="label"><?php Lang::_lang('Fecha de Emision') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_orden_pago->getFechaEmision())) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago persona_descripcion">
            <div class="label"><?php Lang::_lang('PersonaDescripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getPersonaDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago razon_social">
            <div class="label"><?php Lang::_lang('Razon Social') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getRazonSocial()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago domicilio_legal">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getDomicilioLegal()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago cuit">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getCuit()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago anio">
            <div class="label"><?php Lang::_lang('Anio') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getAnio()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago gral_mes_id">
            <div class="label"><?php Lang::_lang('GralMes') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getGralMes()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago fnd_caja_id">
            <div class="label"><?php Lang::_lang('FndCaja') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getFndCaja()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago nota_publica">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getNotaPublica()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_orden_pago->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

