<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ws_fe_param_punto_venta_id = Gral::getVars(2, 'id');
$ws_fe_param_punto_venta = WsFeParamPuntoVenta::getOxId($ws_fe_param_punto_venta_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ws_fe_param_punto_venta->getCuit())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ws_fe_param_punto_venta->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'WS_FE_PARAM_PUNTO_VENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_param_punto_venta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ws_fe_param_punto_venta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'WS_FE_PARAM_PUNTO_VENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_param_punto_venta->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ws_fe_param_punto_venta->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA_WS_FE_PARAM_PUNTO_VENTA')){ ?>
            <li><a href="#tab_vta_punto_venta_ws_fe_param_punto_venta"><?php Lang::_lang('VtaPuntoVentaWsFeParamPuntoVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_PUNTO_VENTA_MASINFO_WS_FE_OPE_SOLICITUD')){ ?>
            <li><a href="#tab_ws_fe_ope_solicitud"><?php Lang::_lang('WsFeOpeSolicitud') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA_WS_FE_PARAM_PUNTO_VENTA')){ ?>
	<div id="tab_vta_punto_venta_ws_fe_param_punto_venta" class="bloque-relacion vta_punto_venta_ws_fe_param_punto_venta">
		
            <h4><?php Lang::_lang('VtaPuntoVentaWsFeParamPuntoVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeParamPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_param_punto_venta->getVtaPuntoVentaWsFeParamPuntoVentasParaBloqueMasInfo() as $vta_punto_venta_ws_fe_param_punto_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_punto_venta_ws_fe_param_punto_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_punto_venta_ws_fe_param_punto_venta->getDescripcionVinculante('WsFeParamPuntoVenta')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA_WS_FE_PARAM_PUNTO_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_punto_venta_ws_fe_param_punto_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPuntoVentaWsFeParamPuntoVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_punto_venta_ws_fe_param_punto_venta->getFiltrosArrXCampo('WsFeParamPuntoVenta', 'ws_fe_param_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaPuntoVentaWsFeParamPuntoVentas de ') ?> <strong><?php echo($ws_fe_param_punto_venta->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_PUNTO_VENTA_MASINFO_WS_FE_OPE_SOLICITUD')){ ?>
	<div id="tab_ws_fe_ope_solicitud" class="bloque-relacion ws_fe_ope_solicitud">
		
            <h4><?php Lang::_lang('WsFeOpeSolicitud') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('WsFeParamPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ws_fe_param_punto_venta->getWsFeOpeSolicitudsParaBloqueMasInfo() as $ws_fe_ope_solicitud){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_PUNTO_VENTA_MASINFO_WS_FE_OPE_SOLICITUD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ws_fe_ope_solicitud){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo WsFeOpeSolicitud::getFiltrosArrGral() ?>&arr=<?php echo $ws_fe_ope_solicitud->getFiltrosArrXCampo('WsFeParamPuntoVenta', 'ws_fe_param_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver WsFeOpeSolicituds de ') ?> <strong><?php echo($ws_fe_param_punto_venta->getDescripcion()) ?></strong>
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

