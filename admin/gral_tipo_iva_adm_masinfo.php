<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_tipo_iva_id = Gral::getVars(2, 'id');
$gral_tipo_iva = GralTipoIva::getOxId($gral_tipo_iva_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_tipo_iva->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_TIPO_IVA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_tipo_iva->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_tipo_iva->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_TIPO_IVA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_tipo_iva->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_tipo_iva->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_GRAL_TIPO_IVA_WS_FE_PARAM_TIPO_IVA')){ ?>
            <li><a href="#tab_gral_tipo_iva_ws_fe_param_tipo_iva"><?php Lang::_lang('GralTipoIvaWsFeParamTipoIva') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PRV_INSUMO')){ ?>
            <li><a href="#tab_prv_insumo"><?php Lang::_lang('PrvInsumo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_PRESUPUESTO_INS_INSUMO')){ ?>
            <li><a href="#tab_vta_presupuesto_ins_insumo"><?php Lang::_lang('VtaPresupuestoInsInsumo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_nota_credito_vta_factura_vta_orden_venta"><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_NOTA_CREDITO_ITEM')){ ?>
            <li><a href="#tab_vta_nota_credito_item"><?php Lang::_lang('VtaNotaCreditoItem') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_NOTA_DEBITO_ITEM')){ ?>
            <li><a href="#tab_vta_nota_debito_item"><?php Lang::_lang('VtaNotaDebitoItem') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_RECIBO_ITEM')){ ?>
            <li><a href="#tab_vta_recibo_item"><?php Lang::_lang('VtaReciboItem') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_orden_venta"><?php Lang::_lang('VtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_FACTURA_ITEM')){ ?>
            <li><a href="#tab_vta_factura_item"><?php Lang::_lang('VtaFacturaItems') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_factura_vta_orden_venta"><?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_OC_AGRUPACION_ITEM')){ ?>
            <li><a href="#tab_pde_oc_agrupacion_item"><?php Lang::_lang('PdeOcAgrupacionItems') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_OC')){ ?>
            <li><a href="#tab_pde_oc"><?php Lang::_lang('PdeOcs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_FACTURA_ITEM')){ ?>
            <li><a href="#tab_pde_factura_item"><?php Lang::_lang('PdeFacturaItems') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_FACTURA_PDE_OC')){ ?>
            <li><a href="#tab_pde_factura_pde_oc"><?php Lang::_lang('PdeFacturaPdeOcs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_FACTURA_PDE_RECEPCION')){ ?>
            <li><a href="#tab_pde_factura_pde_recepcion"><?php Lang::_lang('PdeFacturaPdeRecepcions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_RECEPCION')){ ?>
            <li><a href="#tab_pde_nota_credito_pde_factura_pde_recepcion"><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcion') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC')){ ?>
            <li><a href="#tab_pde_nota_credito_pde_factura_pde_oc"><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeOc') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_NOTA_CREDITO_ITEM')){ ?>
            <li><a href="#tab_pde_nota_credito_item"><?php Lang::_lang('PdeNotaCreditoItem') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_NOTA_DEBITO_ITEM')){ ?>
            <li><a href="#tab_pde_nota_debito_item"><?php Lang::_lang('PdeNotaDebitoItem') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_RECIBO_ITEM')){ ?>
            <li><a href="#tab_pde_recibo_item"><?php Lang::_lang('PdeReciboItem') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_ajuste_debe_vta_orden_venta"><?php Lang::_lang('VtaAjusteDebeVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_AJUSTE_DEBE_ITEM')){ ?>
            <li><a href="#tab_vta_ajuste_debe_item"><?php Lang::_lang('VtaAjusteDebeItem') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_AJUSTE_HABER_ITEM')){ ?>
            <li><a href="#tab_vta_ajuste_haber_item"><?php Lang::_lang('VtaAjusteHaberItem') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_AJUSTE_HABER_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta"><?php Lang::_lang('VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_EKU_PARAM_TIPO_AFECTACION_TRIBUTARIA_GRAL_TIPO_IVA')){ ?>
            <li><a href="#tab_eku_param_tipo_afectacion_tributaria_gral_tipo_iva"><?php Lang::_lang('EkuParamTipoAfectacionTributariaGralTipoIvas') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_GRAL_TIPO_IVA_WS_FE_PARAM_TIPO_IVA')){ ?>
	<div id="tab_gral_tipo_iva_ws_fe_param_tipo_iva" class="bloque-relacion gral_tipo_iva_ws_fe_param_tipo_iva">
		
            <h4><?php Lang::_lang('GralTipoIvaWsFeParamTipoIva') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getGralTipoIvaWsFeParamTipoIvasParaBloqueMasInfo() as $gral_tipo_iva_ws_fe_param_tipo_iva){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getDescripcionVinculante('GralTipoIva')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_tipo_iva_ws_fe_param_tipo_iva->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_tipo_iva_ws_fe_param_tipo_iva->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_tipo_iva_ws_fe_param_tipo_iva->getId() ?>" archivo="ajax/modulos/gral_tipo_iva_ws_fe_param_tipo_iva/gral_tipo_iva_ws_fe_param_tipo_iva_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralTipoIvaWsFeParamTipoIva') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_WS_FE_PARAM_TIPO_IVA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralTipoIvaWsFeParamTipoIva') ?>">
                                <a href="gral_tipo_iva_ws_fe_param_tipo_iva_alta.php?id=<?php echo $gral_tipo_iva_ws_fe_param_tipo_iva->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_GRAL_TIPO_IVA_WS_FE_PARAM_TIPO_IVA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_tipo_iva_ws_fe_param_tipo_iva){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralTipoIvaWsFeParamTipoIva::getFiltrosArrGral() ?>&arr=<?php echo $gral_tipo_iva_ws_fe_param_tipo_iva->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver GralTipoIvaWsFeParamTipoIvas de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_tipo_iva_ws_fe_param_tipo_iva_alta.php" >
                            <?php Lang::_lang('Agregar GralTipoIvaWsFeParamTipoIva') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PRV_INSUMO')){ ?>
	<div id="tab_prv_insumo" class="bloque-relacion prv_insumo">
		
            <h4><?php Lang::_lang('PrvInsumo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getPrvInsumosParaBloqueMasInfo() as $prv_insumo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_insumo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_insumo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_insumo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_insumo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_insumo->getId() ?>" archivo="ajax/modulos/prv_insumo/prv_insumo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvInsumo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvInsumo') ?>">
                                <a href="prv_insumo_alta.php?id=<?php echo $prv_insumo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PRV_INSUMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_insumo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvInsumo::getFiltrosArrGral() ?>&arr=<?php echo $prv_insumo->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver PrvInsumos de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_insumo_alta.php" >
                            <?php Lang::_lang('Agregar PrvInsumo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_PRESUPUESTO_INS_INSUMO')){ ?>
	<div id="tab_vta_presupuesto_ins_insumo" class="bloque-relacion vta_presupuesto_ins_insumo">
		
            <h4><?php Lang::_lang('VtaPresupuestoInsInsumo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getVtaPresupuestoInsInsumosParaBloqueMasInfo() as $vta_presupuesto_ins_insumo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_presupuesto_ins_insumo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_presupuesto_ins_insumo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_presupuesto_ins_insumo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_ins_insumo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_presupuesto_ins_insumo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_ins_insumo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_presupuesto_ins_insumo->getId() ?>" archivo="ajax/modulos/vta_presupuesto_ins_insumo/vta_presupuesto_ins_insumo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPresupuestoInsInsumo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPresupuestoInsInsumo') ?>">
                                <a href="vta_presupuesto_ins_insumo_alta.php?id=<?php echo $vta_presupuesto_ins_insumo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_PRESUPUESTO_INS_INSUMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto_ins_insumo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuestoInsInsumo::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto_ins_insumo->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestoInsInsumos de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_presupuesto_ins_insumo_alta.php" >
                            <?php Lang::_lang('Agregar VtaPresupuestoInsInsumo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_nota_credito_vta_factura_vta_orden_venta" class="bloque-relacion vta_nota_credito_vta_factura_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getVtaNotaCreditoVtaFacturaVtaOrdenVentasParaBloqueMasInfo() as $vta_nota_credito_vta_factura_vta_orden_venta){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito_vta_factura_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoVtaFacturaVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_vta_factura_vta_orden_venta->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditoVtaFacturaVtaOrdenVentas de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_NOTA_CREDITO_ITEM')){ ?>
	<div id="tab_vta_nota_credito_item" class="bloque-relacion vta_nota_credito_item">
		
            <h4><?php Lang::_lang('VtaNotaCreditoItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getVtaNotaCreditoItemsParaBloqueMasInfo() as $vta_nota_credito_item){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_NOTA_CREDITO_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoItem::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_item->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditoItems de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_NOTA_DEBITO_ITEM')){ ?>
	<div id="tab_vta_nota_debito_item" class="bloque-relacion vta_nota_debito_item">
		
            <h4><?php Lang::_lang('VtaNotaDebitoItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getVtaNotaDebitoItemsParaBloqueMasInfo() as $vta_nota_debito_item){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_NOTA_DEBITO_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebitoItem::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito_item->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitoItems de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_RECIBO_ITEM')){ ?>
	<div id="tab_vta_recibo_item" class="bloque-relacion vta_recibo_item">
		
            <h4><?php Lang::_lang('VtaReciboItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getVtaReciboItemsParaBloqueMasInfo() as $vta_recibo_item){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_RECIBO_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboItem::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_item->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboItems de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_orden_venta" class="bloque-relacion vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getVtaOrdenVentasParaBloqueMasInfo() as $vta_orden_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_orden_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_orden_venta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_orden_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_orden_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_orden_venta->getId() ?>" archivo="ajax/modulos/vta_orden_venta/vta_orden_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaOrdenVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaOrdenVenta') ?>">
                                <a href="vta_orden_venta_alta.php?id=<?php echo $vta_orden_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaOrdenVentas de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_orden_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaOrdenVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_FACTURA_ITEM')){ ?>
	<div id="tab_vta_factura_item" class="bloque-relacion vta_factura_item">
		
            <h4><?php Lang::_lang('VtaFacturaItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getVtaFacturaItemsParaBloqueMasInfo() as $vta_factura_item){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_FACTURA_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaItem::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_item->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaItems de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_factura_vta_orden_venta" class="bloque-relacion vta_factura_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getVtaFacturaVtaOrdenVentasParaBloqueMasInfo() as $vta_factura_vta_orden_venta){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_FACTURA_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_vta_orden_venta->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaVtaOrdenVentas de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_OC_AGRUPACION_ITEM')){ ?>
	<div id="tab_pde_oc_agrupacion_item" class="bloque-relacion pde_oc_agrupacion_item">
		
            <h4><?php Lang::_lang('PdeOcAgrupacionItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getPdeOcAgrupacionItemsParaBloqueMasInfo() as $pde_oc_agrupacion_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_agrupacion_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_agrupacion_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_agrupacion_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_agrupacion_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_agrupacion_item->getId() ?>" archivo="ajax/modulos/pde_oc_agrupacion_item/pde_oc_agrupacion_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcAgrupacionItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcAgrupacionItem') ?>">
                                <a href="pde_oc_agrupacion_item_alta.php?id=<?php echo $pde_oc_agrupacion_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_OC_AGRUPACION_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_agrupacion_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcAgrupacionItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_agrupacion_item->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcAgrupacionItems de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_agrupacion_item_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcAgrupacionItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_OC')){ ?>
	<div id="tab_pde_oc" class="bloque-relacion pde_oc">
		
            <h4><?php Lang::_lang('PdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getPdeOcsParaBloqueMasInfo() as $pde_oc){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc->getId() ?>" archivo="ajax/modulos/pde_oc/pde_oc_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOc') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOc') ?>">
                                <a href="pde_oc_alta.php?id=<?php echo $pde_oc->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcs de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_alta.php" >
                            <?php Lang::_lang('Agregar PdeOc') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_FACTURA_ITEM')){ ?>
	<div id="tab_pde_factura_item" class="bloque-relacion pde_factura_item">
		
            <h4><?php Lang::_lang('PdeFacturaItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getPdeFacturaItemsParaBloqueMasInfo() as $pde_factura_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_item->getId() ?>" archivo="ajax/modulos/pde_factura_item/pde_factura_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaItem') ?>">
                                <a href="pde_factura_item_alta.php?id=<?php echo $pde_factura_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_FACTURA_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_item->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaItems de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_item_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_FACTURA_PDE_OC')){ ?>
	<div id="tab_pde_factura_pde_oc" class="bloque-relacion pde_factura_pde_oc">
		
            <h4><?php Lang::_lang('PdeFacturaPdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getPdeFacturaPdeOcsParaBloqueMasInfo() as $pde_factura_pde_oc){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_pde_oc->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura_pde_oc->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_pde_oc->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_oc->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_pde_oc->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_oc->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_pde_oc->getId() ?>" archivo="ajax/modulos/pde_factura_pde_oc/pde_factura_pde_oc_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaPdeOc') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_OC_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaPdeOc') ?>">
                                <a href="pde_factura_pde_oc_alta.php?id=<?php echo $pde_factura_pde_oc->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_FACTURA_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_oc->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaPdeOcs de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_pde_oc_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaPdeOc') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_FACTURA_PDE_RECEPCION')){ ?>
	<div id="tab_pde_factura_pde_recepcion" class="bloque-relacion pde_factura_pde_recepcion">
		
            <h4><?php Lang::_lang('PdeFacturaPdeRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getPdeFacturaPdeRecepcionsParaBloqueMasInfo() as $pde_factura_pde_recepcion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_pde_recepcion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura_pde_recepcion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_pde_recepcion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_recepcion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_pde_recepcion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_recepcion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_pde_recepcion->getId() ?>" archivo="ajax/modulos/pde_factura_pde_recepcion/pde_factura_pde_recepcion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaPdeRecepcion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_RECEPCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaPdeRecepcion') ?>">
                                <a href="pde_factura_pde_recepcion_alta.php?id=<?php echo $pde_factura_pde_recepcion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_FACTURA_PDE_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_pde_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_recepcion->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaPdeRecepcions de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_pde_recepcion_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaPdeRecepcion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_RECEPCION')){ ?>
	<div id="tab_pde_nota_credito_pde_factura_pde_recepcion" class="bloque-relacion pde_nota_credito_pde_factura_pde_recepcion">
		
            <h4><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getPdeNotaCreditoPdeFacturaPdeRecepcionsParaBloqueMasInfo() as $pde_nota_credito_pde_factura_pde_recepcion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito_pde_factura_pde_recepcion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito_pde_factura_pde_recepcion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito_pde_factura_pde_recepcion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_factura_pde_recepcion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito_pde_factura_pde_recepcion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_factura_pde_recepcion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito_pde_factura_pde_recepcion->getId() ?>" archivo="ajax/modulos/pde_nota_credito_pde_factura_pde_recepcion/pde_nota_credito_pde_factura_pde_recepcion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_PDE_FACTURA_PDE_RECEPCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcion') ?>">
                                <a href="pde_nota_credito_pde_factura_pde_recepcion_alta.php?id=<?php echo $pde_nota_credito_pde_factura_pde_recepcion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_pde_factura_pde_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoPdeFacturaPdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_pde_factura_pde_recepcion->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoPdeFacturaPdeRecepcions de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_pde_factura_pde_recepcion_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCreditoPdeFacturaPdeRecepcion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC')){ ?>
	<div id="tab_pde_nota_credito_pde_factura_pde_oc" class="bloque-relacion pde_nota_credito_pde_factura_pde_oc">
		
            <h4><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getPdeNotaCreditoPdeFacturaPdeOcsParaBloqueMasInfo() as $pde_nota_credito_pde_factura_pde_oc){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito_pde_factura_pde_oc->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito_pde_factura_pde_oc->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito_pde_factura_pde_oc->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_factura_pde_oc->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito_pde_factura_pde_oc->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_factura_pde_oc->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito_pde_factura_pde_oc->getId() ?>" archivo="ajax/modulos/pde_nota_credito_pde_factura_pde_oc/pde_nota_credito_pde_factura_pde_oc_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeOc') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeOc') ?>">
                                <a href="pde_nota_credito_pde_factura_pde_oc_alta.php?id=<?php echo $pde_nota_credito_pde_factura_pde_oc->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_pde_factura_pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoPdeFacturaPdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_pde_factura_pde_oc->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoPdeFacturaPdeOcs de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_pde_factura_pde_oc_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCreditoPdeFacturaPdeOc') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_NOTA_CREDITO_ITEM')){ ?>
	<div id="tab_pde_nota_credito_item" class="bloque-relacion pde_nota_credito_item">
		
            <h4><?php Lang::_lang('PdeNotaCreditoItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getPdeNotaCreditoItemsParaBloqueMasInfo() as $pde_nota_credito_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito_item->getId() ?>" archivo="ajax/modulos/pde_nota_credito_item/pde_nota_credito_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCreditoItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCreditoItem') ?>">
                                <a href="pde_nota_credito_item_alta.php?id=<?php echo $pde_nota_credito_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_NOTA_CREDITO_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_item->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoItems de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_item_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCreditoItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_NOTA_DEBITO_ITEM')){ ?>
	<div id="tab_pde_nota_debito_item" class="bloque-relacion pde_nota_debito_item">
		
            <h4><?php Lang::_lang('PdeNotaDebitoItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getPdeNotaDebitoItemsParaBloqueMasInfo() as $pde_nota_debito_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_debito_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_debito_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_debito_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_debito_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_debito_item->getId() ?>" archivo="ajax/modulos/pde_nota_debito_item/pde_nota_debito_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaDebitoItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaDebitoItem') ?>">
                                <a href="pde_nota_debito_item_alta.php?id=<?php echo $pde_nota_debito_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_NOTA_DEBITO_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebitoItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito_item->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitoItems de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_debito_item_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaDebitoItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_RECIBO_ITEM')){ ?>
	<div id="tab_pde_recibo_item" class="bloque-relacion pde_recibo_item">
		
            <h4><?php Lang::_lang('PdeReciboItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getPdeReciboItemsParaBloqueMasInfo() as $pde_recibo_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recibo_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recibo_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recibo_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recibo_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recibo_item->getId() ?>" archivo="ajax/modulos/pde_recibo_item/pde_recibo_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeReciboItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeReciboItem') ?>">
                                <a href="pde_recibo_item_alta.php?id=<?php echo $pde_recibo_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_PDE_RECIBO_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeReciboItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo_item->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver PdeReciboItems de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recibo_item_alta.php" >
                            <?php Lang::_lang('Agregar PdeReciboItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_ajuste_debe_vta_orden_venta" class="bloque-relacion vta_ajuste_debe_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaAjusteDebeVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getVtaAjusteDebeVtaOrdenVentasParaBloqueMasInfo() as $vta_ajuste_debe_vta_orden_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_ajuste_debe_vta_orden_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_ajuste_debe_vta_orden_venta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_ajuste_debe_vta_orden_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_debe_vta_orden_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_ajuste_debe_vta_orden_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_debe_vta_orden_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_ajuste_debe_vta_orden_venta->getId() ?>" archivo="ajax/modulos/vta_ajuste_debe_vta_orden_venta/vta_ajuste_debe_vta_orden_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaAjusteDebeVtaOrdenVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaAjusteDebeVtaOrdenVenta') ?>">
                                <a href="vta_ajuste_debe_vta_orden_venta_alta.php?id=<?php echo $vta_ajuste_debe_vta_orden_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_debe_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteDebeVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_debe_vta_orden_venta->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteDebeVtaOrdenVentas de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_ajuste_debe_vta_orden_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaAjusteDebeVtaOrdenVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_AJUSTE_DEBE_ITEM')){ ?>
	<div id="tab_vta_ajuste_debe_item" class="bloque-relacion vta_ajuste_debe_item">
		
            <h4><?php Lang::_lang('VtaAjusteDebeItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getVtaAjusteDebeItemsParaBloqueMasInfo() as $vta_ajuste_debe_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_ajuste_debe_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_ajuste_debe_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_ajuste_debe_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_debe_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_ajuste_debe_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_debe_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_ajuste_debe_item->getId() ?>" archivo="ajax/modulos/vta_ajuste_debe_item/vta_ajuste_debe_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaAjusteDebeItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_AJUSTE_DEBE_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaAjusteDebeItem') ?>">
                                <a href="vta_ajuste_debe_item_alta.php?id=<?php echo $vta_ajuste_debe_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_AJUSTE_DEBE_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_debe_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteDebeItem::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_debe_item->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteDebeItems de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_ajuste_debe_item_alta.php" >
                            <?php Lang::_lang('Agregar VtaAjusteDebeItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_AJUSTE_HABER_ITEM')){ ?>
	<div id="tab_vta_ajuste_haber_item" class="bloque-relacion vta_ajuste_haber_item">
		
            <h4><?php Lang::_lang('VtaAjusteHaberItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getVtaAjusteHaberItemsParaBloqueMasInfo() as $vta_ajuste_haber_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_ajuste_haber_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_ajuste_haber_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_ajuste_haber_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_haber_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_ajuste_haber_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_haber_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_ajuste_haber_item->getId() ?>" archivo="ajax/modulos/vta_ajuste_haber_item/vta_ajuste_haber_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaAjusteHaberItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_AJUSTE_HABER_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaAjusteHaberItem') ?>">
                                <a href="vta_ajuste_haber_item_alta.php?id=<?php echo $vta_ajuste_haber_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_AJUSTE_HABER_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_haber_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteHaberItem::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_haber_item->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteHaberItems de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_ajuste_haber_item_alta.php" >
                            <?php Lang::_lang('Agregar VtaAjusteHaberItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_AJUSTE_HABER_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta" class="bloque-relacion vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasParaBloqueMasInfo() as $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getId() ?>" archivo="ajax/modulos/vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta/vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_AJUSTE_HABER_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta') ?>">
                                <a href="vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta_alta.php?id=<?php echo $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_VTA_AJUSTE_HABER_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteHaberVtaAjusteDebeVtaOrdenVentas de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_EKU_PARAM_TIPO_AFECTACION_TRIBUTARIA_GRAL_TIPO_IVA')){ ?>
	<div id="tab_eku_param_tipo_afectacion_tributaria_gral_tipo_iva" class="bloque-relacion eku_param_tipo_afectacion_tributaria_gral_tipo_iva">
		
            <h4><?php Lang::_lang('EkuParamTipoAfectacionTributariaGralTipoIva') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_iva->getEkuParamTipoAfectacionTributariaGralTipoIvasParaBloqueMasInfo() as $eku_param_tipo_afectacion_tributaria_gral_tipo_iva){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getDescripcionVinculante('GralTipoIva')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getId() ?>" archivo="ajax/modulos/eku_param_tipo_afectacion_tributaria_gral_tipo_iva/eku_param_tipo_afectacion_tributaria_gral_tipo_iva_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamTipoAfectacionTributariaGralTipoIva') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_AFECTACION_TRIBUTARIA_GRAL_TIPO_IVA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamTipoAfectacionTributariaGralTipoIva') ?>">
                                <a href="eku_param_tipo_afectacion_tributaria_gral_tipo_iva_alta.php?id=<?php echo $eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_MASINFO_EKU_PARAM_TIPO_AFECTACION_TRIBUTARIA_GRAL_TIPO_IVA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_tipo_afectacion_tributaria_gral_tipo_iva){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamTipoAfectacionTributariaGralTipoIva::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamTipoAfectacionTributariaGralTipoIvas de ') ?> <strong><?php echo($gral_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_tipo_afectacion_tributaria_gral_tipo_iva_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamTipoAfectacionTributariaGralTipoIva') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

