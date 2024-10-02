<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_tipo_nota_debito_id = Gral::getVars(2, 'id');
$vta_tipo_nota_debito = VtaTipoNotaDebito::getOxId($vta_tipo_nota_debito_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_tipo_nota_debito->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_TIPO_NOTA_DEBITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_nota_debito->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_tipo_nota_debito->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_TIPO_NOTA_DEBITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_nota_debito->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_tipo_nota_debito->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_NOTA_DEBITO_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_NOTA_DEBITO')){ ?>
            <li><a href="#tab_gral_condicion_iva_vta_tipo_nota_debito"><?php Lang::_lang('GralCondicionIvaVtaTipoNotaDebito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_NOTA_DEBITO_MASINFO_VTA_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
            <li><a href="#tab_vta_tipo_nota_debito_ws_fe_param_tipo_comprobante"><?php Lang::_lang('VtaTipoNotaDebitoWsFeParamTipoComprobante') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO')){ ?>
            <li><a href="#tab_vta_nota_debito"><?php Lang::_lang('VtaNotaDebito') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_TIPO_NOTA_DEBITO_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_NOTA_DEBITO')){ ?>
	<div id="tab_gral_condicion_iva_vta_tipo_nota_debito" class="bloque-relacion gral_condicion_iva_vta_tipo_nota_debito">
		
            <h4><?php Lang::_lang('GralCondicionIvaVtaTipoNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaTipoNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_tipo_nota_debito->getGralCondicionIvaVtaTipoNotaDebitosParaBloqueMasInfo() as $gral_condicion_iva_vta_tipo_nota_debito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_debito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_debito->getDescripcionVinculante('VtaTipoNotaDebito')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_NOTA_DEBITO_MASINFO_GRAL_CONDICION_IVA_VTA_TIPO_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_condicion_iva_vta_tipo_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCondicionIvaVtaTipoNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_vta_tipo_nota_debito->getFiltrosArrXCampo('VtaTipoNotaDebito', 'vta_tipo_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver GralCondicionIvaVtaTipoNotaDebitos de ') ?> <strong><?php echo($vta_tipo_nota_debito->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_TIPO_NOTA_DEBITO_MASINFO_VTA_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
	<div id="tab_vta_tipo_nota_debito_ws_fe_param_tipo_comprobante" class="bloque-relacion vta_tipo_nota_debito_ws_fe_param_tipo_comprobante">
		
            <h4><?php Lang::_lang('VtaTipoNotaDebitoWsFeParamTipoComprobante') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaTipoNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_tipo_nota_debito->getVtaTipoNotaDebitoWsFeParamTipoComprobantesParaBloqueMasInfo() as $vta_tipo_nota_debito_ws_fe_param_tipo_comprobante){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getDescripcionVinculante('VtaTipoNotaDebito')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_NOTA_DEBITO_MASINFO_VTA_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_tipo_nota_debito_ws_fe_param_tipo_comprobante){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaTipoNotaDebitoWsFeParamTipoComprobante::getFiltrosArrGral() ?>&arr=<?php echo $vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getFiltrosArrXCampo('VtaTipoNotaDebito', 'vta_tipo_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver VtaTipoNotaDebitoWsFeParamTipoComprobantes de ') ?> <strong><?php echo($vta_tipo_nota_debito->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_TIPO_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO')){ ?>
	<div id="tab_vta_nota_debito" class="bloque-relacion vta_nota_debito">
		
            <h4><?php Lang::_lang('VtaNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaTipoNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_tipo_nota_debito->getVtaNotaDebitosParaBloqueMasInfo() as $vta_nota_debito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_NOTA_DEBITO_MASINFO_VTA_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito->getFiltrosArrXCampo('VtaTipoNotaDebito', 'vta_tipo_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitos de ') ?> <strong><?php echo($vta_tipo_nota_debito->getDescripcion()) ?></strong>
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
	
</div>

