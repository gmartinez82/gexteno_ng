<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_chq_cheque = FndChqCheque::getOxId($id);
//Gral::prr($fnd_chq_cheque);
?>

<div class="tabs ficha-fnd_chq_cheque" identificador="<?php echo $fnd_chq_cheque->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_chq_cheque id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_chq_cheque descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque fnd_chq_chequera_id">
            <div class="label"><?php Lang::_lang('FndChqChequera') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getFndChqChequera()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque gral_banco_id">
            <div class="label"><?php Lang::_lang('GralBanco') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getGralBanco()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque codigo_sucursal">
            <div class="label"><?php Lang::_lang('Codigo Sucursal') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getCodigoSucursal()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque numero">
            <div class="label"><?php Lang::_lang('Numero') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getNumero()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque fecha_emision">
            <div class="label"><?php Lang::_lang('Fecha Emision') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($fnd_chq_cheque->getFechaEmision())) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque fecha_cobro">
            <div class="label"><?php Lang::_lang('Fecha Cobro') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($fnd_chq_cheque->getFechaCobro())) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque fecha_acreditacion">
            <div class="label"><?php Lang::_lang('Fecha Acreditacion') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($fnd_chq_cheque->getFechaAcreditacion())) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque fecha_vencimiento">
            <div class="label"><?php Lang::_lang('Fecha Vencimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($fnd_chq_cheque->getFechaVencimiento())) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque firmante">
            <div class="label"><?php Lang::_lang('Firmante') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getFirmante()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque entregador">
            <div class="label"><?php Lang::_lang('Entregador') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getEntregador()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque fnd_chq_tipo_emisor_id">
            <div class="label"><?php Lang::_lang('FndChqTipoEmisor') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoEmisor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque fnd_chq_tipo_emision_id">
            <div class="label"><?php Lang::_lang('FndChqTipoEmision') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoEmision()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque fnd_chq_tipo_pago_id">
            <div class="label"><?php Lang::_lang('FndChqTipoPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque fnd_chq_tipo_estado_id">
            <div class="label"><?php Lang::_lang('FndChqTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque importe">
            <div class="label"><?php Lang::_lang('Importe') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getImporte()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque cruzado">
            <div class="label"><?php Lang::_lang('Cruzado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_cheque->getCruzado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque vta_recibo_id">
            <div class="label"><?php Lang::_lang('VtaRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getVtaRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque vta_recibo_item_id">
            <div class="label"><?php Lang::_lang('VtaReciboItem') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getVtaReciboItem()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque vta_comision_id">
            <div class="label"><?php Lang::_lang('VtaComision') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getVtaComision()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque vta_comision_gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('VtaComisionGralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getVtaComisionGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque pde_orden_pago_id">
            <div class="label"><?php Lang::_lang('OrdenPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getPdeOrdenPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque pde_orden_pago_gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('PdeOrdenPagoGralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getPdeOrdenPagoGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque pde_recibo_id">
            <div class="label"><?php Lang::_lang('PdeRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getPdeRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque pde_recibo_item_id">
            <div class="label"><?php Lang::_lang('PdeReciboItem') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getPdeReciboItem()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque fnd_caja_movimiento_id">
            <div class="label"><?php Lang::_lang('FndCajaMovimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getFndCajaMovimiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque fnd_caja_movimiento_item_id">
            <div class="label"><?php Lang::_lang('FndCajaMovimientoItem') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getFndCajaMovimientoItem()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque fnd_caja_id">
            <div class="label"><?php Lang::_lang('FndCaja') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getFndCaja()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque gral_caja_id">
            <div class="label"><?php Lang::_lang('GralCaja') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getGralCaja()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque fnd_caja_ingreso_id">
            <div class="label"><?php Lang::_lang('FndCajaIngreso') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getFndCajaIngreso()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque fnd_caja_egreso_id">
            <div class="label"><?php Lang::_lang('FndCajaEngreso') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getFndCajaEgreso()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_cheque estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

