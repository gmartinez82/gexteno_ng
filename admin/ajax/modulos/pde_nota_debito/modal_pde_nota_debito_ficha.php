<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_nota_debito = PdeNotaDebito::getOxId($id);
//Gral::prr($pde_nota_debito);
?>

<div class="tabs ficha-pde_nota_debito" identificador="<?php echo $pde_nota_debito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_nota_debito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_nota_debito descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito pde_tipo_nota_debito_id">
            <div class="label"><?php Lang::_lang('PdeTipoNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getPdeTipoNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito pde_tipo_origen_nota_debito_id">
            <div class="label"><?php Lang::_lang('PdeTipoOrigenNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getPdeTipoOrigenNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito gral_tipo_personeria_id">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getGralTipoPersoneria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito pde_centro_pedido_id">
            <div class="label"><?php Lang::_lang('PdeCentroPedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getPdeCentroPedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito pde_nota_debito_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdeNotaDebitoTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getPdeNotaDebitoTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('GralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito gral_actividad_id">
            <div class="label"><?php Lang::_lang('GralActividad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getGralActividad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito gral_escenario_id">
            <div class="label"><?php Lang::_lang('GralEscenario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getGralEscenario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito numero_punto_venta">
            <div class="label"><?php Lang::_lang('Numero de Pto Vta') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getNumeroPuntoVenta()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito numero_nota_debito">
            <div class="label"><?php Lang::_lang('Numero de Nota de Debito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getNumeroNotaDebito()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito numero_nota_debito_completo">
            <div class="label"><?php Lang::_lang('Numero de Nota de Debito Completo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getNumeroNotaDebitoCompleto()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito cae">
            <div class="label"><?php Lang::_lang('Cae') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getCae()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito numero_despacho">
            <div class="label"><?php Lang::_lang('Numero de Despacho') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getNumeroDespacho()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito fecha_emision">
            <div class="label"><?php Lang::_lang('Fecha de Emision') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_nota_debito->getFechaEmision())) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito fecha_vencimiento">
            <div class="label"><?php Lang::_lang('Fecha de Vencimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_nota_debito->getFechaVencimiento())) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito persona_descripcion">
            <div class="label"><?php Lang::_lang('PersonaDescripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getPersonaDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito razon_social">
            <div class="label"><?php Lang::_lang('Razon Social') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getRazonSocial()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito domicilio_legal">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getDomicilioLegal()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito cuit">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getCuit()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito anio">
            <div class="label"><?php Lang::_lang('Anio') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getAnio()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito gral_mes_id">
            <div class="label"><?php Lang::_lang('GralMes') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getGralMes()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito cntb_diario_asiento_id">
            <div class="label"><?php Lang::_lang('CntbDiarioAsiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getCntbDiarioAsiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito prv_descuento_financiero_id">
            <div class="label"><?php Lang::_lang('PrvDescuentoFinanciero') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getPrvDescuentoFinanciero()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito nota_interna">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getNotaInterna()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_nota_debito->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

