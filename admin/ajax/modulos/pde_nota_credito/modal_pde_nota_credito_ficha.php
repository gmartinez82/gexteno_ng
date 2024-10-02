<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_nota_credito = PdeNotaCredito::getOxId($id);
//Gral::prr($pde_nota_credito);
?>

<div class="tabs ficha-pde_nota_credito" identificador="<?php echo $pde_nota_credito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_nota_credito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_nota_credito descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito pde_tipo_nota_credito_id">
            <div class="label"><?php Lang::_lang('PdeTipoNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getPdeTipoNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito pde_tipo_origen_nota_credito_id">
            <div class="label"><?php Lang::_lang('PdeTipoOrigenNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getPdeTipoOrigenNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito gral_tipo_personeria_id">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getGralTipoPersoneria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito pde_centro_pedido_id">
            <div class="label"><?php Lang::_lang('PdeCentroPedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getPdeCentroPedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito pde_nota_credito_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdeNotaCreditoTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getPdeNotaCreditoTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('GralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito gral_actividad_id">
            <div class="label"><?php Lang::_lang('GralActividad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getGralActividad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito gral_escenario_id">
            <div class="label"><?php Lang::_lang('GralEscenario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getGralEscenario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito numero_punto_venta">
            <div class="label"><?php Lang::_lang('Numero de Pto Vta') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getNumeroPuntoVenta()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito numero_nota_credito">
            <div class="label"><?php Lang::_lang('Numero de Nota de Credito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getNumeroNotaCredito()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito numero_nota_credito_completo">
            <div class="label"><?php Lang::_lang('Numero de Nota de Credito Completo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getNumeroNotaCreditoCompleto()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito cae">
            <div class="label"><?php Lang::_lang('Cae') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getCae()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito numero_despacho">
            <div class="label"><?php Lang::_lang('Numero de Despacho') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getNumeroDespacho()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito fecha_emision">
            <div class="label"><?php Lang::_lang('Fecha de Emision') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_nota_credito->getFechaEmision())) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito fecha_vencimiento">
            <div class="label"><?php Lang::_lang('Fecha de Vencimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_nota_credito->getFechaVencimiento())) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito persona_descripcion">
            <div class="label"><?php Lang::_lang('PersonaDescripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getPersonaDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito razon_social">
            <div class="label"><?php Lang::_lang('Razon Social') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getRazonSocial()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito domicilio_legal">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getDomicilioLegal()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito cuit">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getCuit()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito anio">
            <div class="label"><?php Lang::_lang('Anio') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getAnio()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito gral_mes_id">
            <div class="label"><?php Lang::_lang('GralMes') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getGralMes()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito cntb_diario_asiento_id">
            <div class="label"><?php Lang::_lang('CntbDiarioAsiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getCntbDiarioAsiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito nota_interna">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getNotaInterna()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_nota_credito->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

