<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$nov_novedad_id = Gral::getVars(2, 'id');
$nov_novedad = NovNovedad::getOxId($nov_novedad_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($nov_novedad->getCodigo())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaToWeb($nov_novedad->getFecha()))) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Descripcion Extendida') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($nov_novedad->getDescripcionExtendida())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($nov_novedad->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOV_NOVEDAD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($nov_novedad->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOV_NOVEDAD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($nov_novedad->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_IMAGEN')){ ?>
            <li><a href="#tab_nov_novedad_imagen"><?php Lang::_lang('NovNovedadImagens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_ARCHIVO')){ ?>
            <li><a href="#tab_nov_novedad_archivo"><?php Lang::_lang('NovNovedadArchivos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_US_GRUPO')){ ?>
            <li><a href="#tab_nov_novedad_us_grupo"><?php Lang::_lang('NovNovedadUsGrupos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_DESTINATARIO')){ ?>
            <li><a href="#tab_nov_novedad_destinatario"><?php Lang::_lang('NovNovedadDestinatarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_OBSERVADO')){ ?>
            <li><a href="#tab_nov_novedad_observado"><?php Lang::_lang('NovNovedadObservados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_LEIDO')){ ?>
            <li><a href="#tab_nov_novedad_leido"><?php Lang::_lang('NovNovedadLeidos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_IMAGEN')){ ?>
	<div id="tab_nov_novedad_imagen" class="bloque-relacion nov_novedad_imagen">
		
            <h4><?php Lang::_lang('NovNovedadImagen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('NovNovedad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($nov_novedad->getNovNovedadImagensParaBloqueMasInfo() as $nov_novedad_imagen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($nov_novedad_imagen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <img src="<?php Gral::_echo($nov_novedad_imagen->getPathImagen(true)) ?>" width="50" alt="<?php Gral::_echo($nov_novedad_imagen->getDescripcion()) ?>">					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($nov_novedad_imagen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_imagen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($nov_novedad_imagen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_imagen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $nov_novedad_imagen->getId() ?>" archivo="ajax/modulos/nov_novedad_imagen/nov_novedad_imagen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('NovNovedadImagen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_IMAGEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NovNovedadImagen') ?>">
                                <a href="nov_novedad_imagen_alta.php?id=<?php echo $nov_novedad_imagen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_IMAGEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($nov_novedad_imagen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NovNovedadImagen::getFiltrosArrGral() ?>&arr=<?php echo $nov_novedad_imagen->getFiltrosArrXCampo('NovNovedad', 'nov_novedad_id') ?>" >
                                <?php Lang::_lang('Ver NovNovedadImagens de ') ?> <strong><?php echo($nov_novedad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="nov_novedad_imagen_alta.php" >
                            <?php Lang::_lang('Agregar NovNovedadImagen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_ARCHIVO')){ ?>
	<div id="tab_nov_novedad_archivo" class="bloque-relacion nov_novedad_archivo">
		
            <h4><?php Lang::_lang('NovNovedadArchivo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('NovNovedad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($nov_novedad->getNovNovedadArchivosParaBloqueMasInfo() as $nov_novedad_archivo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($nov_novedad_archivo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($nov_novedad_archivo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($nov_novedad_archivo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_archivo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($nov_novedad_archivo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_archivo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $nov_novedad_archivo->getId() ?>" archivo="ajax/modulos/nov_novedad_archivo/nov_novedad_archivo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('NovNovedadArchivo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_ARCHIVO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NovNovedadArchivo') ?>">
                                <a href="nov_novedad_archivo_alta.php?id=<?php echo $nov_novedad_archivo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_ARCHIVO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($nov_novedad_archivo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NovNovedadArchivo::getFiltrosArrGral() ?>&arr=<?php echo $nov_novedad_archivo->getFiltrosArrXCampo('NovNovedad', 'nov_novedad_id') ?>" >
                                <?php Lang::_lang('Ver NovNovedadArchivos de ') ?> <strong><?php echo($nov_novedad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="nov_novedad_archivo_alta.php" >
                            <?php Lang::_lang('Agregar NovNovedadArchivo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_US_GRUPO')){ ?>
	<div id="tab_nov_novedad_us_grupo" class="bloque-relacion nov_novedad_us_grupo">
		
            <h4><?php Lang::_lang('NovNovedadUsGrupo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('NovNovedad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($nov_novedad->getNovNovedadUsGruposParaBloqueMasInfo() as $nov_novedad_us_grupo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($nov_novedad_us_grupo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($nov_novedad_us_grupo->getDescripcionVinculante('NovNovedad')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($nov_novedad_us_grupo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_us_grupo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($nov_novedad_us_grupo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_us_grupo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $nov_novedad_us_grupo->getId() ?>" archivo="ajax/modulos/nov_novedad_us_grupo/nov_novedad_us_grupo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('NovNovedadUsGrupo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_US_GRUPO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NovNovedadUsGrupo') ?>">
                                <a href="nov_novedad_us_grupo_alta.php?id=<?php echo $nov_novedad_us_grupo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_US_GRUPO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($nov_novedad_us_grupo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NovNovedadUsGrupo::getFiltrosArrGral() ?>&arr=<?php echo $nov_novedad_us_grupo->getFiltrosArrXCampo('NovNovedad', 'nov_novedad_id') ?>" >
                                <?php Lang::_lang('Ver NovNovedadUsGrupos de ') ?> <strong><?php echo($nov_novedad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="nov_novedad_us_grupo_alta.php" >
                            <?php Lang::_lang('Agregar NovNovedadUsGrupo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_DESTINATARIO')){ ?>
	<div id="tab_nov_novedad_destinatario" class="bloque-relacion nov_novedad_destinatario">
		
            <h4><?php Lang::_lang('NovNovedadDestinatario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('NovNovedad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($nov_novedad->getNovNovedadDestinatariosParaBloqueMasInfo() as $nov_novedad_destinatario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($nov_novedad_destinatario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($nov_novedad_destinatario->getDescripcionVinculante('NovNovedad')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($nov_novedad_destinatario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_destinatario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($nov_novedad_destinatario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_destinatario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $nov_novedad_destinatario->getId() ?>" archivo="ajax/modulos/nov_novedad_destinatario/nov_novedad_destinatario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('NovNovedadDestinatario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_DESTINATARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NovNovedadDestinatario') ?>">
                                <a href="nov_novedad_destinatario_alta.php?id=<?php echo $nov_novedad_destinatario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_DESTINATARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($nov_novedad_destinatario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NovNovedadDestinatario::getFiltrosArrGral() ?>&arr=<?php echo $nov_novedad_destinatario->getFiltrosArrXCampo('NovNovedad', 'nov_novedad_id') ?>" >
                                <?php Lang::_lang('Ver NovNovedadDestinatarios de ') ?> <strong><?php echo($nov_novedad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="nov_novedad_destinatario_alta.php" >
                            <?php Lang::_lang('Agregar NovNovedadDestinatario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_OBSERVADO')){ ?>
	<div id="tab_nov_novedad_observado" class="bloque-relacion nov_novedad_observado">
		
            <h4><?php Lang::_lang('NovNovedadObservado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('NovNovedad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($nov_novedad->getNovNovedadObservadosParaBloqueMasInfo() as $nov_novedad_observado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($nov_novedad_observado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($nov_novedad_observado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($nov_novedad_observado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_observado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($nov_novedad_observado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_observado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $nov_novedad_observado->getId() ?>" archivo="ajax/modulos/nov_novedad_observado/nov_novedad_observado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('NovNovedadObservado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_OBSERVADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NovNovedadObservado') ?>">
                                <a href="nov_novedad_observado_alta.php?id=<?php echo $nov_novedad_observado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_OBSERVADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($nov_novedad_observado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NovNovedadObservado::getFiltrosArrGral() ?>&arr=<?php echo $nov_novedad_observado->getFiltrosArrXCampo('NovNovedad', 'nov_novedad_id') ?>" >
                                <?php Lang::_lang('Ver NovNovedadObservados de ') ?> <strong><?php echo($nov_novedad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="nov_novedad_observado_alta.php" >
                            <?php Lang::_lang('Agregar NovNovedadObservado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_LEIDO')){ ?>
	<div id="tab_nov_novedad_leido" class="bloque-relacion nov_novedad_leido">
		
            <h4><?php Lang::_lang('NovNovedadLeido') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('NovNovedad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($nov_novedad->getNovNovedadLeidosParaBloqueMasInfo() as $nov_novedad_leido){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($nov_novedad_leido->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($nov_novedad_leido->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($nov_novedad_leido->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_leido->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($nov_novedad_leido->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_leido->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $nov_novedad_leido->getId() ?>" archivo="ajax/modulos/nov_novedad_leido/nov_novedad_leido_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('NovNovedadLeido') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_LEIDO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NovNovedadLeido') ?>">
                                <a href="nov_novedad_leido_alta.php?id=<?php echo $nov_novedad_leido->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_MASINFO_NOV_NOVEDAD_LEIDO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($nov_novedad_leido){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NovNovedadLeido::getFiltrosArrGral() ?>&arr=<?php echo $nov_novedad_leido->getFiltrosArrXCampo('NovNovedad', 'nov_novedad_id') ?>" >
                                <?php Lang::_lang('Ver NovNovedadLeidos de ') ?> <strong><?php echo($nov_novedad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="nov_novedad_leido_alta.php" >
                            <?php Lang::_lang('Agregar NovNovedadLeido') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

