<?php
    $tal_tarea_base = $tal_tarea_resuelta->getTalTareaBase(); 
    $arr_insumos_ids_permitidos = $tal_tarea_base->getInsInsumoIdsPermitidosArr($veh_modelo->getId());
    //Gral::prr($arr_insumos_ids_permitidos);
    
    $vinculado = (in_array($ins_insumo->getId(), $arr_insumos_ids_permitidos)) ? 'vinculado' : 'no-vinculado';
?>
<div class="radio <?php echo (in_array($ins_insumo->getId(), $arr_insumos_ids_permitidos)) ? 'permitido' : '' ?>">
<?php if(true || in_array($ins_insumo->getId(), $arr_insumos_ids_permitidos)){ ?>
    <input type="radio" id="rad_tarea_resuelta_id" name="rad_tarea_resuelta_id" value="<?php Gral::_echo($tal_tarea_resuelta->getId()) ?>" />
<?php } ?>
</div>

<label class="accion"><?php Gral::_echo($tal_tarea_resuelta->getTalTareaAccion()->getDescripcion()) ?></label> 
<label class="tarea" title="<?php Gral::_echo($tal_tarea_resuelta->getId()) ?>"><?php Gral::_echo($tal_tarea_base->getCodigo()) ?></label>
<div class="observacion"><?php Gral::_echo($tal_tarea_resuelta->getObservacion()) ?></div>
<label class="operario"><?php Gral::_echo($tal_tarea_resuelta->getOpeOperario()->getDescripcion()) ?></label> - 
<label class="galpon"><?php Gral::_echo($tal_tarea_resuelta->getGlpGalpon()->getDescripcion()) ?></label> - 
<label class="creado"><?php Gral::_echo(Gral::getFechaHoraToWEB($tal_tarea_resuelta->getCreado())) ?></label>

<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_GESTION_TOP_ACCION_IMPUTAR_MASIVO_VINCULAR_INSUMO')){ ?>
<div class="boton vincular <?php echo $vinculado ?>"><?php Lang::_lang((in_array($ins_insumo->getId(), $arr_insumos_ids_permitidos) ? 'Desvincular Insumo de Posicion' : 'Vincular Insumo a Posicion')) ?></div>
<?php } ?>