<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prd_param_operacion_id = Gral::getVars(2, 'id');
$prd_param_operacion = PrdParamOperacion::getOxId($prd_param_operacion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prd_param_operacion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRD_PARAM_OPERACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_param_operacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prd_param_operacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRD_PARAM_OPERACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_param_operacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prd_param_operacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_MASINFO_PRD_ORDEN_TRABAJO_OPERACION')){ ?>
            <li><a href="#tab_prd_orden_trabajo_operacion"><?php Lang::_lang('PrdOrdenTrabajoOperacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_MASINFO_PRD_PARAM_OPERACION_PRD_EQUIPO')){ ?>
            <li><a href="#tab_prd_param_operacion_prd_equipo"><?php Lang::_lang('PrdParamOperacionPrdEquipo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_MASINFO_PRD_PARAM_OPERACION_OPE_OPERARIO')){ ?>
            <li><a href="#tab_prd_param_operacion_ope_operario"><?php Lang::_lang('PrdParamOperacionOpeOperario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_MASINFO_PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO')){ ?>
            <li><a href="#tab_prd_linea_produccion_prd_param_operacion_prd_equipo"><?php Lang::_lang('PrdLineaProduccionPrdParamOperacionPrdEquipos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_MASINFO_PRD_ORDEN_TRABAJO_OPERACION')){ ?>
	<div id="tab_prd_orden_trabajo_operacion" class="bloque-relacion prd_orden_trabajo_operacion">
		
            <h4><?php Lang::_lang('PrdOrdenTrabajoOperacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrdParamOperacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prd_param_operacion->getPrdOrdenTrabajoOperacionsParaBloqueMasInfo() as $prd_orden_trabajo_operacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_orden_trabajo_operacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_orden_trabajo_operacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_operacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_operacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_operacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_operacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_orden_trabajo_operacion->getId() ?>" archivo="ajax/modulos/prd_orden_trabajo_operacion/prd_orden_trabajo_operacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacion') ?>">
                                <a href="prd_orden_trabajo_operacion_alta.php?id=<?php echo $prd_orden_trabajo_operacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_MASINFO_PRD_ORDEN_TRABAJO_OPERACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_orden_trabajo_operacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdOrdenTrabajoOperacion::getFiltrosArrGral() ?>&arr=<?php echo $prd_orden_trabajo_operacion->getFiltrosArrXCampo('PrdParamOperacion', 'prd_param_operacion_id') ?>" >
                                <?php Lang::_lang('Ver PrdOrdenTrabajoOperacions de ') ?> <strong><?php echo($prd_param_operacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_orden_trabajo_operacion_alta.php" >
                            <?php Lang::_lang('Agregar PrdOrdenTrabajoOperacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_MASINFO_PRD_PARAM_OPERACION_PRD_EQUIPO')){ ?>
	<div id="tab_prd_param_operacion_prd_equipo" class="bloque-relacion prd_param_operacion_prd_equipo">
		
            <h4><?php Lang::_lang('PrdParamOperacionPrdEquipo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrdParamOperacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prd_param_operacion->getPrdParamOperacionPrdEquiposParaBloqueMasInfo() as $prd_param_operacion_prd_equipo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_param_operacion_prd_equipo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_param_operacion_prd_equipo->getDescripcionVinculante('PrdParamOperacion')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_param_operacion_prd_equipo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_param_operacion_prd_equipo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_param_operacion_prd_equipo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_param_operacion_prd_equipo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_param_operacion_prd_equipo->getId() ?>" archivo="ajax/modulos/prd_param_operacion_prd_equipo/prd_param_operacion_prd_equipo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdParamOperacionPrdEquipo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_PRD_EQUIPO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdParamOperacionPrdEquipo') ?>">
                                <a href="prd_param_operacion_prd_equipo_alta.php?id=<?php echo $prd_param_operacion_prd_equipo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_MASINFO_PRD_PARAM_OPERACION_PRD_EQUIPO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_param_operacion_prd_equipo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdParamOperacionPrdEquipo::getFiltrosArrGral() ?>&arr=<?php echo $prd_param_operacion_prd_equipo->getFiltrosArrXCampo('PrdParamOperacion', 'prd_param_operacion_id') ?>" >
                                <?php Lang::_lang('Ver PrdParamOperacionPrdEquipos de ') ?> <strong><?php echo($prd_param_operacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_param_operacion_prd_equipo_alta.php" >
                            <?php Lang::_lang('Agregar PrdParamOperacionPrdEquipo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_MASINFO_PRD_PARAM_OPERACION_OPE_OPERARIO')){ ?>
	<div id="tab_prd_param_operacion_ope_operario" class="bloque-relacion prd_param_operacion_ope_operario">
		
            <h4><?php Lang::_lang('PrdParamOperacionOpeOperario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrdParamOperacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prd_param_operacion->getPrdParamOperacionOpeOperariosParaBloqueMasInfo() as $prd_param_operacion_ope_operario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_param_operacion_ope_operario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_param_operacion_ope_operario->getDescripcionVinculante('PrdParamOperacion')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_param_operacion_ope_operario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_param_operacion_ope_operario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_param_operacion_ope_operario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_param_operacion_ope_operario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_param_operacion_ope_operario->getId() ?>" archivo="ajax/modulos/prd_param_operacion_ope_operario/prd_param_operacion_ope_operario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdParamOperacionOpeOperario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_OPE_OPERARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdParamOperacionOpeOperario') ?>">
                                <a href="prd_param_operacion_ope_operario_alta.php?id=<?php echo $prd_param_operacion_ope_operario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_MASINFO_PRD_PARAM_OPERACION_OPE_OPERARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_param_operacion_ope_operario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdParamOperacionOpeOperario::getFiltrosArrGral() ?>&arr=<?php echo $prd_param_operacion_ope_operario->getFiltrosArrXCampo('PrdParamOperacion', 'prd_param_operacion_id') ?>" >
                                <?php Lang::_lang('Ver PrdParamOperacionOpeOperarios de ') ?> <strong><?php echo($prd_param_operacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_param_operacion_ope_operario_alta.php" >
                            <?php Lang::_lang('Agregar PrdParamOperacionOpeOperario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_MASINFO_PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO')){ ?>
	<div id="tab_prd_linea_produccion_prd_param_operacion_prd_equipo" class="bloque-relacion prd_linea_produccion_prd_param_operacion_prd_equipo">
		
            <h4><?php Lang::_lang('PrdLineaProduccionPrdParamOperacionPrdEquipo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrdParamOperacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prd_param_operacion->getPrdLineaProduccionPrdParamOperacionPrdEquiposParaBloqueMasInfo() as $prd_linea_produccion_prd_param_operacion_prd_equipo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_linea_produccion_prd_param_operacion_prd_equipo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_linea_produccion_prd_param_operacion_prd_equipo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_linea_produccion_prd_param_operacion_prd_equipo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_linea_produccion_prd_param_operacion_prd_equipo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_linea_produccion_prd_param_operacion_prd_equipo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_linea_produccion_prd_param_operacion_prd_equipo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_linea_produccion_prd_param_operacion_prd_equipo->getId() ?>" archivo="ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/prd_linea_produccion_prd_param_operacion_prd_equipo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdLineaProduccionPrdParamOperacionPrdEquipo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdLineaProduccionPrdParamOperacionPrdEquipo') ?>">
                                <a href="prd_linea_produccion_prd_param_operacion_prd_equipo_alta.php?id=<?php echo $prd_linea_produccion_prd_param_operacion_prd_equipo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_MASINFO_PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_linea_produccion_prd_param_operacion_prd_equipo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdLineaProduccionPrdParamOperacionPrdEquipo::getFiltrosArrGral() ?>&arr=<?php echo $prd_linea_produccion_prd_param_operacion_prd_equipo->getFiltrosArrXCampo('PrdParamOperacion', 'prd_param_operacion_id') ?>" >
                                <?php Lang::_lang('Ver PrdLineaProduccionPrdParamOperacionPrdEquipos de ') ?> <strong><?php echo($prd_param_operacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_linea_produccion_prd_param_operacion_prd_equipo_alta.php" >
                            <?php Lang::_lang('Agregar PrdLineaProduccionPrdParamOperacionPrdEquipo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

