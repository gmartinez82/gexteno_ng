<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ws_fe_param_tipo_iva_id = Gral::getVars(2, 'id');
$ws_fe_param_tipo_iva = WsFeParamTipoIva::getOxId($ws_fe_param_tipo_iva_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ws_fe_param_tipo_iva->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'WS_FE_PARAM_TIPO_IVA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_param_tipo_iva->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ws_fe_param_tipo_iva->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'WS_FE_PARAM_TIPO_IVA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_param_tipo_iva->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ws_fe_param_tipo_iva->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_IVA_MASINFO_GRAL_TIPO_IVA_WS_FE_PARAM_TIPO_IVA')){ ?>
            <li><a href="#tab_gral_tipo_iva_ws_fe_param_tipo_iva"><?php Lang::_lang('GralTipoIvaWsFeParamTipoIva') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_IVA_MASINFO_WS_FE_OPE_SOLICITUD_IVA')){ ?>
            <li><a href="#tab_ws_fe_ope_solicitud_iva"><?php Lang::_lang('WsFeOpeSolicitudIva') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_IVA_MASINFO_GRAL_TIPO_IVA_WS_FE_PARAM_TIPO_IVA')){ ?>
	<div id="tab_gral_tipo_iva_ws_fe_param_tipo_iva" class="bloque-relacion gral_tipo_iva_ws_fe_param_tipo_iva">
		
            <h4><?php Lang::_lang('GralTipoIvaWsFeParamTipoIva') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeParamTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_param_tipo_iva->getGralTipoIvaWsFeParamTipoIvasParaBloqueMasInfo() as $gral_tipo_iva_ws_fe_param_tipo_iva){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getDescripcionVinculante('WsFeParamTipoIva')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_IVA_MASINFO_GRAL_TIPO_IVA_WS_FE_PARAM_TIPO_IVA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_tipo_iva_ws_fe_param_tipo_iva){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralTipoIvaWsFeParamTipoIva::getFiltrosArrGral() ?>&arr=<?php echo $gral_tipo_iva_ws_fe_param_tipo_iva->getFiltrosArrXCampo('WsFeParamTipoIva', 'ws_fe_param_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver GralTipoIvaWsFeParamTipoIvas de ') ?> <strong><?php echo($ws_fe_param_tipo_iva->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_IVA_MASINFO_WS_FE_OPE_SOLICITUD_IVA')){ ?>
	<div id="tab_ws_fe_ope_solicitud_iva" class="bloque-relacion ws_fe_ope_solicitud_iva">
		
            <h4><?php Lang::_lang('WsFeOpeSolicitudIva') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeParamTipoIva') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_param_tipo_iva->getWsFeOpeSolicitudIvasParaBloqueMasInfo() as $ws_fe_ope_solicitud_iva){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ws_fe_ope_solicitud_iva->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ws_fe_ope_solicitud_iva->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud_iva->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_iva->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud_iva->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_iva->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ws_fe_ope_solicitud_iva->getId() ?>" archivo="ajax/modulos/ws_fe_ope_solicitud_iva/ws_fe_ope_solicitud_iva_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('WsFeOpeSolicitudIva') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_IVA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeOpeSolicitudIva') ?>">
                                <a href="ws_fe_ope_solicitud_iva_alta.php?id=<?php echo $ws_fe_ope_solicitud_iva->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_IVA_MASINFO_WS_FE_OPE_SOLICITUD_IVA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ws_fe_ope_solicitud_iva){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo WsFeOpeSolicitudIva::getFiltrosArrGral() ?>&arr=<?php echo $ws_fe_ope_solicitud_iva->getFiltrosArrXCampo('WsFeParamTipoIva', 'ws_fe_param_tipo_iva_id') ?>" >
                                <?php Lang::_lang('Ver WsFeOpeSolicitudIvas de ') ?> <strong><?php echo($ws_fe_param_tipo_iva->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ws_fe_ope_solicitud_iva_alta.php" >
                            <?php Lang::_lang('Agregar WsFeOpeSolicitudIva') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

