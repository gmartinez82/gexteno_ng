<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_novedad_id = Gral::getVars(2, 'id');
$gral_novedad = GralNovedad::getOxId($gral_novedad_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_novedad->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_NOVEDAD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_novedad->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_novedad->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_NOVEDAD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_novedad->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_novedad->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MASINFO_GRAL_NOVEDAD_MOTIVO')){ ?>
            <li><a href="#tab_gral_novedad_motivo"><?php Lang::_lang('GralNovedadMotivos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MASINFO_PER_MOV_PLANIFICACION')){ ?>
            <li><a href="#tab_per_mov_planificacion"><?php Lang::_lang('PerMovPlanificacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MASINFO_PLN_JORNADA')){ ?>
            <li><a href="#tab_pln_jornada"><?php Lang::_lang('PlnJornadas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MASINFO_PLN_TURNO_NOVEDAD')){ ?>
            <li><a href="#tab_pln_turno_novedad"><?php Lang::_lang('PlnTurnoNovedads') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MASINFO_GRAL_NOVEDAD_MOTIVO')){ ?>
	<div id="tab_gral_novedad_motivo" class="bloque-relacion gral_novedad_motivo">
		
            <h4><?php Lang::_lang('GralNovedadMotivo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralNovedad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_novedad->getGralNovedadMotivosParaBloqueMasInfo() as $gral_novedad_motivo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_novedad_motivo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_novedad_motivo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_novedad_motivo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_novedad_motivo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_novedad_motivo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_novedad_motivo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_novedad_motivo->getId() ?>" archivo="ajax/modulos/gral_novedad_motivo/gral_novedad_motivo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralNovedadMotivo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MOTIVO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralNovedadMotivo') ?>">
                                <a href="gral_novedad_motivo_alta.php?id=<?php echo $gral_novedad_motivo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MASINFO_GRAL_NOVEDAD_MOTIVO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_novedad_motivo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralNovedadMotivo::getFiltrosArrGral() ?>&arr=<?php echo $gral_novedad_motivo->getFiltrosArrXCampo('GralNovedad', 'gral_novedad_id') ?>" >
                                <?php Lang::_lang('Ver GralNovedadMotivos de ') ?> <strong><?php echo($gral_novedad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_novedad_motivo_alta.php" >
                            <?php Lang::_lang('Agregar GralNovedadMotivo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MASINFO_PER_MOV_PLANIFICACION')){ ?>
	<div id="tab_per_mov_planificacion" class="bloque-relacion per_mov_planificacion">
		
            <h4><?php Lang::_lang('PerMovPlanificacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralNovedad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_novedad->getPerMovPlanificacionsParaBloqueMasInfo() as $per_mov_planificacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($per_mov_planificacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($per_mov_planificacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($per_mov_planificacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_planificacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($per_mov_planificacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_planificacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $per_mov_planificacion->getId() ?>" archivo="ajax/modulos/per_mov_planificacion/per_mov_planificacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PerMovPlanificacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerMovPlanificacion') ?>">
                                <a href="per_mov_planificacion_alta.php?id=<?php echo $per_mov_planificacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MASINFO_PER_MOV_PLANIFICACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_mov_planificacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerMovPlanificacion::getFiltrosArrGral() ?>&arr=<?php echo $per_mov_planificacion->getFiltrosArrXCampo('GralNovedad', 'gral_novedad_id') ?>" >
                                <?php Lang::_lang('Ver PerMovPlanificacions de ') ?> <strong><?php echo($gral_novedad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="per_mov_planificacion_alta.php" >
                            <?php Lang::_lang('Agregar PerMovPlanificacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MASINFO_PLN_JORNADA')){ ?>
	<div id="tab_pln_jornada" class="bloque-relacion pln_jornada">
		
            <h4><?php Lang::_lang('PlnJornada') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralNovedad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_novedad->getPlnJornadasParaBloqueMasInfo() as $pln_jornada){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pln_jornada->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pln_jornada->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pln_jornada->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_jornada->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pln_jornada->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_jornada->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pln_jornada->getId() ?>" archivo="ajax/modulos/pln_jornada/pln_jornada_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PlnJornada') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PlnJornada') ?>">
                                <a href="pln_jornada_alta.php?id=<?php echo $pln_jornada->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MASINFO_PLN_JORNADA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pln_jornada){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PlnJornada::getFiltrosArrGral() ?>&arr=<?php echo $pln_jornada->getFiltrosArrXCampo('GralNovedad', 'gral_novedad_id') ?>" >
                                <?php Lang::_lang('Ver PlnJornadas de ') ?> <strong><?php echo($gral_novedad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pln_jornada_alta.php" >
                            <?php Lang::_lang('Agregar PlnJornada') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MASINFO_PLN_TURNO_NOVEDAD')){ ?>
	<div id="tab_pln_turno_novedad" class="bloque-relacion pln_turno_novedad">
		
            <h4><?php Lang::_lang('PlnTurnoNovedad') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralNovedad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_novedad->getPlnTurnoNovedadsParaBloqueMasInfo() as $pln_turno_novedad){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pln_turno_novedad->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pln_turno_novedad->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pln_turno_novedad->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_turno_novedad->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pln_turno_novedad->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_turno_novedad->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pln_turno_novedad->getId() ?>" archivo="ajax/modulos/pln_turno_novedad/pln_turno_novedad_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PlnTurnoNovedad') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PLN_TURNO_NOVEDAD_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PlnTurnoNovedad') ?>">
                                <a href="pln_turno_novedad_alta.php?id=<?php echo $pln_turno_novedad->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MASINFO_PLN_TURNO_NOVEDAD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pln_turno_novedad){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PlnTurnoNovedad::getFiltrosArrGral() ?>&arr=<?php echo $pln_turno_novedad->getFiltrosArrXCampo('GralNovedad', 'gral_novedad_id') ?>" >
                                <?php Lang::_lang('Ver PlnTurnoNovedads de ') ?> <strong><?php echo($gral_novedad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pln_turno_novedad_alta.php" >
                            <?php Lang::_lang('Agregar PlnTurnoNovedad') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

