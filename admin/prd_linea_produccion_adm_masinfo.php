<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prd_linea_produccion_id = Gral::getVars(2, 'id');
$prd_linea_produccion = PrdLineaProduccion::getOxId($prd_linea_produccion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prd_linea_produccion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRD_LINEA_PRODUCCION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_linea_produccion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prd_linea_produccion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRD_LINEA_PRODUCCION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_linea_produccion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prd_linea_produccion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_MASINFO_PRD_ORDEN_TRABAJO_CICLO')){ ?>
            <li><a href="#tab_prd_orden_trabajo_ciclo"><?php Lang::_lang('PrdOrdenTrabajoCiclos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_MASINFO_PRD_PARAM_OPERACION')){ ?>
            <li><a href="#tab_prd_param_operacion"><?php Lang::_lang('PrdParamOperacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_MASINFO_PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO')){ ?>
            <li><a href="#tab_prd_linea_produccion_prd_param_operacion_prd_equipo"><?php Lang::_lang('PrdLineaProduccionPrdParamOperacionPrdEquipos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_MASINFO_PRD_ORDEN_TRABAJO_CICLO')){ ?>
	<div id="tab_prd_orden_trabajo_ciclo" class="bloque-relacion prd_orden_trabajo_ciclo">
		
            <h4><?php Lang::_lang('PrdOrdenTrabajoCiclo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrdLineaProduccion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prd_linea_produccion->getPrdOrdenTrabajoCiclosParaBloqueMasInfo() as $prd_orden_trabajo_ciclo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_orden_trabajo_ciclo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_orden_trabajo_ciclo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_ciclo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_ciclo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_ciclo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_ciclo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_orden_trabajo_ciclo->getId() ?>" archivo="ajax/modulos/prd_orden_trabajo_ciclo/prd_orden_trabajo_ciclo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdOrdenTrabajoCiclo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_CICLO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdOrdenTrabajoCiclo') ?>">
                                <a href="prd_orden_trabajo_ciclo_alta.php?id=<?php echo $prd_orden_trabajo_ciclo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_MASINFO_PRD_ORDEN_TRABAJO_CICLO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_orden_trabajo_ciclo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdOrdenTrabajoCiclo::getFiltrosArrGral() ?>&arr=<?php echo $prd_orden_trabajo_ciclo->getFiltrosArrXCampo('PrdLineaProduccion', 'prd_linea_produccion_id') ?>" >
                                <?php Lang::_lang('Ver PrdOrdenTrabajoCiclos de ') ?> <strong><?php echo($prd_linea_produccion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_orden_trabajo_ciclo_alta.php" >
                            <?php Lang::_lang('Agregar PrdOrdenTrabajoCiclo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_MASINFO_PRD_PARAM_OPERACION')){ ?>
	<div id="tab_prd_param_operacion" class="bloque-relacion prd_param_operacion">
		
            <h4><?php Lang::_lang('PrdParamOperacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrdLineaProduccion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prd_linea_produccion->getPrdParamOperacionsParaBloqueMasInfo() as $prd_param_operacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_param_operacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_param_operacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_param_operacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_param_operacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_param_operacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_param_operacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_param_operacion->getId() ?>" archivo="ajax/modulos/prd_param_operacion/prd_param_operacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdParamOperacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdParamOperacion') ?>">
                                <a href="prd_param_operacion_alta.php?id=<?php echo $prd_param_operacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_MASINFO_PRD_PARAM_OPERACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_param_operacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdParamOperacion::getFiltrosArrGral() ?>&arr=<?php echo $prd_param_operacion->getFiltrosArrXCampo('PrdLineaProduccion', 'prd_linea_produccion_id') ?>" >
                                <?php Lang::_lang('Ver PrdParamOperacions de ') ?> <strong><?php echo($prd_linea_produccion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_param_operacion_alta.php" >
                            <?php Lang::_lang('Agregar PrdParamOperacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_MASINFO_PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO')){ ?>
	<div id="tab_prd_linea_produccion_prd_param_operacion_prd_equipo" class="bloque-relacion prd_linea_produccion_prd_param_operacion_prd_equipo">
		
            <h4><?php Lang::_lang('PrdLineaProduccionPrdParamOperacionPrdEquipo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrdLineaProduccion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prd_linea_produccion->getPrdLineaProduccionPrdParamOperacionPrdEquiposParaBloqueMasInfo() as $prd_linea_produccion_prd_param_operacion_prd_equipo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_MASINFO_PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_linea_produccion_prd_param_operacion_prd_equipo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdLineaProduccionPrdParamOperacionPrdEquipo::getFiltrosArrGral() ?>&arr=<?php echo $prd_linea_produccion_prd_param_operacion_prd_equipo->getFiltrosArrXCampo('PrdLineaProduccion', 'prd_linea_produccion_id') ?>" >
                                <?php Lang::_lang('Ver PrdLineaProduccionPrdParamOperacionPrdEquipos de ') ?> <strong><?php echo($prd_linea_produccion->getDescripcion()) ?></strong>
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

