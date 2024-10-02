<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$not_noticia_id = Gral::getVars(2, 'id');
$not_noticia = NotNoticia::getOxId($not_noticia_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($not_noticia->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Copete') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($not_noticia->getCopete())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Cuerpo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($not_noticia->getCuerpo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($not_noticia->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOT_NOTICIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_noticia->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($not_noticia->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOT_NOTICIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_noticia->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($not_noticia->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_MASINFO_NOT_NOTICIA_IMAGEN')){ ?>
            <li><a href="#tab_not_noticia_imagen"><?php Lang::_lang('NotNoticiaImagen') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_MASINFO_NOT_NOTICIA_ARCHIVO')){ ?>
            <li><a href="#tab_not_noticia_archivo"><?php Lang::_lang('NotNoticiaArchivo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_MASINFO_NOT_VIDEO')){ ?>
            <li><a href="#tab_not_video"><?php Lang::_lang('NotVideo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_MASINFO_NOT_RELACIONADA')){ ?>
            <li><a href="#tab_not_relacionada"><?php Lang::_lang('NotRelacionada') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_MASINFO_NOT_NOTICIA_LEIDA')){ ?>
            <li><a href="#tab_not_noticia_leida"><?php Lang::_lang('NotNoticiaLeida') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_MASINFO_NOT_NOTICIA_IMAGEN')){ ?>
	<div id="tab_not_noticia_imagen" class="bloque-relacion not_noticia_imagen">
		
            <h4><?php Lang::_lang('NotNoticiaImagen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('NotNoticia') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($not_noticia->getNotNoticiaImagensParaBloqueMasInfo() as $not_noticia_imagen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($not_noticia_imagen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <img src="<?php Gral::_echo($not_noticia_imagen->getPathImagen(true)) ?>" width="50" alt="<?php Gral::_echo($not_noticia_imagen->getDescripcion()) ?>">					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($not_noticia_imagen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_noticia_imagen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($not_noticia_imagen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_noticia_imagen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $not_noticia_imagen->getId() ?>" archivo="ajax/modulos/not_noticia_imagen/not_noticia_imagen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('NotNoticiaImagen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_IMAGEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NotNoticiaImagen') ?>">
                                <a href="not_noticia_imagen_alta.php?id=<?php echo $not_noticia_imagen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_MASINFO_NOT_NOTICIA_IMAGEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($not_noticia_imagen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NotNoticiaImagen::getFiltrosArrGral() ?>&arr=<?php echo $not_noticia_imagen->getFiltrosArrXCampo('NotNoticia', 'not_noticia_id') ?>" >
                                <?php Lang::_lang('Ver NotNoticiaImagens de ') ?> <strong><?php echo($not_noticia->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="not_noticia_imagen_alta.php" >
                            <?php Lang::_lang('Agregar NotNoticiaImagen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_MASINFO_NOT_NOTICIA_ARCHIVO')){ ?>
	<div id="tab_not_noticia_archivo" class="bloque-relacion not_noticia_archivo">
		
            <h4><?php Lang::_lang('NotNoticiaArchivo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('NotNoticia') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($not_noticia->getNotNoticiaArchivosParaBloqueMasInfo() as $not_noticia_archivo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($not_noticia_archivo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($not_noticia_archivo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($not_noticia_archivo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_noticia_archivo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($not_noticia_archivo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_noticia_archivo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $not_noticia_archivo->getId() ?>" archivo="ajax/modulos/not_noticia_archivo/not_noticia_archivo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('NotNoticiaArchivo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ARCHIVO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NotNoticiaArchivo') ?>">
                                <a href="not_noticia_archivo_alta.php?id=<?php echo $not_noticia_archivo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_MASINFO_NOT_NOTICIA_ARCHIVO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($not_noticia_archivo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NotNoticiaArchivo::getFiltrosArrGral() ?>&arr=<?php echo $not_noticia_archivo->getFiltrosArrXCampo('NotNoticia', 'not_noticia_id') ?>" >
                                <?php Lang::_lang('Ver NotNoticiaArchivos de ') ?> <strong><?php echo($not_noticia->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="not_noticia_archivo_alta.php" >
                            <?php Lang::_lang('Agregar NotNoticiaArchivo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_MASINFO_NOT_VIDEO')){ ?>
	<div id="tab_not_video" class="bloque-relacion not_video">
		
            <h4><?php Lang::_lang('NotVideo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('NotNoticia') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($not_noticia->getNotVideosParaBloqueMasInfo() as $not_video){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($not_video->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($not_video->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($not_video->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_video->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($not_video->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_video->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $not_video->getId() ?>" archivo="ajax/modulos/not_video/not_video_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('NotVideo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('NOT_VIDEO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NotVideo') ?>">
                                <a href="not_video_alta.php?id=<?php echo $not_video->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_MASINFO_NOT_VIDEO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($not_video){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NotVideo::getFiltrosArrGral() ?>&arr=<?php echo $not_video->getFiltrosArrXCampo('NotNoticia', 'not_noticia_id') ?>" >
                                <?php Lang::_lang('Ver NotVideos de ') ?> <strong><?php echo($not_noticia->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="not_video_alta.php" >
                            <?php Lang::_lang('Agregar NotVideo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_MASINFO_NOT_RELACIONADA')){ ?>
	<div id="tab_not_relacionada" class="bloque-relacion not_relacionada">
		
            <h4><?php Lang::_lang('NotRelacionada') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('NotNoticia') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($not_noticia->getNotRelacionadasParaBloqueMasInfo() as $not_relacionada){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($not_relacionada->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($not_relacionada->getDescripcionVinculante('NotNoticia')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($not_relacionada->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_relacionada->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($not_relacionada->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_relacionada->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $not_relacionada->getId() ?>" archivo="ajax/modulos/not_relacionada/not_relacionada_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('NotRelacionada') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('NOT_RELACIONADA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NotRelacionada') ?>">
                                <a href="not_relacionada_alta.php?id=<?php echo $not_relacionada->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_MASINFO_NOT_RELACIONADA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($not_relacionada){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NotRelacionada::getFiltrosArrGral() ?>&arr=<?php echo $not_relacionada->getFiltrosArrXCampo('NotNoticia', 'not_noticia_id') ?>" >
                                <?php Lang::_lang('Ver NotRelacionadas de ') ?> <strong><?php echo($not_noticia->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="not_relacionada_alta.php" >
                            <?php Lang::_lang('Agregar NotRelacionada') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_MASINFO_NOT_NOTICIA_LEIDA')){ ?>
	<div id="tab_not_noticia_leida" class="bloque-relacion not_noticia_leida">
		
            <h4><?php Lang::_lang('NotNoticiaLeida') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('NotNoticia') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($not_noticia->getNotNoticiaLeidasParaBloqueMasInfo() as $not_noticia_leida){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($not_noticia_leida->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($not_noticia_leida->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($not_noticia_leida->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_noticia_leida->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($not_noticia_leida->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_noticia_leida->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $not_noticia_leida->getId() ?>" archivo="ajax/modulos/not_noticia_leida/not_noticia_leida_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('NotNoticiaLeida') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_LEIDA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NotNoticiaLeida') ?>">
                                <a href="not_noticia_leida_alta.php?id=<?php echo $not_noticia_leida->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_MASINFO_NOT_NOTICIA_LEIDA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($not_noticia_leida){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NotNoticiaLeida::getFiltrosArrGral() ?>&arr=<?php echo $not_noticia_leida->getFiltrosArrXCampo('NotNoticia', 'not_noticia_id') ?>" >
                                <?php Lang::_lang('Ver NotNoticiaLeidas de ') ?> <strong><?php echo($not_noticia->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="not_noticia_leida_alta.php" >
                            <?php Lang::_lang('Agregar NotNoticiaLeida') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

