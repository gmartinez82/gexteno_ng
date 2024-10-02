<?php
include "_autoload.php";

$palabra = Gral::getVars(2, 'palabra', '...');
$coche_id = Gral::getVars(2, 'coche_id', 0);
$operario_id = Gral::getVars(2, 'operario_id', 0);
$panol_id = Gral::getVars(2, 'panol_id', 0);

$chk_ver_todas_ots = Gral::getVars(2, 'chk_ver_todas_ots', 0);

$c = new Criterio();
$c->add(TalOrdenTrabajo::GEN_ATTR_VEH_COCHE_ID, $coche_id, Criterio::IGUAL);
if($chk_ver_todas_ots == 0){
	$c->add(TalOrdenTrabajoAsignacion::GEN_ATTR_OPE_OPERARIO_ID, $operario_id, Criterio::IGUAL);
}
if($palabra != '...'){
	$c->add(TalOrdenTrabajo::GEN_ATTR_CLAVES, $palabra, Criterio::LIKE);
}
$c->addTabla(TalOrdenTrabajo::GEN_TABLA);
$c->addRealJoin(TalOrdenTrabajoAsignacion::GEN_TABLA, TalOrdenTrabajoAsignacion::GEN_ATTR_TAL_ORDEN_TRABAJO_ID, TalOrdenTrabajo::GEN_ATTR_ID, "LEFT JOIN");
$c->addOrden(TalOrdenTrabajo::GEN_ATTR_ID, Criterio::_DESC);
$c->setCriterios();

$tal_orden_trabajos = TalOrdenTrabajo::getTalOrdenTrabajos(null, $c);
//Gral::prr($tal_orden_trabajos);
//exit;
?>

<?php if(count($tal_orden_trabajos) > 0){ ?>
<?php 
foreach($tal_orden_trabajos as $tal_orden_trabajo){ 
	$tal_tarea_asignada = $tal_orden_trabajo->getTalTareaAsignada();
	$tal_orden_trabajo_asignacion = $tal_orden_trabajo->getTalOrdenTrabajoAsignacion();

	$tal_ot_estado = $tal_orden_trabajo->getTalOTEstado();
	if($tal_ot_estado){
	   $tal_ot_tipo_estado = $tal_ot_estado->getTalOrdenTrabajoTipoEstado();
	}
?>
<div class="uno ot <?php echo $tal_ot_tipo_estado->getCodigo() ?>" ot_id="<?php Gral::_echo($tal_orden_trabajo->getId()) ?>">
    <div class="codigo"><?php Gral::_echo($tal_orden_trabajo->getCodigo()) ?> - Estado: <strong><?php Gral::_echo($tal_ot_tipo_estado->getDescripcion()) ?></strong></div>
    <div class="tarea-asignada">TA: <?php Gral::_echo($tal_tarea_asignada->getDescripcion()) ?></div>
    <div class="observacion"><?php Gral::_echo($tal_orden_trabajo->getObservacion()) ?></div>
    
    <div class="fecha-creacion">Creada el <?php Gral::_echo(Gral::getFechaToWeb($tal_orden_trabajo->getCreado())) ?> por <strong><?php Gral::_echo($tal_orden_trabajo->getTalOrdenTrabajoOrigen()->getTalOrdenTrabajoTipoOrigen()->getDescripcion()) ?></strong> - </div>
    
    <?php if($tal_orden_trabajo_asignacion){ ?>
    <div class="fecha-asignacion">Asignada el <?php Gral::_echo(Gral::getFechaHoraToWeb($tal_orden_trabajo_asignacion->getCreado())) ?> al operario: <strong><?php Gral::_echo($tal_orden_trabajo_asignacion->getOpeOperario()->getDescripcion()) ?></strong></div>
    <?php } ?>

	<br />
	<br />
    <?php foreach($tal_orden_trabajo->getTalTareaAsignadas() as $tal_tarea_asignada){ ?>
    <?php foreach($tal_tarea_asignada->getTalTareaResueltas() as $tal_tarea_resuelta){ ?>
    <div class="tarea-resuelta">TR: <?php Gral::_echo($tal_tarea_resuelta->getDescripcion()) ?></div>	
    <div class="observacion-resolucion"><?php Gral::_echo($tal_tarea_resuelta->getObservacion()) ?></div>
    <div class="fecha-resolucion">Resuelta el <?php Gral::_echo(Gral::getFechaHoraToWeb($tal_tarea_resuelta->getCreado())) ?> horas por el operario: <strong><?php Gral::_echo($tal_tarea_resuelta->getOpeOperario()->getDescripcion()) ?></strong></div>
	<?php } ?>
	<?php } ?>
    
	<br />
    <?php if($tal_orden_trabajo_asignacion){ ?>
    <div class="boton seleccionar">Seleccionar</div>
    <?php }else{ ?>
    <div class="boton vincular">Vincular al Operario y Seleccionar</div>
    <?php } ?>
</div>
<?php } ?>
<?php }else{ ?>
<div class="mensaje-sin-resultado">
	<div class="mensaje">No se encontraron</div>
</div>
<?php } ?>
