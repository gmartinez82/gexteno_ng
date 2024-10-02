<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$fnd_cajero_id = Gral::getVars(2, 'id');
$fnd_cajero = FndCajero::getOxId($fnd_cajero_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($fnd_cajero->getApellido())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($fnd_cajero->getNombre())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($fnd_cajero->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CAJERO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_cajero->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_cajero->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CAJERO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_cajero->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_cajero->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('FND_CAJERO_MASINFO_FND_CAJA')){ ?>
            <li><a href="#tab_fnd_caja"><?php Lang::_lang('FndCajas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('FND_CAJERO_MASINFO_FND_CAJERO_US_USUARIO')){ ?>
            <li><a href="#tab_fnd_cajero_us_usuario"><?php Lang::_lang('FndCajeroUsUsuario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('FND_CAJERO_MASINFO_FND_CAJERO_GRAL_CAJA')){ ?>
            <li><a href="#tab_fnd_cajero_gral_caja"><?php Lang::_lang('FndCajeroGralCaja') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJERO_MASINFO_FND_CAJA')){ ?>
	<div id="tab_fnd_caja" class="bloque-relacion fnd_caja">
		
            <h4><?php Lang::_lang('FndCaja') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCajero') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_cajero->getFndCajasParaBloqueMasInfo() as $fnd_caja){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_caja->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_caja->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_caja->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_caja->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_caja->getId() ?>" archivo="ajax/modulos/fnd_caja/fnd_caja_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndCaja') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCaja') ?>">
                                <a href="fnd_caja_alta.php?id=<?php echo $fnd_caja->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJERO_MASINFO_FND_CAJA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_caja){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCaja::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja->getFiltrosArrXCampo('FndCajero', 'fnd_cajero_id') ?>" >
                                <?php Lang::_lang('Ver FndCajas de ') ?> <strong><?php echo($fnd_cajero->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_caja_alta.php" >
                            <?php Lang::_lang('Agregar FndCaja') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJERO_MASINFO_FND_CAJERO_US_USUARIO')){ ?>
	<div id="tab_fnd_cajero_us_usuario" class="bloque-relacion fnd_cajero_us_usuario">
		
            <h4><?php Lang::_lang('FndCajeroUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCajero') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_cajero->getFndCajeroUsUsuariosParaBloqueMasInfo() as $fnd_cajero_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_cajero_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_cajero_us_usuario->getDescripcionVinculante('FndCajero')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_cajero_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_cajero_us_usuario->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_cajero_us_usuario->getId() ?>" archivo="ajax/modulos/fnd_cajero_us_usuario/fnd_cajero_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndCajeroUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CAJERO_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajeroUsUsuario') ?>">
                                <a href="fnd_cajero_us_usuario_alta.php?id=<?php echo $fnd_cajero_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJERO_MASINFO_FND_CAJERO_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_cajero_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCajeroUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $fnd_cajero_us_usuario->getFiltrosArrXCampo('FndCajero', 'fnd_cajero_id') ?>" >
                                <?php Lang::_lang('Ver FndCajeroUsUsuarios de ') ?> <strong><?php echo($fnd_cajero->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_cajero_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar FndCajeroUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJERO_MASINFO_FND_CAJERO_GRAL_CAJA')){ ?>
	<div id="tab_fnd_cajero_gral_caja" class="bloque-relacion fnd_cajero_gral_caja">
		
            <h4><?php Lang::_lang('FndCajeroGralCaja') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCajero') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_cajero->getFndCajeroGralCajasParaBloqueMasInfo() as $fnd_cajero_gral_caja){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_cajero_gral_caja->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_cajero_gral_caja->getDescripcionVinculante('FndCajero')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_cajero_gral_caja->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_cajero_gral_caja->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_cajero_gral_caja->getId() ?>" archivo="ajax/modulos/fnd_cajero_gral_caja/fnd_cajero_gral_caja_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndCajeroGralCaja') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CAJERO_GRAL_CAJA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajeroGralCaja') ?>">
                                <a href="fnd_cajero_gral_caja_alta.php?id=<?php echo $fnd_cajero_gral_caja->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJERO_MASINFO_FND_CAJERO_GRAL_CAJA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_cajero_gral_caja){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCajeroGralCaja::getFiltrosArrGral() ?>&arr=<?php echo $fnd_cajero_gral_caja->getFiltrosArrXCampo('FndCajero', 'fnd_cajero_id') ?>" >
                                <?php Lang::_lang('Ver FndCajeroGralCajas de ') ?> <strong><?php echo($fnd_cajero->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_cajero_gral_caja_alta.php" >
                            <?php Lang::_lang('Agregar FndCajeroGralCaja') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

