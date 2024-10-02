<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ws_fe_param_tipo_documento_id = Gral::getVars(2, 'id');
$ws_fe_param_tipo_documento = WsFeParamTipoDocumento::getOxId($ws_fe_param_tipo_documento_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ws_fe_param_tipo_documento->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'WS_FE_PARAM_TIPO_DOCUMENTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_param_tipo_documento->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ws_fe_param_tipo_documento->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'WS_FE_PARAM_TIPO_DOCUMENTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_param_tipo_documento->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ws_fe_param_tipo_documento->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_DOCUMENTO_MASINFO_GRAL_TIPO_DOCUMENTO_WS_FE_PARAM_TIPO_DOCUMENTO')){ ?>
            <li><a href="#tab_gral_tipo_documento_ws_fe_param_tipo_documento"><?php Lang::_lang('GralTipoDocumentoWsFeParamTipoDocumentos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_DOCUMENTO_MASINFO_WS_FE_OPE_SOLICITUD')){ ?>
            <li><a href="#tab_ws_fe_ope_solicitud"><?php Lang::_lang('WsFeOpeSolicitud') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_DOCUMENTO_MASINFO_GRAL_TIPO_DOCUMENTO_WS_FE_PARAM_TIPO_DOCUMENTO')){ ?>
	<div id="tab_gral_tipo_documento_ws_fe_param_tipo_documento" class="bloque-relacion gral_tipo_documento_ws_fe_param_tipo_documento">
		
            <h4><?php Lang::_lang('GralTipoDocumentoWsFeParamTipoDocumento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeParamTipoDocumento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_param_tipo_documento->getGralTipoDocumentoWsFeParamTipoDocumentosParaBloqueMasInfo() as $gral_tipo_documento_ws_fe_param_tipo_documento){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_tipo_documento_ws_fe_param_tipo_documento->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_tipo_documento_ws_fe_param_tipo_documento->getDescripcionVinculante('WsFeParamTipoDocumento')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_DOCUMENTO_MASINFO_GRAL_TIPO_DOCUMENTO_WS_FE_PARAM_TIPO_DOCUMENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_tipo_documento_ws_fe_param_tipo_documento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralTipoDocumentoWsFeParamTipoDocumento::getFiltrosArrGral() ?>&arr=<?php echo $gral_tipo_documento_ws_fe_param_tipo_documento->getFiltrosArrXCampo('WsFeParamTipoDocumento', 'ws_fe_param_tipo_documento_id') ?>" >
                                <?php Lang::_lang('Ver GralTipoDocumentoWsFeParamTipoDocumentos de ') ?> <strong><?php echo($ws_fe_param_tipo_documento->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_DOCUMENTO_MASINFO_WS_FE_OPE_SOLICITUD')){ ?>
	<div id="tab_ws_fe_ope_solicitud" class="bloque-relacion ws_fe_ope_solicitud">
		
            <h4><?php Lang::_lang('WsFeOpeSolicitud') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeParamTipoDocumento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_param_tipo_documento->getWsFeOpeSolicitudsParaBloqueMasInfo() as $ws_fe_ope_solicitud){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ws_fe_ope_solicitud->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ws_fe_ope_solicitud->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ws_fe_ope_solicitud->getId() ?>" archivo="ajax/modulos/ws_fe_ope_solicitud/ws_fe_ope_solicitud_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?>">
                                <a href="ws_fe_ope_solicitud_alta.php?id=<?php echo $ws_fe_ope_solicitud->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_DOCUMENTO_MASINFO_WS_FE_OPE_SOLICITUD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ws_fe_ope_solicitud){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo WsFeOpeSolicitud::getFiltrosArrGral() ?>&arr=<?php echo $ws_fe_ope_solicitud->getFiltrosArrXCampo('WsFeParamTipoDocumento', 'ws_fe_param_tipo_documento_id') ?>" >
                                <?php Lang::_lang('Ver WsFeOpeSolicituds de ') ?> <strong><?php echo($ws_fe_param_tipo_documento->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ws_fe_ope_solicitud_alta.php" >
                            <?php Lang::_lang('Agregar WsFeOpeSolicitud') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

