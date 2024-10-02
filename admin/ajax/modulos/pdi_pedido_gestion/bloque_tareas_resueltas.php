<?php 
if($tal_orden_trabajo && $ins_insumo){
    $veh_coche = $tal_orden_trabajo->getVehCoche();
    $veh_modelo = $veh_coche->getVehModelo();
    $tal_tarea_resueltas = $tal_orden_trabajo->getTalTareaResueltas();
?>
<?php 
foreach($tal_tarea_resueltas as $tal_tarea_resuelta){ 
?>
<div id="div_tarea_resuelta_<?php echo $tal_tarea_resuelta->getId() ?>" class="uno tarea_resuelta" tarea_resuelta_id="<?php echo $tal_tarea_resuelta->getId() ?>" insumo_id="<?php echo $ins_insumo->getId() ?>">
    
    <?php include "bloque_tareas_resueltas_uno.php" ?>
    
</div>
<?php } ?>

<div class="boton agregar-tarea_resuelta" title="Crear Nueva Tarea Resuelta">+ Crear Nueva TR</div>
<?php } ?>

<div class="error insumo-identificado-label-error pdi_pedido_buscador_rad_tal_tarea_resuelta_id_error"><?php Gral::_echo($pdi_pedido_buscador_rad_tal_tarea_resuelta_id_error) ?></div>
