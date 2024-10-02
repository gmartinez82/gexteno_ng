<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_factura_id = Gral::getVars(2, 'id');
$vta_factura = VtaFactura::getOxId($vta_factura_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Pto Vta') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_factura->getNumeroPuntoVenta())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Factura') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_factura->getNumeroFactura())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Factura Completo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_factura->getNumeroFacturaCompleto())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_factura->getDomicilioLegal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_factura->getCuit())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_factura->getNotaPublica())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_factura->getObservacion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_factura->getNotaInterna())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_FACTURA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_factura->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_FACTURA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_factura->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_ESTADO')){ ?>
            <li><a href="#tab_vta_factura_estado"><?php Lang::_lang('VtaFacturaEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_ITEM')){ ?>
            <li><a href="#tab_vta_factura_item"><?php Lang::_lang('VtaFacturaItems') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_VTA_TRIBUTO')){ ?>
            <li><a href="#tab_vta_factura_vta_tributo"><?php Lang::_lang('VtaFacturaVtaTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_VTA_RECIBO')){ ?>
            <li><a href="#tab_vta_factura_vta_recibo"><?php Lang::_lang('VtaFacturaVtaRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_VTA_NOTA_CREDITO')){ ?>
            <li><a href="#tab_vta_factura_vta_nota_credito"><?php Lang::_lang('VtaFacturaVtaNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_WS_FE_OPE_SOLICITUD')){ ?>
            <li><a href="#tab_vta_factura_ws_fe_ope_solicitud"><?php Lang::_lang('VtaFacturaWsFeOpeSolicitud') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_ENVIADO')){ ?>
            <li><a href="#tab_vta_factura_enviado"><?php Lang::_lang('VtaFacturaEnviado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_factura_vta_orden_venta"><?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_COMISION_VTA_FACTURA')){ ?>
            <li><a href="#tab_vta_comision_vta_factura"><?php Lang::_lang('VtaComisionVtaFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_CNTB_DIARIO_ASIENTO_VTA_FACTURA')){ ?>
            <li><a href="#tab_cntb_diario_asiento_vta_factura"><?php Lang::_lang('CntbDiarioAsientoVtaFacturas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_AFIP_CITI_VENTAS_CBTE')){ ?>
            <li><a href="#tab_afip_citi_ventas_cbte"><?php Lang::_lang('AfipCitiVentasCbtes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_AFIP_CITI_VENTAS_ALICUOTAS')){ ?>
            <li><a href="#tab_afip_citi_ventas_alicuotas"><?php Lang::_lang('AfipCitiVentasAlicuotass') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_ESTADO')){ ?>
	<div id="tab_vta_factura_estado" class="bloque-relacion vta_factura_estado">
		
            <h4><?php Lang::_lang('VtaFacturaEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_factura->getVtaFacturaEstadosParaBloqueMasInfo() as $vta_factura_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_factura_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_factura_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_factura_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_factura_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_factura_estado->getId() ?>" archivo="ajax/modulos/vta_factura_estado/vta_factura_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaFacturaEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaFacturaEstado') ?>">
                                <a href="vta_factura_estado_alta.php?id=<?php echo $vta_factura_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaEstado::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_estado->getFiltrosArrXCampo('VtaFactura', 'vta_factura_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaEstados de ') ?> <strong><?php echo($vta_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_factura_estado_alta.php" >
                            <?php Lang::_lang('Agregar VtaFacturaEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_ITEM')){ ?>
	<div id="tab_vta_factura_item" class="bloque-relacion vta_factura_item">
		
            <h4><?php Lang::_lang('VtaFacturaItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_factura->getVtaFacturaItemsParaBloqueMasInfo() as $vta_factura_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_factura_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_factura_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_factura_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_factura_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_factura_item->getId() ?>" archivo="ajax/modulos/vta_factura_item/vta_factura_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaFacturaItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaFacturaItem') ?>">
                                <a href="vta_factura_item_alta.php?id=<?php echo $vta_factura_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaItem::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_item->getFiltrosArrXCampo('VtaFactura', 'vta_factura_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaItems de ') ?> <strong><?php echo($vta_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_factura_item_alta.php" >
                            <?php Lang::_lang('Agregar VtaFacturaItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_VTA_TRIBUTO')){ ?>
	<div id="tab_vta_factura_vta_tributo" class="bloque-relacion vta_factura_vta_tributo">
		
            <h4><?php Lang::_lang('VtaFacturaVtaTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_factura->getVtaFacturaVtaTributosParaBloqueMasInfo() as $vta_factura_vta_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_factura_vta_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_factura_vta_tributo->getDescripcionVinculante('VtaFactura')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_factura_vta_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_factura_vta_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_factura_vta_tributo->getId() ?>" archivo="ajax/modulos/vta_factura_vta_tributo/vta_factura_vta_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaFacturaVtaTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaFacturaVtaTributo') ?>">
                                <a href="vta_factura_vta_tributo_alta.php?id=<?php echo $vta_factura_vta_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_VTA_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_vta_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaVtaTributo::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_vta_tributo->getFiltrosArrXCampo('VtaFactura', 'vta_factura_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaVtaTributos de ') ?> <strong><?php echo($vta_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_factura_vta_tributo_alta.php" >
                            <?php Lang::_lang('Agregar VtaFacturaVtaTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_VTA_RECIBO')){ ?>
	<div id="tab_vta_factura_vta_recibo" class="bloque-relacion vta_factura_vta_recibo">
		
            <h4><?php Lang::_lang('VtaFacturaVtaRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_factura->getVtaFacturaVtaRecibosParaBloqueMasInfo() as $vta_factura_vta_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_factura_vta_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_factura_vta_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_factura_vta_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_factura_vta_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_factura_vta_recibo->getId() ?>" archivo="ajax/modulos/vta_factura_vta_recibo/vta_factura_vta_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaFacturaVtaRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaFacturaVtaRecibo') ?>">
                                <a href="vta_factura_vta_recibo_alta.php?id=<?php echo $vta_factura_vta_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_VTA_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_vta_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaVtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_vta_recibo->getFiltrosArrXCampo('VtaFactura', 'vta_factura_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaVtaRecibos de ') ?> <strong><?php echo($vta_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_factura_vta_recibo_alta.php" >
                            <?php Lang::_lang('Agregar VtaFacturaVtaRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_VTA_NOTA_CREDITO')){ ?>
	<div id="tab_vta_factura_vta_nota_credito" class="bloque-relacion vta_factura_vta_nota_credito">
		
            <h4><?php Lang::_lang('VtaFacturaVtaNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_factura->getVtaFacturaVtaNotaCreditosParaBloqueMasInfo() as $vta_factura_vta_nota_credito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_VTA_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_vta_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaVtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_vta_nota_credito->getFiltrosArrXCampo('VtaFactura', 'vta_factura_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaVtaNotaCreditos de ') ?> <strong><?php echo($vta_factura->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_WS_FE_OPE_SOLICITUD')){ ?>
	<div id="tab_vta_factura_ws_fe_ope_solicitud" class="bloque-relacion vta_factura_ws_fe_ope_solicitud">
		
            <h4><?php Lang::_lang('VtaFacturaWsFeOpeSolicitud') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_factura->getVtaFacturaWsFeOpeSolicitudsParaBloqueMasInfo() as $vta_factura_ws_fe_ope_solicitud){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_factura_ws_fe_ope_solicitud->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_factura_ws_fe_ope_solicitud->getDescripcionVinculante('VtaFactura')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_factura_ws_fe_ope_solicitud->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_ws_fe_ope_solicitud->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_factura_ws_fe_ope_solicitud->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_ws_fe_ope_solicitud->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_factura_ws_fe_ope_solicitud->getId() ?>" archivo="ajax/modulos/vta_factura_ws_fe_ope_solicitud/vta_factura_ws_fe_ope_solicitud_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaFacturaWsFeOpeSolicitud') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_WS_FE_OPE_SOLICITUD_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaFacturaWsFeOpeSolicitud') ?>">
                                <a href="vta_factura_ws_fe_ope_solicitud_alta.php?id=<?php echo $vta_factura_ws_fe_ope_solicitud->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_WS_FE_OPE_SOLICITUD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_ws_fe_ope_solicitud){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaWsFeOpeSolicitud::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_ws_fe_ope_solicitud->getFiltrosArrXCampo('VtaFactura', 'vta_factura_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaWsFeOpeSolicituds de ') ?> <strong><?php echo($vta_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_factura_ws_fe_ope_solicitud_alta.php" >
                            <?php Lang::_lang('Agregar VtaFacturaWsFeOpeSolicitud') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_ENVIADO')){ ?>
	<div id="tab_vta_factura_enviado" class="bloque-relacion vta_factura_enviado">
		
            <h4><?php Lang::_lang('VtaFacturaEnviado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_factura->getVtaFacturaEnviadosParaBloqueMasInfo() as $vta_factura_enviado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_factura_enviado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_factura_enviado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_factura_enviado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_enviado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_factura_enviado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_enviado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_factura_enviado->getId() ?>" archivo="ajax/modulos/vta_factura_enviado/vta_factura_enviado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaFacturaEnviado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ENVIADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaFacturaEnviado') ?>">
                                <a href="vta_factura_enviado_alta.php?id=<?php echo $vta_factura_enviado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_ENVIADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_enviado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaEnviado::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_enviado->getFiltrosArrXCampo('VtaFactura', 'vta_factura_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaEnviados de ') ?> <strong><?php echo($vta_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_factura_enviado_alta.php" >
                            <?php Lang::_lang('Agregar VtaFacturaEnviado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_factura_vta_orden_venta" class="bloque-relacion vta_factura_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_factura->getVtaFacturaVtaOrdenVentasParaBloqueMasInfo() as $vta_factura_vta_orden_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_factura_vta_orden_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_factura_vta_orden_venta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_factura_vta_orden_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_orden_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_factura_vta_orden_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_orden_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_factura_vta_orden_venta->getId() ?>" archivo="ajax/modulos/vta_factura_vta_orden_venta/vta_factura_vta_orden_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_ORDEN_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?>">
                                <a href="vta_factura_vta_orden_venta_alta.php?id=<?php echo $vta_factura_vta_orden_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_FACTURA_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_vta_orden_venta->getFiltrosArrXCampo('VtaFactura', 'vta_factura_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaVtaOrdenVentas de ') ?> <strong><?php echo($vta_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_factura_vta_orden_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaFacturaVtaOrdenVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_COMISION_VTA_FACTURA')){ ?>
	<div id="tab_vta_comision_vta_factura" class="bloque-relacion vta_comision_vta_factura">
		
            <h4><?php Lang::_lang('VtaComisionVtaFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_factura->getVtaComisionVtaFacturasParaBloqueMasInfo() as $vta_comision_vta_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_comision_vta_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_comision_vta_factura->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_comision_vta_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_vta_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_comision_vta_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_vta_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_comision_vta_factura->getId() ?>" archivo="ajax/modulos/vta_comision_vta_factura/vta_comision_vta_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaComisionVtaFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_VTA_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComisionVtaFactura') ?>">
                                <a href="vta_comision_vta_factura_alta.php?id=<?php echo $vta_comision_vta_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_VTA_COMISION_VTA_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_comision_vta_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaComisionVtaFactura::getFiltrosArrGral() ?>&arr=<?php echo $vta_comision_vta_factura->getFiltrosArrXCampo('VtaFactura', 'vta_factura_id') ?>" >
                                <?php Lang::_lang('Ver VtaComisionVtaFacturas de ') ?> <strong><?php echo($vta_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_comision_vta_factura_alta.php" >
                            <?php Lang::_lang('Agregar VtaComisionVtaFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_CNTB_DIARIO_ASIENTO_VTA_FACTURA')){ ?>
	<div id="tab_cntb_diario_asiento_vta_factura" class="bloque-relacion cntb_diario_asiento_vta_factura">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoVtaFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_factura->getCntbDiarioAsientoVtaFacturasParaBloqueMasInfo() as $cntb_diario_asiento_vta_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_vta_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_vta_factura->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_vta_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_vta_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_vta_factura->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_vta_factura/cntb_diario_asiento_vta_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoVtaFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoVtaFactura') ?>">
                                <a href="cntb_diario_asiento_vta_factura_alta.php?id=<?php echo $cntb_diario_asiento_vta_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_CNTB_DIARIO_ASIENTO_VTA_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_vta_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoVtaFactura::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_vta_factura->getFiltrosArrXCampo('VtaFactura', 'vta_factura_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoVtaFacturas de ') ?> <strong><?php echo($vta_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_vta_factura_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoVtaFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_AFIP_CITI_VENTAS_CBTE')){ ?>
	<div id="tab_afip_citi_ventas_cbte" class="bloque-relacion afip_citi_ventas_cbte">
		
            <h4><?php Lang::_lang('AfipCitiVentasCbte') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_factura->getAfipCitiVentasCbtesParaBloqueMasInfo() as $afip_citi_ventas_cbte){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_AFIP_CITI_VENTAS_CBTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_ventas_cbte){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiVentasCbte::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_ventas_cbte->getFiltrosArrXCampo('VtaFactura', 'vta_factura_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiVentasCbtes de ') ?> <strong><?php echo($vta_factura->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_AFIP_CITI_VENTAS_ALICUOTAS')){ ?>
	<div id="tab_afip_citi_ventas_alicuotas" class="bloque-relacion afip_citi_ventas_alicuotas">
		
            <h4><?php Lang::_lang('AfipCitiVentasAlicuotas') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_factura->getAfipCitiVentasAlicuotassParaBloqueMasInfo() as $afip_citi_ventas_alicuotas){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_MASINFO_AFIP_CITI_VENTAS_ALICUOTAS_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_ventas_alicuotas){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiVentasAlicuotas::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_ventas_alicuotas->getFiltrosArrXCampo('VtaFactura', 'vta_factura_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiVentasAlicuotass de ') ?> <strong><?php echo($vta_factura->getDescripcion()) ?></strong>
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

