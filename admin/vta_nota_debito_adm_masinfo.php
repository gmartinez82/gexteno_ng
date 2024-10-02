<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_nota_debito_id = Gral::getVars(2, 'id');
$vta_nota_debito = VtaNotaDebito::getOxId($vta_nota_debito_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Pto Vta') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_debito->getNumeroPuntoVenta())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Nota de Debito') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_debito->getNumeroNotaDebito())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Nota de Debito Completo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_debito->getNumeroNotaDebitoCompleto())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_debito->getDomicilioLegal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_debito->getCuit())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_debito->getNotaPublica())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_debito->getObservacion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_debito->getNotaInterna())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_NOTA_DEBITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_nota_debito->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_NOTA_DEBITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_nota_debito->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_ESTADO')){ ?>
            <li><a href="#tab_vta_nota_debito_estado"><?php Lang::_lang('VtaNotaDebitoEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_WS_FE_OPE_SOLICITUD')){ ?>
            <li><a href="#tab_vta_nota_debito_ws_fe_ope_solicitud"><?php Lang::_lang('VtaNotaDebitoWsFeOpeSolicitud') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_VTA_TRIBUTO')){ ?>
            <li><a href="#tab_vta_nota_debito_vta_tributo"><?php Lang::_lang('VtaNotaDebitoVtaTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_VTA_NOTA_CREDITO')){ ?>
            <li><a href="#tab_vta_nota_debito_vta_nota_credito"><?php Lang::_lang('VtaNotaDebitoVtaNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_VTA_RECIBO')){ ?>
            <li><a href="#tab_vta_nota_debito_vta_recibo"><?php Lang::_lang('VtaNotaDebitoVtaRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_ENVIADO')){ ?>
            <li><a href="#tab_vta_nota_debito_enviado"><?php Lang::_lang('VtaNotaDebitoEnviado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_ITEM')){ ?>
            <li><a href="#tab_vta_nota_debito_item"><?php Lang::_lang('VtaNotaDebitoItem') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_NOTA_DEBITO')){ ?>
            <li><a href="#tab_cntb_diario_asiento_vta_nota_debito"><?php Lang::_lang('CntbDiarioAsientoVtaNotaDebitos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_AFIP_CITI_VENTAS_CBTE')){ ?>
            <li><a href="#tab_afip_citi_ventas_cbte"><?php Lang::_lang('AfipCitiVentasCbtes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_AFIP_CITI_VENTAS_ALICUOTAS')){ ?>
            <li><a href="#tab_afip_citi_ventas_alicuotas"><?php Lang::_lang('AfipCitiVentasAlicuotass') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_ESTADO')){ ?>
	<div id="tab_vta_nota_debito_estado" class="bloque-relacion vta_nota_debito_estado">
		
            <h4><?php Lang::_lang('VtaNotaDebitoEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_debito->getVtaNotaDebitoEstadosParaBloqueMasInfo() as $vta_nota_debito_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_debito_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_debito_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_debito_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_debito_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_debito_estado->getId() ?>" archivo="ajax/modulos/vta_nota_debito_estado/vta_nota_debito_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaDebitoEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaDebitoEstado') ?>">
                                <a href="vta_nota_debito_estado_alta.php?id=<?php echo $vta_nota_debito_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebitoEstado::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito_estado->getFiltrosArrXCampo('VtaNotaDebito', 'vta_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitoEstados de ') ?> <strong><?php echo($vta_nota_debito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_debito_estado_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaDebitoEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_WS_FE_OPE_SOLICITUD')){ ?>
	<div id="tab_vta_nota_debito_ws_fe_ope_solicitud" class="bloque-relacion vta_nota_debito_ws_fe_ope_solicitud">
		
            <h4><?php Lang::_lang('VtaNotaDebitoWsFeOpeSolicitud') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_debito->getVtaNotaDebitoWsFeOpeSolicitudsParaBloqueMasInfo() as $vta_nota_debito_ws_fe_ope_solicitud){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_debito_ws_fe_ope_solicitud->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_debito_ws_fe_ope_solicitud->getDescripcionVinculante('VtaNotaDebito')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_WS_FE_OPE_SOLICITUD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito_ws_fe_ope_solicitud){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebitoWsFeOpeSolicitud::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito_ws_fe_ope_solicitud->getFiltrosArrXCampo('VtaNotaDebito', 'vta_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitoWsFeOpeSolicituds de ') ?> <strong><?php echo($vta_nota_debito->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_VTA_TRIBUTO')){ ?>
	<div id="tab_vta_nota_debito_vta_tributo" class="bloque-relacion vta_nota_debito_vta_tributo">
		
            <h4><?php Lang::_lang('VtaNotaDebitoVtaTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_debito->getVtaNotaDebitoVtaTributosParaBloqueMasInfo() as $vta_nota_debito_vta_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_debito_vta_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_debito_vta_tributo->getDescripcionVinculante('VtaNotaDebito')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_debito_vta_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_vta_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_debito_vta_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_vta_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_debito_vta_tributo->getId() ?>" archivo="ajax/modulos/vta_nota_debito_vta_tributo/vta_nota_debito_vta_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaDebitoVtaTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_VTA_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaDebitoVtaTributo') ?>">
                                <a href="vta_nota_debito_vta_tributo_alta.php?id=<?php echo $vta_nota_debito_vta_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_VTA_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito_vta_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebitoVtaTributo::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito_vta_tributo->getFiltrosArrXCampo('VtaNotaDebito', 'vta_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitoVtaTributos de ') ?> <strong><?php echo($vta_nota_debito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_debito_vta_tributo_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaDebitoVtaTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_VTA_NOTA_CREDITO')){ ?>
	<div id="tab_vta_nota_debito_vta_nota_credito" class="bloque-relacion vta_nota_debito_vta_nota_credito">
		
            <h4><?php Lang::_lang('VtaNotaDebitoVtaNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_debito->getVtaNotaDebitoVtaNotaCreditosParaBloqueMasInfo() as $vta_nota_debito_vta_nota_credito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_VTA_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito_vta_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebitoVtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito_vta_nota_credito->getFiltrosArrXCampo('VtaNotaDebito', 'vta_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitoVtaNotaCreditos de ') ?> <strong><?php echo($vta_nota_debito->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_VTA_RECIBO')){ ?>
	<div id="tab_vta_nota_debito_vta_recibo" class="bloque-relacion vta_nota_debito_vta_recibo">
		
            <h4><?php Lang::_lang('VtaNotaDebitoVtaRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_debito->getVtaNotaDebitoVtaRecibosParaBloqueMasInfo() as $vta_nota_debito_vta_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_debito_vta_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_debito_vta_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_debito_vta_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_vta_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_debito_vta_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_vta_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_debito_vta_recibo->getId() ?>" archivo="ajax/modulos/vta_nota_debito_vta_recibo/vta_nota_debito_vta_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaDebitoVtaRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_VTA_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaDebitoVtaRecibo') ?>">
                                <a href="vta_nota_debito_vta_recibo_alta.php?id=<?php echo $vta_nota_debito_vta_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_VTA_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito_vta_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebitoVtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito_vta_recibo->getFiltrosArrXCampo('VtaNotaDebito', 'vta_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitoVtaRecibos de ') ?> <strong><?php echo($vta_nota_debito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_debito_vta_recibo_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaDebitoVtaRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_ENVIADO')){ ?>
	<div id="tab_vta_nota_debito_enviado" class="bloque-relacion vta_nota_debito_enviado">
		
            <h4><?php Lang::_lang('VtaNotaDebitoEnviado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_debito->getVtaNotaDebitoEnviadosParaBloqueMasInfo() as $vta_nota_debito_enviado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_debito_enviado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_debito_enviado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_debito_enviado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_enviado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_debito_enviado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_enviado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_debito_enviado->getId() ?>" archivo="ajax/modulos/vta_nota_debito_enviado/vta_nota_debito_enviado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaDebitoEnviado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ENVIADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaDebitoEnviado') ?>">
                                <a href="vta_nota_debito_enviado_alta.php?id=<?php echo $vta_nota_debito_enviado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_ENVIADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito_enviado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebitoEnviado::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito_enviado->getFiltrosArrXCampo('VtaNotaDebito', 'vta_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitoEnviados de ') ?> <strong><?php echo($vta_nota_debito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_debito_enviado_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaDebitoEnviado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_ITEM')){ ?>
	<div id="tab_vta_nota_debito_item" class="bloque-relacion vta_nota_debito_item">
		
            <h4><?php Lang::_lang('VtaNotaDebitoItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_debito->getVtaNotaDebitoItemsParaBloqueMasInfo() as $vta_nota_debito_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_debito_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_debito_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_debito_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_debito_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_debito_item->getId() ?>" archivo="ajax/modulos/vta_nota_debito_item/vta_nota_debito_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaDebitoItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaDebitoItem') ?>">
                                <a href="vta_nota_debito_item_alta.php?id=<?php echo $vta_nota_debito_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebitoItem::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito_item->getFiltrosArrXCampo('VtaNotaDebito', 'vta_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitoItems de ') ?> <strong><?php echo($vta_nota_debito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_debito_item_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaDebitoItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_NOTA_DEBITO')){ ?>
	<div id="tab_cntb_diario_asiento_vta_nota_debito" class="bloque-relacion cntb_diario_asiento_vta_nota_debito">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoVtaNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_debito->getCntbDiarioAsientoVtaNotaDebitosParaBloqueMasInfo() as $cntb_diario_asiento_vta_nota_debito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_vta_nota_debito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_vta_nota_debito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_vta_nota_debito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_nota_debito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_vta_nota_debito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_nota_debito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_vta_nota_debito->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_vta_nota_debito/cntb_diario_asiento_vta_nota_debito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoVtaNotaDebito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_NOTA_DEBITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoVtaNotaDebito') ?>">
                                <a href="cntb_diario_asiento_vta_nota_debito_alta.php?id=<?php echo $cntb_diario_asiento_vta_nota_debito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_vta_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoVtaNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_vta_nota_debito->getFiltrosArrXCampo('VtaNotaDebito', 'vta_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoVtaNotaDebitos de ') ?> <strong><?php echo($vta_nota_debito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_vta_nota_debito_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoVtaNotaDebito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_AFIP_CITI_VENTAS_CBTE')){ ?>
	<div id="tab_afip_citi_ventas_cbte" class="bloque-relacion afip_citi_ventas_cbte">
		
            <h4><?php Lang::_lang('AfipCitiVentasCbte') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_debito->getAfipCitiVentasCbtesParaBloqueMasInfo() as $afip_citi_ventas_cbte){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_AFIP_CITI_VENTAS_CBTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_ventas_cbte){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiVentasCbte::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_ventas_cbte->getFiltrosArrXCampo('VtaNotaDebito', 'vta_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiVentasCbtes de ') ?> <strong><?php echo($vta_nota_debito->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_AFIP_CITI_VENTAS_ALICUOTAS')){ ?>
	<div id="tab_afip_citi_ventas_alicuotas" class="bloque-relacion afip_citi_ventas_alicuotas">
		
            <h4><?php Lang::_lang('AfipCitiVentasAlicuotas') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_nota_debito->getAfipCitiVentasAlicuotassParaBloqueMasInfo() as $afip_citi_ventas_alicuotas){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_MASINFO_AFIP_CITI_VENTAS_ALICUOTAS_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_ventas_alicuotas){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiVentasAlicuotas::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_ventas_alicuotas->getFiltrosArrXCampo('VtaNotaDebito', 'vta_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiVentasAlicuotass de ') ?> <strong><?php echo($vta_nota_debito->getDescripcion()) ?></strong>
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

