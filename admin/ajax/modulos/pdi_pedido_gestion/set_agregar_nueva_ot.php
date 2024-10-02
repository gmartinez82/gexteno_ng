<?php
include "_autoload.php";

$coche_id = Gral::getVars(2, 'coche_id', 0);
$panol_id = Gral::getVars(2, 'panol_id', 0);
$operario_id = Gral::getVars(2, 'operario_id', 0);

$pan_panol = PanPanol::getOxId($panol_id);
$glp_galpon = $pan_panol->getGlpGalpon();

// se crea l anueva OT
$tal_tarea_accion = TalTareaAccion::getOxCodigo('VERIFICACION');

$arr_operarios = array(array('id' => $operario_id));
$arr_tareas_asignadas = array(array('tarea_base_id' => null, 'tarea_accion_id' => $tal_tarea_accion->getId(), 'estado' => 0));

$tal_orden_trabajo_prioridad = TalOrdenTrabajoPrioridad::getOxCodigo('baja');
$tal_orden_trabajo_tipo_origen = TalOrdenTrabajoTipoOrigen::getOxCodigo(TalOrdenTrabajoTipoOrigen::ORIGEN_MANUAL);
$tal_orden_trabajo_tipo_estado = TalOrdenTrabajoTipoEstado::getOxCodigo('FINALIZADA');

$tal_orden_trabajo = TalOrdenTrabajo::addTalOrdenTrabajoV2(
		$veh_coche_id = $coche_id,
		$ot_observacion = 'OT Creada por Asignacion de Insumo desde Panol',
		$ot_estado = 1,
		$arr_tipo_origen = array('id' => $tal_orden_trabajo_tipo_origen->getId(), 'observacion' => ''),
		$arr_tipo_estado = array('id' => $tal_orden_trabajo_tipo_estado->getId(), 'observacion' => ''),
		$arr_prioridad = array('id' => $tal_orden_trabajo_prioridad->getId(), 'observacion' => ''),
		$arr_tareas_asignadas,
		$arr_tareas_resueltas = false,
		$arr_operarios,
		$arr_especialidads = false,
		$glp_galpon_id = $glp_galpon->getId()
		);
$data_json = json_encode($tal_orden_trabajo->getId());
echo $data_json;

return;
// no vas mas de aca para abajo

// crear nueva OT
$tal_orden_trabajo = TalOrdenTrabajo::addTalOrdenTrabajo(
            $coche_id,
            $glp_galpon->getId(),
            $operario_id,
            $tal_orden_trabajo_tipo_origen_codigo = false,
            $tal_orden_trabajo_prioridad_codigo = false,
            $tal_orden_trabajo_tipo_estado_codigo = 'FINALIZADA'
            );

$data_json = json_encode($tal_orden_trabajo->getId());
echo $data_json;
?>