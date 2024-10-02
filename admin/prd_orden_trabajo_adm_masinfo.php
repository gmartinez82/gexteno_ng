<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prd_orden_trabajo_id = Gral::getVars(2, 'id');
$prd_orden_trabajo = PrdOrdenTrabajo::getOxId($prd_orden_trabajo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prd_orden_trabajo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRD_ORDEN_TRABAJO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prd_orden_trabajo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRD_ORDEN_TRABAJO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prd_orden_trabajo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_MASINFO_PRD_ORDEN_TRABAJO_ESTADO')){ ?>
            <li><a href="#tab_prd_orden_trabajo_estado"><?php Lang::_lang('PrdOrdenTrabajoEstados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_MASINFO_PRD_ORDEN_TRABAJO_CICLO')){ ?>
            <li><a href="#tab_prd_orden_trabajo_ciclo"><?php Lang::_lang('PrdOrdenTrabajoCiclos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_MASINFO_PRD_ORDEN_TRABAJO_ESTADO')){ ?>
	<div id="tab_prd_orden_trabajo_estado" class="bloque-relacion prd_orden_trabajo_estado">
		
            <h4><?php Lang::_lang('PrdOrdenTrabajoEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrdOrdenTrabajo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prd_orden_trabajo->getPrdOrdenTrabajoEstadosParaBloqueMasInfo() as $prd_orden_trabajo_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_orden_trabajo_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_orden_trabajo_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_orden_trabajo_estado->getId() ?>" archivo="ajax/modulos/prd_orden_trabajo_estado/prd_orden_trabajo_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdOrdenTrabajoEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdOrdenTrabajoEstado') ?>">
                                <a href="prd_orden_trabajo_estado_alta.php?id=<?php echo $prd_orden_trabajo_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_MASINFO_PRD_ORDEN_TRABAJO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_orden_trabajo_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdOrdenTrabajoEstado::getFiltrosArrGral() ?>&arr=<?php echo $prd_orden_trabajo_estado->getFiltrosArrXCampo('PrdOrdenTrabajo', 'prd_orden_trabajo_id') ?>" >
                                <?php Lang::_lang('Ver PrdOrdenTrabajoEstados de ') ?> <strong><?php echo($prd_orden_trabajo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_orden_trabajo_estado_alta.php" >
                            <?php Lang::_lang('Agregar PrdOrdenTrabajoEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_MASINFO_PRD_ORDEN_TRABAJO_CICLO')){ ?>
	<div id="tab_prd_orden_trabajo_ciclo" class="bloque-relacion prd_orden_trabajo_ciclo">
		
            <h4><?php Lang::_lang('PrdOrdenTrabajoCiclo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrdOrdenTrabajo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prd_orden_trabajo->getPrdOrdenTrabajoCiclosParaBloqueMasInfo() as $prd_orden_trabajo_ciclo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_orden_trabajo_ciclo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_orden_trabajo_ciclo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_ciclo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_ciclo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_ciclo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_ciclo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_orden_trabajo_ciclo->getId() ?>" archivo="ajax/modulos/prd_orden_trabajo_ciclo/prd_orden_trabajo_ciclo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdOrdenTrabajoCiclo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_CICLO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdOrdenTrabajoCiclo') ?>">
                                <a href="prd_orden_trabajo_ciclo_alta.php?id=<?php echo $prd_orden_trabajo_ciclo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_MASINFO_PRD_ORDEN_TRABAJO_CICLO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_orden_trabajo_ciclo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdOrdenTrabajoCiclo::getFiltrosArrGral() ?>&arr=<?php echo $prd_orden_trabajo_ciclo->getFiltrosArrXCampo('PrdOrdenTrabajo', 'prd_orden_trabajo_id') ?>" >
                                <?php Lang::_lang('Ver PrdOrdenTrabajoCiclos de ') ?> <strong><?php echo($prd_orden_trabajo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_orden_trabajo_ciclo_alta.php" >
                            <?php Lang::_lang('Agregar PrdOrdenTrabajoCiclo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

