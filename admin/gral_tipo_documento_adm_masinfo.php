<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_tipo_documento_id = Gral::getVars(2, 'id');
$gral_tipo_documento = GralTipoDocumento::getOxId($gral_tipo_documento_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_tipo_documento->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_TIPO_DOCUMENTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_tipo_documento->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_tipo_documento->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_TIPO_DOCUMENTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_tipo_documento->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_tipo_documento->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_GRAL_TIPO_DOCUMENTO_WS_FE_PARAM_TIPO_DOCUMENTO')){ ?>
            <li><a href="#tab_gral_tipo_documento_ws_fe_param_tipo_documento"><?php Lang::_lang('GralTipoDocumentoWsFeParamTipoDocumentos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_CLI_CLIENTE')){ ?>
            <li><a href="#tab_cli_cliente"><?php Lang::_lang('CliCliente') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_PRESUPUESTO')){ ?>
            <li><a href="#tab_vta_presupuesto"><?php Lang::_lang('VtaPresupuesto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_NOTA_CREDITO')){ ?>
            <li><a href="#tab_vta_nota_credito"><?php Lang::_lang('VtaNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_NOTA_DEBITO')){ ?>
            <li><a href="#tab_vta_nota_debito"><?php Lang::_lang('VtaNotaDebito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_RECIBO')){ ?>
            <li><a href="#tab_vta_recibo"><?php Lang::_lang('VtaRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_REMITO')){ ?>
            <li><a href="#tab_vta_remito"><?php Lang::_lang('VtaRemito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_FACTURA')){ ?>
            <li><a href="#tab_vta_factura"><?php Lang::_lang('VtaFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_AJUSTE_DEBE')){ ?>
            <li><a href="#tab_vta_ajuste_debe"><?php Lang::_lang('VtaAjusteDebes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_AJUSTE_HABER')){ ?>
            <li><a href="#tab_vta_ajuste_haber"><?php Lang::_lang('VtaAjusteHabers') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_REMITO_AJUSTE')){ ?>
            <li><a href="#tab_vta_remito_ajuste"><?php Lang::_lang('VtaRemitoAjuste') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_CLI_CLIENTE_TIENDA')){ ?>
            <li><a href="#tab_cli_cliente_tienda"><?php Lang::_lang('CliClienteTienda') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_EKU_PARAM_TIPO_DOCUMENTO_GRAL_TIPO_DOCUMENTO')){ ?>
            <li><a href="#tab_eku_param_tipo_documento_gral_tipo_documento"><?php Lang::_lang('EkuParamTipoDocumentoGralTipoDocumentos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_GRAL_TIPO_DOCUMENTO_WS_FE_PARAM_TIPO_DOCUMENTO')){ ?>
	<div id="tab_gral_tipo_documento_ws_fe_param_tipo_documento" class="bloque-relacion gral_tipo_documento_ws_fe_param_tipo_documento">
		
            <h4><?php Lang::_lang('GralTipoDocumentoWsFeParamTipoDocumento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoDocumento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_documento->getGralTipoDocumentoWsFeParamTipoDocumentosParaBloqueMasInfo() as $gral_tipo_documento_ws_fe_param_tipo_documento){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_tipo_documento_ws_fe_param_tipo_documento->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_tipo_documento_ws_fe_param_tipo_documento->getDescripcionVinculante('GralTipoDocumento')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_tipo_documento_ws_fe_param_tipo_documento->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_tipo_documento_ws_fe_param_tipo_documento->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_tipo_documento_ws_fe_param_tipo_documento->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_tipo_documento_ws_fe_param_tipo_documento->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_tipo_documento_ws_fe_param_tipo_documento->getId() ?>" archivo="ajax/modulos/gral_tipo_documento_ws_fe_param_tipo_documento/gral_tipo_documento_ws_fe_param_tipo_documento_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralTipoDocumentoWsFeParamTipoDocumento') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_WS_FE_PARAM_TIPO_DOCUMENTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralTipoDocumentoWsFeParamTipoDocumento') ?>">
                                <a href="gral_tipo_documento_ws_fe_param_tipo_documento_alta.php?id=<?php echo $gral_tipo_documento_ws_fe_param_tipo_documento->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_GRAL_TIPO_DOCUMENTO_WS_FE_PARAM_TIPO_DOCUMENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_tipo_documento_ws_fe_param_tipo_documento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralTipoDocumentoWsFeParamTipoDocumento::getFiltrosArrGral() ?>&arr=<?php echo $gral_tipo_documento_ws_fe_param_tipo_documento->getFiltrosArrXCampo('GralTipoDocumento', 'gral_tipo_documento_id') ?>" >
                                <?php Lang::_lang('Ver GralTipoDocumentoWsFeParamTipoDocumentos de ') ?> <strong><?php echo($gral_tipo_documento->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_tipo_documento_ws_fe_param_tipo_documento_alta.php" >
                            <?php Lang::_lang('Agregar GralTipoDocumentoWsFeParamTipoDocumento') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_CLI_CLIENTE')){ ?>
	<div id="tab_cli_cliente" class="bloque-relacion cli_cliente">
		
            <h4><?php Lang::_lang('CliCliente') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoDocumento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_documento->getCliClientesParaBloqueMasInfo() as $cli_cliente){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_CLI_CLIENTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliCliente::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente->getFiltrosArrXCampo('GralTipoDocumento', 'gral_tipo_documento_id') ?>" >
                                <?php Lang::_lang('Ver CliClientes de ') ?> <strong><?php echo($gral_tipo_documento->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_PRESUPUESTO')){ ?>
	<div id="tab_vta_presupuesto" class="bloque-relacion vta_presupuesto">
		
            <h4><?php Lang::_lang('VtaPresupuesto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoDocumento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_documento->getVtaPresupuestosParaBloqueMasInfo() as $vta_presupuesto){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_PRESUPUESTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuesto::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto->getFiltrosArrXCampo('GralTipoDocumento', 'gral_tipo_documento_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestos de ') ?> <strong><?php echo($gral_tipo_documento->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_NOTA_CREDITO')){ ?>
	<div id="tab_vta_nota_credito" class="bloque-relacion vta_nota_credito">
		
            <h4><?php Lang::_lang('VtaNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoDocumento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_documento->getVtaNotaCreditosParaBloqueMasInfo() as $vta_nota_credito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito->getFiltrosArrXCampo('GralTipoDocumento', 'gral_tipo_documento_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditos de ') ?> <strong><?php echo($gral_tipo_documento->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_NOTA_DEBITO')){ ?>
	<div id="tab_vta_nota_debito" class="bloque-relacion vta_nota_debito">
		
            <h4><?php Lang::_lang('VtaNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoDocumento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_documento->getVtaNotaDebitosParaBloqueMasInfo() as $vta_nota_debito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito->getFiltrosArrXCampo('GralTipoDocumento', 'gral_tipo_documento_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitos de ') ?> <strong><?php echo($gral_tipo_documento->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_RECIBO')){ ?>
	<div id="tab_vta_recibo" class="bloque-relacion vta_recibo">
		
            <h4><?php Lang::_lang('VtaRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoDocumento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_documento->getVtaRecibosParaBloqueMasInfo() as $vta_recibo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo->getFiltrosArrXCampo('GralTipoDocumento', 'gral_tipo_documento_id') ?>" >
                                <?php Lang::_lang('Ver VtaRecibos de ') ?> <strong><?php echo($gral_tipo_documento->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_REMITO')){ ?>
	<div id="tab_vta_remito" class="bloque-relacion vta_remito">
		
            <h4><?php Lang::_lang('VtaRemito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoDocumento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_documento->getVtaRemitosParaBloqueMasInfo() as $vta_remito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_REMITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemito::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito->getFiltrosArrXCampo('GralTipoDocumento', 'gral_tipo_documento_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitos de ') ?> <strong><?php echo($gral_tipo_documento->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_FACTURA')){ ?>
	<div id="tab_vta_factura" class="bloque-relacion vta_factura">
		
            <h4><?php Lang::_lang('VtaFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoDocumento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_documento->getVtaFacturasParaBloqueMasInfo() as $vta_factura){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFactura::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura->getFiltrosArrXCampo('GralTipoDocumento', 'gral_tipo_documento_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturas de ') ?> <strong><?php echo($gral_tipo_documento->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_AJUSTE_DEBE')){ ?>
	<div id="tab_vta_ajuste_debe" class="bloque-relacion vta_ajuste_debe">
		
            <h4><?php Lang::_lang('VtaAjusteDebe') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoDocumento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_documento->getVtaAjusteDebesParaBloqueMasInfo() as $vta_ajuste_debe){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_AJUSTE_DEBE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_debe){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteDebe::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_debe->getFiltrosArrXCampo('GralTipoDocumento', 'gral_tipo_documento_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteDebes de ') ?> <strong><?php echo($gral_tipo_documento->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_AJUSTE_HABER')){ ?>
	<div id="tab_vta_ajuste_haber" class="bloque-relacion vta_ajuste_haber">
		
            <h4><?php Lang::_lang('VtaAjusteHaber') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoDocumento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_documento->getVtaAjusteHabersParaBloqueMasInfo() as $vta_ajuste_haber){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_AJUSTE_HABER_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_haber){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteHaber::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_haber->getFiltrosArrXCampo('GralTipoDocumento', 'gral_tipo_documento_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteHabers de ') ?> <strong><?php echo($gral_tipo_documento->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_REMITO_AJUSTE')){ ?>
	<div id="tab_vta_remito_ajuste" class="bloque-relacion vta_remito_ajuste">
		
            <h4><?php Lang::_lang('VtaRemitoAjuste') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoDocumento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_documento->getVtaRemitoAjustesParaBloqueMasInfo() as $vta_remito_ajuste){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_VTA_REMITO_AJUSTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito_ajuste){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemitoAjuste::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito_ajuste->getFiltrosArrXCampo('GralTipoDocumento', 'gral_tipo_documento_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitoAjustes de ') ?> <strong><?php echo($gral_tipo_documento->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_CLI_CLIENTE_TIENDA')){ ?>
	<div id="tab_cli_cliente_tienda" class="bloque-relacion cli_cliente_tienda">
		
            <h4><?php Lang::_lang('CliClienteTienda') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoDocumento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_documento->getCliClienteTiendasParaBloqueMasInfo() as $cli_cliente_tienda){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_CLI_CLIENTE_TIENDA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_tienda){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteTienda::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_tienda->getFiltrosArrXCampo('GralTipoDocumento', 'gral_tipo_documento_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteTiendas de ') ?> <strong><?php echo($gral_tipo_documento->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_EKU_PARAM_TIPO_DOCUMENTO_GRAL_TIPO_DOCUMENTO')){ ?>
	<div id="tab_eku_param_tipo_documento_gral_tipo_documento" class="bloque-relacion eku_param_tipo_documento_gral_tipo_documento">
		
            <h4><?php Lang::_lang('EkuParamTipoDocumentoGralTipoDocumento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralTipoDocumento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_tipo_documento->getEkuParamTipoDocumentoGralTipoDocumentosParaBloqueMasInfo() as $eku_param_tipo_documento_gral_tipo_documento){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_tipo_documento_gral_tipo_documento->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_tipo_documento_gral_tipo_documento->getDescripcionVinculante('GralTipoDocumento')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_tipo_documento_gral_tipo_documento->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_documento_gral_tipo_documento->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_tipo_documento_gral_tipo_documento->getId() ?>" archivo="ajax/modulos/eku_param_tipo_documento_gral_tipo_documento/eku_param_tipo_documento_gral_tipo_documento_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamTipoDocumentoGralTipoDocumento') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_DOCUMENTO_GRAL_TIPO_DOCUMENTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamTipoDocumentoGralTipoDocumento') ?>">
                                <a href="eku_param_tipo_documento_gral_tipo_documento_alta.php?id=<?php echo $eku_param_tipo_documento_gral_tipo_documento->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_MASINFO_EKU_PARAM_TIPO_DOCUMENTO_GRAL_TIPO_DOCUMENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_tipo_documento_gral_tipo_documento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamTipoDocumentoGralTipoDocumento::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_tipo_documento_gral_tipo_documento->getFiltrosArrXCampo('GralTipoDocumento', 'gral_tipo_documento_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamTipoDocumentoGralTipoDocumentos de ') ?> <strong><?php echo($gral_tipo_documento->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_tipo_documento_gral_tipo_documento_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamTipoDocumentoGralTipoDocumento') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

