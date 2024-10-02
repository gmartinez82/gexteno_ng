<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_tipo_recepcion_id = Gral::getVars(2, 'id');
$pde_tipo_recepcion = PdeTipoRecepcion::getOxId($pde_tipo_recepcion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_tipo_recepcion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_TIPO_RECEPCION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_recepcion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_tipo_recepcion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_TIPO_RECEPCION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_recepcion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_tipo_recepcion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_RECEPCION_MASINFO_PDE_RECEPCION_AGRUPACION')){ ?>
            <li><a href="#tab_pde_recepcion_agrupacion"><?php Lang::_lang('PdeRecepcionAgrupacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_RECEPCION_MASINFO_PDE_RECEPCION')){ ?>
            <li><a href="#tab_pde_recepcion"><?php Lang::_lang('PdeRecepcions') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_RECEPCION_MASINFO_PDE_RECEPCION_AGRUPACION')){ ?>
	<div id="tab_pde_recepcion_agrupacion" class="bloque-relacion pde_recepcion_agrupacion">
		
            <h4><?php Lang::_lang('PdeRecepcionAgrupacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTipoRecepcion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tipo_recepcion->getPdeRecepcionAgrupacionsParaBloqueMasInfo() as $pde_recepcion_agrupacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recepcion_agrupacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recepcion_agrupacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recepcion_agrupacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_agrupacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recepcion_agrupacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_agrupacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recepcion_agrupacion->getId() ?>" archivo="ajax/modulos/pde_recepcion_agrupacion/pde_recepcion_agrupacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeRecepcionAgrupacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_AGRUPACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecepcionAgrupacion') ?>">
                                <a href="pde_recepcion_agrupacion_alta.php?id=<?php echo $pde_recepcion_agrupacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_RECEPCION_MASINFO_PDE_RECEPCION_AGRUPACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recepcion_agrupacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecepcionAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion_agrupacion->getFiltrosArrXCampo('PdeTipoRecepcion', 'pde_tipo_recepcion_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecepcionAgrupacions de ') ?> <strong><?php echo($pde_tipo_recepcion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recepcion_agrupacion_alta.php" >
                            <?php Lang::_lang('Agregar PdeRecepcionAgrupacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_RECEPCION_MASINFO_PDE_RECEPCION')){ ?>
	<div id="tab_pde_recepcion" class="bloque-relacion pde_recepcion">
		
            <h4><?php Lang::_lang('PdeRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTipoRecepcion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tipo_recepcion->getPdeRecepcionsParaBloqueMasInfo() as $pde_recepcion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recepcion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recepcion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recepcion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recepcion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recepcion->getId() ?>" archivo="ajax/modulos/pde_recepcion/pde_recepcion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeRecepcion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecepcion') ?>">
                                <a href="pde_recepcion_alta.php?id=<?php echo $pde_recepcion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_RECEPCION_MASINFO_PDE_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion->getFiltrosArrXCampo('PdeTipoRecepcion', 'pde_tipo_recepcion_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecepcions de ') ?> <strong><?php echo($pde_tipo_recepcion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recepcion_alta.php" >
                            <?php Lang::_lang('Agregar PdeRecepcion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

