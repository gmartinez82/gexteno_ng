<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$fnd_caja_tipo_estado_id = Gral::getVars(2, 'id');
$fnd_caja_tipo_estado = FndCajaTipoEstado::getOxId($fnd_caja_tipo_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($fnd_caja_tipo_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CAJA_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_tipo_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_caja_tipo_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CAJA_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_tipo_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_caja_tipo_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_TIPO_ESTADO_MASINFO_FND_CAJA')){ ?>
            <li><a href="#tab_fnd_caja"><?php Lang::_lang('FndCajas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_TIPO_ESTADO_MASINFO_FND_CAJA_ESTADO')){ ?>
            <li><a href="#tab_fnd_caja_estado"><?php Lang::_lang('FndCajaEstado') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_TIPO_ESTADO_MASINFO_FND_CAJA')){ ?>
	<div id="tab_fnd_caja" class="bloque-relacion fnd_caja">
		
            <h4><?php Lang::_lang('FndCaja') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCajaTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_caja_tipo_estado->getFndCajasParaBloqueMasInfo() as $fnd_caja){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJA_TIPO_ESTADO_MASINFO_FND_CAJA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_caja){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCaja::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja->getFiltrosArrXCampo('FndCajaTipoEstado', 'fnd_caja_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver FndCajas de ') ?> <strong><?php echo($fnd_caja_tipo_estado->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_TIPO_ESTADO_MASINFO_FND_CAJA_ESTADO')){ ?>
	<div id="tab_fnd_caja_estado" class="bloque-relacion fnd_caja_estado">
		
            <h4><?php Lang::_lang('FndCajaEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCajaTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_caja_tipo_estado->getFndCajaEstadosParaBloqueMasInfo() as $fnd_caja_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_caja_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_caja_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_caja_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_caja_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_caja_estado->getId() ?>" archivo="ajax/modulos/fnd_caja_estado/fnd_caja_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndCajaEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajaEstado') ?>">
                                <a href="fnd_caja_estado_alta.php?id=<?php echo $fnd_caja_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJA_TIPO_ESTADO_MASINFO_FND_CAJA_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_caja_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCajaEstado::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja_estado->getFiltrosArrXCampo('FndCajaTipoEstado', 'fnd_caja_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver FndCajaEstados de ') ?> <strong><?php echo($fnd_caja_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_caja_estado_alta.php" >
                            <?php Lang::_lang('Agregar FndCajaEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

