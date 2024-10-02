<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_condicion_iva_id = Gral::getVars(2, 'id');
$gral_condicion_iva = GralCondicionIva::getOxId($gral_condicion_iva_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Leyenda Comprobante') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_condicion_iva->getLeyendaComprobante())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_condicion_iva->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_CONDICION_IVA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_condicion_iva->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_CONDICION_IVA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_condicion_iva->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_FACTURA')){ ?>
            <li><a href="#tab_gral_condicion_iva_vta_tipo_factura"><?php Lang::_lang('GralCondicionIvaVtaTipoFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_NOTA_CREDITO')){ ?>
            <li><a href="#tab_gral_condicion_iva_vta_tipo_nota_credito"><?php Lang::_lang('GralCondicionIvaVtaTipoNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_NOTA_DEBITO')){ ?>
            <li><a href="#tab_gral_condicion_iva_vta_tipo_nota_debito"><?php Lang::_lang('GralCondicionIvaVtaTipoNotaDebito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_RECIBO')){ ?>
            <li><a href="#tab_gral_condicion_iva_vta_tipo_recibo"><?php Lang::_lang('GralCondicionIvaVtaTipoRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_FACTURA')){ ?>
            <li><a href="#tab_gral_condicion_iva_pde_tipo_factura"><?php Lang::_lang('GralCondicionIvaPdeTipoFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_NOTA_CREDITO')){ ?>
            <li><a href="#tab_gral_condicion_iva_pde_tipo_nota_credito"><?php Lang::_lang('GralCondicionIvaPdeTipoNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_NOTA_DEBITO')){ ?>
            <li><a href="#tab_gral_condicion_iva_pde_tipo_nota_debito"><?php Lang::_lang('GralCondicionIvaPdeTipoNotaDebito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_RECIBO')){ ?>
            <li><a href="#tab_gral_condicion_iva_pde_tipo_recibo"><?php Lang::_lang('GralCondicionIvaPdeTipoRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_EMPRESA')){ ?>
            <li><a href="#tab_gral_empresa"><?php Lang::_lang('GralEmpresas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PRV_PROVEEDOR')){ ?>
            <li><a href="#tab_prv_proveedor"><?php Lang::_lang('PrvProveedor') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_CLI_CLIENTE')){ ?>
            <li><a href="#tab_cli_cliente"><?php Lang::_lang('CliCliente') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_PRESUPUESTO')){ ?>
            <li><a href="#tab_vta_presupuesto"><?php Lang::_lang('VtaPresupuesto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_NOTA_CREDITO')){ ?>
            <li><a href="#tab_vta_nota_credito"><?php Lang::_lang('VtaNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_NOTA_DEBITO')){ ?>
            <li><a href="#tab_vta_nota_debito"><?php Lang::_lang('VtaNotaDebito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_RECIBO')){ ?>
            <li><a href="#tab_vta_recibo"><?php Lang::_lang('VtaRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_FACTURA')){ ?>
            <li><a href="#tab_vta_factura"><?php Lang::_lang('VtaFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PDE_FACTURA')){ ?>
            <li><a href="#tab_pde_factura"><?php Lang::_lang('PdeFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PDE_NOTA_CREDITO')){ ?>
            <li><a href="#tab_pde_nota_credito"><?php Lang::_lang('PdeNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PDE_NOTA_DEBITO')){ ?>
            <li><a href="#tab_pde_nota_debito"><?php Lang::_lang('PdeNotaDebito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PDE_RECIBO')){ ?>
            <li><a href="#tab_pde_recibo"><?php Lang::_lang('PdeRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PDE_ORDEN_PAGO')){ ?>
            <li><a href="#tab_pde_orden_pago"><?php Lang::_lang('PdeOrdenPagos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_AJUSTE_DEBE')){ ?>
            <li><a href="#tab_vta_ajuste_debe"><?php Lang::_lang('VtaAjusteDebes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_AJUSTE_DEBE')){ ?>
            <li><a href="#tab_gral_condicion_iva_vta_tipo_ajuste_debe"><?php Lang::_lang('GralCondicionIvaVtaTipoAjusteDebe') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_AJUSTE_HABER')){ ?>
            <li><a href="#tab_vta_ajuste_haber"><?php Lang::_lang('VtaAjusteHabers') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_AJUSTE_HABER')){ ?>
            <li><a href="#tab_gral_condicion_iva_vta_tipo_ajuste_haber"><?php Lang::_lang('GralCondicionIvaVtaTipoAjusteHaber') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_CLI_CLIENTE_TIENDA')){ ?>
            <li><a href="#tab_cli_cliente_tienda"><?php Lang::_lang('CliClienteTienda') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_GRAL_CONDICION_IVA')){ ?>
            <li><a href="#tab_eku_param_tipo_naturaleza_receptor_gral_condicion_iva"><?php Lang::_lang('EkuParamTipoNaturalezaReceptorGralCondicionIvas') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_FACTURA')){ ?>
	<div id="tab_gral_condicion_iva_vta_tipo_factura" class="bloque-relacion gral_condicion_iva_vta_tipo_factura">
		
            <h4><?php Lang::_lang('GralCondicionIvaVtaTipoFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getGralCondicionIvaVtaTipoFacturasParaBloqueMasInfo() as $gral_condicion_iva_vta_tipo_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_condicion_iva_vta_tipo_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_condicion_iva_vta_tipo_factura->getDescripcionVinculante('GralCondicionIva')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_condicion_iva_vta_tipo_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_vta_tipo_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_condicion_iva_vta_tipo_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_vta_tipo_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_condicion_iva_vta_tipo_factura->getId() ?>" archivo="ajax/modulos/gral_condicion_iva_vta_tipo_factura/gral_condicion_iva_vta_tipo_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_VTA_TIPO_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoFactura') ?>">
                                <a href="gral_condicion_iva_vta_tipo_factura_alta.php?id=<?php echo $gral_condicion_iva_vta_tipo_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_condicion_iva_vta_tipo_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCondicionIvaVtaTipoFactura::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_vta_tipo_factura->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver GralCondicionIvaVtaTipoFacturas de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_condicion_iva_vta_tipo_factura_alta.php" >
                            <?php Lang::_lang('Agregar GralCondicionIvaVtaTipoFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_NOTA_CREDITO')){ ?>
	<div id="tab_gral_condicion_iva_vta_tipo_nota_credito" class="bloque-relacion gral_condicion_iva_vta_tipo_nota_credito">
		
            <h4><?php Lang::_lang('GralCondicionIvaVtaTipoNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getGralCondicionIvaVtaTipoNotaCreditosParaBloqueMasInfo() as $gral_condicion_iva_vta_tipo_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_credito->getDescripcionVinculante('GralCondicionIva')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_vta_tipo_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_vta_tipo_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_condicion_iva_vta_tipo_nota_credito->getId() ?>" archivo="ajax/modulos/gral_condicion_iva_vta_tipo_nota_credito/gral_condicion_iva_vta_tipo_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_VTA_TIPO_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoNotaCredito') ?>">
                                <a href="gral_condicion_iva_vta_tipo_nota_credito_alta.php?id=<?php echo $gral_condicion_iva_vta_tipo_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_condicion_iva_vta_tipo_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCondicionIvaVtaTipoNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_vta_tipo_nota_credito->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver GralCondicionIvaVtaTipoNotaCreditos de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_condicion_iva_vta_tipo_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar GralCondicionIvaVtaTipoNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_NOTA_DEBITO')){ ?>
	<div id="tab_gral_condicion_iva_vta_tipo_nota_debito" class="bloque-relacion gral_condicion_iva_vta_tipo_nota_debito">
		
            <h4><?php Lang::_lang('GralCondicionIvaVtaTipoNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getGralCondicionIvaVtaTipoNotaDebitosParaBloqueMasInfo() as $gral_condicion_iva_vta_tipo_nota_debito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_debito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_debito->getDescripcionVinculante('GralCondicionIva')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_debito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_vta_tipo_nota_debito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_debito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_vta_tipo_nota_debito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_condicion_iva_vta_tipo_nota_debito->getId() ?>" archivo="ajax/modulos/gral_condicion_iva_vta_tipo_nota_debito/gral_condicion_iva_vta_tipo_nota_debito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoNotaDebito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_VTA_TIPO_NOTA_DEBITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoNotaDebito') ?>">
                                <a href="gral_condicion_iva_vta_tipo_nota_debito_alta.php?id=<?php echo $gral_condicion_iva_vta_tipo_nota_debito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_condicion_iva_vta_tipo_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCondicionIvaVtaTipoNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_vta_tipo_nota_debito->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver GralCondicionIvaVtaTipoNotaDebitos de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_condicion_iva_vta_tipo_nota_debito_alta.php" >
                            <?php Lang::_lang('Agregar GralCondicionIvaVtaTipoNotaDebito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_RECIBO')){ ?>
	<div id="tab_gral_condicion_iva_vta_tipo_recibo" class="bloque-relacion gral_condicion_iva_vta_tipo_recibo">
		
            <h4><?php Lang::_lang('GralCondicionIvaVtaTipoRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getGralCondicionIvaVtaTipoRecibosParaBloqueMasInfo() as $gral_condicion_iva_vta_tipo_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_condicion_iva_vta_tipo_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_condicion_iva_vta_tipo_recibo->getDescripcionVinculante('GralCondicionIva')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_condicion_iva_vta_tipo_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_vta_tipo_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_condicion_iva_vta_tipo_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_vta_tipo_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_condicion_iva_vta_tipo_recibo->getId() ?>" archivo="ajax/modulos/gral_condicion_iva_vta_tipo_recibo/gral_condicion_iva_vta_tipo_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_VTA_TIPO_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoRecibo') ?>">
                                <a href="gral_condicion_iva_vta_tipo_recibo_alta.php?id=<?php echo $gral_condicion_iva_vta_tipo_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_condicion_iva_vta_tipo_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCondicionIvaVtaTipoRecibo::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_vta_tipo_recibo->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver GralCondicionIvaVtaTipoRecibos de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_condicion_iva_vta_tipo_recibo_alta.php" >
                            <?php Lang::_lang('Agregar GralCondicionIvaVtaTipoRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_FACTURA')){ ?>
	<div id="tab_gral_condicion_iva_pde_tipo_factura" class="bloque-relacion gral_condicion_iva_pde_tipo_factura">
		
            <h4><?php Lang::_lang('GralCondicionIvaPdeTipoFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getGralCondicionIvaPdeTipoFacturasParaBloqueMasInfo() as $gral_condicion_iva_pde_tipo_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_condicion_iva_pde_tipo_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_condicion_iva_pde_tipo_factura->getDescripcionVinculante('GralCondicionIva')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_condicion_iva_pde_tipo_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_pde_tipo_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_condicion_iva_pde_tipo_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_pde_tipo_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_condicion_iva_pde_tipo_factura->getId() ?>" archivo="ajax/modulos/gral_condicion_iva_pde_tipo_factura/gral_condicion_iva_pde_tipo_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_PDE_TIPO_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoFactura') ?>">
                                <a href="gral_condicion_iva_pde_tipo_factura_alta.php?id=<?php echo $gral_condicion_iva_pde_tipo_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_condicion_iva_pde_tipo_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCondicionIvaPdeTipoFactura::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_pde_tipo_factura->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver GralCondicionIvaPdeTipoFacturas de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_condicion_iva_pde_tipo_factura_alta.php" >
                            <?php Lang::_lang('Agregar GralCondicionIvaPdeTipoFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_NOTA_CREDITO')){ ?>
	<div id="tab_gral_condicion_iva_pde_tipo_nota_credito" class="bloque-relacion gral_condicion_iva_pde_tipo_nota_credito">
		
            <h4><?php Lang::_lang('GralCondicionIvaPdeTipoNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getGralCondicionIvaPdeTipoNotaCreditosParaBloqueMasInfo() as $gral_condicion_iva_pde_tipo_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_credito->getDescripcionVinculante('GralCondicionIva')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_pde_tipo_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_pde_tipo_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_condicion_iva_pde_tipo_nota_credito->getId() ?>" archivo="ajax/modulos/gral_condicion_iva_pde_tipo_nota_credito/gral_condicion_iva_pde_tipo_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_PDE_TIPO_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoNotaCredito') ?>">
                                <a href="gral_condicion_iva_pde_tipo_nota_credito_alta.php?id=<?php echo $gral_condicion_iva_pde_tipo_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_condicion_iva_pde_tipo_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCondicionIvaPdeTipoNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_pde_tipo_nota_credito->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver GralCondicionIvaPdeTipoNotaCreditos de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_condicion_iva_pde_tipo_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar GralCondicionIvaPdeTipoNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_NOTA_DEBITO')){ ?>
	<div id="tab_gral_condicion_iva_pde_tipo_nota_debito" class="bloque-relacion gral_condicion_iva_pde_tipo_nota_debito">
		
            <h4><?php Lang::_lang('GralCondicionIvaPdeTipoNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getGralCondicionIvaPdeTipoNotaDebitosParaBloqueMasInfo() as $gral_condicion_iva_pde_tipo_nota_debito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_debito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_debito->getDescripcionVinculante('GralCondicionIva')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_debito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_pde_tipo_nota_debito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_debito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_pde_tipo_nota_debito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_condicion_iva_pde_tipo_nota_debito->getId() ?>" archivo="ajax/modulos/gral_condicion_iva_pde_tipo_nota_debito/gral_condicion_iva_pde_tipo_nota_debito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoNotaDebito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_PDE_TIPO_NOTA_DEBITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoNotaDebito') ?>">
                                <a href="gral_condicion_iva_pde_tipo_nota_debito_alta.php?id=<?php echo $gral_condicion_iva_pde_tipo_nota_debito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_condicion_iva_pde_tipo_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCondicionIvaPdeTipoNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_pde_tipo_nota_debito->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver GralCondicionIvaPdeTipoNotaDebitos de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_condicion_iva_pde_tipo_nota_debito_alta.php" >
                            <?php Lang::_lang('Agregar GralCondicionIvaPdeTipoNotaDebito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_RECIBO')){ ?>
	<div id="tab_gral_condicion_iva_pde_tipo_recibo" class="bloque-relacion gral_condicion_iva_pde_tipo_recibo">
		
            <h4><?php Lang::_lang('GralCondicionIvaPdeTipoRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getGralCondicionIvaPdeTipoRecibosParaBloqueMasInfo() as $gral_condicion_iva_pde_tipo_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_condicion_iva_pde_tipo_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_condicion_iva_pde_tipo_recibo->getDescripcionVinculante('GralCondicionIva')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_condicion_iva_pde_tipo_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_pde_tipo_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_condicion_iva_pde_tipo_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_pde_tipo_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_condicion_iva_pde_tipo_recibo->getId() ?>" archivo="ajax/modulos/gral_condicion_iva_pde_tipo_recibo/gral_condicion_iva_pde_tipo_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_PDE_TIPO_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoRecibo') ?>">
                                <a href="gral_condicion_iva_pde_tipo_recibo_alta.php?id=<?php echo $gral_condicion_iva_pde_tipo_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_condicion_iva_pde_tipo_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCondicionIvaPdeTipoRecibo::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_pde_tipo_recibo->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver GralCondicionIvaPdeTipoRecibos de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_condicion_iva_pde_tipo_recibo_alta.php" >
                            <?php Lang::_lang('Agregar GralCondicionIvaPdeTipoRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_EMPRESA')){ ?>
	<div id="tab_gral_empresa" class="bloque-relacion gral_empresa">
		
            <h4><?php Lang::_lang('GralEmpresa') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getGralEmpresasParaBloqueMasInfo() as $gral_empresa){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_empresa->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_empresa->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_empresa->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_empresa->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_empresa->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_empresa->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_empresa->getId() ?>" archivo="ajax/modulos/gral_empresa/gral_empresa_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralEmpresa') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralEmpresa') ?>">
                                <a href="gral_empresa_alta.php?id=<?php echo $gral_empresa->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_EMPRESA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_empresa){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralEmpresa::getFiltrosArrGral() ?>&arr=<?php echo $gral_empresa->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver GralEmpresas de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_empresa_alta.php" >
                            <?php Lang::_lang('Agregar GralEmpresa') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PRV_PROVEEDOR')){ ?>
	<div id="tab_prv_proveedor" class="bloque-relacion prv_proveedor">
		
            <h4><?php Lang::_lang('PrvProveedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getPrvProveedorsParaBloqueMasInfo() as $prv_proveedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_proveedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_proveedor->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_proveedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_proveedor->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_proveedor->getId() ?>" archivo="ajax/modulos/prv_proveedor/prv_proveedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvProveedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvProveedor') ?>">
                                <a href="prv_proveedor_alta.php?id=<?php echo $prv_proveedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PRV_PROVEEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_proveedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvProveedor::getFiltrosArrGral() ?>&arr=<?php echo $prv_proveedor->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver PrvProveedors de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_proveedor_alta.php" >
                            <?php Lang::_lang('Agregar PrvProveedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_CLI_CLIENTE')){ ?>
	<div id="tab_cli_cliente" class="bloque-relacion cli_cliente">
		
            <h4><?php Lang::_lang('CliCliente') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getCliClientesParaBloqueMasInfo() as $cli_cliente){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente->getId() ?>" archivo="ajax/modulos/cli_cliente/cli_cliente_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliCliente') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliCliente') ?>">
                                <a href="cli_cliente_alta.php?id=<?php echo $cli_cliente->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_CLI_CLIENTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliCliente::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver CliClientes de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_alta.php" >
                            <?php Lang::_lang('Agregar CliCliente') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_PRESUPUESTO')){ ?>
	<div id="tab_vta_presupuesto" class="bloque-relacion vta_presupuesto">
		
            <h4><?php Lang::_lang('VtaPresupuesto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getVtaPresupuestosParaBloqueMasInfo() as $vta_presupuesto){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_presupuesto->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_presupuesto->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_presupuesto->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_presupuesto->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_presupuesto->getId() ?>" archivo="ajax/modulos/vta_presupuesto/vta_presupuesto_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPresupuesto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPresupuesto') ?>">
                                <a href="vta_presupuesto_alta.php?id=<?php echo $vta_presupuesto->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_PRESUPUESTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuesto::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestos de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_presupuesto_alta.php" >
                            <?php Lang::_lang('Agregar VtaPresupuesto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_NOTA_CREDITO')){ ?>
	<div id="tab_vta_nota_credito" class="bloque-relacion vta_nota_credito">
		
            <h4><?php Lang::_lang('VtaNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getVtaNotaCreditosParaBloqueMasInfo() as $vta_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_credito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_credito->getId() ?>" archivo="ajax/modulos/vta_nota_credito/vta_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaCredito') ?>">
                                <a href="vta_nota_credito_alta.php?id=<?php echo $vta_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditos de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_NOTA_DEBITO')){ ?>
	<div id="tab_vta_nota_debito" class="bloque-relacion vta_nota_debito">
		
            <h4><?php Lang::_lang('VtaNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getVtaNotaDebitosParaBloqueMasInfo() as $vta_nota_debito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_debito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_debito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_debito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_debito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_debito->getId() ?>" archivo="ajax/modulos/vta_nota_debito/vta_nota_debito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaDebito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaDebito') ?>">
                                <a href="vta_nota_debito_alta.php?id=<?php echo $vta_nota_debito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitos de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_debito_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaDebito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_RECIBO')){ ?>
	<div id="tab_vta_recibo" class="bloque-relacion vta_recibo">
		
            <h4><?php Lang::_lang('VtaRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getVtaRecibosParaBloqueMasInfo() as $vta_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo->getId() ?>" archivo="ajax/modulos/vta_recibo/vta_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRecibo') ?>">
                                <a href="vta_recibo_alta.php?id=<?php echo $vta_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaRecibos de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_alta.php" >
                            <?php Lang::_lang('Agregar VtaRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_FACTURA')){ ?>
	<div id="tab_vta_factura" class="bloque-relacion vta_factura">
		
            <h4><?php Lang::_lang('VtaFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getVtaFacturasParaBloqueMasInfo() as $vta_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_factura->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_factura->getId() ?>" archivo="ajax/modulos/vta_factura/vta_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaFactura') ?>">
                                <a href="vta_factura_alta.php?id=<?php echo $vta_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFactura::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturas de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_factura_alta.php" >
                            <?php Lang::_lang('Agregar VtaFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PDE_FACTURA')){ ?>
	<div id="tab_pde_factura" class="bloque-relacion pde_factura">
		
            <h4><?php Lang::_lang('PdeFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getPdeFacturasParaBloqueMasInfo() as $pde_factura){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PDE_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFactura::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturas de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PDE_NOTA_CREDITO')){ ?>
	<div id="tab_pde_nota_credito" class="bloque-relacion pde_nota_credito">
		
            <h4><?php Lang::_lang('PdeNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getPdeNotaCreditosParaBloqueMasInfo() as $pde_nota_credito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PDE_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditos de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PDE_NOTA_DEBITO')){ ?>
	<div id="tab_pde_nota_debito" class="bloque-relacion pde_nota_debito">
		
            <h4><?php Lang::_lang('PdeNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getPdeNotaDebitosParaBloqueMasInfo() as $pde_nota_debito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PDE_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitos de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PDE_RECIBO')){ ?>
	<div id="tab_pde_recibo" class="bloque-relacion pde_recibo">
		
            <h4><?php Lang::_lang('PdeRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getPdeRecibosParaBloqueMasInfo() as $pde_recibo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PDE_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecibo::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecibos de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PDE_ORDEN_PAGO')){ ?>
	<div id="tab_pde_orden_pago" class="bloque-relacion pde_orden_pago">
		
            <h4><?php Lang::_lang('PdeOrdenPago') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getPdeOrdenPagosParaBloqueMasInfo() as $pde_orden_pago){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_PDE_ORDEN_PAGO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_orden_pago){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOrdenPago::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver PdeOrdenPagos de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_AJUSTE_DEBE')){ ?>
	<div id="tab_vta_ajuste_debe" class="bloque-relacion vta_ajuste_debe">
		
            <h4><?php Lang::_lang('VtaAjusteDebe') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getVtaAjusteDebesParaBloqueMasInfo() as $vta_ajuste_debe){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_ajuste_debe->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_ajuste_debe->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_ajuste_debe->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_debe->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_ajuste_debe->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_debe->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_ajuste_debe->getId() ?>" archivo="ajax/modulos/vta_ajuste_debe/vta_ajuste_debe_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaAjusteDebe') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_AJUSTE_DEBE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaAjusteDebe') ?>">
                                <a href="vta_ajuste_debe_alta.php?id=<?php echo $vta_ajuste_debe->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_AJUSTE_DEBE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_debe){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteDebe::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_debe->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteDebes de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_ajuste_debe_alta.php" >
                            <?php Lang::_lang('Agregar VtaAjusteDebe') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_AJUSTE_DEBE')){ ?>
	<div id="tab_gral_condicion_iva_vta_tipo_ajuste_debe" class="bloque-relacion gral_condicion_iva_vta_tipo_ajuste_debe">
		
            <h4><?php Lang::_lang('GralCondicionIvaVtaTipoAjusteDebe') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getGralCondicionIvaVtaTipoAjusteDebesParaBloqueMasInfo() as $gral_condicion_iva_vta_tipo_ajuste_debe){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_condicion_iva_vta_tipo_ajuste_debe->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_condicion_iva_vta_tipo_ajuste_debe->getDescripcionVinculante('GralCondicionIva')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_condicion_iva_vta_tipo_ajuste_debe->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_vta_tipo_ajuste_debe->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_condicion_iva_vta_tipo_ajuste_debe->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_vta_tipo_ajuste_debe->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_condicion_iva_vta_tipo_ajuste_debe->getId() ?>" archivo="ajax/modulos/gral_condicion_iva_vta_tipo_ajuste_debe/gral_condicion_iva_vta_tipo_ajuste_debe_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoAjusteDebe') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_VTA_TIPO_AJUSTE_DEBE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoAjusteDebe') ?>">
                                <a href="gral_condicion_iva_vta_tipo_ajuste_debe_alta.php?id=<?php echo $gral_condicion_iva_vta_tipo_ajuste_debe->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_AJUSTE_DEBE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_condicion_iva_vta_tipo_ajuste_debe){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCondicionIvaVtaTipoAjusteDebe::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_vta_tipo_ajuste_debe->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver GralCondicionIvaVtaTipoAjusteDebes de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_condicion_iva_vta_tipo_ajuste_debe_alta.php" >
                            <?php Lang::_lang('Agregar GralCondicionIvaVtaTipoAjusteDebe') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_AJUSTE_HABER')){ ?>
	<div id="tab_vta_ajuste_haber" class="bloque-relacion vta_ajuste_haber">
		
            <h4><?php Lang::_lang('VtaAjusteHaber') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getVtaAjusteHabersParaBloqueMasInfo() as $vta_ajuste_haber){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_ajuste_haber->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_ajuste_haber->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_ajuste_haber->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_haber->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_ajuste_haber->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_haber->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_ajuste_haber->getId() ?>" archivo="ajax/modulos/vta_ajuste_haber/vta_ajuste_haber_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaAjusteHaber') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_AJUSTE_HABER_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaAjusteHaber') ?>">
                                <a href="vta_ajuste_haber_alta.php?id=<?php echo $vta_ajuste_haber->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_VTA_AJUSTE_HABER_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_haber){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteHaber::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_haber->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteHabers de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_ajuste_haber_alta.php" >
                            <?php Lang::_lang('Agregar VtaAjusteHaber') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_AJUSTE_HABER')){ ?>
	<div id="tab_gral_condicion_iva_vta_tipo_ajuste_haber" class="bloque-relacion gral_condicion_iva_vta_tipo_ajuste_haber">
		
            <h4><?php Lang::_lang('GralCondicionIvaVtaTipoAjusteHaber') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getGralCondicionIvaVtaTipoAjusteHabersParaBloqueMasInfo() as $gral_condicion_iva_vta_tipo_ajuste_haber){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_condicion_iva_vta_tipo_ajuste_haber->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_condicion_iva_vta_tipo_ajuste_haber->getDescripcionVinculante('GralCondicionIva')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_condicion_iva_vta_tipo_ajuste_haber->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_vta_tipo_ajuste_haber->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_condicion_iva_vta_tipo_ajuste_haber->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_vta_tipo_ajuste_haber->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_condicion_iva_vta_tipo_ajuste_haber->getId() ?>" archivo="ajax/modulos/gral_condicion_iva_vta_tipo_ajuste_haber/gral_condicion_iva_vta_tipo_ajuste_haber_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoAjusteHaber') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_VTA_TIPO_AJUSTE_HABER_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoAjusteHaber') ?>">
                                <a href="gral_condicion_iva_vta_tipo_ajuste_haber_alta.php?id=<?php echo $gral_condicion_iva_vta_tipo_ajuste_haber->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_AJUSTE_HABER_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_condicion_iva_vta_tipo_ajuste_haber){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCondicionIvaVtaTipoAjusteHaber::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_vta_tipo_ajuste_haber->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver GralCondicionIvaVtaTipoAjusteHabers de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_condicion_iva_vta_tipo_ajuste_haber_alta.php" >
                            <?php Lang::_lang('Agregar GralCondicionIvaVtaTipoAjusteHaber') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_CLI_CLIENTE_TIENDA')){ ?>
	<div id="tab_cli_cliente_tienda" class="bloque-relacion cli_cliente_tienda">
		
            <h4><?php Lang::_lang('CliClienteTienda') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getCliClienteTiendasParaBloqueMasInfo() as $cli_cliente_tienda){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_tienda->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_tienda->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_tienda->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_tienda->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_tienda->getId() ?>" archivo="ajax/modulos/cli_cliente_tienda/cli_cliente_tienda_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteTienda') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteTienda') ?>">
                                <a href="cli_cliente_tienda_alta.php?id=<?php echo $cli_cliente_tienda->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_CLI_CLIENTE_TIENDA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_tienda){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteTienda::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_tienda->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteTiendas de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_tienda_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteTienda') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_GRAL_CONDICION_IVA')){ ?>
	<div id="tab_eku_param_tipo_naturaleza_receptor_gral_condicion_iva" class="bloque-relacion eku_param_tipo_naturaleza_receptor_gral_condicion_iva">
		
            <h4><?php Lang::_lang('EkuParamTipoNaturalezaReceptorGralCondicionIva') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCondicionIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_condicion_iva->getEkuParamTipoNaturalezaReceptorGralCondicionIvasParaBloqueMasInfo() as $eku_param_tipo_naturaleza_receptor_gral_condicion_iva){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getDescripcionVinculante('GralCondicionIva')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getId() ?>" archivo="ajax/modulos/eku_param_tipo_naturaleza_receptor_gral_condicion_iva/eku_param_tipo_naturaleza_receptor_gral_condicion_iva_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamTipoNaturalezaReceptorGralCondicionIva') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_GRAL_CONDICION_IVA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamTipoNaturalezaReceptorGralCondicionIva') ?>">
                                <a href="eku_param_tipo_naturaleza_receptor_gral_condicion_iva_alta.php?id=<?php echo $eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_MASINFO_EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_GRAL_CONDICION_IVA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_tipo_naturaleza_receptor_gral_condicion_iva){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamTipoNaturalezaReceptorGralCondicionIva::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamTipoNaturalezaReceptorGralCondicionIvas de ') ?> <strong><?php echo($gral_condicion_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_tipo_naturaleza_receptor_gral_condicion_iva_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamTipoNaturalezaReceptorGralCondicionIva') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

