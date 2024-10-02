<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$os_tipo_estado_id = Gral::getVars(2, 'id');
$os_tipo_estado = OsTipoEstado::getOxId($os_tipo_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($os_tipo_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'OS_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_tipo_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($os_tipo_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'OS_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_tipo_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($os_tipo_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('OS_TIPO_ESTADO_MASINFO_OS_ORDEN_SERVICIO')){ ?>
            <li><a href="#tab_os_orden_servicio"><?php Lang::_lang('OsOrdenServicio') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('OS_TIPO_ESTADO_MASINFO_OS_ESTADO')){ ?>
            <li><a href="#tab_os_estado"><?php Lang::_lang('OsEstado') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('OS_TIPO_ESTADO_MASINFO_OS_ORDEN_SERVICIO')){ ?>
	<div id="tab_os_orden_servicio" class="bloque-relacion os_orden_servicio">
		
            <h4><?php Lang::_lang('OsOrdenServicio') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('OsTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($os_tipo_estado->getOsOrdenServiciosParaBloqueMasInfo() as $os_orden_servicio){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($os_orden_servicio->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($os_orden_servicio->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($os_orden_servicio->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_orden_servicio->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($os_orden_servicio->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_orden_servicio->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $os_orden_servicio->getId() ?>" archivo="ajax/modulos/os_orden_servicio/os_orden_servicio_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('OsOrdenServicio') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('OsOrdenServicio') ?>">
                                <a href="os_orden_servicio_alta.php?id=<?php echo $os_orden_servicio->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('OS_TIPO_ESTADO_MASINFO_OS_ORDEN_SERVICIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($os_orden_servicio){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo OsOrdenServicio::getFiltrosArrGral() ?>&arr=<?php echo $os_orden_servicio->getFiltrosArrXCampo('OsTipoEstado', 'os_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver OsOrdenServicios de ') ?> <strong><?php echo($os_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="os_orden_servicio_alta.php" >
                            <?php Lang::_lang('Agregar OsOrdenServicio') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('OS_TIPO_ESTADO_MASINFO_OS_ESTADO')){ ?>
	<div id="tab_os_estado" class="bloque-relacion os_estado">
		
            <h4><?php Lang::_lang('OsEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('OsTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($os_tipo_estado->getOsEstadosParaBloqueMasInfo() as $os_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($os_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($os_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($os_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($os_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $os_estado->getId() ?>" archivo="ajax/modulos/os_estado/os_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('OsEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('OS_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('OsEstado') ?>">
                                <a href="os_estado_alta.php?id=<?php echo $os_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('OS_TIPO_ESTADO_MASINFO_OS_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($os_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo OsEstado::getFiltrosArrGral() ?>&arr=<?php echo $os_estado->getFiltrosArrXCampo('OsTipoEstado', 'os_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver OsEstados de ') ?> <strong><?php echo($os_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="os_estado_alta.php" >
                            <?php Lang::_lang('Agregar OsEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

