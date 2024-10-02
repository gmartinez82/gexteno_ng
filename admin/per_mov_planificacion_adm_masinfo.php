<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$per_mov_planificacion_id = Gral::getVars(2, 'id');
$per_mov_planificacion = PerMovPlanificacion::getOxId($per_mov_planificacion_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('PerPersona') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_mov_planificacion->getPerPersona()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GralNovedad') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_mov_planificacion->getGralNovedad()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('PlnJornada') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_mov_planificacion->getPlnJornada()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('PlnTurnoNovedad') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_mov_planificacion->getPlnTurnoNovedad()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GralNovedadMotivo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_mov_planificacion->getGralNovedadMotivo()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GralNovedadMotivoExtendido') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_mov_planificacion->getGralNovedadMotivoExtendido()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(GralSiNo::getOxId($per_mov_planificacion->getInicial())->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_mov_planificacion->getObservacion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Conf Obs') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_mov_planificacion->getConfirmadoObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PER_MOV_PLANIFICACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_planificacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($per_mov_planificacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PER_MOV_PLANIFICACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_planificacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($per_mov_planificacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_MASINFO_PER_MOV_PLANIFICACION_TRAMO')){ ?>
            <li><a href="#tab_per_mov_planificacion_tramo"><?php Lang::_lang('PerMovPlanificacionTramos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_MASINFO_PER_MOV_PLANIFICACION_TRAMO')){ ?>
	<div id="tab_per_mov_planificacion_tramo" class="bloque-relacion per_mov_planificacion_tramo">
		
            <h4><?php Lang::_lang('PerMovPlanificacionTramo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PerMovPlanificacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($per_mov_planificacion->getPerMovPlanificacionTramosParaBloqueMasInfo() as $per_mov_planificacion_tramo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($per_mov_planificacion_tramo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($per_mov_planificacion_tramo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($per_mov_planificacion_tramo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_planificacion_tramo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($per_mov_planificacion_tramo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_planificacion_tramo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $per_mov_planificacion_tramo->getId() ?>" archivo="ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PerMovPlanificacionTramo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_TRAMO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerMovPlanificacionTramo') ?>">
                                <a href="per_mov_planificacion_tramo_alta.php?id=<?php echo $per_mov_planificacion_tramo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_MASINFO_PER_MOV_PLANIFICACION_TRAMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_mov_planificacion_tramo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerMovPlanificacionTramo::getFiltrosArrGral() ?>&arr=<?php echo $per_mov_planificacion_tramo->getFiltrosArrXCampo('PerMovPlanificacion', 'per_mov_planificacion_id') ?>" >
                                <?php Lang::_lang('Ver PerMovPlanificacionTramos de ') ?> <strong><?php echo($per_mov_planificacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="per_mov_planificacion_tramo_alta.php" >
                            <?php Lang::_lang('Agregar PerMovPlanificacionTramo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

