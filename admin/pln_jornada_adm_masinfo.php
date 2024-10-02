<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pln_jornada_id = Gral::getVars(2, 'id');
$pln_jornada = PlnJornada::getOxId($pln_jornada_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GralNovedad') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pln_jornada->getGralNovedad()->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pln_jornada->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PLN_JORNADA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_jornada->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pln_jornada->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PLN_JORNADA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_jornada->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pln_jornada->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_MASINFO_PER_MOV_PLANIFICACION')){ ?>
            <li><a href="#tab_per_mov_planificacion"><?php Lang::_lang('PerMovPlanificacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_MASINFO_PLN_JORNADA_TRAMO')){ ?>
            <li><a href="#tab_pln_jornada_tramo"><?php Lang::_lang('PlnJornadaTramos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_MASINFO_PLN_TURNO_NOVEDAD')){ ?>
            <li><a href="#tab_pln_turno_novedad"><?php Lang::_lang('PlnTurnoNovedads') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_MASINFO_PLN_JORNADA_US_USUARIO')){ ?>
            <li><a href="#tab_pln_jornada_us_usuario"><?php Lang::_lang('PlnJornadaUsUsuarios') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_MASINFO_PER_MOV_PLANIFICACION')){ ?>
	<div id="tab_per_mov_planificacion" class="bloque-relacion per_mov_planificacion">
		
            <h4><?php Lang::_lang('PerMovPlanificacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PlnJornada') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pln_jornada->getPerMovPlanificacionsParaBloqueMasInfo() as $per_mov_planificacion){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_MASINFO_PER_MOV_PLANIFICACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_mov_planificacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerMovPlanificacion::getFiltrosArrGral() ?>&arr=<?php echo $per_mov_planificacion->getFiltrosArrXCampo('PlnJornada', 'pln_jornada_id') ?>" >
                                <?php Lang::_lang('Ver PerMovPlanificacions de ') ?> <strong><?php echo($pln_jornada->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_MASINFO_PLN_JORNADA_TRAMO')){ ?>
	<div id="tab_pln_jornada_tramo" class="bloque-relacion pln_jornada_tramo">
		
            <h4><?php Lang::_lang('PlnJornadaTramo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PlnJornada') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pln_jornada->getPlnJornadaTramosParaBloqueMasInfo() as $pln_jornada_tramo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pln_jornada_tramo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pln_jornada_tramo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pln_jornada_tramo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_jornada_tramo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pln_jornada_tramo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_jornada_tramo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pln_jornada_tramo->getId() ?>" archivo="ajax/modulos/pln_jornada_tramo/pln_jornada_tramo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PlnJornadaTramo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_TRAMO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PlnJornadaTramo') ?>">
                                <a href="pln_jornada_tramo_alta.php?id=<?php echo $pln_jornada_tramo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_MASINFO_PLN_JORNADA_TRAMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pln_jornada_tramo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PlnJornadaTramo::getFiltrosArrGral() ?>&arr=<?php echo $pln_jornada_tramo->getFiltrosArrXCampo('PlnJornada', 'pln_jornada_id') ?>" >
                                <?php Lang::_lang('Ver PlnJornadaTramos de ') ?> <strong><?php echo($pln_jornada->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pln_jornada_tramo_alta.php" >
                            <?php Lang::_lang('Agregar PlnJornadaTramo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_MASINFO_PLN_TURNO_NOVEDAD')){ ?>
	<div id="tab_pln_turno_novedad" class="bloque-relacion pln_turno_novedad">
		
            <h4><?php Lang::_lang('PlnTurnoNovedad') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PlnJornada') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pln_jornada->getPlnTurnoNovedadsParaBloqueMasInfo() as $pln_turno_novedad){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_MASINFO_PLN_TURNO_NOVEDAD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pln_turno_novedad){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PlnTurnoNovedad::getFiltrosArrGral() ?>&arr=<?php echo $pln_turno_novedad->getFiltrosArrXCampo('PlnJornada', 'pln_jornada_id') ?>" >
                                <?php Lang::_lang('Ver PlnTurnoNovedads de ') ?> <strong><?php echo($pln_jornada->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_MASINFO_PLN_JORNADA_US_USUARIO')){ ?>
	<div id="tab_pln_jornada_us_usuario" class="bloque-relacion pln_jornada_us_usuario">
		
            <h4><?php Lang::_lang('PlnJornadaUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PlnJornada') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pln_jornada->getPlnJornadaUsUsuariosParaBloqueMasInfo() as $pln_jornada_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pln_jornada_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pln_jornada_us_usuario->getDescripcionVinculante('PlnJornada')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pln_jornada_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_jornada_us_usuario->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pln_jornada_us_usuario->getId() ?>" archivo="ajax/modulos/pln_jornada_us_usuario/pln_jornada_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PlnJornadaUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PlnJornadaUsUsuario') ?>">
                                <a href="pln_jornada_us_usuario_alta.php?id=<?php echo $pln_jornada_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_MASINFO_PLN_JORNADA_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pln_jornada_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PlnJornadaUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $pln_jornada_us_usuario->getFiltrosArrXCampo('PlnJornada', 'pln_jornada_id') ?>" >
                                <?php Lang::_lang('Ver PlnJornadaUsUsuarios de ') ?> <strong><?php echo($pln_jornada->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pln_jornada_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar PlnJornadaUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

