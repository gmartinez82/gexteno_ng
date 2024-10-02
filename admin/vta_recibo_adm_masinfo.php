<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_recibo_id = Gral::getVars(2, 'id');
$vta_recibo = VtaRecibo::getOxId($vta_recibo_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Pto Vta') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_recibo->getNumeroPuntoVenta())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Recibo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_recibo->getNumeroRecibo())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Recibo Completo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_recibo->getNumeroReciboCompleto())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_recibo->getDomicilioLegal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_recibo->getCuit())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_recibo->getObservacion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_recibo->getNotaInterna())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_recibo->getNotaPublica())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_RECIBO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_recibo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_RECIBO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_recibo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_NOTA_DEBITO_VTA_RECIBO')){ ?>
            <li><a href="#tab_vta_nota_debito_vta_recibo"><?php Lang::_lang('VtaNotaDebitoVtaRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_IMAGEN')){ ?>
            <li><a href="#tab_vta_recibo_imagen"><?php Lang::_lang('VtaReciboImagens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ARCHIVO')){ ?>
            <li><a href="#tab_vta_recibo_archivo"><?php Lang::_lang('VtaReciboArchivos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ESTADO')){ ?>
            <li><a href="#tab_vta_recibo_estado"><?php Lang::_lang('VtaReciboEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ENVIADO')){ ?>
            <li><a href="#tab_vta_recibo_enviado"><?php Lang::_lang('VtaReciboEnviado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ITEM')){ ?>
            <li><a href="#tab_vta_recibo_item"><?php Lang::_lang('VtaReciboItem') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ITEM_CHEQUE')){ ?>
            <li><a href="#tab_vta_recibo_item_cheque"><?php Lang::_lang('VtaReciboItemCheque') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ITEM_RETENCION')){ ?>
            <li><a href="#tab_vta_recibo_item_retencion"><?php Lang::_lang('VtaReciboItemRetencions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_WS_FE_OPE_SOLICITUD')){ ?>
            <li><a href="#tab_vta_recibo_ws_fe_ope_solicitud"><?php Lang::_lang('VtaReciboWsFeOpeSolicitud') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_VTA_TRIBUTO')){ ?>
            <li><a href="#tab_vta_recibo_vta_tributo"><?php Lang::_lang('VtaReciboVtaTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_ORDEN_VENTA_VTA_RECIBO')){ ?>
            <li><a href="#tab_vta_orden_venta_vta_recibo"><?php Lang::_lang('VtaOrdenVentaVtaRecibos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_FACTURA_VTA_RECIBO')){ ?>
            <li><a href="#tab_vta_factura_vta_recibo"><?php Lang::_lang('VtaFacturaVtaRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_RECIBO')){ ?>
            <li><a href="#tab_cntb_diario_asiento_vta_recibo"><?php Lang::_lang('CntbDiarioAsientoVtaRecibos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_FND_CHQ_CHEQUE')){ ?>
            <li><a href="#tab_fnd_chq_cheque"><?php Lang::_lang('FndChqCheque') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_NOTA_DEBITO_VTA_RECIBO')){ ?>
	<div id="tab_vta_nota_debito_vta_recibo" class="bloque-relacion vta_nota_debito_vta_recibo">
		
            <h4><?php Lang::_lang('VtaNotaDebitoVtaRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo->getVtaNotaDebitoVtaRecibosParaBloqueMasInfo() as $vta_nota_debito_vta_recibo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_NOTA_DEBITO_VTA_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito_vta_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebitoVtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito_vta_recibo->getFiltrosArrXCampo('VtaRecibo', 'vta_recibo_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitoVtaRecibos de ') ?> <strong><?php echo($vta_recibo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_IMAGEN')){ ?>
	<div id="tab_vta_recibo_imagen" class="bloque-relacion vta_recibo_imagen">
		
            <h4><?php Lang::_lang('VtaReciboImagen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo->getVtaReciboImagensParaBloqueMasInfo() as $vta_recibo_imagen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_imagen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <img src="<?php Gral::_echo($vta_recibo_imagen->getPathImagen(true)) ?>" width="50" alt="<?php Gral::_echo($vta_recibo_imagen->getDescripcion()) ?>">					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo_imagen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_imagen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo_imagen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_imagen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo_imagen->getId() ?>" archivo="ajax/modulos/vta_recibo_imagen/vta_recibo_imagen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaReciboImagen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_IMAGEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboImagen') ?>">
                                <a href="vta_recibo_imagen_alta.php?id=<?php echo $vta_recibo_imagen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_IMAGEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_imagen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboImagen::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_imagen->getFiltrosArrXCampo('VtaRecibo', 'vta_recibo_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboImagens de ') ?> <strong><?php echo($vta_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_imagen_alta.php" >
                            <?php Lang::_lang('Agregar VtaReciboImagen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ARCHIVO')){ ?>
	<div id="tab_vta_recibo_archivo" class="bloque-relacion vta_recibo_archivo">
		
            <h4><?php Lang::_lang('VtaReciboArchivo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo->getVtaReciboArchivosParaBloqueMasInfo() as $vta_recibo_archivo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_archivo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo_archivo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo_archivo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_archivo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo_archivo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_archivo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo_archivo->getId() ?>" archivo="ajax/modulos/vta_recibo_archivo/vta_recibo_archivo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaReciboArchivo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ARCHIVO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboArchivo') ?>">
                                <a href="vta_recibo_archivo_alta.php?id=<?php echo $vta_recibo_archivo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ARCHIVO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_archivo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboArchivo::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_archivo->getFiltrosArrXCampo('VtaRecibo', 'vta_recibo_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboArchivos de ') ?> <strong><?php echo($vta_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_archivo_alta.php" >
                            <?php Lang::_lang('Agregar VtaReciboArchivo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ESTADO')){ ?>
	<div id="tab_vta_recibo_estado" class="bloque-relacion vta_recibo_estado">
		
            <h4><?php Lang::_lang('VtaReciboEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo->getVtaReciboEstadosParaBloqueMasInfo() as $vta_recibo_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo_estado->getId() ?>" archivo="ajax/modulos/vta_recibo_estado/vta_recibo_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaReciboEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboEstado') ?>">
                                <a href="vta_recibo_estado_alta.php?id=<?php echo $vta_recibo_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboEstado::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_estado->getFiltrosArrXCampo('VtaRecibo', 'vta_recibo_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboEstados de ') ?> <strong><?php echo($vta_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_estado_alta.php" >
                            <?php Lang::_lang('Agregar VtaReciboEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ENVIADO')){ ?>
	<div id="tab_vta_recibo_enviado" class="bloque-relacion vta_recibo_enviado">
		
            <h4><?php Lang::_lang('VtaReciboEnviado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo->getVtaReciboEnviadosParaBloqueMasInfo() as $vta_recibo_enviado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_enviado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo_enviado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo_enviado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_enviado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo_enviado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_enviado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo_enviado->getId() ?>" archivo="ajax/modulos/vta_recibo_enviado/vta_recibo_enviado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaReciboEnviado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ENVIADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboEnviado') ?>">
                                <a href="vta_recibo_enviado_alta.php?id=<?php echo $vta_recibo_enviado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ENVIADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_enviado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboEnviado::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_enviado->getFiltrosArrXCampo('VtaRecibo', 'vta_recibo_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboEnviados de ') ?> <strong><?php echo($vta_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_enviado_alta.php" >
                            <?php Lang::_lang('Agregar VtaReciboEnviado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ITEM')){ ?>
	<div id="tab_vta_recibo_item" class="bloque-relacion vta_recibo_item">
		
            <h4><?php Lang::_lang('VtaReciboItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo->getVtaReciboItemsParaBloqueMasInfo() as $vta_recibo_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo_item->getId() ?>" archivo="ajax/modulos/vta_recibo_item/vta_recibo_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaReciboItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboItem') ?>">
                                <a href="vta_recibo_item_alta.php?id=<?php echo $vta_recibo_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboItem::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_item->getFiltrosArrXCampo('VtaRecibo', 'vta_recibo_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboItems de ') ?> <strong><?php echo($vta_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_item_alta.php" >
                            <?php Lang::_lang('Agregar VtaReciboItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ITEM_CHEQUE')){ ?>
	<div id="tab_vta_recibo_item_cheque" class="bloque-relacion vta_recibo_item_cheque">
		
            <h4><?php Lang::_lang('VtaReciboItemCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo->getVtaReciboItemChequesParaBloqueMasInfo() as $vta_recibo_item_cheque){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_item_cheque->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo_item_cheque->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo_item_cheque->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item_cheque->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo_item_cheque->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item_cheque->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo_item_cheque->getId() ?>" archivo="ajax/modulos/vta_recibo_item_cheque/vta_recibo_item_cheque_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaReciboItemCheque') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_CHEQUE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboItemCheque') ?>">
                                <a href="vta_recibo_item_cheque_alta.php?id=<?php echo $vta_recibo_item_cheque->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ITEM_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_item_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboItemCheque::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_item_cheque->getFiltrosArrXCampo('VtaRecibo', 'vta_recibo_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboItemCheques de ') ?> <strong><?php echo($vta_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_item_cheque_alta.php" >
                            <?php Lang::_lang('Agregar VtaReciboItemCheque') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ITEM_RETENCION')){ ?>
	<div id="tab_vta_recibo_item_retencion" class="bloque-relacion vta_recibo_item_retencion">
		
            <h4><?php Lang::_lang('VtaReciboItemRetencion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo->getVtaReciboItemRetencionsParaBloqueMasInfo() as $vta_recibo_item_retencion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_item_retencion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo_item_retencion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo_item_retencion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item_retencion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo_item_retencion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item_retencion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo_item_retencion->getId() ?>" archivo="ajax/modulos/vta_recibo_item_retencion/vta_recibo_item_retencion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaReciboItemRetencion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_RETENCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboItemRetencion') ?>">
                                <a href="vta_recibo_item_retencion_alta.php?id=<?php echo $vta_recibo_item_retencion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_ITEM_RETENCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_item_retencion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboItemRetencion::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_item_retencion->getFiltrosArrXCampo('VtaRecibo', 'vta_recibo_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboItemRetencions de ') ?> <strong><?php echo($vta_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_item_retencion_alta.php" >
                            <?php Lang::_lang('Agregar VtaReciboItemRetencion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_WS_FE_OPE_SOLICITUD')){ ?>
	<div id="tab_vta_recibo_ws_fe_ope_solicitud" class="bloque-relacion vta_recibo_ws_fe_ope_solicitud">
		
            <h4><?php Lang::_lang('VtaReciboWsFeOpeSolicitud') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo->getVtaReciboWsFeOpeSolicitudsParaBloqueMasInfo() as $vta_recibo_ws_fe_ope_solicitud){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_ws_fe_ope_solicitud->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo_ws_fe_ope_solicitud->getDescripcionVinculante('VtaRecibo')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_WS_FE_OPE_SOLICITUD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_ws_fe_ope_solicitud){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboWsFeOpeSolicitud::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_ws_fe_ope_solicitud->getFiltrosArrXCampo('VtaRecibo', 'vta_recibo_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboWsFeOpeSolicituds de ') ?> <strong><?php echo($vta_recibo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_VTA_TRIBUTO')){ ?>
	<div id="tab_vta_recibo_vta_tributo" class="bloque-relacion vta_recibo_vta_tributo">
		
            <h4><?php Lang::_lang('VtaReciboVtaTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo->getVtaReciboVtaTributosParaBloqueMasInfo() as $vta_recibo_vta_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_vta_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo_vta_tributo->getDescripcionVinculante('VtaRecibo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo_vta_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_vta_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo_vta_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_vta_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo_vta_tributo->getId() ?>" archivo="ajax/modulos/vta_recibo_vta_tributo/vta_recibo_vta_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaReciboVtaTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_VTA_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboVtaTributo') ?>">
                                <a href="vta_recibo_vta_tributo_alta.php?id=<?php echo $vta_recibo_vta_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_RECIBO_VTA_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_vta_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboVtaTributo::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_vta_tributo->getFiltrosArrXCampo('VtaRecibo', 'vta_recibo_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboVtaTributos de ') ?> <strong><?php echo($vta_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_vta_tributo_alta.php" >
                            <?php Lang::_lang('Agregar VtaReciboVtaTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_ORDEN_VENTA_VTA_RECIBO')){ ?>
	<div id="tab_vta_orden_venta_vta_recibo" class="bloque-relacion vta_orden_venta_vta_recibo">
		
            <h4><?php Lang::_lang('VtaOrdenVentaVtaRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo->getVtaOrdenVentaVtaRecibosParaBloqueMasInfo() as $vta_orden_venta_vta_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_orden_venta_vta_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_orden_venta_vta_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_orden_venta_vta_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_vta_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_orden_venta_vta_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_vta_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_orden_venta_vta_recibo->getId() ?>" archivo="ajax/modulos/vta_orden_venta_vta_recibo/vta_orden_venta_vta_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaOrdenVentaVtaRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_VTA_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaOrdenVentaVtaRecibo') ?>">
                                <a href="vta_orden_venta_vta_recibo_alta.php?id=<?php echo $vta_orden_venta_vta_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_ORDEN_VENTA_VTA_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_orden_venta_vta_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaOrdenVentaVtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta_vta_recibo->getFiltrosArrXCampo('VtaRecibo', 'vta_recibo_id') ?>" >
                                <?php Lang::_lang('Ver VtaOrdenVentaVtaRecibos de ') ?> <strong><?php echo($vta_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_orden_venta_vta_recibo_alta.php" >
                            <?php Lang::_lang('Agregar VtaOrdenVentaVtaRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_FACTURA_VTA_RECIBO')){ ?>
	<div id="tab_vta_factura_vta_recibo" class="bloque-relacion vta_factura_vta_recibo">
		
            <h4><?php Lang::_lang('VtaFacturaVtaRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo->getVtaFacturaVtaRecibosParaBloqueMasInfo() as $vta_factura_vta_recibo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_VTA_FACTURA_VTA_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_vta_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaVtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_vta_recibo->getFiltrosArrXCampo('VtaRecibo', 'vta_recibo_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaVtaRecibos de ') ?> <strong><?php echo($vta_recibo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_RECIBO')){ ?>
	<div id="tab_cntb_diario_asiento_vta_recibo" class="bloque-relacion cntb_diario_asiento_vta_recibo">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoVtaRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo->getCntbDiarioAsientoVtaRecibosParaBloqueMasInfo() as $cntb_diario_asiento_vta_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_vta_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_vta_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_vta_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_vta_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_vta_recibo->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_vta_recibo/cntb_diario_asiento_vta_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoVtaRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoVtaRecibo') ?>">
                                <a href="cntb_diario_asiento_vta_recibo_alta.php?id=<?php echo $cntb_diario_asiento_vta_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_vta_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoVtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_vta_recibo->getFiltrosArrXCampo('VtaRecibo', 'vta_recibo_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoVtaRecibos de ') ?> <strong><?php echo($vta_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_vta_recibo_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoVtaRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_FND_CHQ_CHEQUE')){ ?>
	<div id="tab_fnd_chq_cheque" class="bloque-relacion fnd_chq_cheque">
		
            <h4><?php Lang::_lang('FndChqCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo->getFndChqChequesParaBloqueMasInfo() as $fnd_chq_cheque){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_chq_cheque->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_chq_cheque->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_chq_cheque->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_cheque->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_chq_cheque->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_cheque->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_chq_cheque->getId() ?>" archivo="ajax/modulos/fnd_chq_cheque/fnd_chq_cheque_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndChqCheque') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndChqCheque') ?>">
                                <a href="fnd_chq_cheque_alta.php?id=<?php echo $fnd_chq_cheque->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_MASINFO_FND_CHQ_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_chq_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndChqCheque::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_cheque->getFiltrosArrXCampo('VtaRecibo', 'vta_recibo_id') ?>" >
                                <?php Lang::_lang('Ver FndChqCheques de ') ?> <strong><?php echo($vta_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_chq_cheque_alta.php" >
                            <?php Lang::_lang('Agregar FndChqCheque') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

