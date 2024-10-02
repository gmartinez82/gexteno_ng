<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$not_tipo_archivo_id = Gral::getVars(2, 'id');
$not_tipo_archivo = NotTipoArchivo::getOxId($not_tipo_archivo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($not_tipo_archivo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOT_TIPO_ARCHIVO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_tipo_archivo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($not_tipo_archivo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOT_TIPO_ARCHIVO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_tipo_archivo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($not_tipo_archivo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('NOT_TIPO_ARCHIVO_MASINFO_NOT_NOTICIA_ARCHIVO')){ ?>
            <li><a href="#tab_not_noticia_archivo"><?php Lang::_lang('NotNoticiaArchivo') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('NOT_TIPO_ARCHIVO_MASINFO_NOT_NOTICIA_ARCHIVO')){ ?>
	<div id="tab_not_noticia_archivo" class="bloque-relacion not_noticia_archivo">
		
            <h4><?php Lang::_lang('NotNoticiaArchivo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('NotTipoArchivo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($not_tipo_archivo->getNotNoticiaArchivosParaBloqueMasInfo() as $not_noticia_archivo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('NOT_TIPO_ARCHIVO_MASINFO_NOT_NOTICIA_ARCHIVO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($not_noticia_archivo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NotNoticiaArchivo::getFiltrosArrGral() ?>&arr=<?php echo $not_noticia_archivo->getFiltrosArrXCampo('NotTipoArchivo', 'not_tipo_archivo_id') ?>" >
                                <?php Lang::_lang('Ver NotNoticiaArchivos de ') ?> <strong><?php echo($not_tipo_archivo->getDescripcion()) ?></strong>
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
	
</div>

