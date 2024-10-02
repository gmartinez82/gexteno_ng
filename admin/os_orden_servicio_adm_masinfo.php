<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$os_orden_servicio_id = Gral::getVars(2, 'id');
$os_orden_servicio = OsOrdenServicio::getOxId($os_orden_servicio_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('OsTipo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($os_orden_servicio->getOsTipo()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('PerPersona') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($os_orden_servicio->getPerPersona()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('OsPrioridad') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($os_orden_servicio->getOsPrioridad()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('OsTipoEstado') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($os_orden_servicio->getOsTipoEstado()->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Notificacion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($os_orden_servicio->getNotificacion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($os_orden_servicio->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'OS_ORDEN_SERVICIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_orden_servicio->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($os_orden_servicio->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'OS_ORDEN_SERVICIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_orden_servicio->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($os_orden_servicio->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_MASINFO_PER_PERSONA_ARCHIVO')){ ?>
            <li><a href="#tab_per_persona_archivo"><?php Lang::_lang('PerPersonaArchivos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_MASINFO_OS_ORDEN_SERVICIO_IMAGEN')){ ?>
            <li><a href="#tab_os_orden_servicio_imagen"><?php Lang::_lang('OsOrdenServicioImagens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_MASINFO_OS_ORDEN_SERVICIO_ARCHIVO')){ ?>
            <li><a href="#tab_os_orden_servicio_archivo"><?php Lang::_lang('OsOrdenServicioArchivo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_MASINFO_OS_ESTADO')){ ?>
            <li><a href="#tab_os_estado"><?php Lang::_lang('OsEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_MASINFO_OS_RESOLUCION')){ ?>
            <li><a href="#tab_os_resolucion"><?php Lang::_lang('OsResolucion') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_MASINFO_PER_PERSONA_ARCHIVO')){ ?>
	<div id="tab_per_persona_archivo" class="bloque-relacion per_persona_archivo">
		
            <h4><?php Lang::_lang('PerPersonaArchivo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('OsOrdenServicio') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($os_orden_servicio->getPerPersonaArchivosParaBloqueMasInfo() as $per_persona_archivo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($per_persona_archivo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($per_persona_archivo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($per_persona_archivo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_archivo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($per_persona_archivo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_archivo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $per_persona_archivo->getId() ?>" archivo="ajax/modulos/per_persona_archivo/per_persona_archivo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PerPersonaArchivo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ARCHIVO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerPersonaArchivo') ?>">
                                <a href="per_persona_archivo_alta.php?id=<?php echo $per_persona_archivo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_MASINFO_PER_PERSONA_ARCHIVO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_persona_archivo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerPersonaArchivo::getFiltrosArrGral() ?>&arr=<?php echo $per_persona_archivo->getFiltrosArrXCampo('OsOrdenServicio', 'os_orden_servicio_id') ?>" >
                                <?php Lang::_lang('Ver PerPersonaArchivos de ') ?> <strong><?php echo($os_orden_servicio->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="per_persona_archivo_alta.php" >
                            <?php Lang::_lang('Agregar PerPersonaArchivo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_MASINFO_OS_ORDEN_SERVICIO_IMAGEN')){ ?>
	<div id="tab_os_orden_servicio_imagen" class="bloque-relacion os_orden_servicio_imagen">
		
            <h4><?php Lang::_lang('OsOrdenServicioImagen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('OsOrdenServicio') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($os_orden_servicio->getOsOrdenServicioImagensParaBloqueMasInfo() as $os_orden_servicio_imagen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($os_orden_servicio_imagen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <img src="<?php Gral::_echo($os_orden_servicio_imagen->getPathImagen(true)) ?>" width="50" alt="<?php Gral::_echo($os_orden_servicio_imagen->getDescripcion()) ?>">					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($os_orden_servicio_imagen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_orden_servicio_imagen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($os_orden_servicio_imagen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_orden_servicio_imagen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $os_orden_servicio_imagen->getId() ?>" archivo="ajax/modulos/os_orden_servicio_imagen/os_orden_servicio_imagen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('OsOrdenServicioImagen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_IMAGEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('OsOrdenServicioImagen') ?>">
                                <a href="os_orden_servicio_imagen_alta.php?id=<?php echo $os_orden_servicio_imagen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_MASINFO_OS_ORDEN_SERVICIO_IMAGEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($os_orden_servicio_imagen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo OsOrdenServicioImagen::getFiltrosArrGral() ?>&arr=<?php echo $os_orden_servicio_imagen->getFiltrosArrXCampo('OsOrdenServicio', 'os_orden_servicio_id') ?>" >
                                <?php Lang::_lang('Ver OsOrdenServicioImagens de ') ?> <strong><?php echo($os_orden_servicio->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="os_orden_servicio_imagen_alta.php" >
                            <?php Lang::_lang('Agregar OsOrdenServicioImagen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_MASINFO_OS_ORDEN_SERVICIO_ARCHIVO')){ ?>
	<div id="tab_os_orden_servicio_archivo" class="bloque-relacion os_orden_servicio_archivo">
		
            <h4><?php Lang::_lang('OsOrdenServicioArchivo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('OsOrdenServicio') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($os_orden_servicio->getOsOrdenServicioArchivosParaBloqueMasInfo() as $os_orden_servicio_archivo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($os_orden_servicio_archivo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($os_orden_servicio_archivo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($os_orden_servicio_archivo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_orden_servicio_archivo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($os_orden_servicio_archivo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_orden_servicio_archivo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $os_orden_servicio_archivo->getId() ?>" archivo="ajax/modulos/os_orden_servicio_archivo/os_orden_servicio_archivo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('OsOrdenServicioArchivo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ARCHIVO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('OsOrdenServicioArchivo') ?>">
                                <a href="os_orden_servicio_archivo_alta.php?id=<?php echo $os_orden_servicio_archivo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_MASINFO_OS_ORDEN_SERVICIO_ARCHIVO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($os_orden_servicio_archivo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo OsOrdenServicioArchivo::getFiltrosArrGral() ?>&arr=<?php echo $os_orden_servicio_archivo->getFiltrosArrXCampo('OsOrdenServicio', 'os_orden_servicio_id') ?>" >
                                <?php Lang::_lang('Ver OsOrdenServicioArchivos de ') ?> <strong><?php echo($os_orden_servicio->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="os_orden_servicio_archivo_alta.php" >
                            <?php Lang::_lang('Agregar OsOrdenServicioArchivo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_MASINFO_OS_ESTADO')){ ?>
	<div id="tab_os_estado" class="bloque-relacion os_estado">
		
            <h4><?php Lang::_lang('OsEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('OsOrdenServicio') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($os_orden_servicio->getOsEstadosParaBloqueMasInfo() as $os_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($os_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($os_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($os_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($os_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $os_estado->getId() ?>" archivo="ajax/modulos/os_estado/os_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('OsEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('OS_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('OsEstado') ?>">
                                <a href="os_estado_alta.php?id=<?php echo $os_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_MASINFO_OS_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($os_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo OsEstado::getFiltrosArrGral() ?>&arr=<?php echo $os_estado->getFiltrosArrXCampo('OsOrdenServicio', 'os_orden_servicio_id') ?>" >
                                <?php Lang::_lang('Ver OsEstados de ') ?> <strong><?php echo($os_orden_servicio->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="os_estado_alta.php" >
                            <?php Lang::_lang('Agregar OsEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_MASINFO_OS_RESOLUCION')){ ?>
	<div id="tab_os_resolucion" class="bloque-relacion os_resolucion">
		
            <h4><?php Lang::_lang('OsResolucion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('OsOrdenServicio') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($os_orden_servicio->getOsResolucionsParaBloqueMasInfo() as $os_resolucion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($os_resolucion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($os_resolucion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($os_resolucion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_resolucion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($os_resolucion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_resolucion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $os_resolucion->getId() ?>" archivo="ajax/modulos/os_resolucion/os_resolucion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('OsResolucion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('OS_RESOLUCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('OsResolucion') ?>">
                                <a href="os_resolucion_alta.php?id=<?php echo $os_resolucion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_MASINFO_OS_RESOLUCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($os_resolucion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo OsResolucion::getFiltrosArrGral() ?>&arr=<?php echo $os_resolucion->getFiltrosArrXCampo('OsOrdenServicio', 'os_orden_servicio_id') ?>" >
                                <?php Lang::_lang('Ver OsResolucions de ') ?> <strong><?php echo($os_orden_servicio->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="os_resolucion_alta.php" >
                            <?php Lang::_lang('Agregar OsResolucion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

