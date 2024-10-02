<?php
include_once '_autoload.php';

$db_nombre_objeto = 'pde_oc';
$hdn_error = 1;

$pde_recepcion = new PdeRecepcion();

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');
        $pde_recepcion = PdeRecepcion::getOxId($hdn_id);
	
        $cmb_pan_panol_id = Gral::getVars(1, "cmb_pan_panol_id");
	$cmb_veh_coche_id = Gral::getVars(1, "cmb_veh_coche_id");
        $cmb_ope_chofer_id = Gral::getVars(1, "cmb_ope_chofer_id");
 	$txt_cantidad = Gral::getVars(1, "txt_cantidad", 0);
        $txa_observacion = Gral::getVars(1, "txa_observacion");
 	//Gral::prr($pde_oc);
	//exit;

	// control de datos
	$estado = true;

	if(Ctrl::esVacio($cmb_pan_panol_id)){ 
            $estado = false; $cmb_pan_panol_id_error = Lang::_lang('Debe seleccionar un Panol Destino', true); 
	}
        if(Ctrl::esVacio($cmb_veh_coche_id)){ 
            $estado = false; $cmb_veh_coche_id_error = Lang::_lang('Debe seleccionar un Coche', true); 
	}
        if(Ctrl::esVacio($cmb_ope_chofer_id)){ 
            $estado = false; $cmb_ope_chofer_id_error = Lang::_lang('Debe seleccionar un Chofer', true); 
	}      
	if(!Ctrl::esNumero($txt_cantidad) || trim($txt_cantidad) == 0){ 
            $estado = false; $txt_cantidad_error = Lang::_lang('Debe ingresar un valor mayor a 1', true); 
	}
        
	if($estado){
            $hdn_error = 0;
            //$pde_recepcion->save();

            // se registra estado de la recepcion, PdeRecepcionEstado
            $pde_recepcion_estado = $pde_recepcion->setPdeRecepcionEstado(
                    PdeRecepcionTipoEstado::TIPO_DESPACHADO_A_PANOL,
                    $pde_centro_recepcion_id = $pde_recepcion->getPdeCentroRecepcionId(), 
                    $pan_panol_id = $cmb_pan_panol_id, 
                    $cantidad = $txt_cantidad, 
                    $veh_coche_id = $cmb_veh_coche_id, 
                    $ope_chofer_id = $cmb_ope_chofer_id, 
                    $fecha_conciliacion = false, 
                    $observaciones = $txa_observacion
             );

            // se registra aviso destinatarios de la recepcion, PdeRecepcionDestinatario
            $pde_recepcion->setPdeRecepcionDestinatariosAviso();         

            // se envia aviso ---------------------------------------------------------------------
            $asunto = 'PDR Despacho a Pañol #'.$pde_recepcion->getCodigo().' '.date('d/m/Y H:m');
            $pde_recepcion->enviarAvisos($asunto);
            // ------------------------------------------------------------------------------------
	}
}else{
    $recepcion_id = Gral::getVars(2, 'recepcion_id', 0);
    $pde_recepcion = PdeRecepcion::getOxId($recepcion_id);
    
    $cmb_pan_panol_id = 0;
    $cmb_veh_coche_id = 0;
    $cmb_ope_chofer_id = 0;
    $txt_cantidad = $pde_recepcion->getCantidad();
}

?>
<form id='form_recepcion' name='form_recepcion' method='post' action='<?php echo Gral::getPath('path_http')."admin/ajax/modulos/pde_recepcion_gestion/modal_recepcion_despachar.php" ?>' >
<div class='datos' >

    <?php include "pde_recepcion_gestion_modal_top.php" ?>   

    <div class="par">
    	<div class="label"><?php Lang::_lang('Cod Recepcion') ?></div>
    	<div class="dato">
            <?php Gral::_echo($pde_recepcion->getCodigo()) ?>
        </div>
    </div>  
    
    <div class="par">
    	<div class="label"><?php Lang::_lang('Panol Destino') ?></div>
    	<div class="dato">
            <?php Html::html_dib_select(1, 'cmb_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(true),'...'), $cmb_pan_panol_id, 'textbox') ?>
            <div class="error"><?php Gral::_echo($cmb_pan_panol_id_error) ?></div>
        </div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Coche') ?></div>
    	<div class="dato">
            <?php Html::html_dib_select(1, 'cmb_veh_coche_id', Gral::getCmbFiltro(VehCoche::getVehCochesCmb(),'...'), $cmb_veh_coche_id, 'textbox') ?>
            <div class="error"><?php Gral::_echo($cmb_veh_coche_id_error) ?></div>
        </div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Chofer') ?></div>
    	<div class="dato">
            <?php Html::html_dib_select(1, 'cmb_ope_chofer_id', Gral::getCmbFiltro(OpeChofer::getOpeChofersCmb(),'...'), $cmb_ope_chofer_id, 'textbox') ?>
            <div class="error"><?php Gral::_echo($cmb_ope_chofer_id_error) ?></div>
        </div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Categoria') ?></div>
    	<div class="dato">
            <?php Gral::_echo($pde_recepcion->getInsInsumo()->getInsCategoria()->getDescripcion()) ?>
        </div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Insumo') ?></div>
    	<div class="dato">
            <?php Gral::_echo($pde_recepcion->getInsInsumo()->getDescripcion()) ?>
        </div>
    </div>
    
    <div class="par">
    	<div class="label"><?php Lang::_lang('Cantidad') ?></div>
    	<div class="dato">
            <input name='txt_cantidad' type='text' class='textbox spinner' id='txt_cantidad' value='<?php Gral::_echo($txt_cantidad) ?>' size='5' />
            <div class="error"><?php Gral::_echo($txt_cantidad_error) ?></div>
        </div>
    </div>
    
    <div class="par">
    	<div class="label"><?php Lang::_lang('Nro Comprobante') ?></div>
    	<div class="dato">
            <?php Gral::_echo($pde_recepcion->getNroComprobante()) ?>
        </div>
    </div>    

    <div class="par">
    	<div class="label"><?php Lang::_lang('Observaciones') ?></div>
    	<div class="dato">
            <textarea name='txa_observacion' rows='6' cols='80' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($txa_observacion) ?></textarea>
        </div>
    	<div class="error"></div>
    </div>

    <div class="botonera">
    	<input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Registrar Despacho') ?>' />
        <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pde_recepcion->getId() ?>' />

    	<input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
    	<input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se registro el Despacho correctamente') ?>' />
    </div>
    
</div>
</form>
