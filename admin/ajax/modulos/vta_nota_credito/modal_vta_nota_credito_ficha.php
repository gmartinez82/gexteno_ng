<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_nota_credito = VtaNotaCredito::getOxId($id);
//Gral::prr($vta_nota_credito);
?>

<div class="tabs ficha-vta_nota_credito" identificador="<?php echo $vta_nota_credito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_nota_credito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_nota_credito descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito vta_tipo_nota_credito_id">
            <div class="label"><?php Lang::_lang('VtaTipoNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getVtaTipoNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito vta_tipo_origen_nota_credito_id">
            <div class="label"><?php Lang::_lang('VtaTipoOrigenNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getVtaTipoOrigenNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito gral_tipo_personeria_id">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getGralTipoPersoneria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito vta_nota_credito_tipo_estado_id">
            <div class="label"><?php Lang::_lang('VtaNotaCreditoTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getVtaNotaCreditoTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito vta_punto_venta_id">
            <div class="label"><?php Lang::_lang('VtaPuntoVenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getVtaPuntoVenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('GralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito vta_preventista_id">
            <div class="label"><?php Lang::_lang('VtaPreventista') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getVtaPreventista()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito gral_actividad_id">
            <div class="label"><?php Lang::_lang('GralActividad') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getGralActividad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito gral_escenario_id">
            <div class="label"><?php Lang::_lang('GralEscenario') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getGralEscenario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito numero_punto_venta">
            <div class="label"><?php Lang::_lang('Numero de Pto Vta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getNumeroPuntoVenta()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito numero_nota_credito">
            <div class="label"><?php Lang::_lang('Numero de Nota de Credito') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getNumeroNotaCredito()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito numero_nota_credito_completo">
            <div class="label"><?php Lang::_lang('Numero de Nota de Credito Completo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getNumeroNotaCreditoCompleto()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito cae">
            <div class="label"><?php Lang::_lang('Cae') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getCae()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito fecha_emision">
            <div class="label"><?php Lang::_lang('Fecha de Emision') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_nota_credito->getFechaEmision())) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito fecha_vencimiento">
            <div class="label"><?php Lang::_lang('Fecha de Vencimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_nota_credito->getFechaVencimiento())) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito gral_tipo_documento_id">
            <div class="label"><?php Lang::_lang('GralTipoDocumento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getGralTipoDocumento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito persona_descripcion">
            <div class="label"><?php Lang::_lang('PersonaDescripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getPersonaDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito persona_documento">
            <div class="label"><?php Lang::_lang('Persona Documento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getPersonaDocumento()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito persona_email">
            <div class="label"><?php Lang::_lang('Persona Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getPersonaEmail()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito razon_social">
            <div class="label"><?php Lang::_lang('Razon Social') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getRazonSocial()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito domicilio_legal">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getDomicilioLegal()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito cuit">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getCuit()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito nota_publica">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getNotaPublica()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito anio">
            <div class="label"><?php Lang::_lang('Anio') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getAnio()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito gral_mes_id">
            <div class="label"><?php Lang::_lang('GralMes') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getGralMes()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito cntb_diario_asiento_id">
            <div class="label"><?php Lang::_lang('CntbDiarioAsiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getCntbDiarioAsiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito nota_interna">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getNotaInterna()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_nota_credito->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

