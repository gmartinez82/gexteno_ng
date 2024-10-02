<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ctrl_equipo_id = Gral::getVars(2, 'id');
$ctrl_equipo = CtrlEquipo::getOxId($ctrl_equipo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ctrl_equipo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CTRL_EQUIPO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ctrl_equipo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ctrl_equipo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CTRL_EQUIPO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ctrl_equipo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ctrl_equipo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_MASINFO_CTRL_EQUIPO_CTRL_SECTOR')){ ?>
            <li><a href="#tab_ctrl_equipo_ctrl_sector"><?php Lang::_lang('CtrlEquipoCtrlSectors') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_MASINFO_CTRL_EQUIPO_ESTADO')){ ?>
            <li><a href="#tab_ctrl_equipo_estado"><?php Lang::_lang('CtrlEquipoEstados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_MASINFO_PER_MOV_MOVIMIENTO')){ ?>
            <li><a href="#tab_per_mov_movimiento"><?php Lang::_lang('PerMovMovimientos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_MASINFO_CTRL_EQUIPO_CTRL_SECTOR')){ ?>
	<div id="tab_ctrl_equipo_ctrl_sector" class="bloque-relacion ctrl_equipo_ctrl_sector">
		
            <h4><?php Lang::_lang('CtrlEquipoCtrlSector') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CtrlEquipo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ctrl_equipo->getCtrlEquipoCtrlSectorsParaBloqueMasInfo() as $ctrl_equipo_ctrl_sector){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ctrl_equipo_ctrl_sector->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ctrl_equipo_ctrl_sector->getDescripcionVinculante('CtrlEquipo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ctrl_equipo_ctrl_sector->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ctrl_equipo_ctrl_sector->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ctrl_equipo_ctrl_sector->getId() ?>" archivo="ajax/modulos/ctrl_equipo_ctrl_sector/ctrl_equipo_ctrl_sector_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CtrlEquipoCtrlSector') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_CTRL_SECTOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CtrlEquipoCtrlSector') ?>">
                                <a href="ctrl_equipo_ctrl_sector_alta.php?id=<?php echo $ctrl_equipo_ctrl_sector->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_MASINFO_CTRL_EQUIPO_CTRL_SECTOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ctrl_equipo_ctrl_sector){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CtrlEquipoCtrlSector::getFiltrosArrGral() ?>&arr=<?php echo $ctrl_equipo_ctrl_sector->getFiltrosArrXCampo('CtrlEquipo', 'ctrl_equipo_id') ?>" >
                                <?php Lang::_lang('Ver CtrlEquipoCtrlSectors de ') ?> <strong><?php echo($ctrl_equipo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ctrl_equipo_ctrl_sector_alta.php" >
                            <?php Lang::_lang('Agregar CtrlEquipoCtrlSector') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_MASINFO_CTRL_EQUIPO_ESTADO')){ ?>
	<div id="tab_ctrl_equipo_estado" class="bloque-relacion ctrl_equipo_estado">
		
            <h4><?php Lang::_lang('CtrlEquipoEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CtrlEquipo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ctrl_equipo->getCtrlEquipoEstadosParaBloqueMasInfo() as $ctrl_equipo_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ctrl_equipo_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ctrl_equipo_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ctrl_equipo_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ctrl_equipo_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ctrl_equipo_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ctrl_equipo_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ctrl_equipo_estado->getId() ?>" archivo="ajax/modulos/ctrl_equipo_estado/ctrl_equipo_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CtrlEquipoEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CtrlEquipoEstado') ?>">
                                <a href="ctrl_equipo_estado_alta.php?id=<?php echo $ctrl_equipo_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_MASINFO_CTRL_EQUIPO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ctrl_equipo_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CtrlEquipoEstado::getFiltrosArrGral() ?>&arr=<?php echo $ctrl_equipo_estado->getFiltrosArrXCampo('CtrlEquipo', 'ctrl_equipo_id') ?>" >
                                <?php Lang::_lang('Ver CtrlEquipoEstados de ') ?> <strong><?php echo($ctrl_equipo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ctrl_equipo_estado_alta.php" >
                            <?php Lang::_lang('Agregar CtrlEquipoEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_MASINFO_PER_MOV_MOVIMIENTO')){ ?>
	<div id="tab_per_mov_movimiento" class="bloque-relacion per_mov_movimiento">
		
            <h4><?php Lang::_lang('PerMovMovimiento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CtrlEquipo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ctrl_equipo->getPerMovMovimientosParaBloqueMasInfo() as $per_mov_movimiento){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($per_mov_movimiento->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($per_mov_movimiento->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($per_mov_movimiento->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_movimiento->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($per_mov_movimiento->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_movimiento->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $per_mov_movimiento->getId() ?>" archivo="ajax/modulos/per_mov_movimiento/per_mov_movimiento_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PerMovMovimiento') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerMovMovimiento') ?>">
                                <a href="per_mov_movimiento_alta.php?id=<?php echo $per_mov_movimiento->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_MASINFO_PER_MOV_MOVIMIENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_mov_movimiento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerMovMovimiento::getFiltrosArrGral() ?>&arr=<?php echo $per_mov_movimiento->getFiltrosArrXCampo('CtrlEquipo', 'ctrl_equipo_id') ?>" >
                                <?php Lang::_lang('Ver PerMovMovimientos de ') ?> <strong><?php echo($ctrl_equipo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="per_mov_movimiento_alta.php" >
                            <?php Lang::_lang('Agregar PerMovMovimiento') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

