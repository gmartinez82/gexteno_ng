<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ws_fe_ope_solicitud_id = Gral::getVars(2, 'id');
$ws_fe_ope_solicitud = WsFeOpeSolicitud::getOxId($ws_fe_ope_solicitud_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ws_fe_ope_solicitud->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'WS_FE_OPE_SOLICITUD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ws_fe_ope_solicitud->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'WS_FE_OPE_SOLICITUD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ws_fe_ope_solicitud->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_VTA_NOTA_CREDITO_WS_FE_OPE_SOLICITUD')){ ?>
            <li><a href="#tab_vta_nota_credito_ws_fe_ope_solicitud"><?php Lang::_lang('VtaNotaCreditoWsFeOpeSolicitud') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_VTA_NOTA_DEBITO_WS_FE_OPE_SOLICITUD')){ ?>
            <li><a href="#tab_vta_nota_debito_ws_fe_ope_solicitud"><?php Lang::_lang('VtaNotaDebitoWsFeOpeSolicitud') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_VTA_RECIBO_WS_FE_OPE_SOLICITUD')){ ?>
            <li><a href="#tab_vta_recibo_ws_fe_ope_solicitud"><?php Lang::_lang('VtaReciboWsFeOpeSolicitud') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_VTA_FACTURA_WS_FE_OPE_SOLICITUD')){ ?>
            <li><a href="#tab_vta_factura_ws_fe_ope_solicitud"><?php Lang::_lang('VtaFacturaWsFeOpeSolicitud') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_WS_FE_OPE_SOLICITUD_IVA')){ ?>
            <li><a href="#tab_ws_fe_ope_solicitud_iva"><?php Lang::_lang('WsFeOpeSolicitudIva') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_WS_FE_OPE_SOLICITUD_OPCIONAL')){ ?>
            <li><a href="#tab_ws_fe_ope_solicitud_opcional"><?php Lang::_lang('WsFeOpeSolicitudOpcional') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_WS_FE_OPE_SOLICITUD_COMPROBANTE_ASOCIADO')){ ?>
            <li><a href="#tab_ws_fe_ope_solicitud_comprobante_asociado"><?php Lang::_lang('WsFeOpeSolicitudComprobanteAsociado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_WS_FE_OPE_SOLICITUD_TRIBUTO')){ ?>
            <li><a href="#tab_ws_fe_ope_solicitud_tributo"><?php Lang::_lang('WsFeOpeSolicitudTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_WS_FE_OPE_SOLICITUD_RESPUESTA')){ ?>
            <li><a href="#tab_ws_fe_ope_solicitud_respuesta"><?php Lang::_lang('WsFeOpeSolicitudRespuesta') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_VTA_NOTA_CREDITO_WS_FE_OPE_SOLICITUD')){ ?>
	<div id="tab_vta_nota_credito_ws_fe_ope_solicitud" class="bloque-relacion vta_nota_credito_ws_fe_ope_solicitud">
		
            <h4><?php Lang::_lang('VtaNotaCreditoWsFeOpeSolicitud') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_ope_solicitud->getVtaNotaCreditoWsFeOpeSolicitudsParaBloqueMasInfo() as $vta_nota_credito_ws_fe_ope_solicitud){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getDescripcionVinculante('WsFeOpeSolicitud')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_VTA_NOTA_CREDITO_WS_FE_OPE_SOLICITUD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito_ws_fe_ope_solicitud){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoWsFeOpeSolicitud::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_ws_fe_ope_solicitud->getFiltrosArrXCampo('WsFeOpeSolicitud', 'ws_fe_ope_solicitud_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditoWsFeOpeSolicituds de ') ?> <strong><?php echo($ws_fe_ope_solicitud->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_VTA_NOTA_DEBITO_WS_FE_OPE_SOLICITUD')){ ?>
	<div id="tab_vta_nota_debito_ws_fe_ope_solicitud" class="bloque-relacion vta_nota_debito_ws_fe_ope_solicitud">
		
            <h4><?php Lang::_lang('VtaNotaDebitoWsFeOpeSolicitud') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_ope_solicitud->getVtaNotaDebitoWsFeOpeSolicitudsParaBloqueMasInfo() as $vta_nota_debito_ws_fe_ope_solicitud){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_debito_ws_fe_ope_solicitud->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_debito_ws_fe_ope_solicitud->getDescripcionVinculante('WsFeOpeSolicitud')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_debito_ws_fe_ope_solicitud->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_ws_fe_ope_solicitud->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_debito_ws_fe_ope_solicitud->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_ws_fe_ope_solicitud->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_debito_ws_fe_ope_solicitud->getId() ?>" archivo="ajax/modulos/vta_nota_debito_ws_fe_ope_solicitud/vta_nota_debito_ws_fe_ope_solicitud_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaDebitoWsFeOpeSolicitud') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_WS_FE_OPE_SOLICITUD_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaDebitoWsFeOpeSolicitud') ?>">
                                <a href="vta_nota_debito_ws_fe_ope_solicitud_alta.php?id=<?php echo $vta_nota_debito_ws_fe_ope_solicitud->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_VTA_NOTA_DEBITO_WS_FE_OPE_SOLICITUD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito_ws_fe_ope_solicitud){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebitoWsFeOpeSolicitud::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito_ws_fe_ope_solicitud->getFiltrosArrXCampo('WsFeOpeSolicitud', 'ws_fe_ope_solicitud_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitoWsFeOpeSolicituds de ') ?> <strong><?php echo($ws_fe_ope_solicitud->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_debito_ws_fe_ope_solicitud_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaDebitoWsFeOpeSolicitud') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_VTA_RECIBO_WS_FE_OPE_SOLICITUD')){ ?>
	<div id="tab_vta_recibo_ws_fe_ope_solicitud" class="bloque-relacion vta_recibo_ws_fe_ope_solicitud">
		
            <h4><?php Lang::_lang('VtaReciboWsFeOpeSolicitud') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_ope_solicitud->getVtaReciboWsFeOpeSolicitudsParaBloqueMasInfo() as $vta_recibo_ws_fe_ope_solicitud){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_ws_fe_ope_solicitud->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo_ws_fe_ope_solicitud->getDescripcionVinculante('WsFeOpeSolicitud')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo_ws_fe_ope_solicitud->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_ws_fe_ope_solicitud->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo_ws_fe_ope_solicitud->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_ws_fe_ope_solicitud->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo_ws_fe_ope_solicitud->getId() ?>" archivo="ajax/modulos/vta_recibo_ws_fe_ope_solicitud/vta_recibo_ws_fe_ope_solicitud_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaReciboWsFeOpeSolicitud') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_WS_FE_OPE_SOLICITUD_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboWsFeOpeSolicitud') ?>">
                                <a href="vta_recibo_ws_fe_ope_solicitud_alta.php?id=<?php echo $vta_recibo_ws_fe_ope_solicitud->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_VTA_RECIBO_WS_FE_OPE_SOLICITUD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_ws_fe_ope_solicitud){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboWsFeOpeSolicitud::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_ws_fe_ope_solicitud->getFiltrosArrXCampo('WsFeOpeSolicitud', 'ws_fe_ope_solicitud_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboWsFeOpeSolicituds de ') ?> <strong><?php echo($ws_fe_ope_solicitud->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_ws_fe_ope_solicitud_alta.php" >
                            <?php Lang::_lang('Agregar VtaReciboWsFeOpeSolicitud') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_VTA_FACTURA_WS_FE_OPE_SOLICITUD')){ ?>
	<div id="tab_vta_factura_ws_fe_ope_solicitud" class="bloque-relacion vta_factura_ws_fe_ope_solicitud">
		
            <h4><?php Lang::_lang('VtaFacturaWsFeOpeSolicitud') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_ope_solicitud->getVtaFacturaWsFeOpeSolicitudsParaBloqueMasInfo() as $vta_factura_ws_fe_ope_solicitud){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_factura_ws_fe_ope_solicitud->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_factura_ws_fe_ope_solicitud->getDescripcionVinculante('WsFeOpeSolicitud')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_VTA_FACTURA_WS_FE_OPE_SOLICITUD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_ws_fe_ope_solicitud){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaWsFeOpeSolicitud::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_ws_fe_ope_solicitud->getFiltrosArrXCampo('WsFeOpeSolicitud', 'ws_fe_ope_solicitud_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaWsFeOpeSolicituds de ') ?> <strong><?php echo($ws_fe_ope_solicitud->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_WS_FE_OPE_SOLICITUD_IVA')){ ?>
	<div id="tab_ws_fe_ope_solicitud_iva" class="bloque-relacion ws_fe_ope_solicitud_iva">
		
            <h4><?php Lang::_lang('WsFeOpeSolicitudIva') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_ope_solicitud->getWsFeOpeSolicitudIvasParaBloqueMasInfo() as $ws_fe_ope_solicitud_iva){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ws_fe_ope_solicitud_iva->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ws_fe_ope_solicitud_iva->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud_iva->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_iva->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud_iva->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_iva->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ws_fe_ope_solicitud_iva->getId() ?>" archivo="ajax/modulos/ws_fe_ope_solicitud_iva/ws_fe_ope_solicitud_iva_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('WsFeOpeSolicitudIva') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_IVA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeOpeSolicitudIva') ?>">
                                <a href="ws_fe_ope_solicitud_iva_alta.php?id=<?php echo $ws_fe_ope_solicitud_iva->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_WS_FE_OPE_SOLICITUD_IVA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ws_fe_ope_solicitud_iva){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo WsFeOpeSolicitudIva::getFiltrosArrGral() ?>&arr=<?php echo $ws_fe_ope_solicitud_iva->getFiltrosArrXCampo('WsFeOpeSolicitud', 'ws_fe_ope_solicitud_id') ?>" >
                                <?php Lang::_lang('Ver WsFeOpeSolicitudIvas de ') ?> <strong><?php echo($ws_fe_ope_solicitud->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ws_fe_ope_solicitud_iva_alta.php" >
                            <?php Lang::_lang('Agregar WsFeOpeSolicitudIva') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_WS_FE_OPE_SOLICITUD_OPCIONAL')){ ?>
	<div id="tab_ws_fe_ope_solicitud_opcional" class="bloque-relacion ws_fe_ope_solicitud_opcional">
		
            <h4><?php Lang::_lang('WsFeOpeSolicitudOpcional') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_ope_solicitud->getWsFeOpeSolicitudOpcionalsParaBloqueMasInfo() as $ws_fe_ope_solicitud_opcional){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ws_fe_ope_solicitud_opcional->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ws_fe_ope_solicitud_opcional->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud_opcional->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_opcional->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud_opcional->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_opcional->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ws_fe_ope_solicitud_opcional->getId() ?>" archivo="ajax/modulos/ws_fe_ope_solicitud_opcional/ws_fe_ope_solicitud_opcional_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('WsFeOpeSolicitudOpcional') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_OPCIONAL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeOpeSolicitudOpcional') ?>">
                                <a href="ws_fe_ope_solicitud_opcional_alta.php?id=<?php echo $ws_fe_ope_solicitud_opcional->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_WS_FE_OPE_SOLICITUD_OPCIONAL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ws_fe_ope_solicitud_opcional){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo WsFeOpeSolicitudOpcional::getFiltrosArrGral() ?>&arr=<?php echo $ws_fe_ope_solicitud_opcional->getFiltrosArrXCampo('WsFeOpeSolicitud', 'ws_fe_ope_solicitud_id') ?>" >
                                <?php Lang::_lang('Ver WsFeOpeSolicitudOpcionals de ') ?> <strong><?php echo($ws_fe_ope_solicitud->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ws_fe_ope_solicitud_opcional_alta.php" >
                            <?php Lang::_lang('Agregar WsFeOpeSolicitudOpcional') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_WS_FE_OPE_SOLICITUD_COMPROBANTE_ASOCIADO')){ ?>
	<div id="tab_ws_fe_ope_solicitud_comprobante_asociado" class="bloque-relacion ws_fe_ope_solicitud_comprobante_asociado">
		
            <h4><?php Lang::_lang('WsFeOpeSolicitudComprobanteAsociado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_ope_solicitud->getWsFeOpeSolicitudComprobanteAsociadosParaBloqueMasInfo() as $ws_fe_ope_solicitud_comprobante_asociado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_comprobante_asociado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_comprobante_asociado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ws_fe_ope_solicitud_comprobante_asociado->getId() ?>" archivo="ajax/modulos/ws_fe_ope_solicitud_comprobante_asociado/ws_fe_ope_solicitud_comprobante_asociado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('WsFeOpeSolicitudComprobanteAsociado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_COMPROBANTE_ASOCIADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeOpeSolicitudComprobanteAsociado') ?>">
                                <a href="ws_fe_ope_solicitud_comprobante_asociado_alta.php?id=<?php echo $ws_fe_ope_solicitud_comprobante_asociado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_WS_FE_OPE_SOLICITUD_COMPROBANTE_ASOCIADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ws_fe_ope_solicitud_comprobante_asociado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo WsFeOpeSolicitudComprobanteAsociado::getFiltrosArrGral() ?>&arr=<?php echo $ws_fe_ope_solicitud_comprobante_asociado->getFiltrosArrXCampo('WsFeOpeSolicitud', 'ws_fe_ope_solicitud_id') ?>" >
                                <?php Lang::_lang('Ver WsFeOpeSolicitudComprobanteAsociados de ') ?> <strong><?php echo($ws_fe_ope_solicitud->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ws_fe_ope_solicitud_comprobante_asociado_alta.php" >
                            <?php Lang::_lang('Agregar WsFeOpeSolicitudComprobanteAsociado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_WS_FE_OPE_SOLICITUD_TRIBUTO')){ ?>
	<div id="tab_ws_fe_ope_solicitud_tributo" class="bloque-relacion ws_fe_ope_solicitud_tributo">
		
            <h4><?php Lang::_lang('WsFeOpeSolicitudTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_ope_solicitud->getWsFeOpeSolicitudTributosParaBloqueMasInfo() as $ws_fe_ope_solicitud_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ws_fe_ope_solicitud_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ws_fe_ope_solicitud_tributo->getId() ?>" archivo="ajax/modulos/ws_fe_ope_solicitud_tributo/ws_fe_ope_solicitud_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('WsFeOpeSolicitudTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeOpeSolicitudTributo') ?>">
                                <a href="ws_fe_ope_solicitud_tributo_alta.php?id=<?php echo $ws_fe_ope_solicitud_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_WS_FE_OPE_SOLICITUD_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ws_fe_ope_solicitud_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo WsFeOpeSolicitudTributo::getFiltrosArrGral() ?>&arr=<?php echo $ws_fe_ope_solicitud_tributo->getFiltrosArrXCampo('WsFeOpeSolicitud', 'ws_fe_ope_solicitud_id') ?>" >
                                <?php Lang::_lang('Ver WsFeOpeSolicitudTributos de ') ?> <strong><?php echo($ws_fe_ope_solicitud->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ws_fe_ope_solicitud_tributo_alta.php" >
                            <?php Lang::_lang('Agregar WsFeOpeSolicitudTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_WS_FE_OPE_SOLICITUD_RESPUESTA')){ ?>
	<div id="tab_ws_fe_ope_solicitud_respuesta" class="bloque-relacion ws_fe_ope_solicitud_respuesta">
		
            <h4><?php Lang::_lang('WsFeOpeSolicitudRespuesta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_ope_solicitud->getWsFeOpeSolicitudRespuestasParaBloqueMasInfo() as $ws_fe_ope_solicitud_respuesta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_respuesta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_respuesta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ws_fe_ope_solicitud_respuesta->getId() ?>" archivo="ajax/modulos/ws_fe_ope_solicitud_respuesta/ws_fe_ope_solicitud_respuesta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('WsFeOpeSolicitudRespuesta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_RESPUESTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeOpeSolicitudRespuesta') ?>">
                                <a href="ws_fe_ope_solicitud_respuesta_alta.php?id=<?php echo $ws_fe_ope_solicitud_respuesta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_MASINFO_WS_FE_OPE_SOLICITUD_RESPUESTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ws_fe_ope_solicitud_respuesta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo WsFeOpeSolicitudRespuesta::getFiltrosArrGral() ?>&arr=<?php echo $ws_fe_ope_solicitud_respuesta->getFiltrosArrXCampo('WsFeOpeSolicitud', 'ws_fe_ope_solicitud_id') ?>" >
                                <?php Lang::_lang('Ver WsFeOpeSolicitudRespuestas de ') ?> <strong><?php echo($ws_fe_ope_solicitud->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ws_fe_ope_solicitud_respuesta_alta.php" >
                            <?php Lang::_lang('Agregar WsFeOpeSolicitudRespuesta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

