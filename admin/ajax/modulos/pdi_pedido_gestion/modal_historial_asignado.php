<?php
include "_autoload.php";

$coche_id = Gral::getVars(2, 'coche_id', 0);
$insumo_id = Gral::getVars(2, 'insumo_id', 0);

$veh_coche = VehCoche::getOxId($coche_id);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$tal_insumo_asignados_en_coche = TalInsumoAsignado::getTalInsumoAsignadosEnCoche($veh_coche->getId(), $ins_insumo->getId());
//Gral::prr($tal_insumo_asignados_en_coche);
?>
<div class="datos">
    
    <h3><?php Gral::_echo($ins_insumo->getDescripcion()) ?></h3>
    
    <table class="tabla-historial">
        <tr>
            <th align="center" width="130"><?php Lang::_lang('Fecha') ?></th>
            <th align="center" width="100"><?php Lang::_lang('Accion') ?></th>
            <th align="left" width="400"><?php Lang::_lang('Posicion') ?></th>
            <th align="center" width="100"><?php Lang::_lang('Km de Ingreso') ?></th>
            <th align="center" width="100"><?php Lang::_lang('Km Insumo') ?></th>
            <th align="center" width="90"><?php Lang::_lang('OT') ?></th>
            <th align="center" width="100"><?php Lang::_lang('Operario') ?></th>
            <th align="center" width="100"><?php Lang::_lang('Galpon') ?></th>
            <th align="center" width="40"><?php Lang::_lang('Actual') ?></th>
        </tr>
        <?php 
        foreach($tal_insumo_asignados_en_coche as $tal_insumo_asignado_en_coche){ 
            $ins_insumo = $tal_insumo_asignado_en_coche->getInsInsumo();
            $veh_coche = $tal_insumo_asignado_en_coche->getVehCoche();
            $tal_tarea_resuelta = $tal_insumo_asignado_en_coche->getTalTareaResuelta();            

            $tal_tarea_base = $tal_insumo_asignado_en_coche->getTalTareaBase();
            $tal_tarea_accion = $tal_tarea_resuelta->getTalTareaAccion();
            $tal_orden_trabajo = $tal_tarea_resuelta->getTalOrdenTrabajo();
            $ope_operario = $tal_tarea_resuelta->getOpeOperario();
            $glp_galpon = $tal_tarea_resuelta->getGlpGalpon();
            
            $veh_coche_km = $veh_coche->getVehCocheKm();
            $diferencia_km = $veh_coche_km->getKm() - $tal_tarea_resuelta->getKmCoche();
            $diferencia_km = $tal_insumo_asignado_en_coche->getKmActualInsumo();
        ?>
        <tr>
            <td align="center"><?php Gral::_echo(Gral::getFechaHoraToWEB($tal_insumo_asignado_en_coche->getFecha())) ?></td>
            <td align="center"><?php Gral::_echo($tal_tarea_accion->getDescripcion()) ?></td>
            <td align="left"><?php Gral::_echo($tal_tarea_base->getCodigo()) ?></td>
            <td align="center"><?php Gral::_echoInt($tal_tarea_resuelta->getKmCoche()) ?> km</td>
            <td align="center"><?php Gral::_echoInt($tal_insumo_asignado_en_coche->getKmInsumoConsumo()) ?> km</td>
            <td align="center">
                <div class="ot-codigo">
                    <?php Gral::_echo($tal_orden_trabajo->getId()) ?>
                </div>
                <div class="ot-tipo-origen">
                    <?php Gral::_echo($tal_orden_trabajo->getTalOrdenTrabajoTipoOrigen()->getDescripcion()) ?>
                </div>
            </td>
            <td align="center"><?php Gral::_echo($ope_operario->getDescripcion()) ?></td>
            <td align="center"><?php Gral::_echo($glp_galpon->getDescripcion()) ?></td>
            <td align="center">
                <?php if($tal_insumo_asignado_en_coche->getActual()){ ?>
                <img src="imgs/btn_estado_1.gif" alt="estado">
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
    </table>
    
</div>