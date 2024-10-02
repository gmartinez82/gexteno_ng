<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ws_fe_ope_solicitud_respuesta_id = Gral::getVars(2, 'id');
$ws_fe_ope_solicitud_respuesta = WsFeOpeSolicitudRespuesta::getOxId($ws_fe_ope_solicitud_respuesta_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ws_fe_ope_solicitud_respuesta->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'WS_FE_OPE_SOLICITUD_RESPUESTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_respuesta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'WS_FE_OPE_SOLICITUD_RESPUESTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_respuesta->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_RESPUESTA_MASINFO_WS_FE_OPE_SOLICITUD_RESPUESTA_OBSERVACION')){ ?>
            <li><a href="#tab_ws_fe_ope_solicitud_respuesta_observacion"><?php Lang::_lang('WsFeOpeSolicitudRespuestaObservacion') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_RESPUESTA_MASINFO_WS_FE_OPE_SOLICITUD_RESPUESTA_OBSERVACION')){ ?>
	<div id="tab_ws_fe_ope_solicitud_respuesta_observacion" class="bloque-relacion ws_fe_ope_solicitud_respuesta_observacion">
		
            <h4><?php Lang::_lang('WsFeOpeSolicitudRespuestaObservacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeOpeSolicitudRespuesta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_ope_solicitud_respuesta->getWsFeOpeSolicitudRespuestaObservacionsParaBloqueMasInfo() as $ws_fe_ope_solicitud_respuesta_observacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ws_fe_ope_solicitud_respuesta_observacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ws_fe_ope_solicitud_respuesta_observacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud_respuesta_observacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_respuesta_observacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud_respuesta_observacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_respuesta_observacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ws_fe_ope_solicitud_respuesta_observacion->getId() ?>" archivo="ajax/modulos/ws_fe_ope_solicitud_respuesta_observacion/ws_fe_ope_solicitud_respuesta_observacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('WsFeOpeSolicitudRespuestaObservacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_RESPUESTA_OBSERVACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeOpeSolicitudRespuestaObservacion') ?>">
                                <a href="ws_fe_ope_solicitud_respuesta_observacion_alta.php?id=<?php echo $ws_fe_ope_solicitud_respuesta_observacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_RESPUESTA_MASINFO_WS_FE_OPE_SOLICITUD_RESPUESTA_OBSERVACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ws_fe_ope_solicitud_respuesta_observacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo WsFeOpeSolicitudRespuestaObservacion::getFiltrosArrGral() ?>&arr=<?php echo $ws_fe_ope_solicitud_respuesta_observacion->getFiltrosArrXCampo('WsFeOpeSolicitudRespuesta', 'ws_fe_ope_solicitud_respuesta_id') ?>" >
                                <?php Lang::_lang('Ver WsFeOpeSolicitudRespuestaObservacions de ') ?> <strong><?php echo($ws_fe_ope_solicitud_respuesta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ws_fe_ope_solicitud_respuesta_observacion_alta.php" >
                            <?php Lang::_lang('Agregar WsFeOpeSolicitudRespuestaObservacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

