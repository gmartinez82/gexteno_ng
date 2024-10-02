<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$not_tipo_imagen_id = Gral::getVars(2, 'id');
$not_tipo_imagen = NotTipoImagen::getOxId($not_tipo_imagen_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($not_tipo_imagen->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOT_TIPO_IMAGEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_tipo_imagen->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($not_tipo_imagen->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOT_TIPO_IMAGEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_tipo_imagen->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($not_tipo_imagen->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('NOT_TIPO_IMAGEN_MASINFO_NOT_NOTICIA_IMAGEN')){ ?>
            <li><a href="#tab_not_noticia_imagen"><?php Lang::_lang('NotNoticiaImagen') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('NOT_TIPO_IMAGEN_MASINFO_NOT_NOTICIA_IMAGEN')){ ?>
	<div id="tab_not_noticia_imagen" class="bloque-relacion not_noticia_imagen">
		
            <h4><?php Lang::_lang('NotNoticiaImagen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('NotTipoImagen') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($not_tipo_imagen->getNotNoticiaImagensParaBloqueMasInfo() as $not_noticia_imagen){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('NOT_TIPO_IMAGEN_MASINFO_NOT_NOTICIA_IMAGEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($not_noticia_imagen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NotNoticiaImagen::getFiltrosArrGral() ?>&arr=<?php echo $not_noticia_imagen->getFiltrosArrXCampo('NotTipoImagen', 'not_tipo_imagen_id') ?>" >
                                <?php Lang::_lang('Ver NotNoticiaImagens de ') ?> <strong><?php echo($not_tipo_imagen->getDescripcion()) ?></strong>
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
	
</div>

