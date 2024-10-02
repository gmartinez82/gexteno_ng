<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$alt_control_id = Gral::getVars(2, 'id');
$alt_control = AltControl::getOxId($alt_control_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($alt_control->getObservacion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Control') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($alt_control->getControl())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ALT_CONTROL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_control->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($alt_control->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ALT_CONTROL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_control->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($alt_control->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_MASINFO_ALT_CONTROL_US_USUARIO')){ ?>
            <li><a href="#tab_alt_control_us_usuario"><?php Lang::_lang('AltControlUsUsuario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_MASINFO_ALT_ALERTA')){ ?>
            <li><a href="#tab_alt_alerta"><?php Lang::_lang('AltAlerta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_MASINFO_ALT_CONTROL_US_GRUPO')){ ?>
            <li><a href="#tab_alt_control_us_grupo"><?php Lang::_lang('AltControlUsGrupo') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_MASINFO_ALT_CONTROL_US_USUARIO')){ ?>
	<div id="tab_alt_control_us_usuario" class="bloque-relacion alt_control_us_usuario">
		
            <h4><?php Lang::_lang('AltControlUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('AltControl') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($alt_control->getAltControlUsUsuariosParaBloqueMasInfo() as $alt_control_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($alt_control_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($alt_control_us_usuario->getDescripcionVinculante('AltControl')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($alt_control_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_control_us_usuario->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $alt_control_us_usuario->getId() ?>" archivo="ajax/modulos/alt_control_us_usuario/alt_control_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AltControlUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AltControlUsUsuario') ?>">
                                <a href="alt_control_us_usuario_alta.php?id=<?php echo $alt_control_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_MASINFO_ALT_CONTROL_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($alt_control_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AltControlUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $alt_control_us_usuario->getFiltrosArrXCampo('AltControl', 'alt_control_id') ?>" >
                                <?php Lang::_lang('Ver AltControlUsUsuarios de ') ?> <strong><?php echo($alt_control->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="alt_control_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar AltControlUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_MASINFO_ALT_ALERTA')){ ?>
	<div id="tab_alt_alerta" class="bloque-relacion alt_alerta">
		
            <h4><?php Lang::_lang('AltAlerta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('AltControl') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($alt_control->getAltAlertasParaBloqueMasInfo() as $alt_alerta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($alt_alerta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($alt_alerta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($alt_alerta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_alerta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($alt_alerta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_alerta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $alt_alerta->getId() ?>" archivo="ajax/modulos/alt_alerta/alt_alerta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AltAlerta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AltAlerta') ?>">
                                <a href="alt_alerta_alta.php?id=<?php echo $alt_alerta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_MASINFO_ALT_ALERTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($alt_alerta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AltAlerta::getFiltrosArrGral() ?>&arr=<?php echo $alt_alerta->getFiltrosArrXCampo('AltControl', 'alt_control_id') ?>" >
                                <?php Lang::_lang('Ver AltAlertas de ') ?> <strong><?php echo($alt_control->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="alt_alerta_alta.php" >
                            <?php Lang::_lang('Agregar AltAlerta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_MASINFO_ALT_CONTROL_US_GRUPO')){ ?>
	<div id="tab_alt_control_us_grupo" class="bloque-relacion alt_control_us_grupo">
		
            <h4><?php Lang::_lang('AltControlUsGrupo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('AltControl') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($alt_control->getAltControlUsGruposParaBloqueMasInfo() as $alt_control_us_grupo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($alt_control_us_grupo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($alt_control_us_grupo->getDescripcionVinculante('AltControl')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($alt_control_us_grupo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_control_us_grupo->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $alt_control_us_grupo->getId() ?>" archivo="ajax/modulos/alt_control_us_grupo/alt_control_us_grupo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AltControlUsGrupo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_US_GRUPO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AltControlUsGrupo') ?>">
                                <a href="alt_control_us_grupo_alta.php?id=<?php echo $alt_control_us_grupo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_MASINFO_ALT_CONTROL_US_GRUPO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($alt_control_us_grupo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AltControlUsGrupo::getFiltrosArrGral() ?>&arr=<?php echo $alt_control_us_grupo->getFiltrosArrXCampo('AltControl', 'alt_control_id') ?>" >
                                <?php Lang::_lang('Ver AltControlUsGrupos de ') ?> <strong><?php echo($alt_control->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="alt_control_us_grupo_alta.php" >
                            <?php Lang::_lang('Agregar AltControlUsGrupo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

