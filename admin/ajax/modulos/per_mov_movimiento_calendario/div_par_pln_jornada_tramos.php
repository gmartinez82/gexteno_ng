<?php
if(is_array($pln_jornada_tramos)):
    
    foreach($pln_jornada_tramos as $pln_jornada_tramo):
        
        $pln_tramo_id = $pln_jornada_tramo->getId();
        $tramo_desde  = $pln_jornada_tramo->getTramoDesde();
        $tramo_hasta  = $pln_jornada_tramo->getTramoHasta();
?>
        <div class="pln-tramos">
            <div class="label">
            </div>
            <div class="dato">
                <input id="txt_tramo_desde_<?php Gral::_echo($pln_tramo_id); ?>" name="txt_tramo_desde[<?php Gral::_echo($pln_tramo_id); ?>]" type="text" class="textbox" value="<?php Gral::_echo($tramo_desde); ?>" size="12" />
                <input id="txt_tramo_hasta_<?php Gral::_echo($pln_tramo_id); ?>" name="txt_tramo_hasta[<?php Gral::_echo($pln_tramo_id); ?>]" type="text" class="textbox" value="<?php Gral::_echo($tramo_hasta); ?>" size="12" />
            </div>
        </div>
<?php
    endforeach;
    
endif;
?>