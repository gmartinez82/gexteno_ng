<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_recibo = VtaRecibo::getOxId($id);
//Gral::prr($vta_recibo);
?>

<div class="tabs ficha-vta_recibo" identificador="<?php echo $vta_recibo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_recibo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_recibo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo vta_tipo_recibo_id">
            <div class="label"><?php Lang::_lang('VtaTipoRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getVtaTipoRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo vta_tipo_origen_recibo_id">
            <div class="label"><?php Lang::_lang('VtaTipoOrigenRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getVtaTipoOrigenRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo gral_tipo_personeria_id">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getGralTipoPersoneria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo vta_punto_venta_id">
            <div class="label"><?php Lang::_lang('VtaPuntoVenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getVtaPuntoVenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo vta_recibo_tipo_estado_id">
            <div class="label"><?php Lang::_lang('VtaReciboTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getVtaReciboTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo numero_punto_venta">
            <div class="label"><?php Lang::_lang('Numero de Pto Vta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getNumeroPuntoVenta()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo numero_recibo">
            <div class="label"><?php Lang::_lang('Numero de Recibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getNumeroRecibo()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo numero_recibo_completo">
            <div class="label"><?php Lang::_lang('Numero de Recibo Completo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getNumeroReciboCompleto()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo cae">
            <div class="label"><?php Lang::_lang('Cae') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getCae()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo fecha_emision">
            <div class="label"><?php Lang::_lang('Fecha de Emision') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_recibo->getFechaEmision())) ?>
            </div>
        </div>
		
        <div class="par vta_recibo gral_tipo_documento_id">
            <div class="label"><?php Lang::_lang('GralTipoDocumento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getGralTipoDocumento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo persona_descripcion">
            <div class="label"><?php Lang::_lang('PersonaDescripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getPersonaDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo persona_documento">
            <div class="label"><?php Lang::_lang('Persona Documento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getPersonaDocumento()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo persona_email">
            <div class="label"><?php Lang::_lang('Persona Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getPersonaEmail()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo razon_social">
            <div class="label"><?php Lang::_lang('Razon Social') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getRazonSocial()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo domicilio_legal">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getDomicilioLegal()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo cuit">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getCuit()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo vta_presupuesto_id">
            <div class="label"><?php Lang::_lang('VtaPresupuesto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getVtaPresupuesto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo vta_preventista_id">
            <div class="label"><?php Lang::_lang('VtaPreventista') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getVtaPreventista()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo anio">
            <div class="label"><?php Lang::_lang('Anio') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getAnio()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo gral_mes_id">
            <div class="label"><?php Lang::_lang('GralMes') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getGralMes()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo cntb_diario_asiento_id">
            <div class="label"><?php Lang::_lang('CntbDiarioAsiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getCntbDiarioAsiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo fnd_caja_id">
            <div class="label"><?php Lang::_lang('FndCaja') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getFndCaja()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo gral_sucursal_id">
            <div class="label"><?php Lang::_lang('GralSucursal') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getGralSucursal()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo nota_interna">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getNotaInterna()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo nota_publica">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getNotaPublica()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_recibo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

