<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_tipo_factura_id = Gral::getVars(2, 'id');
$vta_tipo_factura = VtaTipoFactura::getOxId($vta_tipo_factura_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_tipo_factura->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_TIPO_FACTURA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_factura->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_tipo_factura->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_TIPO_FACTURA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_factura->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_tipo_factura->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_FACTURA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_FACTURA')){ ?>
            <li><a href="#tab_gral_condicion_iva_vta_tipo_factura"><?php Lang::_lang('GralCondicionIvaVtaTipoFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_FACTURA_MASINFO_VTA_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
            <li><a href="#tab_vta_tipo_factura_ws_fe_param_tipo_comprobante"><?php Lang::_lang('VtaTipoFacturaWsFeParamTipoComprobante') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_FACTURA_MASINFO_VTA_FACTURA')){ ?>
            <li><a href="#tab_vta_factura"><?php Lang::_lang('VtaFactura') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_TIPO_FACTURA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_FACTURA')){ ?>
	<div id="tab_gral_condicion_iva_vta_tipo_factura" class="bloque-relacion gral_condicion_iva_vta_tipo_factura">
		
            <h4><?php Lang::_lang('GralCondicionIvaVtaTipoFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaTipoFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_tipo_factura->getGralCondicionIvaVtaTipoFacturasParaBloqueMasInfo() as $gral_condicion_iva_vta_tipo_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_condicion_iva_vta_tipo_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_condicion_iva_vta_tipo_factura->getDescripcionVinculante('VtaTipoFactura')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_FACTURA_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_condicion_iva_vta_tipo_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCondicionIvaVtaTipoFactura::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_vta_tipo_factura->getFiltrosArrXCampo('VtaTipoFactura', 'vta_tipo_factura_id') ?>" >
                                <?php Lang::_lang('Ver GralCondicionIvaVtaTipoFacturas de ') ?> <strong><?php echo($vta_tipo_factura->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_TIPO_FACTURA_MASINFO_VTA_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
	<div id="tab_vta_tipo_factura_ws_fe_param_tipo_comprobante" class="bloque-relacion vta_tipo_factura_ws_fe_param_tipo_comprobante">
		
            <h4><?php Lang::_lang('VtaTipoFacturaWsFeParamTipoComprobante') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaTipoFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_tipo_factura->getVtaTipoFacturaWsFeParamTipoComprobantesParaBloqueMasInfo() as $vta_tipo_factura_ws_fe_param_tipo_comprobante){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_tipo_factura_ws_fe_param_tipo_comprobante->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_tipo_factura_ws_fe_param_tipo_comprobante->getDescripcionVinculante('VtaTipoFactura')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_FACTURA_MASINFO_VTA_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_tipo_factura_ws_fe_param_tipo_comprobante){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaTipoFacturaWsFeParamTipoComprobante::getFiltrosArrGral() ?>&arr=<?php echo $vta_tipo_factura_ws_fe_param_tipo_comprobante->getFiltrosArrXCampo('VtaTipoFactura', 'vta_tipo_factura_id') ?>" >
                                <?php Lang::_lang('Ver VtaTipoFacturaWsFeParamTipoComprobantes de ') ?> <strong><?php echo($vta_tipo_factura->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_TIPO_FACTURA_MASINFO_VTA_FACTURA')){ ?>
	<div id="tab_vta_factura" class="bloque-relacion vta_factura">
		
            <h4><?php Lang::_lang('VtaFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaTipoFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_tipo_factura->getVtaFacturasParaBloqueMasInfo() as $vta_factura){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_FACTURA_MASINFO_VTA_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFactura::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura->getFiltrosArrXCampo('VtaTipoFactura', 'vta_tipo_factura_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturas de ') ?> <strong><?php echo($vta_tipo_factura->getDescripcion()) ?></strong>
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
	
</div>

