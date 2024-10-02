<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_insumo_id = Gral::getVars(2, 'id');
$ins_insumo = InsInsumo::getOxId($ins_insumo_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Descripcion Corta') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo->getDescripcionCorta())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo Importacion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo->getCodigoImportacion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo Barra') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo->getCodigoBarra())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo Barra Interno') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo->getCodigoBarraInterno())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('URL Tienda') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo->getUrlTienda())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Unidad Medida') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo->getInsUnidadMedida()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Es Comprable') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(GralSiNo::getOxId($ins_insumo->getEsComprable())->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Es Consumible') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(GralSiNo::getOxId($ins_insumo->getEsConsumible())->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Es Vendible') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(GralSiNo::getOxId($ins_insumo->getEsVendible())->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Es Fabricable') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(GralSiNo::getOxId($ins_insumo->getEsFabricable())->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Es Transformable') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(GralSiNo::getOxId($ins_insumo->getEsTransformableOrigen())->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Es Destino Transformacion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(GralSiNo::getOxId($ins_insumo->getEsTransformableDestino())->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Punto de Minimo Default') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo->getPuntoMinimo())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Punto de Pedido Default') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo->getPuntoPedido())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Punto de Maximo Default') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo->getPuntoMaximo())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Proporcion IVA') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo->getProporcionIva())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Notas Internas') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo->getNotasInternas())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo->getObservacion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Datos Migracion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo->getDatosMigracion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Claves') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo->getClaves())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Claves Atributos') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo->getClavesAtributos())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Claves Tienda') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo->getClavesTienda())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_ENVIADO')){ ?>
            <li><a href="#tab_ins_insumo_enviado"><?php Lang::_lang('InsInsumoEnviados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_IMAGEN')){ ?>
            <li><a href="#tab_ins_insumo_imagen"><?php Lang::_lang('InsInsumoImagens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_PRV_PROVEEDOR')){ ?>
            <li><a href="#tab_ins_insumo_prv_proveedor"><?php Lang::_lang('InsInsumoPrvProveedors') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_INS_MARCA')){ ?>
            <li><a href="#tab_ins_insumo_ins_marca"><?php Lang::_lang('InsInsumoInsMarcas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_INSTANCIA')){ ?>
            <li><a href="#tab_ins_insumo_instancia"><?php Lang::_lang('InsInsumoInstancias') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_BULTO')){ ?>
            <li><a href="#tab_ins_insumo_bulto"><?php Lang::_lang('InsInsumoBultos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_PAN_PANOL')){ ?>
            <li><a href="#tab_ins_insumo_pan_panol"><?php Lang::_lang('InsInsumoPanPanols') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_VEH_MODELO')){ ?>
            <li><a href="#tab_ins_insumo_veh_modelo"><?php Lang::_lang('InsInsumoVehModelos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_COMPOSICION')){ ?>
            <li><a href="#tab_ins_insumo_composicion"><?php Lang::_lang('InsInsumoComposicion') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_VINCULADO')){ ?>
            <li><a href="#tab_ins_insumo_vinculado"><?php Lang::_lang('InsInsumoVinculados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_SIMILAR')){ ?>
            <li><a href="#tab_ins_insumo_similar"><?php Lang::_lang('InsInsumoSimilars') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_VENTA_WEB_INFO')){ ?>
            <li><a href="#tab_ins_venta_web_info"><?php Lang::_lang('InsVentaWebInfos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_VENTA_ML_INFO')){ ?>
            <li><a href="#tab_ins_venta_ml_info"><?php Lang::_lang('InsVentaMlInfos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_COSTO')){ ?>
            <li><a href="#tab_ins_insumo_costo"><?php Lang::_lang('InsInsumoCostos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_LISTA_PRECIO')){ ?>
            <li><a href="#tab_ins_lista_precio"><?php Lang::_lang('InsListaPrecios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_INS_ETIQUETA')){ ?>
            <li><a href="#tab_ins_insumo_ins_etiqueta"><?php Lang::_lang('InsInsumoInsEtiquetas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_DESTINO_TRANSFORMACION')){ ?>
            <li><a href="#tab_ins_insumo_destino_transformacion"><?php Lang::_lang('InsInsumoDestinoTransformacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_INS_ATRIBUTO')){ ?>
            <li><a href="#tab_ins_insumo_ins_atributo"><?php Lang::_lang('InsInsumoInsAtributos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_STOCK_TRANSFORMACION')){ ?>
            <li><a href="#tab_ins_stock_transformacion"><?php Lang::_lang('InsStockTransformacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_STOCK_TRANSFORMACION_DESTINO')){ ?>
            <li><a href="#tab_ins_stock_transformacion_destino"><?php Lang::_lang('InsStockTransformacionDestinos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PRV_INSUMO')){ ?>
            <li><a href="#tab_prv_insumo"><?php Lang::_lang('PrvInsumo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_PRESUPUESTO_INS_INSUMO')){ ?>
            <li><a href="#tab_vta_presupuesto_ins_insumo"><?php Lang::_lang('VtaPresupuestoInsInsumo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_nota_credito_vta_factura_vta_orden_venta"><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_orden_venta"><?php Lang::_lang('VtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_REMITO_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_remito_vta_orden_venta"><?php Lang::_lang('VtaRemitoVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_factura_vta_orden_venta"><?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_POLITICA_DESCUENTO_INS_INSUMO')){ ?>
            <li><a href="#tab_vta_politica_descuento_ins_insumo"><?php Lang::_lang('VtaPoliticaDescuentoInsInsumos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_STOCK_MOVIMIENTO')){ ?>
            <li><a href="#tab_ins_stock_movimiento"><?php Lang::_lang('InsStockMovimientos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_STOCK_RESUMEN')){ ?>
            <li><a href="#tab_ins_stock_resumen"><?php Lang::_lang('InsStockResumens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDI_PEDIDO')){ ?>
            <li><a href="#tab_pdi_pedido"><?php Lang::_lang('PdiPedidos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDI_PEDIDO_AGRUPACION_ITEM')){ ?>
            <li><a href="#tab_pdi_pedido_agrupacion_item"><?php Lang::_lang('PdiPedidoAgrupacionItems') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_PEDIDO')){ ?>
            <li><a href="#tab_pde_pedido"><?php Lang::_lang('PdePedidos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_COTIZACION')){ ?>
            <li><a href="#tab_pde_cotizacion"><?php Lang::_lang('PdeCotizacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_OC_AGRUPACION_ITEM')){ ?>
            <li><a href="#tab_pde_oc_agrupacion_item"><?php Lang::_lang('PdeOcAgrupacionItems') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_OC')){ ?>
            <li><a href="#tab_pde_oc"><?php Lang::_lang('PdeOcs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_RECEPCION')){ ?>
            <li><a href="#tab_pde_recepcion"><?php Lang::_lang('PdeRecepcions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_FACTURA_PDE_OC')){ ?>
            <li><a href="#tab_pde_factura_pde_oc"><?php Lang::_lang('PdeFacturaPdeOcs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_FACTURA_PDE_RECEPCION')){ ?>
            <li><a href="#tab_pde_factura_pde_recepcion"><?php Lang::_lang('PdeFacturaPdeRecepcions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_RECEPCION')){ ?>
            <li><a href="#tab_pde_nota_credito_pde_factura_pde_recepcion"><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcion') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC')){ ?>
            <li><a href="#tab_pde_nota_credito_pde_factura_pde_oc"><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeOc') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_ajuste_debe_vta_orden_venta"><?php Lang::_lang('VtaAjusteDebeVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_AJUSTE_HABER_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta"><?php Lang::_lang('VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_REMITO_AJUSTE_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_remito_ajuste_vta_orden_venta"><?php Lang::_lang('VtaRemitoAjusteVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_SLD_SLIDER')){ ?>
            <li><a href="#tab_sld_slider"><?php Lang::_lang('SldSliders') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PRD_PROCESO_PRODUCTIVO')){ ?>
            <li><a href="#tab_prd_proceso_productivo"><?php Lang::_lang('PrdProcesoProductivos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PRD_ORDEN_TRABAJO')){ ?>
            <li><a href="#tab_prd_orden_trabajo"><?php Lang::_lang('PrdOrdenTrabajos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_ENVIADO')){ ?>
	<div id="tab_ins_insumo_enviado" class="bloque-relacion ins_insumo_enviado">
		
            <h4><?php Lang::_lang('InsInsumoEnviado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsInsumoEnviadosParaBloqueMasInfo() as $ins_insumo_enviado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_enviado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_enviado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_enviado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_enviado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_enviado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_enviado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_enviado->getId() ?>" archivo="ajax/modulos/ins_insumo_enviado/ins_insumo_enviado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoEnviado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ENVIADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoEnviado') ?>">
                                <a href="ins_insumo_enviado_alta.php?id=<?php echo $ins_insumo_enviado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_ENVIADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_enviado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoEnviado::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_enviado->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoEnviados de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_enviado_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoEnviado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_IMAGEN')){ ?>
	<div id="tab_ins_insumo_imagen" class="bloque-relacion ins_insumo_imagen">
		
            <h4><?php Lang::_lang('InsInsumoImagen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsInsumoImagensParaBloqueMasInfo() as $ins_insumo_imagen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_imagen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <img src="<?php Gral::_echo($ins_insumo_imagen->getPathImagen(true)) ?>" width="50" alt="<?php Gral::_echo($ins_insumo_imagen->getDescripcion()) ?>">					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_imagen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_imagen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_imagen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_imagen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_imagen->getId() ?>" archivo="ajax/modulos/ins_insumo_imagen/ins_insumo_imagen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoImagen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_IMAGEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoImagen') ?>">
                                <a href="ins_insumo_imagen_alta.php?id=<?php echo $ins_insumo_imagen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_IMAGEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_imagen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoImagen::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_imagen->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoImagens de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_imagen_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoImagen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_PRV_PROVEEDOR')){ ?>
	<div id="tab_ins_insumo_prv_proveedor" class="bloque-relacion ins_insumo_prv_proveedor">
		
            <h4><?php Lang::_lang('InsInsumoPrvProveedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsInsumoPrvProveedorsParaBloqueMasInfo() as $ins_insumo_prv_proveedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_prv_proveedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_prv_proveedor->getDescripcionVinculante('InsInsumo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_prv_proveedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_prv_proveedor->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_prv_proveedor->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_prv_proveedor->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_prv_proveedor->getId() ?>" archivo="ajax/modulos/ins_insumo_prv_proveedor/ins_insumo_prv_proveedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoPrvProveedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PRV_PROVEEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoPrvProveedor') ?>">
                                <a href="ins_insumo_prv_proveedor_alta.php?id=<?php echo $ins_insumo_prv_proveedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_PRV_PROVEEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_prv_proveedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoPrvProveedor::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_prv_proveedor->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoPrvProveedors de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_prv_proveedor_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoPrvProveedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_INS_MARCA')){ ?>
	<div id="tab_ins_insumo_ins_marca" class="bloque-relacion ins_insumo_ins_marca">
		
            <h4><?php Lang::_lang('InsInsumoInsMarca') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsInsumoInsMarcasParaBloqueMasInfo() as $ins_insumo_ins_marca){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_ins_marca->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_ins_marca->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_ins_marca->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_ins_marca->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_ins_marca->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_ins_marca->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_ins_marca->getId() ?>" archivo="ajax/modulos/ins_insumo_ins_marca/ins_insumo_ins_marca_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoInsMarca') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_INS_MARCA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoInsMarca') ?>">
                                <a href="ins_insumo_ins_marca_alta.php?id=<?php echo $ins_insumo_ins_marca->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_INS_MARCA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_ins_marca){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoInsMarca::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_ins_marca->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoInsMarcas de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_ins_marca_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoInsMarca') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_INSTANCIA')){ ?>
	<div id="tab_ins_insumo_instancia" class="bloque-relacion ins_insumo_instancia">
		
            <h4><?php Lang::_lang('InsInsumoInstancia') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsInsumoInstanciasParaBloqueMasInfo() as $ins_insumo_instancia){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_instancia->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_instancia->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_instancia->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_instancia->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_instancia->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_instancia->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_instancia->getId() ?>" archivo="ajax/modulos/ins_insumo_instancia/ins_insumo_instancia_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoInstancia') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_INSTANCIA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoInstancia') ?>">
                                <a href="ins_insumo_instancia_alta.php?id=<?php echo $ins_insumo_instancia->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_INSTANCIA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_instancia){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoInstancia::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_instancia->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoInstancias de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_instancia_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoInstancia') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_BULTO')){ ?>
	<div id="tab_ins_insumo_bulto" class="bloque-relacion ins_insumo_bulto">
		
            <h4><?php Lang::_lang('InsInsumoBulto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsInsumoBultosParaBloqueMasInfo() as $ins_insumo_bulto){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_BULTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_bulto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoBulto::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_bulto->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoBultos de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_PAN_PANOL')){ ?>
	<div id="tab_ins_insumo_pan_panol" class="bloque-relacion ins_insumo_pan_panol">
		
            <h4><?php Lang::_lang('InsInsumoPanPanol') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsInsumoPanPanolsParaBloqueMasInfo() as $ins_insumo_pan_panol){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_pan_panol->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_pan_panol->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_pan_panol->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_pan_panol->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_pan_panol->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_pan_panol->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_pan_panol->getId() ?>" archivo="ajax/modulos/ins_insumo_pan_panol/ins_insumo_pan_panol_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoPanPanol') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoPanPanol') ?>">
                                <a href="ins_insumo_pan_panol_alta.php?id=<?php echo $ins_insumo_pan_panol->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_PAN_PANOL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_pan_panol){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoPanPanol::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_pan_panol->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoPanPanols de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_pan_panol_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoPanPanol') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_VEH_MODELO')){ ?>
	<div id="tab_ins_insumo_veh_modelo" class="bloque-relacion ins_insumo_veh_modelo">
		
            <h4><?php Lang::_lang('InsInsumoVehModelo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsInsumoVehModelosParaBloqueMasInfo() as $ins_insumo_veh_modelo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_veh_modelo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_veh_modelo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_veh_modelo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_veh_modelo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_veh_modelo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_veh_modelo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_veh_modelo->getId() ?>" archivo="ajax/modulos/ins_insumo_veh_modelo/ins_insumo_veh_modelo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoVehModelo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_VEH_MODELO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoVehModelo') ?>">
                                <a href="ins_insumo_veh_modelo_alta.php?id=<?php echo $ins_insumo_veh_modelo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_VEH_MODELO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_veh_modelo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoVehModelo::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_veh_modelo->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoVehModelos de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_veh_modelo_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoVehModelo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_COMPOSICION')){ ?>
	<div id="tab_ins_insumo_composicion" class="bloque-relacion ins_insumo_composicion">
		
            <h4><?php Lang::_lang('InsInsumoComposicion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsInsumoComposicionsParaBloqueMasInfo() as $ins_insumo_composicion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_composicion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_composicion->getDescripcionVinculante('InsInsumo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_composicion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_composicion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_composicion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_composicion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_composicion->getId() ?>" archivo="ajax/modulos/ins_insumo_composicion/ins_insumo_composicion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoComposicion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_COMPOSICION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoComposicion') ?>">
                                <a href="ins_insumo_composicion_alta.php?id=<?php echo $ins_insumo_composicion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_COMPOSICION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_composicion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoComposicion::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_composicion->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoComposicions de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_composicion_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoComposicion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_VINCULADO')){ ?>
	<div id="tab_ins_insumo_vinculado" class="bloque-relacion ins_insumo_vinculado">
		
            <h4><?php Lang::_lang('InsInsumoVinculado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsInsumoVinculadosParaBloqueMasInfo() as $ins_insumo_vinculado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_vinculado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_vinculado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_vinculado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_vinculado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_vinculado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_vinculado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_vinculado->getId() ?>" archivo="ajax/modulos/ins_insumo_vinculado/ins_insumo_vinculado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoVinculado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_VINCULADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoVinculado') ?>">
                                <a href="ins_insumo_vinculado_alta.php?id=<?php echo $ins_insumo_vinculado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_VINCULADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_vinculado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoVinculado::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_vinculado->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoVinculados de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_vinculado_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoVinculado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_SIMILAR')){ ?>
	<div id="tab_ins_insumo_similar" class="bloque-relacion ins_insumo_similar">
		
            <h4><?php Lang::_lang('InsInsumoSimilar') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsInsumoSimilarsParaBloqueMasInfo() as $ins_insumo_similar){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_similar->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_similar->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_similar->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_similar->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_similar->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_similar->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_similar->getId() ?>" archivo="ajax/modulos/ins_insumo_similar/ins_insumo_similar_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoSimilar') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_SIMILAR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoSimilar') ?>">
                                <a href="ins_insumo_similar_alta.php?id=<?php echo $ins_insumo_similar->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_SIMILAR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_similar){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoSimilar::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_similar->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoSimilars de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_similar_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoSimilar') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_VENTA_WEB_INFO')){ ?>
	<div id="tab_ins_venta_web_info" class="bloque-relacion ins_venta_web_info">
		
            <h4><?php Lang::_lang('InsVentaWebInfo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsVentaWebInfosParaBloqueMasInfo() as $ins_venta_web_info){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_venta_web_info->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_venta_web_info->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_venta_web_info->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_web_info->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_venta_web_info->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_web_info->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_venta_web_info->getId() ?>" archivo="ajax/modulos/ins_venta_web_info/ins_venta_web_info_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsVentaWebInfo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_VENTA_WEB_INFO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsVentaWebInfo') ?>">
                                <a href="ins_venta_web_info_alta.php?id=<?php echo $ins_venta_web_info->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_VENTA_WEB_INFO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_venta_web_info){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsVentaWebInfo::getFiltrosArrGral() ?>&arr=<?php echo $ins_venta_web_info->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsVentaWebInfos de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_venta_web_info_alta.php" >
                            <?php Lang::_lang('Agregar InsVentaWebInfo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_VENTA_ML_INFO')){ ?>
	<div id="tab_ins_venta_ml_info" class="bloque-relacion ins_venta_ml_info">
		
            <h4><?php Lang::_lang('InsVentaMlInfo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsVentaMlInfosParaBloqueMasInfo() as $ins_venta_ml_info){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_venta_ml_info->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_venta_ml_info->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_venta_ml_info->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_ml_info->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_venta_ml_info->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_ml_info->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_venta_ml_info->getId() ?>" archivo="ajax/modulos/ins_venta_ml_info/ins_venta_ml_info_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsVentaMlInfo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsVentaMlInfo') ?>">
                                <a href="ins_venta_ml_info_alta.php?id=<?php echo $ins_venta_ml_info->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_VENTA_ML_INFO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_venta_ml_info){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsVentaMlInfo::getFiltrosArrGral() ?>&arr=<?php echo $ins_venta_ml_info->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsVentaMlInfos de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_venta_ml_info_alta.php" >
                            <?php Lang::_lang('Agregar InsVentaMlInfo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_COSTO')){ ?>
	<div id="tab_ins_insumo_costo" class="bloque-relacion ins_insumo_costo">
		
            <h4><?php Lang::_lang('InsInsumoCosto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsInsumoCostosParaBloqueMasInfo() as $ins_insumo_costo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_costo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_costo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_costo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_costo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_costo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_costo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_costo->getId() ?>" archivo="ajax/modulos/ins_insumo_costo/ins_insumo_costo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoCosto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_COSTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoCosto') ?>">
                                <a href="ins_insumo_costo_alta.php?id=<?php echo $ins_insumo_costo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_COSTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_costo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoCosto::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_costo->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoCostos de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_costo_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoCosto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_LISTA_PRECIO')){ ?>
	<div id="tab_ins_lista_precio" class="bloque-relacion ins_lista_precio">
		
            <h4><?php Lang::_lang('InsListaPrecio') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsListaPreciosParaBloqueMasInfo() as $ins_lista_precio){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_lista_precio->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_lista_precio->getDescripcionVinculante('InsInsumo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_lista_precio->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_lista_precio->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_lista_precio->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_lista_precio->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_lista_precio->getId() ?>" archivo="ajax/modulos/ins_lista_precio/ins_lista_precio_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsListaPrecio') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_LISTA_PRECIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsListaPrecio') ?>">
                                <a href="ins_lista_precio_alta.php?id=<?php echo $ins_lista_precio->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_LISTA_PRECIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_lista_precio){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsListaPrecio::getFiltrosArrGral() ?>&arr=<?php echo $ins_lista_precio->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsListaPrecios de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_lista_precio_alta.php" >
                            <?php Lang::_lang('Agregar InsListaPrecio') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_INS_ETIQUETA')){ ?>
	<div id="tab_ins_insumo_ins_etiqueta" class="bloque-relacion ins_insumo_ins_etiqueta">
		
            <h4><?php Lang::_lang('InsInsumoInsEtiqueta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsInsumoInsEtiquetasParaBloqueMasInfo() as $ins_insumo_ins_etiqueta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_ins_etiqueta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_ins_etiqueta->getDescripcionVinculante('InsInsumo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_ins_etiqueta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_ins_etiqueta->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_ins_etiqueta->getId() ?>" archivo="ajax/modulos/ins_insumo_ins_etiqueta/ins_insumo_ins_etiqueta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoInsEtiqueta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_INS_ETIQUETA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoInsEtiqueta') ?>">
                                <a href="ins_insumo_ins_etiqueta_alta.php?id=<?php echo $ins_insumo_ins_etiqueta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_INS_ETIQUETA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_ins_etiqueta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoInsEtiqueta::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_ins_etiqueta->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoInsEtiquetas de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_ins_etiqueta_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoInsEtiqueta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_DESTINO_TRANSFORMACION')){ ?>
	<div id="tab_ins_insumo_destino_transformacion" class="bloque-relacion ins_insumo_destino_transformacion">
		
            <h4><?php Lang::_lang('InsInsumoDestinoTransformacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsInsumoDestinoTransformacionsParaBloqueMasInfo() as $ins_insumo_destino_transformacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_destino_transformacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_destino_transformacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_destino_transformacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_destino_transformacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_destino_transformacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_destino_transformacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_destino_transformacion->getId() ?>" archivo="ajax/modulos/ins_insumo_destino_transformacion/ins_insumo_destino_transformacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoDestinoTransformacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_DESTINO_TRANSFORMACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoDestinoTransformacion') ?>">
                                <a href="ins_insumo_destino_transformacion_alta.php?id=<?php echo $ins_insumo_destino_transformacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_DESTINO_TRANSFORMACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_destino_transformacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoDestinoTransformacion::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_destino_transformacion->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoDestinoTransformacions de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_destino_transformacion_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoDestinoTransformacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_INS_ATRIBUTO')){ ?>
	<div id="tab_ins_insumo_ins_atributo" class="bloque-relacion ins_insumo_ins_atributo">
		
            <h4><?php Lang::_lang('InsInsumoInsAtributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsInsumoInsAtributosParaBloqueMasInfo() as $ins_insumo_ins_atributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_ins_atributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_ins_atributo->getDescripcionVinculante('InsInsumo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_ins_atributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_ins_atributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_ins_atributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_ins_atributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_ins_atributo->getId() ?>" archivo="ajax/modulos/ins_insumo_ins_atributo/ins_insumo_ins_atributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoInsAtributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_INS_ATRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoInsAtributo') ?>">
                                <a href="ins_insumo_ins_atributo_alta.php?id=<?php echo $ins_insumo_ins_atributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_INSUMO_INS_ATRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_ins_atributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoInsAtributo::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_ins_atributo->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoInsAtributos de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_ins_atributo_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoInsAtributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_STOCK_TRANSFORMACION')){ ?>
	<div id="tab_ins_stock_transformacion" class="bloque-relacion ins_stock_transformacion">
		
            <h4><?php Lang::_lang('InsStockTransformacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsStockTransformacionsParaBloqueMasInfo() as $ins_stock_transformacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_stock_transformacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_stock_transformacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_stock_transformacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_transformacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_stock_transformacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_transformacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_stock_transformacion->getId() ?>" archivo="ajax/modulos/ins_stock_transformacion/ins_stock_transformacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsStockTransformacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsStockTransformacion') ?>">
                                <a href="ins_stock_transformacion_alta.php?id=<?php echo $ins_stock_transformacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_STOCK_TRANSFORMACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_stock_transformacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsStockTransformacion::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_transformacion->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsStockTransformacions de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_stock_transformacion_alta.php" >
                            <?php Lang::_lang('Agregar InsStockTransformacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_STOCK_TRANSFORMACION_DESTINO')){ ?>
	<div id="tab_ins_stock_transformacion_destino" class="bloque-relacion ins_stock_transformacion_destino">
		
            <h4><?php Lang::_lang('InsStockTransformacionDestino') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsStockTransformacionDestinosParaBloqueMasInfo() as $ins_stock_transformacion_destino){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_stock_transformacion_destino->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_stock_transformacion_destino->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_stock_transformacion_destino->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_transformacion_destino->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_stock_transformacion_destino->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_transformacion_destino->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_stock_transformacion_destino->getId() ?>" archivo="ajax/modulos/ins_stock_transformacion_destino/ins_stock_transformacion_destino_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsStockTransformacionDestino') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_DESTINO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsStockTransformacionDestino') ?>">
                                <a href="ins_stock_transformacion_destino_alta.php?id=<?php echo $ins_stock_transformacion_destino->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_STOCK_TRANSFORMACION_DESTINO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_stock_transformacion_destino){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsStockTransformacionDestino::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_transformacion_destino->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsStockTransformacionDestinos de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_stock_transformacion_destino_alta.php" >
                            <?php Lang::_lang('Agregar InsStockTransformacionDestino') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PRV_INSUMO')){ ?>
	<div id="tab_prv_insumo" class="bloque-relacion prv_insumo">
		
            <h4><?php Lang::_lang('PrvInsumo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getPrvInsumosParaBloqueMasInfo() as $prv_insumo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PRV_INSUMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_insumo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvInsumo::getFiltrosArrGral() ?>&arr=<?php echo $prv_insumo->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PrvInsumos de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_PRESUPUESTO_INS_INSUMO')){ ?>
	<div id="tab_vta_presupuesto_ins_insumo" class="bloque-relacion vta_presupuesto_ins_insumo">
		
            <h4><?php Lang::_lang('VtaPresupuestoInsInsumo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getVtaPresupuestoInsInsumosParaBloqueMasInfo() as $vta_presupuesto_ins_insumo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_PRESUPUESTO_INS_INSUMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto_ins_insumo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuestoInsInsumo::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto_ins_insumo->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestoInsInsumos de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_nota_credito_vta_factura_vta_orden_venta" class="bloque-relacion vta_nota_credito_vta_factura_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getVtaNotaCreditoVtaFacturaVtaOrdenVentasParaBloqueMasInfo() as $vta_nota_credito_vta_factura_vta_orden_venta){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito_vta_factura_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoVtaFacturaVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_vta_factura_vta_orden_venta->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditoVtaFacturaVtaOrdenVentas de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_orden_venta" class="bloque-relacion vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getVtaOrdenVentasParaBloqueMasInfo() as $vta_orden_venta){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver VtaOrdenVentas de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_REMITO_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_remito_vta_orden_venta" class="bloque-relacion vta_remito_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaRemitoVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getVtaRemitoVtaOrdenVentasParaBloqueMasInfo() as $vta_remito_vta_orden_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_remito_vta_orden_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_remito_vta_orden_venta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_remito_vta_orden_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_vta_orden_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_remito_vta_orden_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_vta_orden_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_remito_vta_orden_venta->getId() ?>" archivo="ajax/modulos/vta_remito_vta_orden_venta/vta_remito_vta_orden_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRemitoVtaOrdenVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_VTA_ORDEN_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRemitoVtaOrdenVenta') ?>">
                                <a href="vta_remito_vta_orden_venta_alta.php?id=<?php echo $vta_remito_vta_orden_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_REMITO_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemitoVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito_vta_orden_venta->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitoVtaOrdenVentas de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_remito_vta_orden_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaRemitoVtaOrdenVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_factura_vta_orden_venta" class="bloque-relacion vta_factura_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getVtaFacturaVtaOrdenVentasParaBloqueMasInfo() as $vta_factura_vta_orden_venta){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_FACTURA_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_vta_orden_venta->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaVtaOrdenVentas de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_POLITICA_DESCUENTO_INS_INSUMO')){ ?>
	<div id="tab_vta_politica_descuento_ins_insumo" class="bloque-relacion vta_politica_descuento_ins_insumo">
		
            <h4><?php Lang::_lang('VtaPoliticaDescuentoInsInsumo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getVtaPoliticaDescuentoInsInsumosParaBloqueMasInfo() as $vta_politica_descuento_ins_insumo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_politica_descuento_ins_insumo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_politica_descuento_ins_insumo->getDescripcionVinculante('InsInsumo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_politica_descuento_ins_insumo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_politica_descuento_ins_insumo->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_politica_descuento_ins_insumo->getId() ?>" archivo="ajax/modulos/vta_politica_descuento_ins_insumo/vta_politica_descuento_ins_insumo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsInsumo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_INS_INSUMO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsInsumo') ?>">
                                <a href="vta_politica_descuento_ins_insumo_alta.php?id=<?php echo $vta_politica_descuento_ins_insumo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_POLITICA_DESCUENTO_INS_INSUMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_politica_descuento_ins_insumo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPoliticaDescuentoInsInsumo::getFiltrosArrGral() ?>&arr=<?php echo $vta_politica_descuento_ins_insumo->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver VtaPoliticaDescuentoInsInsumos de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_politica_descuento_ins_insumo_alta.php" >
                            <?php Lang::_lang('Agregar VtaPoliticaDescuentoInsInsumo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_STOCK_MOVIMIENTO')){ ?>
	<div id="tab_ins_stock_movimiento" class="bloque-relacion ins_stock_movimiento">
		
            <h4><?php Lang::_lang('InsStockMovimiento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsStockMovimientosParaBloqueMasInfo() as $ins_stock_movimiento){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_stock_movimiento->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_stock_movimiento->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_stock_movimiento->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_movimiento->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_stock_movimiento->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_movimiento->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_stock_movimiento->getId() ?>" archivo="ajax/modulos/ins_stock_movimiento/ins_stock_movimiento_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsStockMovimiento') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_STOCK_MOVIMIENTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsStockMovimiento') ?>">
                                <a href="ins_stock_movimiento_alta.php?id=<?php echo $ins_stock_movimiento->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_STOCK_MOVIMIENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_stock_movimiento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsStockMovimiento::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_movimiento->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsStockMovimientos de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_stock_movimiento_alta.php" >
                            <?php Lang::_lang('Agregar InsStockMovimiento') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_STOCK_RESUMEN')){ ?>
	<div id="tab_ins_stock_resumen" class="bloque-relacion ins_stock_resumen">
		
            <h4><?php Lang::_lang('InsStockResumen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getInsStockResumensParaBloqueMasInfo() as $ins_stock_resumen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_stock_resumen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_stock_resumen->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_stock_resumen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_resumen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_stock_resumen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_resumen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_stock_resumen->getId() ?>" archivo="ajax/modulos/ins_stock_resumen/ins_stock_resumen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsStockResumen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsStockResumen') ?>">
                                <a href="ins_stock_resumen_alta.php?id=<?php echo $ins_stock_resumen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_INS_STOCK_RESUMEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_stock_resumen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsStockResumen::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_resumen->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver InsStockResumens de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_stock_resumen_alta.php" >
                            <?php Lang::_lang('Agregar InsStockResumen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDI_PEDIDO')){ ?>
	<div id="tab_pdi_pedido" class="bloque-relacion pdi_pedido">
		
            <h4><?php Lang::_lang('PdiPedido') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getPdiPedidosParaBloqueMasInfo() as $pdi_pedido){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pdi_pedido->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pdi_pedido->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pdi_pedido->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pdi_pedido->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pdi_pedido->getId() ?>" archivo="ajax/modulos/pdi_pedido/pdi_pedido_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdiPedido') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiPedido') ?>">
                                <a href="pdi_pedido_alta.php?id=<?php echo $pdi_pedido->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDI_PEDIDO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pdi_pedido){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdiPedido::getFiltrosArrGral() ?>&arr=<?php echo $pdi_pedido->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PdiPedidos de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pdi_pedido_alta.php" >
                            <?php Lang::_lang('Agregar PdiPedido') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDI_PEDIDO_AGRUPACION_ITEM')){ ?>
	<div id="tab_pdi_pedido_agrupacion_item" class="bloque-relacion pdi_pedido_agrupacion_item">
		
            <h4><?php Lang::_lang('PdiPedidoAgrupacionItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getPdiPedidoAgrupacionItemsParaBloqueMasInfo() as $pdi_pedido_agrupacion_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pdi_pedido_agrupacion_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pdi_pedido_agrupacion_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pdi_pedido_agrupacion_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pdi_pedido_agrupacion_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pdi_pedido_agrupacion_item->getId() ?>" archivo="ajax/modulos/pdi_pedido_agrupacion_item/pdi_pedido_agrupacion_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdiPedidoAgrupacionItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiPedidoAgrupacionItem') ?>">
                                <a href="pdi_pedido_agrupacion_item_alta.php?id=<?php echo $pdi_pedido_agrupacion_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDI_PEDIDO_AGRUPACION_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pdi_pedido_agrupacion_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdiPedidoAgrupacionItem::getFiltrosArrGral() ?>&arr=<?php echo $pdi_pedido_agrupacion_item->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PdiPedidoAgrupacionItems de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pdi_pedido_agrupacion_item_alta.php" >
                            <?php Lang::_lang('Agregar PdiPedidoAgrupacionItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_PEDIDO')){ ?>
	<div id="tab_pde_pedido" class="bloque-relacion pde_pedido">
		
            <h4><?php Lang::_lang('PdePedido') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getPdePedidosParaBloqueMasInfo() as $pde_pedido){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_pedido->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_pedido->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_pedido->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_pedido->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_pedido->getId() ?>" archivo="ajax/modulos/pde_pedido/pde_pedido_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdePedido') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdePedido') ?>">
                                <a href="pde_pedido_alta.php?id=<?php echo $pde_pedido->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_PEDIDO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_pedido){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdePedido::getFiltrosArrGral() ?>&arr=<?php echo $pde_pedido->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PdePedidos de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_pedido_alta.php" >
                            <?php Lang::_lang('Agregar PdePedido') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_COTIZACION')){ ?>
	<div id="tab_pde_cotizacion" class="bloque-relacion pde_cotizacion">
		
            <h4><?php Lang::_lang('PdeCotizacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getPdeCotizacionsParaBloqueMasInfo() as $pde_cotizacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_cotizacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_cotizacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_cotizacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_cotizacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_cotizacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_cotizacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_cotizacion->getId() ?>" archivo="ajax/modulos/pde_cotizacion/pde_cotizacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeCotizacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_COTIZACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCotizacion') ?>">
                                <a href="pde_cotizacion_alta.php?id=<?php echo $pde_cotizacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_COTIZACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_cotizacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCotizacion::getFiltrosArrGral() ?>&arr=<?php echo $pde_cotizacion->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PdeCotizacions de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_cotizacion_alta.php" >
                            <?php Lang::_lang('Agregar PdeCotizacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_OC_AGRUPACION_ITEM')){ ?>
	<div id="tab_pde_oc_agrupacion_item" class="bloque-relacion pde_oc_agrupacion_item">
		
            <h4><?php Lang::_lang('PdeOcAgrupacionItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getPdeOcAgrupacionItemsParaBloqueMasInfo() as $pde_oc_agrupacion_item){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_OC_AGRUPACION_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_agrupacion_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcAgrupacionItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_agrupacion_item->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcAgrupacionItems de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_OC')){ ?>
	<div id="tab_pde_oc" class="bloque-relacion pde_oc">
		
            <h4><?php Lang::_lang('PdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getPdeOcsParaBloqueMasInfo() as $pde_oc){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcs de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_RECEPCION')){ ?>
	<div id="tab_pde_recepcion" class="bloque-relacion pde_recepcion">
		
            <h4><?php Lang::_lang('PdeRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getPdeRecepcionsParaBloqueMasInfo() as $pde_recepcion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recepcion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recepcion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recepcion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recepcion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recepcion->getId() ?>" archivo="ajax/modulos/pde_recepcion/pde_recepcion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeRecepcion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecepcion') ?>">
                                <a href="pde_recepcion_alta.php?id=<?php echo $pde_recepcion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecepcions de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recepcion_alta.php" >
                            <?php Lang::_lang('Agregar PdeRecepcion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_FACTURA_PDE_OC')){ ?>
	<div id="tab_pde_factura_pde_oc" class="bloque-relacion pde_factura_pde_oc">
		
            <h4><?php Lang::_lang('PdeFacturaPdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getPdeFacturaPdeOcsParaBloqueMasInfo() as $pde_factura_pde_oc){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_FACTURA_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_oc->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaPdeOcs de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_FACTURA_PDE_RECEPCION')){ ?>
	<div id="tab_pde_factura_pde_recepcion" class="bloque-relacion pde_factura_pde_recepcion">
		
            <h4><?php Lang::_lang('PdeFacturaPdeRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getPdeFacturaPdeRecepcionsParaBloqueMasInfo() as $pde_factura_pde_recepcion){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_FACTURA_PDE_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_pde_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_recepcion->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaPdeRecepcions de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_RECEPCION')){ ?>
	<div id="tab_pde_nota_credito_pde_factura_pde_recepcion" class="bloque-relacion pde_nota_credito_pde_factura_pde_recepcion">
		
            <h4><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getPdeNotaCreditoPdeFacturaPdeRecepcionsParaBloqueMasInfo() as $pde_nota_credito_pde_factura_pde_recepcion){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_pde_factura_pde_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoPdeFacturaPdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_pde_factura_pde_recepcion->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoPdeFacturaPdeRecepcions de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC')){ ?>
	<div id="tab_pde_nota_credito_pde_factura_pde_oc" class="bloque-relacion pde_nota_credito_pde_factura_pde_oc">
		
            <h4><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getPdeNotaCreditoPdeFacturaPdeOcsParaBloqueMasInfo() as $pde_nota_credito_pde_factura_pde_oc){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_pde_factura_pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoPdeFacturaPdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_pde_factura_pde_oc->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoPdeFacturaPdeOcs de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_ajuste_debe_vta_orden_venta" class="bloque-relacion vta_ajuste_debe_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaAjusteDebeVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getVtaAjusteDebeVtaOrdenVentasParaBloqueMasInfo() as $vta_ajuste_debe_vta_orden_venta){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_debe_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteDebeVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_debe_vta_orden_venta->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteDebeVtaOrdenVentas de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_AJUSTE_HABER_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta" class="bloque-relacion vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasParaBloqueMasInfo() as $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_AJUSTE_HABER_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteHaberVtaAjusteDebeVtaOrdenVentas de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_REMITO_AJUSTE_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_remito_ajuste_vta_orden_venta" class="bloque-relacion vta_remito_ajuste_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaRemitoAjusteVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getVtaRemitoAjusteVtaOrdenVentasParaBloqueMasInfo() as $vta_remito_ajuste_vta_orden_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_remito_ajuste_vta_orden_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_remito_ajuste_vta_orden_venta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_remito_ajuste_vta_orden_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_ajuste_vta_orden_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_remito_ajuste_vta_orden_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_ajuste_vta_orden_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_remito_ajuste_vta_orden_venta->getId() ?>" archivo="ajax/modulos/vta_remito_ajuste_vta_orden_venta/vta_remito_ajuste_vta_orden_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRemitoAjusteVtaOrdenVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_VTA_ORDEN_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRemitoAjusteVtaOrdenVenta') ?>">
                                <a href="vta_remito_ajuste_vta_orden_venta_alta.php?id=<?php echo $vta_remito_ajuste_vta_orden_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_VTA_REMITO_AJUSTE_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito_ajuste_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemitoAjusteVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito_ajuste_vta_orden_venta->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitoAjusteVtaOrdenVentas de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_remito_ajuste_vta_orden_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaRemitoAjusteVtaOrdenVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_SLD_SLIDER')){ ?>
	<div id="tab_sld_slider" class="bloque-relacion sld_slider">
		
            <h4><?php Lang::_lang('SldSlider') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getSldSlidersParaBloqueMasInfo() as $sld_slider){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($sld_slider->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($sld_slider->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($sld_slider->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($sld_slider->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($sld_slider->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($sld_slider->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $sld_slider->getId() ?>" archivo="ajax/modulos/sld_slider/sld_slider_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('SldSlider') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('SLD_SLIDER_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('SldSlider') ?>">
                                <a href="sld_slider_alta.php?id=<?php echo $sld_slider->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_SLD_SLIDER_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($sld_slider){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo SldSlider::getFiltrosArrGral() ?>&arr=<?php echo $sld_slider->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver SldSliders de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="sld_slider_alta.php" >
                            <?php Lang::_lang('Agregar SldSlider') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PRD_PROCESO_PRODUCTIVO')){ ?>
	<div id="tab_prd_proceso_productivo" class="bloque-relacion prd_proceso_productivo">
		
            <h4><?php Lang::_lang('PrdProcesoProductivo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getPrdProcesoProductivosParaBloqueMasInfo() as $prd_proceso_productivo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_proceso_productivo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_proceso_productivo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_proceso_productivo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_proceso_productivo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_proceso_productivo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_proceso_productivo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_proceso_productivo->getId() ?>" archivo="ajax/modulos/prd_proceso_productivo/prd_proceso_productivo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdProcesoProductivo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_PROCESO_PRODUCTIVO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdProcesoProductivo') ?>">
                                <a href="prd_proceso_productivo_alta.php?id=<?php echo $prd_proceso_productivo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PRD_PROCESO_PRODUCTIVO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_proceso_productivo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdProcesoProductivo::getFiltrosArrGral() ?>&arr=<?php echo $prd_proceso_productivo->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PrdProcesoProductivos de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_proceso_productivo_alta.php" >
                            <?php Lang::_lang('Agregar PrdProcesoProductivo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PRD_ORDEN_TRABAJO')){ ?>
	<div id="tab_prd_orden_trabajo" class="bloque-relacion prd_orden_trabajo">
		
            <h4><?php Lang::_lang('PrdOrdenTrabajo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_insumo->getPrdOrdenTrabajosParaBloqueMasInfo() as $prd_orden_trabajo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_orden_trabajo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_orden_trabajo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_orden_trabajo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_orden_trabajo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_orden_trabajo->getId() ?>" archivo="ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdOrdenTrabajo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdOrdenTrabajo') ?>">
                                <a href="prd_orden_trabajo_alta.php?id=<?php echo $prd_orden_trabajo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_MASINFO_PRD_ORDEN_TRABAJO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_orden_trabajo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdOrdenTrabajo::getFiltrosArrGral() ?>&arr=<?php echo $prd_orden_trabajo->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PrdOrdenTrabajos de ') ?> <strong><?php echo($ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_orden_trabajo_alta.php" >
                            <?php Lang::_lang('Agregar PrdOrdenTrabajo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

