<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prd_orden_trabajo_ciclo_id = Gral::getVars(2, 'id');
$prd_orden_trabajo_ciclo = PrdOrdenTrabajoCiclo::getOxId($prd_orden_trabajo_ciclo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prd_orden_trabajo_ciclo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRD_ORDEN_TRABAJO_CICLO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_ciclo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prd_orden_trabajo_ciclo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRD_ORDEN_TRABAJO_CICLO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_ciclo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prd_orden_trabajo_ciclo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_CICLO_MASINFO_PRD_ORDEN_TRABAJO_OPERACION')){ ?>
            <li><a href="#tab_prd_orden_trabajo_operacion"><?php Lang::_lang('PrdOrdenTrabajoOperacions') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_CICLO_MASINFO_PRD_ORDEN_TRABAJO_OPERACION')){ ?>
	<div id="tab_prd_orden_trabajo_operacion" class="bloque-relacion prd_orden_trabajo_operacion">
		
            <h4><?php Lang::_lang('PrdOrdenTrabajoOperacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrdOrdenTrabajoCiclo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prd_orden_trabajo_ciclo->getPrdOrdenTrabajoOperacionsParaBloqueMasInfo() as $prd_orden_trabajo_operacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_orden_trabajo_operacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_orden_trabajo_operacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_operacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_operacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_operacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_operacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_orden_trabajo_operacion->getId() ?>" archivo="ajax/modulos/prd_orden_trabajo_operacion/prd_orden_trabajo_operacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacion') ?>">
                                <a href="prd_orden_trabajo_operacion_alta.php?id=<?php echo $prd_orden_trabajo_operacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_CICLO_MASINFO_PRD_ORDEN_TRABAJO_OPERACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_orden_trabajo_operacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdOrdenTrabajoOperacion::getFiltrosArrGral() ?>&arr=<?php echo $prd_orden_trabajo_operacion->getFiltrosArrXCampo('PrdOrdenTrabajoCiclo', 'prd_orden_trabajo_ciclo_id') ?>" >
                                <?php Lang::_lang('Ver PrdOrdenTrabajoOperacions de ') ?> <strong><?php echo($prd_orden_trabajo_ciclo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_orden_trabajo_operacion_alta.php" >
                            <?php Lang::_lang('Agregar PrdOrdenTrabajoOperacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

