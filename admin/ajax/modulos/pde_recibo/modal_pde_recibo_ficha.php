<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_recibo = PdeRecibo::getOxId($id);
//Gral::prr($pde_recibo);
?>

<div class="tabs ficha-pde_recibo" identificador="<?php echo $pde_recibo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_recibo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_recibo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo pde_tipo_recibo_id">
            <div class="label"><?php Lang::_lang('PdeTipoRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getPdeTipoRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo pde_tipo_origen_recibo_id">
            <div class="label"><?php Lang::_lang('PdeTipoOrigenRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getPdeTipoOrigenRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo gral_tipo_personeria_id">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getGralTipoPersoneria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo pde_centro_pedido_id">
            <div class="label"><?php Lang::_lang('PdeCentroPedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getPdeCentroPedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo pde_recibo_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdeReciboTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getPdeReciboTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo numero_punto_venta">
            <div class="label"><?php Lang::_lang('Numero de Pto Vta') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getNumeroPuntoVenta()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo numero_recibo">
            <div class="label"><?php Lang::_lang('Numero de Recibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getNumeroRecibo()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo numero_recibo_completo">
            <div class="label"><?php Lang::_lang('Numero de Recibo Completo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getNumeroReciboCompleto()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo cae">
            <div class="label"><?php Lang::_lang('Cae') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getCae()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo fecha_emision">
            <div class="label"><?php Lang::_lang('Fecha de Emision') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_recibo->getFechaEmision())) ?>
            </div>
        </div>
		
        <div class="par pde_recibo persona_descripcion">
            <div class="label"><?php Lang::_lang('PersonaDescripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getPersonaDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo razon_social">
            <div class="label"><?php Lang::_lang('Razon Social') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getRazonSocial()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo domicilio_legal">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getDomicilioLegal()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo cuit">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getCuit()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo anio">
            <div class="label"><?php Lang::_lang('Anio') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getAnio()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo gral_mes_id">
            <div class="label"><?php Lang::_lang('GralMes') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getGralMes()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo cntb_diario_asiento_id">
            <div class="label"><?php Lang::_lang('CntbDiarioAsiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getCntbDiarioAsiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo pde_orden_pago_id">
            <div class="label"><?php Lang::_lang('PdeOrdenPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getPdeOrdenPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo fnd_caja_id">
            <div class="label"><?php Lang::_lang('FndCaja') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getFndCaja()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo nota_interna">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getNotaInterna()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_recibo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

