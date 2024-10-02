<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prd_orden_trabajo_operacion_id = Gral::getVars(2, 'id');
$prd_orden_trabajo_operacion = PrdOrdenTrabajoOperacion::getOxId($prd_orden_trabajo_operacion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prd_orden_trabajo_operacion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRD_ORDEN_TRABAJO_OPERACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_operacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prd_orden_trabajo_operacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRD_ORDEN_TRABAJO_OPERACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_operacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prd_orden_trabajo_operacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_MASINFO_PRD_ORDEN_TRABAJO_OPERACION_ESTADO')){ ?>
            <li><a href="#tab_prd_orden_trabajo_operacion_estado"><?php Lang::_lang('PrdOrdenTrabajoOperacionEstados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_MASINFO_PRD_ORDEN_TRABAJO_OPERACION_PRD_EQUIPO')){ ?>
            <li><a href="#tab_prd_orden_trabajo_operacion_prd_equipo"><?php Lang::_lang('PrdOrdenTrabajoOperacionPrdEquipos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_MASINFO_PRD_ORDEN_TRABAJO_OPERACION_OPE_OPERARIO')){ ?>
            <li><a href="#tab_prd_orden_trabajo_operacion_ope_operario"><?php Lang::_lang('PrdOrdenTrabajoOperacionOpeOperarios') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_MASINFO_PRD_ORDEN_TRABAJO_OPERACION_ESTADO')){ ?>
	<div id="tab_prd_orden_trabajo_operacion_estado" class="bloque-relacion prd_orden_trabajo_operacion_estado">
		
            <h4><?php Lang::_lang('PrdOrdenTrabajoOperacionEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionEstadosParaBloqueMasInfo() as $prd_orden_trabajo_operacion_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_orden_trabajo_operacion_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_orden_trabajo_operacion_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_operacion_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_operacion_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_operacion_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_operacion_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_orden_trabajo_operacion_estado->getId() ?>" archivo="ajax/modulos/prd_orden_trabajo_operacion_estado/prd_orden_trabajo_operacion_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacionEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacionEstado') ?>">
                                <a href="prd_orden_trabajo_operacion_estado_alta.php?id=<?php echo $prd_orden_trabajo_operacion_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_MASINFO_PRD_ORDEN_TRABAJO_OPERACION_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_orden_trabajo_operacion_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdOrdenTrabajoOperacionEstado::getFiltrosArrGral() ?>&arr=<?php echo $prd_orden_trabajo_operacion_estado->getFiltrosArrXCampo('PrdOrdenTrabajoOperacion', 'prd_orden_trabajo_operacion_id') ?>" >
                                <?php Lang::_lang('Ver PrdOrdenTrabajoOperacionEstados de ') ?> <strong><?php echo($prd_orden_trabajo_operacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_orden_trabajo_operacion_estado_alta.php" >
                            <?php Lang::_lang('Agregar PrdOrdenTrabajoOperacionEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_MASINFO_PRD_ORDEN_TRABAJO_OPERACION_PRD_EQUIPO')){ ?>
	<div id="tab_prd_orden_trabajo_operacion_prd_equipo" class="bloque-relacion prd_orden_trabajo_operacion_prd_equipo">
		
            <h4><?php Lang::_lang('PrdOrdenTrabajoOperacionPrdEquipo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionPrdEquiposParaBloqueMasInfo() as $prd_orden_trabajo_operacion_prd_equipo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_orden_trabajo_operacion_prd_equipo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_orden_trabajo_operacion_prd_equipo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_operacion_prd_equipo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_operacion_prd_equipo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_operacion_prd_equipo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_operacion_prd_equipo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_orden_trabajo_operacion_prd_equipo->getId() ?>" archivo="ajax/modulos/prd_orden_trabajo_operacion_prd_equipo/prd_orden_trabajo_operacion_prd_equipo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacionPrdEquipo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_PRD_EQUIPO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacionPrdEquipo') ?>">
                                <a href="prd_orden_trabajo_operacion_prd_equipo_alta.php?id=<?php echo $prd_orden_trabajo_operacion_prd_equipo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_MASINFO_PRD_ORDEN_TRABAJO_OPERACION_PRD_EQUIPO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_orden_trabajo_operacion_prd_equipo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdOrdenTrabajoOperacionPrdEquipo::getFiltrosArrGral() ?>&arr=<?php echo $prd_orden_trabajo_operacion_prd_equipo->getFiltrosArrXCampo('PrdOrdenTrabajoOperacion', 'prd_orden_trabajo_operacion_id') ?>" >
                                <?php Lang::_lang('Ver PrdOrdenTrabajoOperacionPrdEquipos de ') ?> <strong><?php echo($prd_orden_trabajo_operacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_orden_trabajo_operacion_prd_equipo_alta.php" >
                            <?php Lang::_lang('Agregar PrdOrdenTrabajoOperacionPrdEquipo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_MASINFO_PRD_ORDEN_TRABAJO_OPERACION_OPE_OPERARIO')){ ?>
	<div id="tab_prd_orden_trabajo_operacion_ope_operario" class="bloque-relacion prd_orden_trabajo_operacion_ope_operario">
		
            <h4><?php Lang::_lang('PrdOrdenTrabajoOperacionOpeOperario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionOpeOperariosParaBloqueMasInfo() as $prd_orden_trabajo_operacion_ope_operario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_orden_trabajo_operacion_ope_operario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_orden_trabajo_operacion_ope_operario->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_operacion_ope_operario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_operacion_ope_operario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_operacion_ope_operario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_operacion_ope_operario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_orden_trabajo_operacion_ope_operario->getId() ?>" archivo="ajax/modulos/prd_orden_trabajo_operacion_ope_operario/prd_orden_trabajo_operacion_ope_operario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacionOpeOperario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_OPE_OPERARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacionOpeOperario') ?>">
                                <a href="prd_orden_trabajo_operacion_ope_operario_alta.php?id=<?php echo $prd_orden_trabajo_operacion_ope_operario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_MASINFO_PRD_ORDEN_TRABAJO_OPERACION_OPE_OPERARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_orden_trabajo_operacion_ope_operario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdOrdenTrabajoOperacionOpeOperario::getFiltrosArrGral() ?>&arr=<?php echo $prd_orden_trabajo_operacion_ope_operario->getFiltrosArrXCampo('PrdOrdenTrabajoOperacion', 'prd_orden_trabajo_operacion_id') ?>" >
                                <?php Lang::_lang('Ver PrdOrdenTrabajoOperacionOpeOperarios de ') ?> <strong><?php echo($prd_orden_trabajo_operacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_orden_trabajo_operacion_ope_operario_alta.php" >
                            <?php Lang::_lang('Agregar PrdOrdenTrabajoOperacionOpeOperario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

