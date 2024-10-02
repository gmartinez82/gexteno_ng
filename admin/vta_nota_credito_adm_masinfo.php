<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_nota_credito_id = Gral::getVars(2, 'id');
$vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Pto Vta') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_credito->getNumeroPuntoVenta())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Nota de Credito') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_credito->getNumeroNotaCredito())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Nota de Credito Completo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_credito->getNumeroNotaCreditoCompleto())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_credito->getDomicilioLegal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_credito->getCuit())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_credito->getNotaPublica())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_credito->getObservacion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_credito->getNotaInterna())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_NOTA_CREDITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_nota_credito->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_NOTA_CREDITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_nota_credito->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_ESTADO')){ ?>
            <li><a href="#tab_vta_nota_credito_estado"><?php Lang::_lang('VtaNotaCreditoEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_WS_FE_OPE_SOLICITUD')){ ?>
            <li><a href="#tab_vta_nota_credito_ws_fe_ope_solicitud"><?php Lang::_lang('VtaNotaCreditoWsFeOpeSolicitud') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_nota_credito_vta_factura_vta_orden_venta"><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_TRIBUTO')){ ?>
            <li><a href="#tab_vta_nota_credito_vta_factura_vta_tributo"><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_ITEM')){ ?>
            <li><a href="#tab_vta_nota_credito_item"><?php Lang::_lang('VtaNotaCreditoItem') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_ENVIADO')){ ?>
            <li><a href="#tab_vta_nota_credito_enviado"><?php Lang::_lang('VtaNotaCreditoEnviado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_VTA_TRIBUTO')){ ?>
            <li><a href="#tab_vta_nota_credito_vta_tributo"><?php Lang::_lang('VtaNotaCreditoVtaTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_DEBITO_VTA_NOTA_CREDITO')){ ?>
            <li><a href="#tab_vta_nota_debito_vta_nota_credito"><?php Lang::_lang('VtaNotaDebitoVtaNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_FACTURA_VTA_NOTA_CREDITO')){ ?>
            <li><a href="#tab_vta_factura_vta_nota_credito"><?php Lang::_lang('VtaFacturaVtaNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_NOTA_CREDITO')){ ?>
            <li><a href="#tab_cntb_diario_asiento_vta_nota_credito"><?php Lang::_lang('CntbDiarioAsientoVtaNotaCreditos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_AFIP_CITI_VENTAS_CBTE')){ ?>
            <li><a href="#tab_afip_citi_ventas_cbte"><?php Lang::_lang('AfipCitiVentasCbtes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_AFIP_CITI_VENTAS_ALICUOTAS')){ ?>
            <li><a href="#tab_afip_citi_ventas_alicuotas"><?php Lang::_lang('AfipCitiVentasAlicuotass') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_ESTADO')){ ?>
	<div id="tab_vta_nota_credito_estado" class="bloque-relacion vta_nota_credito_estado">
		
            <h4><?php Lang::_lang('VtaNotaCreditoEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_credito->getVtaNotaCreditoEstadosParaBloqueMasInfo() as $vta_nota_credito_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_credito_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_credito_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_credito_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_credito_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_credito_estado->getId() ?>" archivo="ajax/modulos/vta_nota_credito_estado/vta_nota_credito_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaCreditoEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaCreditoEstado') ?>">
                                <a href="vta_nota_credito_estado_alta.php?id=<?php echo $vta_nota_credito_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoEstado::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_estado->getFiltrosArrXCampo('VtaNotaCredito', 'vta_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditoEstados de ') ?> <strong><?php echo($vta_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_credito_estado_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaCreditoEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_WS_FE_OPE_SOLICITUD')){ ?>
	<div id="tab_vta_nota_credito_ws_fe_ope_solicitud" class="bloque-relacion vta_nota_credito_ws_fe_ope_solicitud">
		
            <h4><?php Lang::_lang('VtaNotaCreditoWsFeOpeSolicitud') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_credito->getVtaNotaCreditoWsFeOpeSolicitudsParaBloqueMasInfo() as $vta_nota_credito_ws_fe_ope_solicitud){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getDescripcionVinculante('VtaNotaCredito')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_ws_fe_ope_solicitud->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_ws_fe_ope_solicitud->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_credito_ws_fe_ope_solicitud->getId() ?>" archivo="ajax/modulos/vta_nota_credito_ws_fe_ope_solicitud/vta_nota_credito_ws_fe_ope_solicitud_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaCreditoWsFeOpeSolicitud') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_WS_FE_OPE_SOLICITUD_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaCreditoWsFeOpeSolicitud') ?>">
                                <a href="vta_nota_credito_ws_fe_ope_solicitud_alta.php?id=<?php echo $vta_nota_credito_ws_fe_ope_solicitud->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_WS_FE_OPE_SOLICITUD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito_ws_fe_ope_solicitud){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoWsFeOpeSolicitud::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_ws_fe_ope_solicitud->getFiltrosArrXCampo('VtaNotaCredito', 'vta_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditoWsFeOpeSolicituds de ') ?> <strong><?php echo($vta_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_credito_ws_fe_ope_solicitud_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaCreditoWsFeOpeSolicitud') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_nota_credito_vta_factura_vta_orden_venta" class="bloque-relacion vta_nota_credito_vta_factura_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_credito->getVtaNotaCreditoVtaFacturaVtaOrdenVentasParaBloqueMasInfo() as $vta_nota_credito_vta_factura_vta_orden_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_vta_factura_vta_orden_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_vta_factura_vta_orden_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_credito_vta_factura_vta_orden_venta->getId() ?>" archivo="ajax/modulos/vta_nota_credito_vta_factura_vta_orden_venta/vta_nota_credito_vta_factura_vta_orden_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?>">
                                <a href="vta_nota_credito_vta_factura_vta_orden_venta_alta.php?id=<?php echo $vta_nota_credito_vta_factura_vta_orden_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito_vta_factura_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoVtaFacturaVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_vta_factura_vta_orden_venta->getFiltrosArrXCampo('VtaNotaCredito', 'vta_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditoVtaFacturaVtaOrdenVentas de ') ?> <strong><?php echo($vta_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_credito_vta_factura_vta_orden_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_TRIBUTO')){ ?>
	<div id="tab_vta_nota_credito_vta_factura_vta_tributo" class="bloque-relacion vta_nota_credito_vta_factura_vta_tributo">
		
            <h4><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_credito->getVtaNotaCreditoVtaFacturaVtaTributosParaBloqueMasInfo() as $vta_nota_credito_vta_factura_vta_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_credito_vta_factura_vta_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_credito_vta_factura_vta_tributo->getDescripcionVinculante('VtaNotaCredito')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_credito_vta_factura_vta_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_vta_factura_vta_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_credito_vta_factura_vta_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_vta_factura_vta_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_credito_vta_factura_vta_tributo->getId() ?>" archivo="ajax/modulos/vta_nota_credito_vta_factura_vta_tributo/vta_nota_credito_vta_factura_vta_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_VTA_FACTURA_VTA_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaTributo') ?>">
                                <a href="vta_nota_credito_vta_factura_vta_tributo_alta.php?id=<?php echo $vta_nota_credito_vta_factura_vta_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito_vta_factura_vta_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoVtaFacturaVtaTributo::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_vta_factura_vta_tributo->getFiltrosArrXCampo('VtaNotaCredito', 'vta_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditoVtaFacturaVtaTributos de ') ?> <strong><?php echo($vta_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_credito_vta_factura_vta_tributo_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaCreditoVtaFacturaVtaTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_ITEM')){ ?>
	<div id="tab_vta_nota_credito_item" class="bloque-relacion vta_nota_credito_item">
		
            <h4><?php Lang::_lang('VtaNotaCreditoItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_credito->getVtaNotaCreditoItemsParaBloqueMasInfo() as $vta_nota_credito_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_credito_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_credito_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_credito_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_credito_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_credito_item->getId() ?>" archivo="ajax/modulos/vta_nota_credito_item/vta_nota_credito_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaCreditoItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaCreditoItem') ?>">
                                <a href="vta_nota_credito_item_alta.php?id=<?php echo $vta_nota_credito_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoItem::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_item->getFiltrosArrXCampo('VtaNotaCredito', 'vta_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditoItems de ') ?> <strong><?php echo($vta_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_credito_item_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaCreditoItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_ENVIADO')){ ?>
	<div id="tab_vta_nota_credito_enviado" class="bloque-relacion vta_nota_credito_enviado">
		
            <h4><?php Lang::_lang('VtaNotaCreditoEnviado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_credito->getVtaNotaCreditoEnviadosParaBloqueMasInfo() as $vta_nota_credito_enviado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_credito_enviado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_credito_enviado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_credito_enviado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_enviado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_credito_enviado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_enviado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_credito_enviado->getId() ?>" archivo="ajax/modulos/vta_nota_credito_enviado/vta_nota_credito_enviado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaCreditoEnviado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ENVIADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaCreditoEnviado') ?>">
                                <a href="vta_nota_credito_enviado_alta.php?id=<?php echo $vta_nota_credito_enviado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_ENVIADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito_enviado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoEnviado::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_enviado->getFiltrosArrXCampo('VtaNotaCredito', 'vta_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditoEnviados de ') ?> <strong><?php echo($vta_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_credito_enviado_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaCreditoEnviado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_VTA_TRIBUTO')){ ?>
	<div id="tab_vta_nota_credito_vta_tributo" class="bloque-relacion vta_nota_credito_vta_tributo">
		
            <h4><?php Lang::_lang('VtaNotaCreditoVtaTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_credito->getVtaNotaCreditoVtaTributosParaBloqueMasInfo() as $vta_nota_credito_vta_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_credito_vta_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_credito_vta_tributo->getDescripcionVinculante('VtaNotaCredito')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_credito_vta_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_vta_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_credito_vta_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_vta_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_credito_vta_tributo->getId() ?>" archivo="ajax/modulos/vta_nota_credito_vta_tributo/vta_nota_credito_vta_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaCreditoVtaTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_VTA_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaCreditoVtaTributo') ?>">
                                <a href="vta_nota_credito_vta_tributo_alta.php?id=<?php echo $vta_nota_credito_vta_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_CREDITO_VTA_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito_vta_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoVtaTributo::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_vta_tributo->getFiltrosArrXCampo('VtaNotaCredito', 'vta_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditoVtaTributos de ') ?> <strong><?php echo($vta_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_credito_vta_tributo_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaCreditoVtaTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_DEBITO_VTA_NOTA_CREDITO')){ ?>
	<div id="tab_vta_nota_debito_vta_nota_credito" class="bloque-relacion vta_nota_debito_vta_nota_credito">
		
            <h4><?php Lang::_lang('VtaNotaDebitoVtaNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_credito->getVtaNotaDebitoVtaNotaCreditosParaBloqueMasInfo() as $vta_nota_debito_vta_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_debito_vta_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_debito_vta_nota_credito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_debito_vta_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_vta_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_debito_vta_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_vta_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_debito_vta_nota_credito->getId() ?>" archivo="ajax/modulos/vta_nota_debito_vta_nota_credito/vta_nota_debito_vta_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaDebitoVtaNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_VTA_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaDebitoVtaNotaCredito') ?>">
                                <a href="vta_nota_debito_vta_nota_credito_alta.php?id=<?php echo $vta_nota_debito_vta_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_NOTA_DEBITO_VTA_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito_vta_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebitoVtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito_vta_nota_credito->getFiltrosArrXCampo('VtaNotaCredito', 'vta_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitoVtaNotaCreditos de ') ?> <strong><?php echo($vta_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_debito_vta_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaDebitoVtaNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_FACTURA_VTA_NOTA_CREDITO')){ ?>
	<div id="tab_vta_factura_vta_nota_credito" class="bloque-relacion vta_factura_vta_nota_credito">
		
            <h4><?php Lang::_lang('VtaFacturaVtaNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_credito->getVtaFacturaVtaNotaCreditosParaBloqueMasInfo() as $vta_factura_vta_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_factura_vta_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_factura_vta_nota_credito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_factura_vta_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_factura_vta_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_factura_vta_nota_credito->getId() ?>" archivo="ajax/modulos/vta_factura_vta_nota_credito/vta_factura_vta_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaFacturaVtaNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaFacturaVtaNotaCredito') ?>">
                                <a href="vta_factura_vta_nota_credito_alta.php?id=<?php echo $vta_factura_vta_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_VTA_FACTURA_VTA_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_vta_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaVtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_vta_nota_credito->getFiltrosArrXCampo('VtaNotaCredito', 'vta_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaVtaNotaCreditos de ') ?> <strong><?php echo($vta_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_factura_vta_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar VtaFacturaVtaNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_NOTA_CREDITO')){ ?>
	<div id="tab_cntb_diario_asiento_vta_nota_credito" class="bloque-relacion cntb_diario_asiento_vta_nota_credito">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoVtaNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_credito->getCntbDiarioAsientoVtaNotaCreditosParaBloqueMasInfo() as $cntb_diario_asiento_vta_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_vta_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_vta_nota_credito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_vta_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_vta_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_vta_nota_credito->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_vta_nota_credito/cntb_diario_asiento_vta_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoVtaNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoVtaNotaCredito') ?>">
                                <a href="cntb_diario_asiento_vta_nota_credito_alta.php?id=<?php echo $cntb_diario_asiento_vta_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_vta_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoVtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_vta_nota_credito->getFiltrosArrXCampo('VtaNotaCredito', 'vta_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoVtaNotaCreditos de ') ?> <strong><?php echo($vta_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_vta_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoVtaNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_AFIP_CITI_VENTAS_CBTE')){ ?>
	<div id="tab_afip_citi_ventas_cbte" class="bloque-relacion afip_citi_ventas_cbte">
		
            <h4><?php Lang::_lang('AfipCitiVentasCbte') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_credito->getAfipCitiVentasCbtesParaBloqueMasInfo() as $afip_citi_ventas_cbte){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($afip_citi_ventas_cbte->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($afip_citi_ventas_cbte->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($afip_citi_ventas_cbte->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_ventas_cbte->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($afip_citi_ventas_cbte->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_ventas_cbte->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $afip_citi_ventas_cbte->getId() ?>" archivo="ajax/modulos/afip_citi_ventas_cbte/afip_citi_ventas_cbte_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AfipCitiVentasCbte') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_VENTAS_CBTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AfipCitiVentasCbte') ?>">
                                <a href="afip_citi_ventas_cbte_alta.php?id=<?php echo $afip_citi_ventas_cbte->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_AFIP_CITI_VENTAS_CBTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_ventas_cbte){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiVentasCbte::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_ventas_cbte->getFiltrosArrXCampo('VtaNotaCredito', 'vta_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiVentasCbtes de ') ?> <strong><?php echo($vta_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="afip_citi_ventas_cbte_alta.php" >
                            <?php Lang::_lang('Agregar AfipCitiVentasCbte') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_AFIP_CITI_VENTAS_ALICUOTAS')){ ?>
	<div id="tab_afip_citi_ventas_alicuotas" class="bloque-relacion afip_citi_ventas_alicuotas">
		
            <h4><?php Lang::_lang('AfipCitiVentasAlicuotas') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_credito->getAfipCitiVentasAlicuotassParaBloqueMasInfo() as $afip_citi_ventas_alicuotas){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($afip_citi_ventas_alicuotas->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($afip_citi_ventas_alicuotas->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($afip_citi_ventas_alicuotas->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_ventas_alicuotas->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($afip_citi_ventas_alicuotas->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_ventas_alicuotas->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $afip_citi_ventas_alicuotas->getId() ?>" archivo="ajax/modulos/afip_citi_ventas_alicuotas/afip_citi_ventas_alicuotas_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AfipCitiVentasAlicuotas') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_VENTAS_ALICUOTAS_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AfipCitiVentasAlicuotas') ?>">
                                <a href="afip_citi_ventas_alicuotas_alta.php?id=<?php echo $afip_citi_ventas_alicuotas->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_MASINFO_AFIP_CITI_VENTAS_ALICUOTAS_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_ventas_alicuotas){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiVentasAlicuotas::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_ventas_alicuotas->getFiltrosArrXCampo('VtaNotaCredito', 'vta_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiVentasAlicuotass de ') ?> <strong><?php echo($vta_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="afip_citi_ventas_alicuotas_alta.php" >
                            <?php Lang::_lang('Agregar AfipCitiVentasAlicuotas') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

