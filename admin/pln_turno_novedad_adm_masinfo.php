<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pln_turno_novedad_id = Gral::getVars(2, 'id');
$pln_turno_novedad = PlnTurnoNovedad::getOxId($pln_turno_novedad_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('PlnTurno') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pln_turno_novedad->getPlnTurno()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GralNovedad') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pln_turno_novedad->getGralNovedad()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('PlnJornada') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pln_turno_novedad->getPlnJornada()->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pln_turno_novedad->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PLN_TURNO_NOVEDAD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_turno_novedad->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pln_turno_novedad->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PLN_TURNO_NOVEDAD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_turno_novedad->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pln_turno_novedad->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PLN_TURNO_NOVEDAD_MASINFO_PER_MOV_PLANIFICACION')){ ?>
            <li><a href="#tab_per_mov_planificacion"><?php Lang::_lang('PerMovPlanificacions') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PLN_TURNO_NOVEDAD_MASINFO_PER_MOV_PLANIFICACION')){ ?>
	<div id="tab_per_mov_planificacion" class="bloque-relacion per_mov_planificacion">
		
            <h4><?php Lang::_lang('PerMovPlanificacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PlnTurnoNovedad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pln_turno_novedad->getPerMovPlanificacionsParaBloqueMasInfo() as $per_mov_planificacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($per_mov_planificacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($per_mov_planificacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($per_mov_planificacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_planificacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($per_mov_planificacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_planificacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $per_mov_planificacion->getId() ?>" archivo="ajax/modulos/per_mov_planificacion/per_mov_planificacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PerMovPlanificacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerMovPlanificacion') ?>">
                                <a href="per_mov_planificacion_alta.php?id=<?php echo $per_mov_planificacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PLN_TURNO_NOVEDAD_MASINFO_PER_MOV_PLANIFICACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_mov_planificacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerMovPlanificacion::getFiltrosArrGral() ?>&arr=<?php echo $per_mov_planificacion->getFiltrosArrXCampo('PlnTurnoNovedad', 'pln_turno_novedad_id') ?>" >
                                <?php Lang::_lang('Ver PerMovPlanificacions de ') ?> <strong><?php echo($pln_turno_novedad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="per_mov_planificacion_alta.php" >
                            <?php Lang::_lang('Agregar PerMovPlanificacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

