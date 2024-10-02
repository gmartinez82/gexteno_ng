<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ws_fe_param_tipo_tributo_id = Gral::getVars(2, 'id');
$ws_fe_param_tipo_tributo = WsFeParamTipoTributo::getOxId($ws_fe_param_tipo_tributo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ws_fe_param_tipo_tributo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'WS_FE_PARAM_TIPO_TRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_param_tipo_tributo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ws_fe_param_tipo_tributo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'WS_FE_PARAM_TIPO_TRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_param_tipo_tributo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ws_fe_param_tipo_tributo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_TRIBUTO_MASINFO_VTA_TRIBUTO_WS_FE_PARAM_TIPO_TRIBUTO')){ ?>
            <li><a href="#tab_vta_tributo_ws_fe_param_tipo_tributo"><?php Lang::_lang('VtaTributoWsFeParamTipoTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_TRIBUTO_MASINFO_WS_FE_OPE_SOLICITUD_TRIBUTO')){ ?>
            <li><a href="#tab_ws_fe_ope_solicitud_tributo"><?php Lang::_lang('WsFeOpeSolicitudTributo') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_TRIBUTO_MASINFO_VTA_TRIBUTO_WS_FE_PARAM_TIPO_TRIBUTO')){ ?>
	<div id="tab_vta_tributo_ws_fe_param_tipo_tributo" class="bloque-relacion vta_tributo_ws_fe_param_tipo_tributo">
		
            <h4><?php Lang::_lang('VtaTributoWsFeParamTipoTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeParamTipoTributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_param_tipo_tributo->getVtaTributoWsFeParamTipoTributosParaBloqueMasInfo() as $vta_tributo_ws_fe_param_tipo_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getDescripcionVinculante('WsFeParamTipoTributo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tributo_ws_fe_param_tipo_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tributo_ws_fe_param_tipo_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_tributo_ws_fe_param_tipo_tributo->getId() ?>" archivo="ajax/modulos/vta_tributo_ws_fe_param_tipo_tributo/vta_tributo_ws_fe_param_tipo_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaTributoWsFeParamTipoTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_WS_FE_PARAM_TIPO_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTributoWsFeParamTipoTributo') ?>">
                                <a href="vta_tributo_ws_fe_param_tipo_tributo_alta.php?id=<?php echo $vta_tributo_ws_fe_param_tipo_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_TRIBUTO_MASINFO_VTA_TRIBUTO_WS_FE_PARAM_TIPO_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_tributo_ws_fe_param_tipo_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaTributoWsFeParamTipoTributo::getFiltrosArrGral() ?>&arr=<?php echo $vta_tributo_ws_fe_param_tipo_tributo->getFiltrosArrXCampo('WsFeParamTipoTributo', 'ws_fe_param_tipo_tributo_id') ?>" >
                                <?php Lang::_lang('Ver VtaTributoWsFeParamTipoTributos de ') ?> <strong><?php echo($ws_fe_param_tipo_tributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_tributo_ws_fe_param_tipo_tributo_alta.php" >
                            <?php Lang::_lang('Agregar VtaTributoWsFeParamTipoTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_TRIBUTO_MASINFO_WS_FE_OPE_SOLICITUD_TRIBUTO')){ ?>
	<div id="tab_ws_fe_ope_solicitud_tributo" class="bloque-relacion ws_fe_ope_solicitud_tributo">
		
            <h4><?php Lang::_lang('WsFeOpeSolicitudTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeParamTipoTributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_param_tipo_tributo->getWsFeOpeSolicitudTributosParaBloqueMasInfo() as $ws_fe_ope_solicitud_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ws_fe_ope_solicitud_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ws_fe_ope_solicitud_tributo->getId() ?>" archivo="ajax/modulos/ws_fe_ope_solicitud_tributo/ws_fe_ope_solicitud_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('WsFeOpeSolicitudTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeOpeSolicitudTributo') ?>">
                                <a href="ws_fe_ope_solicitud_tributo_alta.php?id=<?php echo $ws_fe_ope_solicitud_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_TRIBUTO_MASINFO_WS_FE_OPE_SOLICITUD_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ws_fe_ope_solicitud_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo WsFeOpeSolicitudTributo::getFiltrosArrGral() ?>&arr=<?php echo $ws_fe_ope_solicitud_tributo->getFiltrosArrXCampo('WsFeParamTipoTributo', 'ws_fe_param_tipo_tributo_id') ?>" >
                                <?php Lang::_lang('Ver WsFeOpeSolicitudTributos de ') ?> <strong><?php echo($ws_fe_param_tipo_tributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ws_fe_ope_solicitud_tributo_alta.php" >
                            <?php Lang::_lang('Agregar WsFeOpeSolicitudTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

