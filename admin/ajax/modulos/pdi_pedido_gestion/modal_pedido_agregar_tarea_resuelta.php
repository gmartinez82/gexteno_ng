<?php
include "_autoload.php";

$hdn_error = 1;
$ot_id = Gral::getVars(2, 'ot_id', 0);
$coche_id = Gral::getVars(2, 'coche_id', 0);
$operario_id = Gral::getVars(2, 'operario_id', 0);
$panol_id = Gral::getVars(2, 'panol_id', 0);

$tal_orden_trabajo = TalOrdenTrabajo::getOxId($ot_id);
$veh_coche = VehCoche::getOxId($coche_id);
$ope_operario = OpeOperario::getOxId($operario_id);
$pan_panol = PanPanol::getOxId($panol_id);
$glp_galpon = $pan_panol->getGlpGalpon();


if(Gral::esPost()){
}else{
}

?>
<div class="datos bloque-agregar-tarea-resuelta">

	<div class="col c1 tareas">
    	
        <div class="buscador">
        	Ingrese Tarea a Buscar
        	<input type="text" id="txt_buscador_tarea" name="txt_buscador_tarea" class="textbox" size="20" />
        </div>
        
        <div class="resultados">
			&nbsp;
        </div>
    </div>

	<div class="col c2 datos">
    
    	<?php include "bloque_tarea_resuelta_confirmar.php" ?>
        
	</div>
</div>
