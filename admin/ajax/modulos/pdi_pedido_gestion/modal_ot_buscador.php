<?php
include "_autoload.php";

$coche_id = Gral::getVars(2, 'coche_id', 0);
$panol_id = Gral::getVars(2, 'panol_id', 0);
$operario_id = Gral::getVars(2, 'operario_id', 0);

?>
<div class="datos buscador-ots" coche_id="<?php echo $coche_id ?>" panol_id="<?php echo $panol_id ?>" operario_id="<?php echo $operario_id ?>">
	<div class="buscador">
    	Ingrese tarea a buscar
    	<input type="text" class="textbox" id="txt_buscador_ot" name="txt_buscador_ot" value="" size="30">
        
        <input type="checkbox" name="chk_ver_todas_ots" id="chk_ver_todas_ots" value="1" />
        <label for="chk_ver_todas_ots">Buscar entre TODAS las OTs del Coche</label>
    </div>
    
    <div class="resultados">
    	&nbsp;
    </div>
    
    <input type="hidden" id="hdn_buscador_ot_coche_id" name="hdn_buscador_ot_coche_id" value="<?php echo $coche_id ?>" />
    <input type="hidden" id="hdn_buscador_ot_panol_id" name="hdn_buscador_ot_panol_id" value="<?php echo $panol_id ?>" />
    <input type="hidden" id="hdn_buscador_ot_operario_id" name="hdn_buscador_ot_operario_id" value="<?php echo $operario_id ?>" />
    
</div>