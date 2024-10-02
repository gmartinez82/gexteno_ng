<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prv_proveedor_id = Gral::getVars(2, 'id');
$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('PrvTipo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_proveedor->getPrvTipo()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_proveedor->getGralTipoPersoneria()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_proveedor->getGeoLocalidad()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Razon Social') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_proveedor->getRazonSocial())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_proveedor->getDomicilioLegal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Cod Postal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_proveedor->getCodigoPostal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_proveedor->getEmail())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_proveedor->getCodigo())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo Min') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_proveedor->getCodigoMin())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('PrvGrupo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_proveedor->getPrvGrupo()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('PrvCategoria') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_proveedor->getPrvCategoria()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('IVA Incluido') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(GralSiNo::getOxId($prv_proveedor->getIvaIncluido())->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Puntaje Promedio') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_proveedor->getPuntajePromedio())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_proveedor->getObservacion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Datos Migracion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_proveedor->getDatosMigracion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Claves') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_proveedor->getClaves())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_PROVEEDOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_proveedor->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_PROVEEDOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_proveedor->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_GRAL_CENTRO_COSTO_PRV_PROVEEDOR')){ ?>
            <li><a href="#tab_gral_centro_costo_prv_proveedor"><?php Lang::_lang('GralCentroCostoPrvProveedors') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_INS_INSUMO_PRV_PROVEEDOR')){ ?>
            <li><a href="#tab_ins_insumo_prv_proveedor"><?php Lang::_lang('InsInsumoPrvProveedors') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_INS_INSUMO_COSTO')){ ?>
            <li><a href="#tab_ins_insumo_costo"><?php Lang::_lang('InsInsumoCostos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_PREVENTISTA')){ ?>
            <li><a href="#tab_prv_preventista"><?php Lang::_lang('PrvPreventistas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_CONVENIO_DESCUENTO')){ ?>
            <li><a href="#tab_prv_convenio_descuento"><?php Lang::_lang('PrvConvenioDescuentos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_DESCUENTO_FINANCIERO')){ ?>
            <li><a href="#tab_prv_descuento_financiero"><?php Lang::_lang('PrvDescuentoFinancieros') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_DESCUENTO_COMERCIAL')){ ?>
            <li><a href="#tab_prv_descuento_comercial"><?php Lang::_lang('PrvDescuentoComercials') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_PROVEEDOR_US_USUARIO')){ ?>
            <li><a href="#tab_prv_proveedor_us_usuario"><?php Lang::_lang('PrvProveedorUsUsuarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_PROVEEDOR_INS_MARCA')){ ?>
            <li><a href="#tab_prv_proveedor_ins_marca"><?php Lang::_lang('PrvProveedorInsMarcas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_TELEFONO')){ ?>
            <li><a href="#tab_prv_telefono"><?php Lang::_lang('PrvTelefono') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_EMAIL')){ ?>
            <li><a href="#tab_prv_email"><?php Lang::_lang('PrvEmail') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_DOMICILIO')){ ?>
            <li><a href="#tab_prv_domicilio"><?php Lang::_lang('PrvDomicilio') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_PROVEEDOR_PRV_RUBRO')){ ?>
            <li><a href="#tab_prv_proveedor_prv_rubro"><?php Lang::_lang('PrvProveedorPrvRubro') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_INSUMO')){ ?>
            <li><a href="#tab_prv_insumo"><?php Lang::_lang('PrvInsumo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_IMPORTACION')){ ?>
            <li><a href="#tab_prv_importacion"><?php Lang::_lang('PrvImportacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_PEDIDO_ENVIADO')){ ?>
            <li><a href="#tab_pde_pedido_enviado"><?php Lang::_lang('PdePedidoEnviados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_PEDIDO_PRV_PROVEEDOR')){ ?>
            <li><a href="#tab_pde_pedido_prv_proveedor"><?php Lang::_lang('PdePedidoPrvProveedors') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_PEDIDO_PRV_PROVEEDOR_AVISADO')){ ?>
            <li><a href="#tab_pde_pedido_prv_proveedor_avisado"><?php Lang::_lang('PdePedidoPrvProveedorAvisados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_COTIZACION')){ ?>
            <li><a href="#tab_pde_cotizacion"><?php Lang::_lang('PdeCotizacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_OC_AGRUPACION')){ ?>
            <li><a href="#tab_pde_oc_agrupacion"><?php Lang::_lang('PdeOcAgrupacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_OC')){ ?>
            <li><a href="#tab_pde_oc"><?php Lang::_lang('PdeOcs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_RECEPCION_AGRUPACION')){ ?>
            <li><a href="#tab_pde_recepcion_agrupacion"><?php Lang::_lang('PdeRecepcionAgrupacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_RECEPCION')){ ?>
            <li><a href="#tab_pde_recepcion"><?php Lang::_lang('PdeRecepcions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_CENTRO_PEDIDO_PRV_PROVEEDOR')){ ?>
            <li><a href="#tab_pde_centro_pedido_prv_proveedor"><?php Lang::_lang('PdeCentroPedidoPrvProveedors') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_OC_RECLAMO')){ ?>
            <li><a href="#tab_pde_oc_reclamo"><?php Lang::_lang('PdeOcReclamos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_TRIBUTO_EXENCION')){ ?>
            <li><a href="#tab_pde_tributo_exencion"><?php Lang::_lang('PdeTributoExencions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_FACTURA')){ ?>
            <li><a href="#tab_pde_factura"><?php Lang::_lang('PdeFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_NOTA_CREDITO')){ ?>
            <li><a href="#tab_pde_nota_credito"><?php Lang::_lang('PdeNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_NOTA_DEBITO')){ ?>
            <li><a href="#tab_pde_nota_debito"><?php Lang::_lang('PdeNotaDebito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_RECIBO')){ ?>
            <li><a href="#tab_pde_recibo"><?php Lang::_lang('PdeRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_ORDEN_PAGO')){ ?>
            <li><a href="#tab_pde_orden_pago"><?php Lang::_lang('PdeOrdenPagos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_GRAL_CENTRO_COSTO_PRV_PROVEEDOR')){ ?>
	<div id="tab_gral_centro_costo_prv_proveedor" class="bloque-relacion gral_centro_costo_prv_proveedor">
		
            <h4><?php Lang::_lang('GralCentroCostoPrvProveedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getGralCentroCostoPrvProveedorsParaBloqueMasInfo() as $gral_centro_costo_prv_proveedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_centro_costo_prv_proveedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_centro_costo_prv_proveedor->getDescripcionVinculante('PrvProveedor')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_centro_costo_prv_proveedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_centro_costo_prv_proveedor->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_centro_costo_prv_proveedor->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_centro_costo_prv_proveedor->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_centro_costo_prv_proveedor->getId() ?>" archivo="ajax/modulos/gral_centro_costo_prv_proveedor/gral_centro_costo_prv_proveedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCentroCostoPrvProveedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_PRV_PROVEEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCentroCostoPrvProveedor') ?>">
                                <a href="gral_centro_costo_prv_proveedor_alta.php?id=<?php echo $gral_centro_costo_prv_proveedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_GRAL_CENTRO_COSTO_PRV_PROVEEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_centro_costo_prv_proveedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCentroCostoPrvProveedor::getFiltrosArrGral() ?>&arr=<?php echo $gral_centro_costo_prv_proveedor->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver GralCentroCostoPrvProveedors de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_centro_costo_prv_proveedor_alta.php" >
                            <?php Lang::_lang('Agregar GralCentroCostoPrvProveedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_INS_INSUMO_PRV_PROVEEDOR')){ ?>
	<div id="tab_ins_insumo_prv_proveedor" class="bloque-relacion ins_insumo_prv_proveedor">
		
            <h4><?php Lang::_lang('InsInsumoPrvProveedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getInsInsumoPrvProveedorsParaBloqueMasInfo() as $ins_insumo_prv_proveedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_prv_proveedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_prv_proveedor->getDescripcionVinculante('PrvProveedor')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_INS_INSUMO_PRV_PROVEEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_prv_proveedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoPrvProveedor::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_prv_proveedor->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoPrvProveedors de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_INS_INSUMO_COSTO')){ ?>
	<div id="tab_ins_insumo_costo" class="bloque-relacion ins_insumo_costo">
		
            <h4><?php Lang::_lang('InsInsumoCosto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getInsInsumoCostosParaBloqueMasInfo() as $ins_insumo_costo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_INS_INSUMO_COSTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_costo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoCosto::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_costo->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoCostos de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_PREVENTISTA')){ ?>
	<div id="tab_prv_preventista" class="bloque-relacion prv_preventista">
		
            <h4><?php Lang::_lang('PrvPreventista') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPrvPreventistasParaBloqueMasInfo() as $prv_preventista){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_preventista->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_preventista->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_preventista->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_preventista->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_preventista->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_preventista->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_preventista->getId() ?>" archivo="ajax/modulos/prv_preventista/prv_preventista_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvPreventista') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_PREVENTISTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvPreventista') ?>">
                                <a href="prv_preventista_alta.php?id=<?php echo $prv_preventista->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_PREVENTISTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_preventista){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvPreventista::getFiltrosArrGral() ?>&arr=<?php echo $prv_preventista->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PrvPreventistas de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_preventista_alta.php" >
                            <?php Lang::_lang('Agregar PrvPreventista') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_CONVENIO_DESCUENTO')){ ?>
	<div id="tab_prv_convenio_descuento" class="bloque-relacion prv_convenio_descuento">
		
            <h4><?php Lang::_lang('PrvConvenioDescuento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPrvConvenioDescuentosParaBloqueMasInfo() as $prv_convenio_descuento){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_convenio_descuento->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_convenio_descuento->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_convenio_descuento->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_convenio_descuento->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_convenio_descuento->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_convenio_descuento->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_convenio_descuento->getId() ?>" archivo="ajax/modulos/prv_convenio_descuento/prv_convenio_descuento_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvConvenioDescuento') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_CONVENIO_DESCUENTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvConvenioDescuento') ?>">
                                <a href="prv_convenio_descuento_alta.php?id=<?php echo $prv_convenio_descuento->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_CONVENIO_DESCUENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_convenio_descuento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvConvenioDescuento::getFiltrosArrGral() ?>&arr=<?php echo $prv_convenio_descuento->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PrvConvenioDescuentos de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_convenio_descuento_alta.php" >
                            <?php Lang::_lang('Agregar PrvConvenioDescuento') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_DESCUENTO_FINANCIERO')){ ?>
	<div id="tab_prv_descuento_financiero" class="bloque-relacion prv_descuento_financiero">
		
            <h4><?php Lang::_lang('PrvDescuentoFinanciero') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPrvDescuentoFinancierosParaBloqueMasInfo() as $prv_descuento_financiero){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_descuento_financiero->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_descuento_financiero->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_descuento_financiero->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_descuento_financiero->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_descuento_financiero->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_descuento_financiero->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_descuento_financiero->getId() ?>" archivo="ajax/modulos/prv_descuento_financiero/prv_descuento_financiero_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvDescuentoFinanciero') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_DESCUENTO_FINANCIERO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvDescuentoFinanciero') ?>">
                                <a href="prv_descuento_financiero_alta.php?id=<?php echo $prv_descuento_financiero->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_DESCUENTO_FINANCIERO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_descuento_financiero){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvDescuentoFinanciero::getFiltrosArrGral() ?>&arr=<?php echo $prv_descuento_financiero->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PrvDescuentoFinancieros de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_descuento_financiero_alta.php" >
                            <?php Lang::_lang('Agregar PrvDescuentoFinanciero') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_DESCUENTO_COMERCIAL')){ ?>
	<div id="tab_prv_descuento_comercial" class="bloque-relacion prv_descuento_comercial">
		
            <h4><?php Lang::_lang('PrvDescuentoComercial') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPrvDescuentoComercialsParaBloqueMasInfo() as $prv_descuento_comercial){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_descuento_comercial->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_descuento_comercial->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_descuento_comercial->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_descuento_comercial->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_descuento_comercial->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_descuento_comercial->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_descuento_comercial->getId() ?>" archivo="ajax/modulos/prv_descuento_comercial/prv_descuento_comercial_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvDescuentoComercial') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_DESCUENTO_COMERCIAL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvDescuentoComercial') ?>">
                                <a href="prv_descuento_comercial_alta.php?id=<?php echo $prv_descuento_comercial->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_DESCUENTO_COMERCIAL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_descuento_comercial){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvDescuentoComercial::getFiltrosArrGral() ?>&arr=<?php echo $prv_descuento_comercial->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PrvDescuentoComercials de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_descuento_comercial_alta.php" >
                            <?php Lang::_lang('Agregar PrvDescuentoComercial') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_PROVEEDOR_US_USUARIO')){ ?>
	<div id="tab_prv_proveedor_us_usuario" class="bloque-relacion prv_proveedor_us_usuario">
		
            <h4><?php Lang::_lang('PrvProveedorUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPrvProveedorUsUsuariosParaBloqueMasInfo() as $prv_proveedor_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_proveedor_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_proveedor_us_usuario->getDescripcionVinculante('PrvProveedor')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_proveedor_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor_us_usuario->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_proveedor_us_usuario->getId() ?>" archivo="ajax/modulos/prv_proveedor_us_usuario/prv_proveedor_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvProveedorUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvProveedorUsUsuario') ?>">
                                <a href="prv_proveedor_us_usuario_alta.php?id=<?php echo $prv_proveedor_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_PROVEEDOR_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_proveedor_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvProveedorUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $prv_proveedor_us_usuario->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PrvProveedorUsUsuarios de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_proveedor_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar PrvProveedorUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_PROVEEDOR_INS_MARCA')){ ?>
	<div id="tab_prv_proveedor_ins_marca" class="bloque-relacion prv_proveedor_ins_marca">
		
            <h4><?php Lang::_lang('PrvProveedorInsMarca') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPrvProveedorInsMarcasParaBloqueMasInfo() as $prv_proveedor_ins_marca){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_proveedor_ins_marca->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_proveedor_ins_marca->getDescripcionVinculante('PrvProveedor')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_proveedor_ins_marca->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor_ins_marca->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_proveedor_ins_marca->getId() ?>" archivo="ajax/modulos/prv_proveedor_ins_marca/prv_proveedor_ins_marca_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvProveedorInsMarca') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_INS_MARCA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvProveedorInsMarca') ?>">
                                <a href="prv_proveedor_ins_marca_alta.php?id=<?php echo $prv_proveedor_ins_marca->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_PROVEEDOR_INS_MARCA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_proveedor_ins_marca){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvProveedorInsMarca::getFiltrosArrGral() ?>&arr=<?php echo $prv_proveedor_ins_marca->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PrvProveedorInsMarcas de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_proveedor_ins_marca_alta.php" >
                            <?php Lang::_lang('Agregar PrvProveedorInsMarca') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_TELEFONO')){ ?>
	<div id="tab_prv_telefono" class="bloque-relacion prv_telefono">
		
            <h4><?php Lang::_lang('PrvTelefono') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPrvTelefonosParaBloqueMasInfo() as $prv_telefono){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_telefono->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_telefono->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_telefono->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_telefono->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_telefono->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_telefono->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_telefono->getId() ?>" archivo="ajax/modulos/prv_telefono/prv_telefono_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvTelefono') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_TELEFONO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvTelefono') ?>">
                                <a href="prv_telefono_alta.php?id=<?php echo $prv_telefono->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_TELEFONO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_telefono){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvTelefono::getFiltrosArrGral() ?>&arr=<?php echo $prv_telefono->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PrvTelefonos de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_telefono_alta.php" >
                            <?php Lang::_lang('Agregar PrvTelefono') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_EMAIL')){ ?>
	<div id="tab_prv_email" class="bloque-relacion prv_email">
		
            <h4><?php Lang::_lang('PrvEmail') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPrvEmailsParaBloqueMasInfo() as $prv_email){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_email->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_email->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_email->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_email->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_email->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_email->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_email->getId() ?>" archivo="ajax/modulos/prv_email/prv_email_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvEmail') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_EMAIL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvEmail') ?>">
                                <a href="prv_email_alta.php?id=<?php echo $prv_email->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_EMAIL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_email){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvEmail::getFiltrosArrGral() ?>&arr=<?php echo $prv_email->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PrvEmails de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_email_alta.php" >
                            <?php Lang::_lang('Agregar PrvEmail') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_DOMICILIO')){ ?>
	<div id="tab_prv_domicilio" class="bloque-relacion prv_domicilio">
		
            <h4><?php Lang::_lang('PrvDomicilio') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPrvDomiciliosParaBloqueMasInfo() as $prv_domicilio){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_domicilio->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_domicilio->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_domicilio->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_domicilio->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_domicilio->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_domicilio->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_domicilio->getId() ?>" archivo="ajax/modulos/prv_domicilio/prv_domicilio_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvDomicilio') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_DOMICILIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvDomicilio') ?>">
                                <a href="prv_domicilio_alta.php?id=<?php echo $prv_domicilio->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_DOMICILIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_domicilio){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvDomicilio::getFiltrosArrGral() ?>&arr=<?php echo $prv_domicilio->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PrvDomicilios de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_domicilio_alta.php" >
                            <?php Lang::_lang('Agregar PrvDomicilio') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_PROVEEDOR_PRV_RUBRO')){ ?>
	<div id="tab_prv_proveedor_prv_rubro" class="bloque-relacion prv_proveedor_prv_rubro">
		
            <h4><?php Lang::_lang('PrvProveedorPrvRubro') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPrvProveedorPrvRubrosParaBloqueMasInfo() as $prv_proveedor_prv_rubro){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_proveedor_prv_rubro->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_proveedor_prv_rubro->getDescripcionVinculante('PrvProveedor')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_proveedor_prv_rubro->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor_prv_rubro->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_proveedor_prv_rubro->getId() ?>" archivo="ajax/modulos/prv_proveedor_prv_rubro/prv_proveedor_prv_rubro_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvProveedorPrvRubro') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_PRV_RUBRO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvProveedorPrvRubro') ?>">
                                <a href="prv_proveedor_prv_rubro_alta.php?id=<?php echo $prv_proveedor_prv_rubro->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_PROVEEDOR_PRV_RUBRO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_proveedor_prv_rubro){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvProveedorPrvRubro::getFiltrosArrGral() ?>&arr=<?php echo $prv_proveedor_prv_rubro->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PrvProveedorPrvRubros de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_proveedor_prv_rubro_alta.php" >
                            <?php Lang::_lang('Agregar PrvProveedorPrvRubro') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_INSUMO')){ ?>
	<div id="tab_prv_insumo" class="bloque-relacion prv_insumo">
		
            <h4><?php Lang::_lang('PrvInsumo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPrvInsumosParaBloqueMasInfo() as $prv_insumo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_INSUMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_insumo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvInsumo::getFiltrosArrGral() ?>&arr=<?php echo $prv_insumo->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PrvInsumos de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_IMPORTACION')){ ?>
	<div id="tab_prv_importacion" class="bloque-relacion prv_importacion">
		
            <h4><?php Lang::_lang('PrvImportacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPrvImportacionsParaBloqueMasInfo() as $prv_importacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_importacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_importacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_importacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_importacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_importacion->getId() ?>" archivo="ajax/modulos/prv_importacion/prv_importacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvImportacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvImportacion') ?>">
                                <a href="prv_importacion_alta.php?id=<?php echo $prv_importacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PRV_IMPORTACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_importacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvImportacion::getFiltrosArrGral() ?>&arr=<?php echo $prv_importacion->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PrvImportacions de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_importacion_alta.php" >
                            <?php Lang::_lang('Agregar PrvImportacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_PEDIDO_ENVIADO')){ ?>
	<div id="tab_pde_pedido_enviado" class="bloque-relacion pde_pedido_enviado">
		
            <h4><?php Lang::_lang('PdePedidoEnviado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPdePedidoEnviadosParaBloqueMasInfo() as $pde_pedido_enviado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_pedido_enviado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_pedido_enviado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_pedido_enviado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_enviado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_pedido_enviado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_enviado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_pedido_enviado->getId() ?>" archivo="ajax/modulos/pde_pedido_enviado/pde_pedido_enviado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdePedidoEnviado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_ENVIADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdePedidoEnviado') ?>">
                                <a href="pde_pedido_enviado_alta.php?id=<?php echo $pde_pedido_enviado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_PEDIDO_ENVIADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_pedido_enviado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdePedidoEnviado::getFiltrosArrGral() ?>&arr=<?php echo $pde_pedido_enviado->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PdePedidoEnviados de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_pedido_enviado_alta.php" >
                            <?php Lang::_lang('Agregar PdePedidoEnviado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_PEDIDO_PRV_PROVEEDOR')){ ?>
	<div id="tab_pde_pedido_prv_proveedor" class="bloque-relacion pde_pedido_prv_proveedor">
		
            <h4><?php Lang::_lang('PdePedidoPrvProveedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPdePedidoPrvProveedorsParaBloqueMasInfo() as $pde_pedido_prv_proveedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_pedido_prv_proveedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_pedido_prv_proveedor->getDescripcionVinculante('PrvProveedor')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_pedido_prv_proveedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_prv_proveedor->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_pedido_prv_proveedor->getId() ?>" archivo="ajax/modulos/pde_pedido_prv_proveedor/pde_pedido_prv_proveedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdePedidoPrvProveedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_PRV_PROVEEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdePedidoPrvProveedor') ?>">
                                <a href="pde_pedido_prv_proveedor_alta.php?id=<?php echo $pde_pedido_prv_proveedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_PEDIDO_PRV_PROVEEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_pedido_prv_proveedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdePedidoPrvProveedor::getFiltrosArrGral() ?>&arr=<?php echo $pde_pedido_prv_proveedor->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PdePedidoPrvProveedors de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_pedido_prv_proveedor_alta.php" >
                            <?php Lang::_lang('Agregar PdePedidoPrvProveedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_PEDIDO_PRV_PROVEEDOR_AVISADO')){ ?>
	<div id="tab_pde_pedido_prv_proveedor_avisado" class="bloque-relacion pde_pedido_prv_proveedor_avisado">
		
            <h4><?php Lang::_lang('PdePedidoPrvProveedorAvisado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPdePedidoPrvProveedorAvisadosParaBloqueMasInfo() as $pde_pedido_prv_proveedor_avisado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_prv_proveedor_avisado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_prv_proveedor_avisado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_pedido_prv_proveedor_avisado->getId() ?>" archivo="ajax/modulos/pde_pedido_prv_proveedor_avisado/pde_pedido_prv_proveedor_avisado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdePedidoPrvProveedorAvisado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_PRV_PROVEEDOR_AVISADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdePedidoPrvProveedorAvisado') ?>">
                                <a href="pde_pedido_prv_proveedor_avisado_alta.php?id=<?php echo $pde_pedido_prv_proveedor_avisado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_PEDIDO_PRV_PROVEEDOR_AVISADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_pedido_prv_proveedor_avisado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdePedidoPrvProveedorAvisado::getFiltrosArrGral() ?>&arr=<?php echo $pde_pedido_prv_proveedor_avisado->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PdePedidoPrvProveedorAvisados de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_pedido_prv_proveedor_avisado_alta.php" >
                            <?php Lang::_lang('Agregar PdePedidoPrvProveedorAvisado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_COTIZACION')){ ?>
	<div id="tab_pde_cotizacion" class="bloque-relacion pde_cotizacion">
		
            <h4><?php Lang::_lang('PdeCotizacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPdeCotizacionsParaBloqueMasInfo() as $pde_cotizacion){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_COTIZACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_cotizacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCotizacion::getFiltrosArrGral() ?>&arr=<?php echo $pde_cotizacion->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PdeCotizacions de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_OC_AGRUPACION')){ ?>
	<div id="tab_pde_oc_agrupacion" class="bloque-relacion pde_oc_agrupacion">
		
            <h4><?php Lang::_lang('PdeOcAgrupacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPdeOcAgrupacionsParaBloqueMasInfo() as $pde_oc_agrupacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_agrupacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_agrupacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_agrupacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_agrupacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_agrupacion->getId() ?>" archivo="ajax/modulos/pde_oc_agrupacion/pde_oc_agrupacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcAgrupacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcAgrupacion') ?>">
                                <a href="pde_oc_agrupacion_alta.php?id=<?php echo $pde_oc_agrupacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_OC_AGRUPACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_agrupacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_agrupacion->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcAgrupacions de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_agrupacion_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcAgrupacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_OC')){ ?>
	<div id="tab_pde_oc" class="bloque-relacion pde_oc">
		
            <h4><?php Lang::_lang('PdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPdeOcsParaBloqueMasInfo() as $pde_oc){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcs de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_RECEPCION_AGRUPACION')){ ?>
	<div id="tab_pde_recepcion_agrupacion" class="bloque-relacion pde_recepcion_agrupacion">
		
            <h4><?php Lang::_lang('PdeRecepcionAgrupacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPdeRecepcionAgrupacionsParaBloqueMasInfo() as $pde_recepcion_agrupacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recepcion_agrupacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recepcion_agrupacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recepcion_agrupacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_agrupacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recepcion_agrupacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_agrupacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recepcion_agrupacion->getId() ?>" archivo="ajax/modulos/pde_recepcion_agrupacion/pde_recepcion_agrupacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeRecepcionAgrupacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_AGRUPACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecepcionAgrupacion') ?>">
                                <a href="pde_recepcion_agrupacion_alta.php?id=<?php echo $pde_recepcion_agrupacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_RECEPCION_AGRUPACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recepcion_agrupacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecepcionAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion_agrupacion->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecepcionAgrupacions de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recepcion_agrupacion_alta.php" >
                            <?php Lang::_lang('Agregar PdeRecepcionAgrupacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_RECEPCION')){ ?>
	<div id="tab_pde_recepcion" class="bloque-relacion pde_recepcion">
		
            <h4><?php Lang::_lang('PdeRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPdeRecepcionsParaBloqueMasInfo() as $pde_recepcion){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecepcions de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_CENTRO_PEDIDO_PRV_PROVEEDOR')){ ?>
	<div id="tab_pde_centro_pedido_prv_proveedor" class="bloque-relacion pde_centro_pedido_prv_proveedor">
		
            <h4><?php Lang::_lang('PdeCentroPedidoPrvProveedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPdeCentroPedidoPrvProveedorsParaBloqueMasInfo() as $pde_centro_pedido_prv_proveedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_centro_pedido_prv_proveedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_centro_pedido_prv_proveedor->getDescripcionVinculante('PrvProveedor')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_centro_pedido_prv_proveedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido_prv_proveedor->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_centro_pedido_prv_proveedor->getId() ?>" archivo="ajax/modulos/pde_centro_pedido_prv_proveedor/pde_centro_pedido_prv_proveedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeCentroPedidoPrvProveedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_PRV_PROVEEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCentroPedidoPrvProveedor') ?>">
                                <a href="pde_centro_pedido_prv_proveedor_alta.php?id=<?php echo $pde_centro_pedido_prv_proveedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_CENTRO_PEDIDO_PRV_PROVEEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_centro_pedido_prv_proveedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCentroPedidoPrvProveedor::getFiltrosArrGral() ?>&arr=<?php echo $pde_centro_pedido_prv_proveedor->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PdeCentroPedidoPrvProveedors de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_centro_pedido_prv_proveedor_alta.php" >
                            <?php Lang::_lang('Agregar PdeCentroPedidoPrvProveedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_OC_RECLAMO')){ ?>
	<div id="tab_pde_oc_reclamo" class="bloque-relacion pde_oc_reclamo">
		
            <h4><?php Lang::_lang('PdeOcReclamo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPdeOcReclamosParaBloqueMasInfo() as $pde_oc_reclamo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_reclamo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_reclamo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_reclamo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_reclamo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_reclamo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_reclamo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_reclamo->getId() ?>" archivo="ajax/modulos/pde_oc_reclamo/pde_oc_reclamo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcReclamo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_RECLAMO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcReclamo') ?>">
                                <a href="pde_oc_reclamo_alta.php?id=<?php echo $pde_oc_reclamo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_OC_RECLAMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_reclamo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcReclamo::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_reclamo->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcReclamos de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_reclamo_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcReclamo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_TRIBUTO_EXENCION')){ ?>
	<div id="tab_pde_tributo_exencion" class="bloque-relacion pde_tributo_exencion">
		
            <h4><?php Lang::_lang('PdeTributoExencion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPdeTributoExencionsParaBloqueMasInfo() as $pde_tributo_exencion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_tributo_exencion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_tributo_exencion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_tributo_exencion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tributo_exencion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_tributo_exencion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tributo_exencion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_tributo_exencion->getId() ?>" archivo="ajax/modulos/pde_tributo_exencion/pde_tributo_exencion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeTributoExencion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_EXENCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeTributoExencion') ?>">
                                <a href="pde_tributo_exencion_alta.php?id=<?php echo $pde_tributo_exencion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_TRIBUTO_EXENCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_tributo_exencion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeTributoExencion::getFiltrosArrGral() ?>&arr=<?php echo $pde_tributo_exencion->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PdeTributoExencions de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_tributo_exencion_alta.php" >
                            <?php Lang::_lang('Agregar PdeTributoExencion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_FACTURA')){ ?>
	<div id="tab_pde_factura" class="bloque-relacion pde_factura">
		
            <h4><?php Lang::_lang('PdeFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPdeFacturasParaBloqueMasInfo() as $pde_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura->getId() ?>" archivo="ajax/modulos/pde_factura/pde_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFactura') ?>">
                                <a href="pde_factura_alta.php?id=<?php echo $pde_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFactura::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturas de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_alta.php" >
                            <?php Lang::_lang('Agregar PdeFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_NOTA_CREDITO')){ ?>
	<div id="tab_pde_nota_credito" class="bloque-relacion pde_nota_credito">
		
            <h4><?php Lang::_lang('PdeNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPdeNotaCreditosParaBloqueMasInfo() as $pde_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito->getId() ?>" archivo="ajax/modulos/pde_nota_credito/pde_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCredito') ?>">
                                <a href="pde_nota_credito_alta.php?id=<?php echo $pde_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditos de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_NOTA_DEBITO')){ ?>
	<div id="tab_pde_nota_debito" class="bloque-relacion pde_nota_debito">
		
            <h4><?php Lang::_lang('PdeNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPdeNotaDebitosParaBloqueMasInfo() as $pde_nota_debito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_debito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_debito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_debito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_debito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_debito->getId() ?>" archivo="ajax/modulos/pde_nota_debito/pde_nota_debito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaDebito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaDebito') ?>">
                                <a href="pde_nota_debito_alta.php?id=<?php echo $pde_nota_debito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitos de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_debito_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaDebito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_RECIBO')){ ?>
	<div id="tab_pde_recibo" class="bloque-relacion pde_recibo">
		
            <h4><?php Lang::_lang('PdeRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPdeRecibosParaBloqueMasInfo() as $pde_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recibo->getId() ?>" archivo="ajax/modulos/pde_recibo/pde_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecibo') ?>">
                                <a href="pde_recibo_alta.php?id=<?php echo $pde_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecibo::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecibos de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recibo_alta.php" >
                            <?php Lang::_lang('Agregar PdeRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_ORDEN_PAGO')){ ?>
	<div id="tab_pde_orden_pago" class="bloque-relacion pde_orden_pago">
		
            <h4><?php Lang::_lang('PdeOrdenPago') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvProveedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_proveedor->getPdeOrdenPagosParaBloqueMasInfo() as $pde_orden_pago){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_orden_pago->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_orden_pago->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_orden_pago->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_orden_pago->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_orden_pago->getId() ?>" archivo="ajax/modulos/pde_orden_pago/pde_orden_pago_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOrdenPago') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOrdenPago') ?>">
                                <a href="pde_orden_pago_alta.php?id=<?php echo $pde_orden_pago->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_MASINFO_PDE_ORDEN_PAGO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_orden_pago){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOrdenPago::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>" >
                                <?php Lang::_lang('Ver PdeOrdenPagos de ') ?> <strong><?php echo($prv_proveedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_orden_pago_alta.php" >
                            <?php Lang::_lang('Agregar PdeOrdenPago') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

