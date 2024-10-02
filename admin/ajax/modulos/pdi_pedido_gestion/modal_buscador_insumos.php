<?php
include "_autoload.php";

$panol_id = Gral::getVars(2, 'panol_id', 0);
$coche_id = Gral::getVars(2, 'coche_id', 0);
$operario_id = Gral::getVars(2, 'operario_id', 0);
$indice = Gral::getVars(2, 'indice', 0);

$pan_panol = PanPanol::getOxId($panol_id);
$veh_coche = VehCoche::getOxId($coche_id);
$ope_operario = OpeOperario::getOxId($operario_id);

$pdi_pedido_buscador_txt_cantidad = 1;

if($indice != 0){
    $array_imputar_masivo = Gral::getSes('PDI_PEDIDO_IMPUTAR_MASIVO');
    $cantidad = $array_imputar_masivo[$indice];
    
    $arr = explode('-', $indice);
    $insumo_id = $arr[0];
    $ot_id = $arr[1];
    $tarea_resuelta_id = $arr[2];

    $ins_insumo = InsInsumo::getOxId($insumo_id);
    $tal_orden_trabajo = TalOrdenTrabajo::getOxId($ot_id);
    $tal_tarea_resuelta = TalTareaResuelta::getOxId($tarea_resuelta_id);
    
    $pdi_pedido_buscador_txt_cantidad = $cantidad;
}

?>
<div class="datos buscador-insumo">
    
    <div class="col c1">
        <div class="par">
            <div class="label"><?php Lang::_lang('Panol Origen') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol->getDescripcion()) ?>
                <input type="hidden" id="hdn_pan_panol_id" name="hdn_pan_panol_id" value="<?php echo $panol_id ?>" size="3" />
            </div>
        </div>


        <div class="par">
            <div class="label"><?php Lang::_lang('Coche') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche->getDescripcion()) ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Marca / Modelo') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche->getVehModelo()->getDescripcionCompleta()) ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php echo Html::html_get_dbsuggest(1, 'pdi_pedido_buscador_dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest_custom.php?identificable=0&consumible=1', false, true, true, 'Ingrese ...', ($ins_insumo) ? $ins_insumo->getId() : null, ($ins_insumo) ? $ins_insumo->getDescripcion() : '') ?>		
                <div class="error insumo-identificado-label-error pdi_pedido_buscador_dbsug_ins_insumo_id_error"><?php Gral::_echo($pdi_pedido_buscador_dbsug_ins_insumo_id_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <input name='pdi_pedido_buscador_txt_cantidad' type='text' class='textbox spinner' id='pdi_pedido_buscador_txt_cantidad' value='<?php Gral::_echoTxt($pdi_pedido_buscador_txt_cantidad) ?>' size='5' />
                <div class="error insumo-identificado-label-error pdi_pedido_buscador_txt_cantidad_error"><?php Gral::_echo($pdi_pedido_buscador_txt_cantidad_error) ?></div>
            </div>
        </div>
        
        <div class="bloque-stock-panol-min">
            <?php include "bloque_stock_insumo_min.php" ?>
        </div>
        
    </div>
    
    <div class="col c2">

        <div class="par">
            <div class="label"><?php Lang::_lang('Operario') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_operario->getDescripcion()) ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('TalOrdenTrabajo') ?></div>
            <div class="dato">
                <?php echo Html::html_get_dbsuggest(1, 'pdi_pedido_buscador_dbsug_tal_orden_trabajo', 'ajax/modulos/tal_orden_trabajo/tal_orden_trabajo_dbsuggest_custom.php?veh_coche_id='.$veh_coche->getId().'&ope_operario_id='.$ope_operario->getId(), false, true, true, 'Ingrese ...', ($tal_orden_trabajo) ? $tal_orden_trabajo->getId() : null, ($tal_orden_trabajo) ? $tal_orden_trabajo->getCodigo() : '') ?>		
                <span class="boton agregar-ot" title="Crear Nueva Orden de Trabajo">+ Crear Nueva OT</span>

                <div class="error insumo-identificado-label-error pdi_pedido_buscador_dbsug_tal_orden_trabajo_id_error"><?php Gral::_echo($pdi_pedido_buscador_dbsug_tal_orden_trabajo_id_error) ?></div>
            </div>
        </div>
        
        <div class="bloque-tareas-resueltas">
            
            <h3><?php Lang::_lang('Tareas Resueltas') ?></h3>
            
            <div class="tareas-resueltas">
                <?php include "bloque_tareas_resueltas.php" ?>                
            </div>
            
        </div>
        
    </div>
    
    <div class="botonera">
        <input type="button" id="btn_seleccionar_insumo" name="btn_seleccionar_insumo" class="boton seleccionar-insumo" value="<?php Lang::_lang('Agregar a Lista') ?>" />
    </div>
    
</div>