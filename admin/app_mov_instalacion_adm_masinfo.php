<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$app_mov_instalacion_id = Gral::getVars(2, 'id');
$app_mov_instalacion = AppMovInstalacion::getOxId($app_mov_instalacion_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Fecha Ult Activ') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaHoraToWeb($app_mov_instalacion->getFechaUltimaActividad()))) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('UsUsuario') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($app_mov_instalacion->getUsUsuario()->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($app_mov_instalacion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'APP_MOV_INSTALACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($app_mov_instalacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($app_mov_instalacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'APP_MOV_INSTALACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($app_mov_instalacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($app_mov_instalacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('APP_MOV_INSTALACION_MASINFO_APP_MOV_ACTIVIDAD')){ ?>
            <li><a href="#tab_app_mov_actividad"><?php Lang::_lang('AppMovActividads') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('APP_MOV_INSTALACION_MASINFO_APP_MOV_ACTIVIDAD')){ ?>
	<div id="tab_app_mov_actividad" class="bloque-relacion app_mov_actividad">
		
            <h4><?php Lang::_lang('AppMovActividad') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('AppMovInstalacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($app_mov_instalacion->getAppMovActividadsParaBloqueMasInfo() as $app_mov_actividad){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($app_mov_actividad->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($app_mov_actividad->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($app_mov_actividad->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($app_mov_actividad->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($app_mov_actividad->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($app_mov_actividad->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $app_mov_actividad->getId() ?>" archivo="ajax/modulos/app_mov_actividad/app_mov_actividad_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AppMovActividad') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('APP_MOV_ACTIVIDAD_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AppMovActividad') ?>">
                                <a href="app_mov_actividad_alta.php?id=<?php echo $app_mov_actividad->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('APP_MOV_INSTALACION_MASINFO_APP_MOV_ACTIVIDAD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($app_mov_actividad){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AppMovActividad::getFiltrosArrGral() ?>&arr=<?php echo $app_mov_actividad->getFiltrosArrXCampo('AppMovInstalacion', 'app_mov_instalacion_id') ?>" >
                                <?php Lang::_lang('Ver AppMovActividads de ') ?> <strong><?php echo($app_mov_instalacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="app_mov_actividad_alta.php" >
                            <?php Lang::_lang('Agregar AppMovActividad') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

