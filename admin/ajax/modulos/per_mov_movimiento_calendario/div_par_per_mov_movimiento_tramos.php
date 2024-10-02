<?php
if(is_array($per_mov_planificacion_tramos)):
    
    foreach($per_mov_planificacion_tramos as $per_mov_planificacion_tramo):
        $per_mov_planificacion_tramo_id = $per_mov_planificacion_tramo->getId();
        $tramo_desde                    = $per_mov_planificacion_tramo->getTramoDesde();
        $tramo_hasta                    = $per_mov_planificacion_tramo->getTramoHasta();
        $pln_jornada_tramo_id           = $per_mov_planificacion_tramo->getPlnJornadaTramoId();
?>
        <div class="pln-tramos">
            <div class="label">
            </div>
            <div class="dato">
                <input id="txt_tramo_desde_<?php Gral::_echo($pln_jornada_tramo_id); ?>" name="txt_tramo_desde[<?php Gral::_echo($pln_jornada_tramo_id); ?>]" type="text" class="textbox" value="<?php Gral::_echo($tramo_desde); ?>" size="12" />
                <input id="txt_tramo_hasta_<?php Gral::_echo($pln_jornada_tramo_id); ?>" name="txt_tramo_hasta[<?php Gral::_echo($pln_jornada_tramo_id); ?>]" type="text" class="textbox" value="<?php Gral::_echo($tramo_hasta); ?>" size="12" />
            </div>
        </div>
<?php
    endforeach;
    
endif;
?>