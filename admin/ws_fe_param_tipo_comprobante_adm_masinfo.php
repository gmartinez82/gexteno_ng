<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ws_fe_param_tipo_comprobante_id = Gral::getVars(2, 'id');
$ws_fe_param_tipo_comprobante = WsFeParamTipoComprobante::getOxId($ws_fe_param_tipo_comprobante_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ws_fe_param_tipo_comprobante->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'WS_FE_PARAM_TIPO_COMPROBANTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_param_tipo_comprobante->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ws_fe_param_tipo_comprobante->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'WS_FE_PARAM_TIPO_COMPROBANTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_param_tipo_comprobante->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ws_fe_param_tipo_comprobante->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_VTA_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
            <li><a href="#tab_vta_tipo_factura_ws_fe_param_tipo_comprobante"><?php Lang::_lang('VtaTipoFacturaWsFeParamTipoComprobante') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_VTA_TIPO_NOTA_CREDITO_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
            <li><a href="#tab_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante"><?php Lang::_lang('VtaTipoNotaCreditoWsFeParamTipoComprobante') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_VTA_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
            <li><a href="#tab_vta_tipo_nota_debito_ws_fe_param_tipo_comprobante"><?php Lang::_lang('VtaTipoNotaDebitoWsFeParamTipoComprobante') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_VTA_TIPO_RECIBO_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
            <li><a href="#tab_vta_tipo_recibo_ws_fe_param_tipo_comprobante"><?php Lang::_lang('VtaTipoReciboWsFeParamTipoComprobante') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_WS_FE_OPE_SOLICITUD')){ ?>
            <li><a href="#tab_ws_fe_ope_solicitud"><?php Lang::_lang('WsFeOpeSolicitud') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_PDE_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
            <li><a href="#tab_pde_tipo_factura_ws_fe_param_tipo_comprobante"><?php Lang::_lang('PdeTipoFacturaWsFeParamTipoComprobante') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_PDE_TIPO_NOTA_CREDITO_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
            <li><a href="#tab_pde_tipo_nota_credito_ws_fe_param_tipo_comprobante"><?php Lang::_lang('PdeTipoNotaCreditoWsFeParamTipoComprobante') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_PDE_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
            <li><a href="#tab_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante"><?php Lang::_lang('PdeTipoNotaDebitoWsFeParamTipoComprobante') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_VTA_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
	<div id="tab_vta_tipo_factura_ws_fe_param_tipo_comprobante" class="bloque-relacion vta_tipo_factura_ws_fe_param_tipo_comprobante">
		
            <h4><?php Lang::_lang('VtaTipoFacturaWsFeParamTipoComprobante') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeParamTipoComprobante') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_param_tipo_comprobante->getVtaTipoFacturaWsFeParamTipoComprobantesParaBloqueMasInfo() as $vta_tipo_factura_ws_fe_param_tipo_comprobante){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_tipo_factura_ws_fe_param_tipo_comprobante->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_tipo_factura_ws_fe_param_tipo_comprobante->getDescripcionVinculante('WsFeParamTipoComprobante')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_tipo_factura_ws_fe_param_tipo_comprobante->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_factura_ws_fe_param_tipo_comprobante->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_tipo_factura_ws_fe_param_tipo_comprobante->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_factura_ws_fe_param_tipo_comprobante->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_tipo_factura_ws_fe_param_tipo_comprobante->getId() ?>" archivo="ajax/modulos/vta_tipo_factura_ws_fe_param_tipo_comprobante/vta_tipo_factura_ws_fe_param_tipo_comprobante_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaTipoFacturaWsFeParamTipoComprobante') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTipoFacturaWsFeParamTipoComprobante') ?>">
                                <a href="vta_tipo_factura_ws_fe_param_tipo_comprobante_alta.php?id=<?php echo $vta_tipo_factura_ws_fe_param_tipo_comprobante->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_VTA_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_tipo_factura_ws_fe_param_tipo_comprobante){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaTipoFacturaWsFeParamTipoComprobante::getFiltrosArrGral() ?>&arr=<?php echo $vta_tipo_factura_ws_fe_param_tipo_comprobante->getFiltrosArrXCampo('WsFeParamTipoComprobante', 'ws_fe_param_tipo_comprobante_id') ?>" >
                                <?php Lang::_lang('Ver VtaTipoFacturaWsFeParamTipoComprobantes de ') ?> <strong><?php echo($ws_fe_param_tipo_comprobante->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_tipo_factura_ws_fe_param_tipo_comprobante_alta.php" >
                            <?php Lang::_lang('Agregar VtaTipoFacturaWsFeParamTipoComprobante') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_VTA_TIPO_NOTA_CREDITO_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
	<div id="tab_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante" class="bloque-relacion vta_tipo_nota_credito_ws_fe_param_tipo_comprobante">
		
            <h4><?php Lang::_lang('VtaTipoNotaCreditoWsFeParamTipoComprobante') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeParamTipoComprobante') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_param_tipo_comprobante->getVtaTipoNotaCreditoWsFeParamTipoComprobantesParaBloqueMasInfo() as $vta_tipo_nota_credito_ws_fe_param_tipo_comprobante){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_tipo_nota_credito_ws_fe_param_tipo_comprobante->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_tipo_nota_credito_ws_fe_param_tipo_comprobante->getDescripcionVinculante('WsFeParamTipoComprobante')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_tipo_nota_credito_ws_fe_param_tipo_comprobante->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_nota_credito_ws_fe_param_tipo_comprobante->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_tipo_nota_credito_ws_fe_param_tipo_comprobante->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_nota_credito_ws_fe_param_tipo_comprobante->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_tipo_nota_credito_ws_fe_param_tipo_comprobante->getId() ?>" archivo="ajax/modulos/vta_tipo_nota_credito_ws_fe_param_tipo_comprobante/vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaTipoNotaCreditoWsFeParamTipoComprobante') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_NOTA_CREDITO_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTipoNotaCreditoWsFeParamTipoComprobante') ?>">
                                <a href="vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_alta.php?id=<?php echo $vta_tipo_nota_credito_ws_fe_param_tipo_comprobante->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_VTA_TIPO_NOTA_CREDITO_WS_FE_PARAM_TIPO_COMPROBANTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_tipo_nota_credito_ws_fe_param_tipo_comprobante){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaTipoNotaCreditoWsFeParamTipoComprobante::getFiltrosArrGral() ?>&arr=<?php echo $vta_tipo_nota_credito_ws_fe_param_tipo_comprobante->getFiltrosArrXCampo('WsFeParamTipoComprobante', 'ws_fe_param_tipo_comprobante_id') ?>" >
                                <?php Lang::_lang('Ver VtaTipoNotaCreditoWsFeParamTipoComprobantes de ') ?> <strong><?php echo($ws_fe_param_tipo_comprobante->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_alta.php" >
                            <?php Lang::_lang('Agregar VtaTipoNotaCreditoWsFeParamTipoComprobante') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_VTA_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
	<div id="tab_vta_tipo_nota_debito_ws_fe_param_tipo_comprobante" class="bloque-relacion vta_tipo_nota_debito_ws_fe_param_tipo_comprobante">
		
            <h4><?php Lang::_lang('VtaTipoNotaDebitoWsFeParamTipoComprobante') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeParamTipoComprobante') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_param_tipo_comprobante->getVtaTipoNotaDebitoWsFeParamTipoComprobantesParaBloqueMasInfo() as $vta_tipo_nota_debito_ws_fe_param_tipo_comprobante){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getDescripcionVinculante('WsFeParamTipoComprobante')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getId() ?>" archivo="ajax/modulos/vta_tipo_nota_debito_ws_fe_param_tipo_comprobante/vta_tipo_nota_debito_ws_fe_param_tipo_comprobante_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaTipoNotaDebitoWsFeParamTipoComprobante') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTipoNotaDebitoWsFeParamTipoComprobante') ?>">
                                <a href="vta_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta.php?id=<?php echo $vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_VTA_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_tipo_nota_debito_ws_fe_param_tipo_comprobante){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaTipoNotaDebitoWsFeParamTipoComprobante::getFiltrosArrGral() ?>&arr=<?php echo $vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getFiltrosArrXCampo('WsFeParamTipoComprobante', 'ws_fe_param_tipo_comprobante_id') ?>" >
                                <?php Lang::_lang('Ver VtaTipoNotaDebitoWsFeParamTipoComprobantes de ') ?> <strong><?php echo($ws_fe_param_tipo_comprobante->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta.php" >
                            <?php Lang::_lang('Agregar VtaTipoNotaDebitoWsFeParamTipoComprobante') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_VTA_TIPO_RECIBO_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
	<div id="tab_vta_tipo_recibo_ws_fe_param_tipo_comprobante" class="bloque-relacion vta_tipo_recibo_ws_fe_param_tipo_comprobante">
		
            <h4><?php Lang::_lang('VtaTipoReciboWsFeParamTipoComprobante') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeParamTipoComprobante') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_param_tipo_comprobante->getVtaTipoReciboWsFeParamTipoComprobantesParaBloqueMasInfo() as $vta_tipo_recibo_ws_fe_param_tipo_comprobante){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_tipo_recibo_ws_fe_param_tipo_comprobante->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_tipo_recibo_ws_fe_param_tipo_comprobante->getDescripcionVinculante('WsFeParamTipoComprobante')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_tipo_recibo_ws_fe_param_tipo_comprobante->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_recibo_ws_fe_param_tipo_comprobante->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_tipo_recibo_ws_fe_param_tipo_comprobante->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_recibo_ws_fe_param_tipo_comprobante->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_tipo_recibo_ws_fe_param_tipo_comprobante->getId() ?>" archivo="ajax/modulos/vta_tipo_recibo_ws_fe_param_tipo_comprobante/vta_tipo_recibo_ws_fe_param_tipo_comprobante_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaTipoReciboWsFeParamTipoComprobante') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_RECIBO_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTipoReciboWsFeParamTipoComprobante') ?>">
                                <a href="vta_tipo_recibo_ws_fe_param_tipo_comprobante_alta.php?id=<?php echo $vta_tipo_recibo_ws_fe_param_tipo_comprobante->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_VTA_TIPO_RECIBO_WS_FE_PARAM_TIPO_COMPROBANTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_tipo_recibo_ws_fe_param_tipo_comprobante){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaTipoReciboWsFeParamTipoComprobante::getFiltrosArrGral() ?>&arr=<?php echo $vta_tipo_recibo_ws_fe_param_tipo_comprobante->getFiltrosArrXCampo('WsFeParamTipoComprobante', 'ws_fe_param_tipo_comprobante_id') ?>" >
                                <?php Lang::_lang('Ver VtaTipoReciboWsFeParamTipoComprobantes de ') ?> <strong><?php echo($ws_fe_param_tipo_comprobante->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_tipo_recibo_ws_fe_param_tipo_comprobante_alta.php" >
                            <?php Lang::_lang('Agregar VtaTipoReciboWsFeParamTipoComprobante') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_WS_FE_OPE_SOLICITUD')){ ?>
	<div id="tab_ws_fe_ope_solicitud" class="bloque-relacion ws_fe_ope_solicitud">
		
            <h4><?php Lang::_lang('WsFeOpeSolicitud') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeParamTipoComprobante') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_param_tipo_comprobante->getWsFeOpeSolicitudsParaBloqueMasInfo() as $ws_fe_ope_solicitud){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ws_fe_ope_solicitud->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ws_fe_ope_solicitud->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ws_fe_ope_solicitud->getId() ?>" archivo="ajax/modulos/ws_fe_ope_solicitud/ws_fe_ope_solicitud_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?>">
                                <a href="ws_fe_ope_solicitud_alta.php?id=<?php echo $ws_fe_ope_solicitud->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_WS_FE_OPE_SOLICITUD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ws_fe_ope_solicitud){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo WsFeOpeSolicitud::getFiltrosArrGral() ?>&arr=<?php echo $ws_fe_ope_solicitud->getFiltrosArrXCampo('WsFeParamTipoComprobante', 'ws_fe_param_tipo_comprobante_id') ?>" >
                                <?php Lang::_lang('Ver WsFeOpeSolicituds de ') ?> <strong><?php echo($ws_fe_param_tipo_comprobante->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ws_fe_ope_solicitud_alta.php" >
                            <?php Lang::_lang('Agregar WsFeOpeSolicitud') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_PDE_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
	<div id="tab_pde_tipo_factura_ws_fe_param_tipo_comprobante" class="bloque-relacion pde_tipo_factura_ws_fe_param_tipo_comprobante">
		
            <h4><?php Lang::_lang('PdeTipoFacturaWsFeParamTipoComprobante') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeParamTipoComprobante') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_param_tipo_comprobante->getPdeTipoFacturaWsFeParamTipoComprobantesParaBloqueMasInfo() as $pde_tipo_factura_ws_fe_param_tipo_comprobante){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_tipo_factura_ws_fe_param_tipo_comprobante->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_tipo_factura_ws_fe_param_tipo_comprobante->getDescripcionVinculante('WsFeParamTipoComprobante')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_tipo_factura_ws_fe_param_tipo_comprobante->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_factura_ws_fe_param_tipo_comprobante->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_tipo_factura_ws_fe_param_tipo_comprobante->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_factura_ws_fe_param_tipo_comprobante->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_tipo_factura_ws_fe_param_tipo_comprobante->getId() ?>" archivo="ajax/modulos/pde_tipo_factura_ws_fe_param_tipo_comprobante/pde_tipo_factura_ws_fe_param_tipo_comprobante_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeTipoFacturaWsFeParamTipoComprobante') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeTipoFacturaWsFeParamTipoComprobante') ?>">
                                <a href="pde_tipo_factura_ws_fe_param_tipo_comprobante_alta.php?id=<?php echo $pde_tipo_factura_ws_fe_param_tipo_comprobante->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_PDE_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_tipo_factura_ws_fe_param_tipo_comprobante){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeTipoFacturaWsFeParamTipoComprobante::getFiltrosArrGral() ?>&arr=<?php echo $pde_tipo_factura_ws_fe_param_tipo_comprobante->getFiltrosArrXCampo('WsFeParamTipoComprobante', 'ws_fe_param_tipo_comprobante_id') ?>" >
                                <?php Lang::_lang('Ver PdeTipoFacturaWsFeParamTipoComprobantes de ') ?> <strong><?php echo($ws_fe_param_tipo_comprobante->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_tipo_factura_ws_fe_param_tipo_comprobante_alta.php" >
                            <?php Lang::_lang('Agregar PdeTipoFacturaWsFeParamTipoComprobante') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_PDE_TIPO_NOTA_CREDITO_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
	<div id="tab_pde_tipo_nota_credito_ws_fe_param_tipo_comprobante" class="bloque-relacion pde_tipo_nota_credito_ws_fe_param_tipo_comprobante">
		
            <h4><?php Lang::_lang('PdeTipoNotaCreditoWsFeParamTipoComprobante') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeParamTipoComprobante') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_param_tipo_comprobante->getPdeTipoNotaCreditoWsFeParamTipoComprobantesParaBloqueMasInfo() as $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getDescripcionVinculante('WsFeParamTipoComprobante')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getId() ?>" archivo="ajax/modulos/pde_tipo_nota_credito_ws_fe_param_tipo_comprobante/pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeTipoNotaCreditoWsFeParamTipoComprobante') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeTipoNotaCreditoWsFeParamTipoComprobante') ?>">
                                <a href="pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_alta.php?id=<?php echo $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_PDE_TIPO_NOTA_CREDITO_WS_FE_PARAM_TIPO_COMPROBANTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeTipoNotaCreditoWsFeParamTipoComprobante::getFiltrosArrGral() ?>&arr=<?php echo $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getFiltrosArrXCampo('WsFeParamTipoComprobante', 'ws_fe_param_tipo_comprobante_id') ?>" >
                                <?php Lang::_lang('Ver PdeTipoNotaCreditoWsFeParamTipoComprobantes de ') ?> <strong><?php echo($ws_fe_param_tipo_comprobante->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_alta.php" >
                            <?php Lang::_lang('Agregar PdeTipoNotaCreditoWsFeParamTipoComprobante') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_PDE_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
	<div id="tab_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante" class="bloque-relacion pde_tipo_nota_debito_ws_fe_param_tipo_comprobante">
		
            <h4><?php Lang::_lang('PdeTipoNotaDebitoWsFeParamTipoComprobante') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeParamTipoComprobante') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_param_tipo_comprobante->getPdeTipoNotaDebitoWsFeParamTipoComprobantesParaBloqueMasInfo() as $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getDescripcionVinculante('WsFeParamTipoComprobante')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getId() ?>" archivo="ajax/modulos/pde_tipo_nota_debito_ws_fe_param_tipo_comprobante/pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeTipoNotaDebitoWsFeParamTipoComprobante') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeTipoNotaDebitoWsFeParamTipoComprobante') ?>">
                                <a href="pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta.php?id=<?php echo $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_MASINFO_PDE_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeTipoNotaDebitoWsFeParamTipoComprobante::getFiltrosArrGral() ?>&arr=<?php echo $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getFiltrosArrXCampo('WsFeParamTipoComprobante', 'ws_fe_param_tipo_comprobante_id') ?>" >
                                <?php Lang::_lang('Ver PdeTipoNotaDebitoWsFeParamTipoComprobantes de ') ?> <strong><?php echo($ws_fe_param_tipo_comprobante->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta.php" >
                            <?php Lang::_lang('Agregar PdeTipoNotaDebitoWsFeParamTipoComprobante') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

