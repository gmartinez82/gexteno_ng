<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_unidad_medida_id = Gral::getVars(2, 'id');
$ins_unidad_medida = InsUnidadMedida::getOxId($ins_unidad_medida_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_unidad_medida->getDescripcionCorta())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_unidad_medida->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_UNIDAD_MEDIDA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_unidad_medida->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_unidad_medida->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_UNIDAD_MEDIDA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_unidad_medida->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_unidad_medida->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_INS_INSUMO')){ ?>
            <li><a href="#tab_ins_insumo"><?php Lang::_lang('InsInsumos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_INS_INSUMO_BULTO')){ ?>
            <li><a href="#tab_ins_insumo_bulto"><?php Lang::_lang('InsInsumoBultos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_nota_credito_vta_factura_vta_orden_venta"><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_factura_vta_orden_venta"><?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_PDE_FACTURA_PDE_OC')){ ?>
            <li><a href="#tab_pde_factura_pde_oc"><?php Lang::_lang('PdeFacturaPdeOcs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_PDE_FACTURA_PDE_RECEPCION')){ ?>
            <li><a href="#tab_pde_factura_pde_recepcion"><?php Lang::_lang('PdeFacturaPdeRecepcions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_RECEPCION')){ ?>
            <li><a href="#tab_pde_nota_credito_pde_factura_pde_recepcion"><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcion') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC')){ ?>
            <li><a href="#tab_pde_nota_credito_pde_factura_pde_oc"><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeOc') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_ajuste_debe_vta_orden_venta"><?php Lang::_lang('VtaAjusteDebeVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_VTA_AJUSTE_HABER_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta"><?php Lang::_lang('VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_EKU_PARAM_UNIDAD_MEDIDA_INS_UNIDAD_MEDIDA')){ ?>
            <li><a href="#tab_eku_param_unidad_medida_ins_unidad_medida"><?php Lang::_lang('EkuParamUnidadMedidaInsUnidadMedidas') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_INS_INSUMO')){ ?>
	<div id="tab_ins_insumo" class="bloque-relacion ins_insumo">
		
            <h4><?php Lang::_lang('InsInsumo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsUnidadMedida') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_unidad_medida->getInsInsumosParaBloqueMasInfo() as $ins_insumo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo->getId() ?>" archivo="ajax/modulos/ins_insumo/ins_insumo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumo') ?>">
                                <a href="ins_insumo_alta.php?id=<?php echo $ins_insumo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_INS_INSUMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumo::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo->getFiltrosArrXCampo('InsUnidadMedida', 'ins_unidad_medida_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumos de ') ?> <strong><?php echo($ins_unidad_medida->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_INS_INSUMO_BULTO')){ ?>
	<div id="tab_ins_insumo_bulto" class="bloque-relacion ins_insumo_bulto">
		
            <h4><?php Lang::_lang('InsInsumoBulto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsUnidadMedida') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_unidad_medida->getInsInsumoBultosParaBloqueMasInfo() as $ins_insumo_bulto){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_bulto->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_bulto->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_bulto->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_bulto->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_bulto->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_bulto->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_bulto->getId() ?>" archivo="ajax/modulos/ins_insumo_bulto/ins_insumo_bulto_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoBulto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_BULTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoBulto') ?>">
                                <a href="ins_insumo_bulto_alta.php?id=<?php echo $ins_insumo_bulto->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_INS_INSUMO_BULTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_bulto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoBulto::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_bulto->getFiltrosArrXCampo('InsUnidadMedida', 'ins_unidad_medida_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoBultos de ') ?> <strong><?php echo($ins_unidad_medida->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_bulto_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoBulto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_nota_credito_vta_factura_vta_orden_venta" class="bloque-relacion vta_nota_credito_vta_factura_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsUnidadMedida') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_unidad_medida->getVtaNotaCreditoVtaFacturaVtaOrdenVentasParaBloqueMasInfo() as $vta_nota_credito_vta_factura_vta_orden_venta){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito_vta_factura_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoVtaFacturaVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_vta_factura_vta_orden_venta->getFiltrosArrXCampo('InsUnidadMedida', 'ins_unidad_medida_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditoVtaFacturaVtaOrdenVentas de ') ?> <strong><?php echo($ins_unidad_medida->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_factura_vta_orden_venta" class="bloque-relacion vta_factura_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsUnidadMedida') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_unidad_medida->getVtaFacturaVtaOrdenVentasParaBloqueMasInfo() as $vta_factura_vta_orden_venta){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_VTA_FACTURA_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_vta_orden_venta->getFiltrosArrXCampo('InsUnidadMedida', 'ins_unidad_medida_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaVtaOrdenVentas de ') ?> <strong><?php echo($ins_unidad_medida->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_PDE_FACTURA_PDE_OC')){ ?>
	<div id="tab_pde_factura_pde_oc" class="bloque-relacion pde_factura_pde_oc">
		
            <h4><?php Lang::_lang('PdeFacturaPdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsUnidadMedida') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_unidad_medida->getPdeFacturaPdeOcsParaBloqueMasInfo() as $pde_factura_pde_oc){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_PDE_FACTURA_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_oc->getFiltrosArrXCampo('InsUnidadMedida', 'ins_unidad_medida_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaPdeOcs de ') ?> <strong><?php echo($ins_unidad_medida->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_PDE_FACTURA_PDE_RECEPCION')){ ?>
	<div id="tab_pde_factura_pde_recepcion" class="bloque-relacion pde_factura_pde_recepcion">
		
            <h4><?php Lang::_lang('PdeFacturaPdeRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsUnidadMedida') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_unidad_medida->getPdeFacturaPdeRecepcionsParaBloqueMasInfo() as $pde_factura_pde_recepcion){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_PDE_FACTURA_PDE_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_pde_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_recepcion->getFiltrosArrXCampo('InsUnidadMedida', 'ins_unidad_medida_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaPdeRecepcions de ') ?> <strong><?php echo($ins_unidad_medida->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_RECEPCION')){ ?>
	<div id="tab_pde_nota_credito_pde_factura_pde_recepcion" class="bloque-relacion pde_nota_credito_pde_factura_pde_recepcion">
		
            <h4><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsUnidadMedida') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_unidad_medida->getPdeNotaCreditoPdeFacturaPdeRecepcionsParaBloqueMasInfo() as $pde_nota_credito_pde_factura_pde_recepcion){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_pde_factura_pde_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoPdeFacturaPdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_pde_factura_pde_recepcion->getFiltrosArrXCampo('InsUnidadMedida', 'ins_unidad_medida_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoPdeFacturaPdeRecepcions de ') ?> <strong><?php echo($ins_unidad_medida->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC')){ ?>
	<div id="tab_pde_nota_credito_pde_factura_pde_oc" class="bloque-relacion pde_nota_credito_pde_factura_pde_oc">
		
            <h4><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsUnidadMedida') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_unidad_medida->getPdeNotaCreditoPdeFacturaPdeOcsParaBloqueMasInfo() as $pde_nota_credito_pde_factura_pde_oc){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_pde_factura_pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoPdeFacturaPdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_pde_factura_pde_oc->getFiltrosArrXCampo('InsUnidadMedida', 'ins_unidad_medida_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoPdeFacturaPdeOcs de ') ?> <strong><?php echo($ins_unidad_medida->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_ajuste_debe_vta_orden_venta" class="bloque-relacion vta_ajuste_debe_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaAjusteDebeVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsUnidadMedida') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_unidad_medida->getVtaAjusteDebeVtaOrdenVentasParaBloqueMasInfo() as $vta_ajuste_debe_vta_orden_venta){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_debe_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteDebeVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_debe_vta_orden_venta->getFiltrosArrXCampo('InsUnidadMedida', 'ins_unidad_medida_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteDebeVtaOrdenVentas de ') ?> <strong><?php echo($ins_unidad_medida->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_VTA_AJUSTE_HABER_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta" class="bloque-relacion vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsUnidadMedida') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_unidad_medida->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasParaBloqueMasInfo() as $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_VTA_AJUSTE_HABER_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getFiltrosArrXCampo('InsUnidadMedida', 'ins_unidad_medida_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteHaberVtaAjusteDebeVtaOrdenVentas de ') ?> <strong><?php echo($ins_unidad_medida->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_EKU_PARAM_UNIDAD_MEDIDA_INS_UNIDAD_MEDIDA')){ ?>
	<div id="tab_eku_param_unidad_medida_ins_unidad_medida" class="bloque-relacion eku_param_unidad_medida_ins_unidad_medida">
		
            <h4><?php Lang::_lang('EkuParamUnidadMedidaInsUnidadMedida') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsUnidadMedida') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_unidad_medida->getEkuParamUnidadMedidaInsUnidadMedidasParaBloqueMasInfo() as $eku_param_unidad_medida_ins_unidad_medida){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_unidad_medida_ins_unidad_medida->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_unidad_medida_ins_unidad_medida->getDescripcionVinculante('InsUnidadMedida')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_unidad_medida_ins_unidad_medida->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_unidad_medida_ins_unidad_medida->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_unidad_medida_ins_unidad_medida->getId() ?>" archivo="ajax/modulos/eku_param_unidad_medida_ins_unidad_medida/eku_param_unidad_medida_ins_unidad_medida_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamUnidadMedidaInsUnidadMedida') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_UNIDAD_MEDIDA_INS_UNIDAD_MEDIDA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamUnidadMedidaInsUnidadMedida') ?>">
                                <a href="eku_param_unidad_medida_ins_unidad_medida_alta.php?id=<?php echo $eku_param_unidad_medida_ins_unidad_medida->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_MASINFO_EKU_PARAM_UNIDAD_MEDIDA_INS_UNIDAD_MEDIDA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_unidad_medida_ins_unidad_medida){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamUnidadMedidaInsUnidadMedida::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_unidad_medida_ins_unidad_medida->getFiltrosArrXCampo('InsUnidadMedida', 'ins_unidad_medida_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamUnidadMedidaInsUnidadMedidas de ') ?> <strong><?php echo($ins_unidad_medida->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_unidad_medida_ins_unidad_medida_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamUnidadMedidaInsUnidadMedida') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

