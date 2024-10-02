<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$fnd_caja_movimiento_tipo_estado_id = Gral::getVars(2, 'id');
$fnd_caja_movimiento_tipo_estado = FndCajaMovimientoTipoEstado::getOxId($fnd_caja_movimiento_tipo_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($fnd_caja_movimiento_tipo_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CAJA_MOVIMIENTO_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_movimiento_tipo_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_caja_movimiento_tipo_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CAJA_MOVIMIENTO_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_movimiento_tipo_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_caja_movimiento_tipo_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_TIPO_ESTADO_MASINFO_FND_CAJA_MOVIMIENTO')){ ?>
            <li><a href="#tab_fnd_caja_movimiento"><?php Lang::_lang('FndCajaMovimientos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_TIPO_ESTADO_MASINFO_FND_CAJA_MOVIMIENTO_ESTADO')){ ?>
            <li><a href="#tab_fnd_caja_movimiento_estado"><?php Lang::_lang('FndCajaMovimientoEstado') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_TIPO_ESTADO_MASINFO_FND_CAJA_MOVIMIENTO')){ ?>
	<div id="tab_fnd_caja_movimiento" class="bloque-relacion fnd_caja_movimiento">
		
            <h4><?php Lang::_lang('FndCajaMovimiento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCajaMovimientoTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_caja_movimiento_tipo_estado->getFndCajaMovimientosParaBloqueMasInfo() as $fnd_caja_movimiento){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_caja_movimiento->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_caja_movimiento->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_caja_movimiento->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_movimiento->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_caja_movimiento->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_movimiento->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_caja_movimiento->getId() ?>" archivo="ajax/modulos/fnd_caja_movimiento/fnd_caja_movimiento_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndCajaMovimiento') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajaMovimiento') ?>">
                                <a href="fnd_caja_movimiento_alta.php?id=<?php echo $fnd_caja_movimiento->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_TIPO_ESTADO_MASINFO_FND_CAJA_MOVIMIENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_caja_movimiento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCajaMovimiento::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja_movimiento->getFiltrosArrXCampo('FndCajaMovimientoTipoEstado', 'fnd_caja_movimiento_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver FndCajaMovimientos de ') ?> <strong><?php echo($fnd_caja_movimiento_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_caja_movimiento_alta.php" >
                            <?php Lang::_lang('Agregar FndCajaMovimiento') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_TIPO_ESTADO_MASINFO_FND_CAJA_MOVIMIENTO_ESTADO')){ ?>
	<div id="tab_fnd_caja_movimiento_estado" class="bloque-relacion fnd_caja_movimiento_estado">
		
            <h4><?php Lang::_lang('FndCajaMovimientoEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCajaMovimientoTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_caja_movimiento_tipo_estado->getFndCajaMovimientoEstadosParaBloqueMasInfo() as $fnd_caja_movimiento_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_caja_movimiento_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_caja_movimiento_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_caja_movimiento_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_movimiento_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_caja_movimiento_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_movimiento_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_caja_movimiento_estado->getId() ?>" archivo="ajax/modulos/fnd_caja_movimiento_estado/fnd_caja_movimiento_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndCajaMovimientoEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajaMovimientoEstado') ?>">
                                <a href="fnd_caja_movimiento_estado_alta.php?id=<?php echo $fnd_caja_movimiento_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_TIPO_ESTADO_MASINFO_FND_CAJA_MOVIMIENTO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_caja_movimiento_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCajaMovimientoEstado::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja_movimiento_estado->getFiltrosArrXCampo('FndCajaMovimientoTipoEstado', 'fnd_caja_movimiento_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver FndCajaMovimientoEstados de ') ?> <strong><?php echo($fnd_caja_movimiento_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_caja_movimiento_estado_alta.php" >
                            <?php Lang::_lang('Agregar FndCajaMovimientoEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

