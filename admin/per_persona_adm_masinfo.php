<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$per_persona_id = Gral::getVars(2, 'id');
$per_persona = PerPersona::getOxId($per_persona_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_persona->getId())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GralTipoDocumento') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_persona->getGralTipoDocumento()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Documento') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_persona->getDocumento())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Cuit-Cuil') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_persona->getCuil())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Nacimiento') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaToWeb($per_persona->getNacimiento()))) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GralSexo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_persona->getGralSexo()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_persona->getGeoLocalidad()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo Postal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_persona->getCodigoPostal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Fecha de Alta') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaToWeb($per_persona->getFechaAlta()))) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Fecha de Baja') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaToWeb($per_persona->getFechaBaja()))) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Nacionalidad') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(($per_persona->getNacionalidad() != 'null') ? GeoPais::getOxId($per_persona->getNacionalidad())->getDescripcion() : '')) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Hash') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_persona->getHash())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_persona->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PER_PERSONA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($per_persona->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PER_PERSONA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($per_persona->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_PERSONA_IMAGEN')){ ?>
            <li><a href="#tab_per_persona_imagen"><?php Lang::_lang('PerPersonaImagens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_PERSONA_ARCHIVO')){ ?>
            <li><a href="#tab_per_persona_archivo"><?php Lang::_lang('PerPersonaArchivos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_ESTADO')){ ?>
            <li><a href="#tab_per_estado"><?php Lang::_lang('PerEstados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_PERSONA_DEDO')){ ?>
            <li><a href="#tab_per_persona_dedo"><?php Lang::_lang('PerPersonaDedos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_PERSONA_GRAL_SUCURSAL')){ ?>
            <li><a href="#tab_per_persona_gral_sucursal"><?php Lang::_lang('PerPersonaGralSucursal') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_PERSONA_US_USUARIO')){ ?>
            <li><a href="#tab_per_persona_us_usuario"><?php Lang::_lang('PerPersonaUsUsuario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_MOV_MOVIMIENTO')){ ?>
            <li><a href="#tab_per_mov_movimiento"><?php Lang::_lang('PerMovMovimientos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_MOV_PLANIFICACION')){ ?>
            <li><a href="#tab_per_mov_planificacion"><?php Lang::_lang('PerMovPlanificacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_OS_ORDEN_SERVICIO')){ ?>
            <li><a href="#tab_os_orden_servicio"><?php Lang::_lang('OsOrdenServicio') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_PERSONA_IMAGEN')){ ?>
	<div id="tab_per_persona_imagen" class="bloque-relacion per_persona_imagen">
		
            <h4><?php Lang::_lang('PerPersonaImagen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PerPersona') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($per_persona->getPerPersonaImagensParaBloqueMasInfo() as $per_persona_imagen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($per_persona_imagen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <img src="<?php Gral::_echo($per_persona_imagen->getPathImagen(true)) ?>" width="50" alt="<?php Gral::_echo($per_persona_imagen->getDescripcion()) ?>">					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($per_persona_imagen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_imagen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($per_persona_imagen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_imagen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $per_persona_imagen->getId() ?>" archivo="ajax/modulos/per_persona_imagen/per_persona_imagen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PerPersonaImagen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_IMAGEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerPersonaImagen') ?>">
                                <a href="per_persona_imagen_alta.php?id=<?php echo $per_persona_imagen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_PERSONA_IMAGEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_persona_imagen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerPersonaImagen::getFiltrosArrGral() ?>&arr=<?php echo $per_persona_imagen->getFiltrosArrXCampo('PerPersona', 'per_persona_id') ?>" >
                                <?php Lang::_lang('Ver PerPersonaImagens de ') ?> <strong><?php echo($per_persona->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="per_persona_imagen_alta.php" >
                            <?php Lang::_lang('Agregar PerPersonaImagen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_PERSONA_ARCHIVO')){ ?>
	<div id="tab_per_persona_archivo" class="bloque-relacion per_persona_archivo">
		
            <h4><?php Lang::_lang('PerPersonaArchivo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PerPersona') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($per_persona->getPerPersonaArchivosParaBloqueMasInfo() as $per_persona_archivo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_PERSONA_ARCHIVO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_persona_archivo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerPersonaArchivo::getFiltrosArrGral() ?>&arr=<?php echo $per_persona_archivo->getFiltrosArrXCampo('PerPersona', 'per_persona_id') ?>" >
                                <?php Lang::_lang('Ver PerPersonaArchivos de ') ?> <strong><?php echo($per_persona->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_ESTADO')){ ?>
	<div id="tab_per_estado" class="bloque-relacion per_estado">
		
            <h4><?php Lang::_lang('PerEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PerPersona') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($per_persona->getPerEstadosParaBloqueMasInfo() as $per_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($per_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($per_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($per_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($per_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $per_estado->getId() ?>" archivo="ajax/modulos/per_estado/per_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PerEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PER_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerEstado') ?>">
                                <a href="per_estado_alta.php?id=<?php echo $per_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerEstado::getFiltrosArrGral() ?>&arr=<?php echo $per_estado->getFiltrosArrXCampo('PerPersona', 'per_persona_id') ?>" >
                                <?php Lang::_lang('Ver PerEstados de ') ?> <strong><?php echo($per_persona->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="per_estado_alta.php" >
                            <?php Lang::_lang('Agregar PerEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_PERSONA_DEDO')){ ?>
	<div id="tab_per_persona_dedo" class="bloque-relacion per_persona_dedo">
		
            <h4><?php Lang::_lang('PerPersonaDedo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PerPersona') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($per_persona->getPerPersonaDedosParaBloqueMasInfo() as $per_persona_dedo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($per_persona_dedo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($per_persona_dedo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($per_persona_dedo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_dedo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($per_persona_dedo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_dedo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $per_persona_dedo->getId() ?>" archivo="ajax/modulos/per_persona_dedo/per_persona_dedo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PerPersonaDedo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_DEDO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerPersonaDedo') ?>">
                                <a href="per_persona_dedo_alta.php?id=<?php echo $per_persona_dedo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_PERSONA_DEDO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_persona_dedo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerPersonaDedo::getFiltrosArrGral() ?>&arr=<?php echo $per_persona_dedo->getFiltrosArrXCampo('PerPersona', 'per_persona_id') ?>" >
                                <?php Lang::_lang('Ver PerPersonaDedos de ') ?> <strong><?php echo($per_persona->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="per_persona_dedo_alta.php" >
                            <?php Lang::_lang('Agregar PerPersonaDedo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_PERSONA_GRAL_SUCURSAL')){ ?>
	<div id="tab_per_persona_gral_sucursal" class="bloque-relacion per_persona_gral_sucursal">
		
            <h4><?php Lang::_lang('PerPersonaGralSucursal') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PerPersona') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($per_persona->getPerPersonaGralSucursalsParaBloqueMasInfo() as $per_persona_gral_sucursal){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($per_persona_gral_sucursal->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($per_persona_gral_sucursal->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($per_persona_gral_sucursal->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_gral_sucursal->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($per_persona_gral_sucursal->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_gral_sucursal->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $per_persona_gral_sucursal->getId() ?>" archivo="ajax/modulos/per_persona_gral_sucursal/per_persona_gral_sucursal_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PerPersonaGralSucursal') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_GRAL_SUCURSAL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerPersonaGralSucursal') ?>">
                                <a href="per_persona_gral_sucursal_alta.php?id=<?php echo $per_persona_gral_sucursal->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_PERSONA_GRAL_SUCURSAL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_persona_gral_sucursal){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerPersonaGralSucursal::getFiltrosArrGral() ?>&arr=<?php echo $per_persona_gral_sucursal->getFiltrosArrXCampo('PerPersona', 'per_persona_id') ?>" >
                                <?php Lang::_lang('Ver PerPersonaGralSucursals de ') ?> <strong><?php echo($per_persona->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="per_persona_gral_sucursal_alta.php" >
                            <?php Lang::_lang('Agregar PerPersonaGralSucursal') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_PERSONA_US_USUARIO')){ ?>
	<div id="tab_per_persona_us_usuario" class="bloque-relacion per_persona_us_usuario">
		
            <h4><?php Lang::_lang('PerPersonaUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PerPersona') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($per_persona->getPerPersonaUsUsuariosParaBloqueMasInfo() as $per_persona_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($per_persona_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($per_persona_us_usuario->getDescripcionVinculante('PerPersona')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($per_persona_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($per_persona_us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $per_persona_us_usuario->getId() ?>" archivo="ajax/modulos/per_persona_us_usuario/per_persona_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PerPersonaUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerPersonaUsUsuario') ?>">
                                <a href="per_persona_us_usuario_alta.php?id=<?php echo $per_persona_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_PERSONA_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_persona_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerPersonaUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $per_persona_us_usuario->getFiltrosArrXCampo('PerPersona', 'per_persona_id') ?>" >
                                <?php Lang::_lang('Ver PerPersonaUsUsuarios de ') ?> <strong><?php echo($per_persona->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="per_persona_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar PerPersonaUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_MOV_MOVIMIENTO')){ ?>
	<div id="tab_per_mov_movimiento" class="bloque-relacion per_mov_movimiento">
		
            <h4><?php Lang::_lang('PerMovMovimiento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PerPersona') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($per_persona->getPerMovMovimientosParaBloqueMasInfo() as $per_mov_movimiento){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($per_mov_movimiento->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($per_mov_movimiento->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($per_mov_movimiento->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_movimiento->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($per_mov_movimiento->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_movimiento->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $per_mov_movimiento->getId() ?>" archivo="ajax/modulos/per_mov_movimiento/per_mov_movimiento_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PerMovMovimiento') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerMovMovimiento') ?>">
                                <a href="per_mov_movimiento_alta.php?id=<?php echo $per_mov_movimiento->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_MOV_MOVIMIENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_mov_movimiento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerMovMovimiento::getFiltrosArrGral() ?>&arr=<?php echo $per_mov_movimiento->getFiltrosArrXCampo('PerPersona', 'per_persona_id') ?>" >
                                <?php Lang::_lang('Ver PerMovMovimientos de ') ?> <strong><?php echo($per_persona->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="per_mov_movimiento_alta.php" >
                            <?php Lang::_lang('Agregar PerMovMovimiento') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_MOV_PLANIFICACION')){ ?>
	<div id="tab_per_mov_planificacion" class="bloque-relacion per_mov_planificacion">
		
            <h4><?php Lang::_lang('PerMovPlanificacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PerPersona') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($per_persona->getPerMovPlanificacionsParaBloqueMasInfo() as $per_mov_planificacion){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_PER_MOV_PLANIFICACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_mov_planificacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerMovPlanificacion::getFiltrosArrGral() ?>&arr=<?php echo $per_mov_planificacion->getFiltrosArrXCampo('PerPersona', 'per_persona_id') ?>" >
                                <?php Lang::_lang('Ver PerMovPlanificacions de ') ?> <strong><?php echo($per_persona->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_OS_ORDEN_SERVICIO')){ ?>
	<div id="tab_os_orden_servicio" class="bloque-relacion os_orden_servicio">
		
            <h4><?php Lang::_lang('OsOrdenServicio') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PerPersona') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($per_persona->getOsOrdenServiciosParaBloqueMasInfo() as $os_orden_servicio){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($os_orden_servicio->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($os_orden_servicio->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($os_orden_servicio->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_orden_servicio->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($os_orden_servicio->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_orden_servicio->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $os_orden_servicio->getId() ?>" archivo="ajax/modulos/os_orden_servicio/os_orden_servicio_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('OsOrdenServicio') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('OsOrdenServicio') ?>">
                                <a href="os_orden_servicio_alta.php?id=<?php echo $os_orden_servicio->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_MASINFO_OS_ORDEN_SERVICIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($os_orden_servicio){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo OsOrdenServicio::getFiltrosArrGral() ?>&arr=<?php echo $os_orden_servicio->getFiltrosArrXCampo('PerPersona', 'per_persona_id') ?>" >
                                <?php Lang::_lang('Ver OsOrdenServicios de ') ?> <strong><?php echo($per_persona->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="os_orden_servicio_alta.php" >
                            <?php Lang::_lang('Agregar OsOrdenServicio') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

