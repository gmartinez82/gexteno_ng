<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_punto_venta_id = Gral::getVars(2, 'id');
$vta_punto_venta = VtaPuntoVenta::getOxId($vta_punto_venta_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Domicilio Fiscal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_punto_venta->getDomicilioFiscal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero Timbrado') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_punto_venta->getNumeroTimbrado())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Serie') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_punto_venta->getSerie())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Tipo de Emision') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_punto_venta->getTipoEmision())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Bloqueado') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_punto_venta->getBloqueado())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Fecha de Baja') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_punto_venta->getFechaBaja())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_punto_venta->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_PUNTO_VENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_punto_venta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_PUNTO_VENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_punto_venta->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_GRAL_SUCURSAL_VTA_PUNTO_VENTA')){ ?>
            <li><a href="#tab_gral_sucursal_vta_punto_venta"><?php Lang::_lang('GralSucursalVtaPuntoVentas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_CLI_CLIENTE_VTA_PUNTO_VENTA')){ ?>
            <li><a href="#tab_cli_cliente_vta_punto_venta"><?php Lang::_lang('CliClienteVtaPuntoVentas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_NOTA_CREDITO')){ ?>
            <li><a href="#tab_vta_nota_credito"><?php Lang::_lang('VtaNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_NOTA_DEBITO')){ ?>
            <li><a href="#tab_vta_nota_debito"><?php Lang::_lang('VtaNotaDebito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_RECIBO')){ ?>
            <li><a href="#tab_vta_recibo"><?php Lang::_lang('VtaRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA_ACTUAL')){ ?>
            <li><a href="#tab_vta_punto_venta_actual"><?php Lang::_lang('VtaPuntoVentaActuals') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA_WS_FE_PARAM_PUNTO_VENTA')){ ?>
            <li><a href="#tab_vta_punto_venta_ws_fe_param_punto_venta"><?php Lang::_lang('VtaPuntoVentaWsFeParamPuntoVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA_VTA_PRESUPUESTO_TIPO_VENTA')){ ?>
            <li><a href="#tab_vta_punto_venta_vta_presupuesto_tipo_venta"><?php Lang::_lang('VtaPuntoVentaVtaPresupuestoTipoVentas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_REMITO')){ ?>
            <li><a href="#tab_vta_remito"><?php Lang::_lang('VtaRemito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_FACTURA')){ ?>
            <li><a href="#tab_vta_factura"><?php Lang::_lang('VtaFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_AJUSTE_DEBE')){ ?>
            <li><a href="#tab_vta_ajuste_debe"><?php Lang::_lang('VtaAjusteDebes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_AJUSTE_HABER')){ ?>
            <li><a href="#tab_vta_ajuste_haber"><?php Lang::_lang('VtaAjusteHabers') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_REMITO_AJUSTE')){ ?>
            <li><a href="#tab_vta_remito_ajuste"><?php Lang::_lang('VtaRemitoAjuste') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_GRAL_SUCURSAL_VTA_PUNTO_VENTA')){ ?>
	<div id="tab_gral_sucursal_vta_punto_venta" class="bloque-relacion gral_sucursal_vta_punto_venta">
		
            <h4><?php Lang::_lang('GralSucursalVtaPuntoVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_punto_venta->getGralSucursalVtaPuntoVentasParaBloqueMasInfo() as $gral_sucursal_vta_punto_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_sucursal_vta_punto_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_sucursal_vta_punto_venta->getDescripcionVinculante('VtaPuntoVenta')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_sucursal_vta_punto_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_vta_punto_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_sucursal_vta_punto_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_vta_punto_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_sucursal_vta_punto_venta->getId() ?>" archivo="ajax/modulos/gral_sucursal_vta_punto_venta/gral_sucursal_vta_punto_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralSucursalVtaPuntoVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VTA_PUNTO_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSucursalVtaPuntoVenta') ?>">
                                <a href="gral_sucursal_vta_punto_venta_alta.php?id=<?php echo $gral_sucursal_vta_punto_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_GRAL_SUCURSAL_VTA_PUNTO_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_sucursal_vta_punto_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralSucursalVtaPuntoVenta::getFiltrosArrGral() ?>&arr=<?php echo $gral_sucursal_vta_punto_venta->getFiltrosArrXCampo('VtaPuntoVenta', 'vta_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver GralSucursalVtaPuntoVentas de ') ?> <strong><?php echo($vta_punto_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_sucursal_vta_punto_venta_alta.php" >
                            <?php Lang::_lang('Agregar GralSucursalVtaPuntoVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_CLI_CLIENTE_VTA_PUNTO_VENTA')){ ?>
	<div id="tab_cli_cliente_vta_punto_venta" class="bloque-relacion cli_cliente_vta_punto_venta">
		
            <h4><?php Lang::_lang('CliClienteVtaPuntoVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_punto_venta->getCliClienteVtaPuntoVentasParaBloqueMasInfo() as $cli_cliente_vta_punto_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_vta_punto_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_vta_punto_venta->getDescripcionVinculante('VtaPuntoVenta')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_vta_punto_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_vta_punto_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_vta_punto_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_vta_punto_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_vta_punto_venta->getId() ?>" archivo="ajax/modulos/cli_cliente_vta_punto_venta/cli_cliente_vta_punto_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteVtaPuntoVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_VTA_PUNTO_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteVtaPuntoVenta') ?>">
                                <a href="cli_cliente_vta_punto_venta_alta.php?id=<?php echo $cli_cliente_vta_punto_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_CLI_CLIENTE_VTA_PUNTO_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_vta_punto_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteVtaPuntoVenta::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_vta_punto_venta->getFiltrosArrXCampo('VtaPuntoVenta', 'vta_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteVtaPuntoVentas de ') ?> <strong><?php echo($vta_punto_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_vta_punto_venta_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteVtaPuntoVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_NOTA_CREDITO')){ ?>
	<div id="tab_vta_nota_credito" class="bloque-relacion vta_nota_credito">
		
            <h4><?php Lang::_lang('VtaNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_punto_venta->getVtaNotaCreditosParaBloqueMasInfo() as $vta_nota_credito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito->getFiltrosArrXCampo('VtaPuntoVenta', 'vta_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditos de ') ?> <strong><?php echo($vta_punto_venta->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_NOTA_DEBITO')){ ?>
	<div id="tab_vta_nota_debito" class="bloque-relacion vta_nota_debito">
		
            <h4><?php Lang::_lang('VtaNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_punto_venta->getVtaNotaDebitosParaBloqueMasInfo() as $vta_nota_debito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito->getFiltrosArrXCampo('VtaPuntoVenta', 'vta_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitos de ') ?> <strong><?php echo($vta_punto_venta->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_RECIBO')){ ?>
	<div id="tab_vta_recibo" class="bloque-relacion vta_recibo">
		
            <h4><?php Lang::_lang('VtaRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_punto_venta->getVtaRecibosParaBloqueMasInfo() as $vta_recibo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo->getFiltrosArrXCampo('VtaPuntoVenta', 'vta_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaRecibos de ') ?> <strong><?php echo($vta_punto_venta->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA_ACTUAL')){ ?>
	<div id="tab_vta_punto_venta_actual" class="bloque-relacion vta_punto_venta_actual">
		
            <h4><?php Lang::_lang('VtaPuntoVentaActual') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_punto_venta->getVtaPuntoVentaActualsParaBloqueMasInfo() as $vta_punto_venta_actual){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_punto_venta_actual->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_punto_venta_actual->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_punto_venta_actual->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta_actual->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_punto_venta_actual->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta_actual->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_punto_venta_actual->getId() ?>" archivo="ajax/modulos/vta_punto_venta_actual/vta_punto_venta_actual_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPuntoVentaActual') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ACTUAL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPuntoVentaActual') ?>">
                                <a href="vta_punto_venta_actual_alta.php?id=<?php echo $vta_punto_venta_actual->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA_ACTUAL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_punto_venta_actual){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPuntoVentaActual::getFiltrosArrGral() ?>&arr=<?php echo $vta_punto_venta_actual->getFiltrosArrXCampo('VtaPuntoVenta', 'vta_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaPuntoVentaActuals de ') ?> <strong><?php echo($vta_punto_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_punto_venta_actual_alta.php" >
                            <?php Lang::_lang('Agregar VtaPuntoVentaActual') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA_WS_FE_PARAM_PUNTO_VENTA')){ ?>
	<div id="tab_vta_punto_venta_ws_fe_param_punto_venta" class="bloque-relacion vta_punto_venta_ws_fe_param_punto_venta">
		
            <h4><?php Lang::_lang('VtaPuntoVentaWsFeParamPuntoVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_punto_venta->getVtaPuntoVentaWsFeParamPuntoVentasParaBloqueMasInfo() as $vta_punto_venta_ws_fe_param_punto_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_punto_venta_ws_fe_param_punto_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_punto_venta_ws_fe_param_punto_venta->getDescripcionVinculante('VtaPuntoVenta')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_punto_venta_ws_fe_param_punto_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta_ws_fe_param_punto_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_punto_venta_ws_fe_param_punto_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta_ws_fe_param_punto_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_punto_venta_ws_fe_param_punto_venta->getId() ?>" archivo="ajax/modulos/vta_punto_venta_ws_fe_param_punto_venta/vta_punto_venta_ws_fe_param_punto_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPuntoVentaWsFeParamPuntoVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_WS_FE_PARAM_PUNTO_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPuntoVentaWsFeParamPuntoVenta') ?>">
                                <a href="vta_punto_venta_ws_fe_param_punto_venta_alta.php?id=<?php echo $vta_punto_venta_ws_fe_param_punto_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA_WS_FE_PARAM_PUNTO_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_punto_venta_ws_fe_param_punto_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPuntoVentaWsFeParamPuntoVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_punto_venta_ws_fe_param_punto_venta->getFiltrosArrXCampo('VtaPuntoVenta', 'vta_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaPuntoVentaWsFeParamPuntoVentas de ') ?> <strong><?php echo($vta_punto_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_punto_venta_ws_fe_param_punto_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaPuntoVentaWsFeParamPuntoVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA_VTA_PRESUPUESTO_TIPO_VENTA')){ ?>
	<div id="tab_vta_punto_venta_vta_presupuesto_tipo_venta" class="bloque-relacion vta_punto_venta_vta_presupuesto_tipo_venta">
		
            <h4><?php Lang::_lang('VtaPuntoVentaVtaPresupuestoTipoVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_punto_venta->getVtaPuntoVentaVtaPresupuestoTipoVentasParaBloqueMasInfo() as $vta_punto_venta_vta_presupuesto_tipo_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_punto_venta_vta_presupuesto_tipo_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_punto_venta_vta_presupuesto_tipo_venta->getDescripcionVinculante('VtaPuntoVenta')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_punto_venta_vta_presupuesto_tipo_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta_vta_presupuesto_tipo_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_punto_venta_vta_presupuesto_tipo_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta_vta_presupuesto_tipo_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_punto_venta_vta_presupuesto_tipo_venta->getId() ?>" archivo="ajax/modulos/vta_punto_venta_vta_presupuesto_tipo_venta/vta_punto_venta_vta_presupuesto_tipo_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPuntoVentaVtaPresupuestoTipoVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_VTA_PRESUPUESTO_TIPO_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPuntoVentaVtaPresupuestoTipoVenta') ?>">
                                <a href="vta_punto_venta_vta_presupuesto_tipo_venta_alta.php?id=<?php echo $vta_punto_venta_vta_presupuesto_tipo_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA_VTA_PRESUPUESTO_TIPO_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_punto_venta_vta_presupuesto_tipo_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPuntoVentaVtaPresupuestoTipoVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_punto_venta_vta_presupuesto_tipo_venta->getFiltrosArrXCampo('VtaPuntoVenta', 'vta_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaPuntoVentaVtaPresupuestoTipoVentas de ') ?> <strong><?php echo($vta_punto_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_punto_venta_vta_presupuesto_tipo_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaPuntoVentaVtaPresupuestoTipoVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_REMITO')){ ?>
	<div id="tab_vta_remito" class="bloque-relacion vta_remito">
		
            <h4><?php Lang::_lang('VtaRemito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_punto_venta->getVtaRemitosParaBloqueMasInfo() as $vta_remito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_remito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_remito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_remito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_remito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_remito->getId() ?>" archivo="ajax/modulos/vta_remito/vta_remito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRemito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRemito') ?>">
                                <a href="vta_remito_alta.php?id=<?php echo $vta_remito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_REMITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemito::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito->getFiltrosArrXCampo('VtaPuntoVenta', 'vta_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitos de ') ?> <strong><?php echo($vta_punto_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_remito_alta.php" >
                            <?php Lang::_lang('Agregar VtaRemito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_FACTURA')){ ?>
	<div id="tab_vta_factura" class="bloque-relacion vta_factura">
		
            <h4><?php Lang::_lang('VtaFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_punto_venta->getVtaFacturasParaBloqueMasInfo() as $vta_factura){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFactura::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura->getFiltrosArrXCampo('VtaPuntoVenta', 'vta_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturas de ') ?> <strong><?php echo($vta_punto_venta->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_AJUSTE_DEBE')){ ?>
	<div id="tab_vta_ajuste_debe" class="bloque-relacion vta_ajuste_debe">
		
            <h4><?php Lang::_lang('VtaAjusteDebe') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_punto_venta->getVtaAjusteDebesParaBloqueMasInfo() as $vta_ajuste_debe){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_AJUSTE_DEBE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_debe){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteDebe::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_debe->getFiltrosArrXCampo('VtaPuntoVenta', 'vta_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteDebes de ') ?> <strong><?php echo($vta_punto_venta->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_AJUSTE_HABER')){ ?>
	<div id="tab_vta_ajuste_haber" class="bloque-relacion vta_ajuste_haber">
		
            <h4><?php Lang::_lang('VtaAjusteHaber') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_punto_venta->getVtaAjusteHabersParaBloqueMasInfo() as $vta_ajuste_haber){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_AJUSTE_HABER_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_haber){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteHaber::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_haber->getFiltrosArrXCampo('VtaPuntoVenta', 'vta_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteHabers de ') ?> <strong><?php echo($vta_punto_venta->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_REMITO_AJUSTE')){ ?>
	<div id="tab_vta_remito_ajuste" class="bloque-relacion vta_remito_ajuste">
		
            <h4><?php Lang::_lang('VtaRemitoAjuste') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_punto_venta->getVtaRemitoAjustesParaBloqueMasInfo() as $vta_remito_ajuste){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_remito_ajuste->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_remito_ajuste->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_remito_ajuste->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_ajuste->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_remito_ajuste->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_ajuste->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_remito_ajuste->getId() ?>" archivo="ajax/modulos/vta_remito_ajuste/vta_remito_ajuste_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRemitoAjuste') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRemitoAjuste') ?>">
                                <a href="vta_remito_ajuste_alta.php?id=<?php echo $vta_remito_ajuste->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_MASINFO_VTA_REMITO_AJUSTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito_ajuste){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemitoAjuste::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito_ajuste->getFiltrosArrXCampo('VtaPuntoVenta', 'vta_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitoAjustes de ') ?> <strong><?php echo($vta_punto_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_remito_ajuste_alta.php" >
                            <?php Lang::_lang('Agregar VtaRemitoAjuste') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

