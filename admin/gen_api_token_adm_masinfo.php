<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gen_api_token_id = Gral::getVars(2, 'id');
$gen_api_token = GenApiToken::getOxId($gen_api_token_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaHoraToWeb($gen_api_token->getVencimiento()))) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gen_api_token->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEN_API_TOKEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_api_token->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gen_api_token->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEN_API_TOKEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_api_token->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gen_api_token->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GEN_API_TOKEN_MASINFO_APP_MOV_INSTALACION')){ ?>
            <li><a href="#tab_app_mov_instalacion"><?php Lang::_lang('AppMovInstalacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEN_API_TOKEN_MASINFO_APP_MOV_ACTIVIDAD')){ ?>
            <li><a href="#tab_app_mov_actividad"><?php Lang::_lang('AppMovActividads') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GEN_API_TOKEN_MASINFO_APP_MOV_INSTALACION')){ ?>
	<div id="tab_app_mov_instalacion" class="bloque-relacion app_mov_instalacion">
		
            <h4><?php Lang::_lang('AppMovInstalacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GenApiToken') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gen_api_token->getAppMovInstalacionsParaBloqueMasInfo() as $app_mov_instalacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($app_mov_instalacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($app_mov_instalacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($app_mov_instalacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($app_mov_instalacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($app_mov_instalacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($app_mov_instalacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $app_mov_instalacion->getId() ?>" archivo="ajax/modulos/app_mov_instalacion/app_mov_instalacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AppMovInstalacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('APP_MOV_INSTALACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AppMovInstalacion') ?>">
                                <a href="app_mov_instalacion_alta.php?id=<?php echo $app_mov_instalacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEN_API_TOKEN_MASINFO_APP_MOV_INSTALACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($app_mov_instalacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AppMovInstalacion::getFiltrosArrGral() ?>&arr=<?php echo $app_mov_instalacion->getFiltrosArrXCampo('GenApiToken', 'gen_api_token_id') ?>" >
                                <?php Lang::_lang('Ver AppMovInstalacions de ') ?> <strong><?php echo($gen_api_token->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="app_mov_instalacion_alta.php" >
                            <?php Lang::_lang('Agregar AppMovInstalacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEN_API_TOKEN_MASINFO_APP_MOV_ACTIVIDAD')){ ?>
	<div id="tab_app_mov_actividad" class="bloque-relacion app_mov_actividad">
		
            <h4><?php Lang::_lang('AppMovActividad') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GenApiToken') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gen_api_token->getAppMovActividadsParaBloqueMasInfo() as $app_mov_actividad){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GEN_API_TOKEN_MASINFO_APP_MOV_ACTIVIDAD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($app_mov_actividad){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AppMovActividad::getFiltrosArrGral() ?>&arr=<?php echo $app_mov_actividad->getFiltrosArrXCampo('GenApiToken', 'gen_api_token_id') ?>" >
                                <?php Lang::_lang('Ver AppMovActividads de ') ?> <strong><?php echo($gen_api_token->getDescripcion()) ?></strong>
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

