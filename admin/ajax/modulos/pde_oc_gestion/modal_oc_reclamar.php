<?php
include_once '_autoload.php';

$db_nombre_objeto = 'pde_oc';
$hdn_error = 1;

$pde_oc = new PdeOc();

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');
	$pde_oc = PdeOc::getOxId($hdn_id);
	
	$pde_oc_cmb_reclamo_motivo_id = Gral::getVars(1, "pde_oc_cmb_reclamo_motivo_id");
	$pde_oc_txa_observacion = Gral::getVars(1, "pde_oc_txa_observacion");
	//Gral::prr($pde_oc);
	//exit;

	// control de datos
	$estado = true;

	if(Ctrl::esVacio($pde_oc_cmb_reclamo_motivo_id)){ 
		$estado = false; $pde_oc_cmb_reclamo_motivo_id_error = Lang::_lang('Debe seleccionar un Motivo', true); 
	}
                
	if($estado){
		$hdn_error = 0;
		//$pde_oc->save();
		
		// se registra el reclamo de la orden de compra
		$pde_oc_reclamo = $pde_oc->addPdeOcReclamo($pde_oc_cmb_reclamo_motivo_id, $pde_oc_txa_observacion);

		// se envia aviso ---------------------------------------------------------------------
		$asunto = 'PDE Reclamo #'.$pde_oc_reclamo->getCodigo().' '.date('d/m/Y H:m');
		$pde_oc_reclamo->enviarAvisos($asunto);
		// ------------------------------------------------------------------------------------
	}
}else{
    $oc_id = Gral::getVars(2, 'oc_id', 0);
    if($oc_id != 0){
        $pde_oc = PdeOc::getOxId($oc_id);
    } 
    $pde_oc->setPdeOcLeido();
}

?>
<form id='form_pedido' name='form_pedido' method='post' action='<?php echo Gral::getPath('path_http')."admin/ajax/modulos/pde_oc_gestion/modal_oc_reclamar.php" ?>' >
<div class='datos' >

    <?php include "pde_oc_gestion_modal_top.php" ?>   
    
    <div class="par">
    	<div class="label"><?php Lang::_lang('Motivo') ?></div>
    	<div class="dato">
            <?php Html::html_dib_select(1, 'pde_oc_cmb_reclamo_motivo_id', Gral::getCmbFiltro(PdeOcReclamoMotivo::getPdeOcReclamoMotivosCmb(),'Seleccione Motivo'), $pde_oc_cmb_reclamo_motivo_id, 'textbox') ?>
	    	<div class="error"><?php echo $pde_oc_cmb_reclamo_motivo_id_error ?></div>         
        </div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Observaciones') ?></div>
    	<div class="dato">
			<textarea name='pde_oc_txa_observacion' rows='10' cols='60' id='pde_oc_txa_observacion' class='textbox'><?php Gral::_echoTxt($pde_oc_txa_observacion) ?></textarea>
        </div>
    	<div class="error"></div>
    </div>

    <div class="botonera">
    	<input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Generar Reclamo') ?>' />
        <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pde_oc->getId() ?>' />

    	<input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
    	<input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se genero el Reclamo correctamente') ?>' />
    </div>
    
</div>
</form>
