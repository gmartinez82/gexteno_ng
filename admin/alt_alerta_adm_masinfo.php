<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$alt_alerta_id = Gral::getVars(2, 'id');
$alt_alerta = AltAlerta::getOxId($alt_alerta_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($alt_alerta->getAltTipo()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($alt_alerta->getCodigo())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Url Redirecc') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($alt_alerta->getUrlRedireccion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($alt_alerta->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ALT_ALERTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_alerta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($alt_alerta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ALT_ALERTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_alerta->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($alt_alerta->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_MASINFO_ALT_ALERTA_US_USUARIO')){ ?>
            <li><a href="#tab_alt_alerta_us_usuario"><?php Lang::_lang('AltAlertaUsUsuario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_MASINFO_ALT_ALERTA_ENVIO_EMAIL')){ ?>
            <li><a href="#tab_alt_alerta_envio_email"><?php Lang::_lang('AltAlertaEnvioEmails') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_MASINFO_ALT_ALERTA_US_USUARIO')){ ?>
	<div id="tab_alt_alerta_us_usuario" class="bloque-relacion alt_alerta_us_usuario">
		
            <h4><?php Lang::_lang('AltAlertaUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('AltAlerta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($alt_alerta->getAltAlertaUsUsuariosParaBloqueMasInfo() as $alt_alerta_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($alt_alerta_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($alt_alerta_us_usuario->getDescripcionVinculante('AltAlerta')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($alt_alerta_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_alerta_us_usuario->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $alt_alerta_us_usuario->getId() ?>" archivo="ajax/modulos/alt_alerta_us_usuario/alt_alerta_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AltAlertaUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AltAlertaUsUsuario') ?>">
                                <a href="alt_alerta_us_usuario_alta.php?id=<?php echo $alt_alerta_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_MASINFO_ALT_ALERTA_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($alt_alerta_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AltAlertaUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $alt_alerta_us_usuario->getFiltrosArrXCampo('AltAlerta', 'alt_alerta_id') ?>" >
                                <?php Lang::_lang('Ver AltAlertaUsUsuarios de ') ?> <strong><?php echo($alt_alerta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="alt_alerta_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar AltAlertaUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_MASINFO_ALT_ALERTA_ENVIO_EMAIL')){ ?>
	<div id="tab_alt_alerta_envio_email" class="bloque-relacion alt_alerta_envio_email">
		
            <h4><?php Lang::_lang('AltAlertaEnvioEmail') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('AltAlerta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($alt_alerta->getAltAlertaEnvioEmailsParaBloqueMasInfo() as $alt_alerta_envio_email){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($alt_alerta_envio_email->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($alt_alerta_envio_email->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($alt_alerta_envio_email->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_alerta_envio_email->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($alt_alerta_envio_email->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_alerta_envio_email->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $alt_alerta_envio_email->getId() ?>" archivo="ajax/modulos/alt_alerta_envio_email/alt_alerta_envio_email_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AltAlertaEnvioEmail') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_ENVIO_EMAIL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AltAlertaEnvioEmail') ?>">
                                <a href="alt_alerta_envio_email_alta.php?id=<?php echo $alt_alerta_envio_email->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_MASINFO_ALT_ALERTA_ENVIO_EMAIL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($alt_alerta_envio_email){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AltAlertaEnvioEmail::getFiltrosArrGral() ?>&arr=<?php echo $alt_alerta_envio_email->getFiltrosArrXCampo('AltAlerta', 'alt_alerta_id') ?>" >
                                <?php Lang::_lang('Ver AltAlertaEnvioEmails de ') ?> <strong><?php echo($alt_alerta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="alt_alerta_envio_email_alta.php" >
                            <?php Lang::_lang('Agregar AltAlertaEnvioEmail') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

