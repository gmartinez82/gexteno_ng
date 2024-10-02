<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$not_tipo_video_id = Gral::getVars(2, 'id');
$not_tipo_video = NotTipoVideo::getOxId($not_tipo_video_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($not_tipo_video->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOT_TIPO_VIDEO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_tipo_video->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($not_tipo_video->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOT_TIPO_VIDEO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_tipo_video->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($not_tipo_video->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('NOT_TIPO_VIDEO_MASINFO_NOT_VIDEO')){ ?>
            <li><a href="#tab_not_video"><?php Lang::_lang('NotVideo') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('NOT_TIPO_VIDEO_MASINFO_NOT_VIDEO')){ ?>
	<div id="tab_not_video" class="bloque-relacion not_video">
		
            <h4><?php Lang::_lang('NotVideo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('NotTipoVideo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($not_tipo_video->getNotVideosParaBloqueMasInfo() as $not_video){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('NOT_TIPO_VIDEO_MASINFO_NOT_VIDEO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($not_video){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NotVideo::getFiltrosArrGral() ?>&arr=<?php echo $not_video->getFiltrosArrXCampo('NotTipoVideo', 'not_tipo_video_id') ?>" >
                                <?php Lang::_lang('Ver NotVideos de ') ?> <strong><?php echo($not_tipo_video->getDescripcion()) ?></strong>
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
	
</div>

