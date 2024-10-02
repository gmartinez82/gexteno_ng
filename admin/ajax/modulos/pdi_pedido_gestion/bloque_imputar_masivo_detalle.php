<h3><?php Lang::_lang('Insumos a Imputar') ?></h3>
            
<?php if($pan_panol && $veh_coche && $ope_operario){ ?>
<table border="0" id="tbl_imputar_masivo_detalle">

    <tr>
        <th width="70"><?php Lang::_lang('Foto') ?></th>
        <th width="300"><?php Lang::_lang('Insumo') ?></th>
        <th width="110">en <?php Gral::_echo($pan_panol->getDescripcion()) ?></th>
        <th width="110"><?php Lang::_lang('A Consumir') ?></th>
        <th width="70"><?php Lang::_lang('OT') ?></th>
        <th width="400"><?php Lang::_lang('A colocar en') ?></th>
        <th width="50">&nbsp;</th>
    </tr>

    <?php
    foreach($array_imputar_masivo as $i => $cantidad){
        //Gral::prr($i);
        $arr = explode('-', $i);
        $insumo_id = $arr[0];
        $ot_id = $arr[1];
        $tarea_resuelta_id = $arr[2];

        $ins_insumo = InsInsumo::getOxId($insumo_id);
        $tal_orden_trabajo = TalOrdenTrabajo::getOxId($ot_id);
        $tal_tarea_resuelta = TalTareaResuelta::getOxId($tarea_resuelta_id);

        if(!$pan_panol) continue;
        if(!$veh_coche) continue;
        if(!$ope_operario) continue;

        if(!$ins_insumo) continue;
        if(!$tal_orden_trabajo) continue;
        if(!$tal_tarea_resuelta) continue;
        
        $ins_categoria = $ins_insumo->getInsCategoria();
        $ins_unidad_medida = $ins_insumo->getInsUnidadMedida();

        $tal_tarea_accion = $tal_tarea_resuelta->getTalTareaAccion();
        $tal_tarea_base = $tal_tarea_resuelta->getTalTareaBase();
        
        $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);
        $veh_coche_km = $veh_coche->getVehCocheKm();
        
        $ot_tachado = '';
        if($tal_orden_trabajo->getVehCocheId() != $veh_coche->getId()){
            $ot_tachado = 'tachado';
        }
        $tr_tachado = '';
        if($tal_tarea_resuelta->getOpeOperarioId() != $ope_operario->getId()){
            $tr_tachado = 'tachado';
        }

        $tal_insumo_asignado_en_coche = TalInsumoAsignado::getTalInsumoAsignadoActualEnCoche($veh_coche->getId(), $ins_insumo->getId());
        if($tal_insumo_asignado_en_coche){
            $tal_tarea_resuelta_historial = $tal_insumo_asignado_en_coche->getTalTareaResuelta();
            $diferencia_km = $veh_coche_km->getKm() - $tal_tarea_resuelta_historial->getKmCoche();
            $diferencia_km = $tal_insumo_asignado_en_coche->getKmActualInsumo();
        }
        
    ?>
    <tr class="uno" identificador="<?php echo $i ?>">
        <td align="center">
            <div class="avatar">
                <a href="<?php Gral::_echo($ins_insumo->getPathImagenPrincipal(true)) ?>">
                    <img src="<?php Gral::_echo($ins_insumo->getPathImagenPrincipal(true)) ?>" width="50" alt="imagen">
                </a>
            </div>
        </td>
        <td align="center">
            <div class="categoria">
                <?php Gral::_echo($ins_categoria->getDescripcion()) ?>
            </div>
            <div class="insumo">
                <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
            </div>
            
            <?php if($tal_insumo_asignado_en_coche){ ?>
            <div class="asignado" coche_id="<?php Gral::_echo($veh_coche->getId()) ?>" insumo_id="<?php Gral::_echo($ins_insumo->getId()) ?>">
                <img src="imgs/btn_historial.png" alt="historial" width="18" />
                <?php Gral::_echo(Gral::getFechaHoraToWeb($tal_insumo_asignado_en_coche->getFecha())) ?> hace <?php Gral::_echoInt($tal_insumo_asignado_en_coche->getKmInsumoConsumo()) ?> km.
            </div>
            <?php } ?>
            
            <div class="error insumo-identificado-label-error pdi_pedido_imputar_masivo_<?php echo $i ?>_error"></div>
            
        </td>
        <?php if($ins_stock_resumen){ ?>
        <td align="center"><strong><?php Gral::_echo($ins_stock_resumen->getCantidad()) ?></strong> <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?></td>
        <?php }else{ ?>
        <td align="center">N/I</td>
        <?php } ?>
        <td align="center"><strong><?php Gral::_echo($cantidad) ?></strong> <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?></td>
        <td align="center">
            <div class="ot <?php echo $ot_tachado ?>">
                <?php Gral::_echo($tal_orden_trabajo->getId()) ?>
            </div>
        </td>
        <td align="center">
            <div class="accion <?php echo $tr_tachado ?>">
                <?php Gral::_echo($tal_tarea_accion->getDescripcion()) ?>
            </div>
            <div class="tarea <?php echo $tr_tachado ?>">
                <?php Gral::_echo($tal_tarea_base->getCodigo()) ?>
            </div>
            <div class="mas-info <?php echo $tr_tachado ?>">
                <?php Gral::_echo($tal_tarea_resuelta->getOpeOperario()->getDescripcion()) ?> el <?php Gral::_echo(Gral::getFechaHoraToWeb($tal_tarea_resuelta->getCreado())) ?>
            </div>
        </td>
        <td align="center">
            <div class="acciones">
                <img class="accion modificar" src="imgs/btn_modi.gif" alt="modificar" />
                <img class="accion eliminar" src="imgs/btn_elim.gif" alt="modificar" />
            </div>
        </td>
    </tr>
    <?php } ?>

</table>

<div class="error div_error_general"></div>

<div class="botonera">
    <input type="button" id="btn_lista_limpiar" name="btn_lista_limpiar" class="boton limpiar-insumos" value="<?php Lang::_lang('Limpiar Lista') ?>" />
    <input type="button" id="btn_lista_agregar" name="btn_lista_agregar" class="boton agregar-insumo" value="<?php Lang::_lang('Agregar Insumo a Lista') ?>" />
</div>

<?php if(is_array($array_imputar_masivo) && count($array_imputar_masivo) > 0){ ?>
<div class="botonera">
    <input type="button" id="btn_lista_imputar_masivo" name="btn_lista_imputar_masivo" class="boton strong imputar-masivo" value="<?php Lang::_lang('Imputar Masivamente') ?>" />
</div>
<?php } ?>


<?php }else{ ?>
Debe seleccionar panol, coche y operario
<?php } ?>
