<?php
include "_autoload.php";

$db_nombre_objeto = 'pde_reclamo';
$hdn_error = 1;

$pde_recepcion = new PdeRecepcion();

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');
	$pde_recepcion = PdeRecepcion::getOxId($hdn_id);
	$pde_oc = $pde_recepcion->getPdeOc();

	$txt_fecha = Gral::getFechaToDB(Gral::getVars(1, "txt_fecha", 0));
    $txa_observacion = Gral::getVars(1, "txa_observacion");

	// control de datos
	$estado = true;
	if(!Ctrl::esFechaValida($txt_fecha)){ 
		$estado = false; $txt_fecha_error = Lang::_lang('Debe ingresar una fecha valida', true); 
	}

	if($estado){
            $hdn_error = 0;
            //$pde_recepcion->save();

            // se registra estado de la recepcion, PdeRecepcionEstado
            $pde_recepcion_estado = $pde_recepcion->setPdeRecepcionEstado(
                    PdeRecepcionTipoEstado::TIPO_FINALIZADO,
                    $pde_centro_recepcion_id = $pde_recepcion->getPdeCentroRecepcionId(), 
                    $pan_panol_id = null, 
                    $cantidad = 0, 
                    $veh_coche_id = null, 
                    $ope_chofer_id = null, 
                    $fecha_conciliacion = $txt_fecha, 
                    $observaciones = $txa_observacion
             );

            // se registra aviso destinatarios de la recepcion, PdeRecepcionDestinatario
            $pde_recepcion->setPdeRecepcionDestinatariosAviso();

            // se envia aviso ---------------------------------------------------------------------
            $asunto = 'PDR Finalizada #'.$pde_recepcion->getCodigo().' '.date('d/m/Y H:m');
            $pde_recepcion->enviarAvisos($asunto);
            // ------------------------------------------------------------------------------------
	}
}else{
	$recepcion_id = Gral::getVars(2, 'recepcion_id', 0);
	$pde_recepcion = new PdeRecepcion();
	if($pde_recepcion != 0){
			$pde_recepcion = PdeRecepcion::getOxId($recepcion_id);
	}
	$pde_recepcion->setPdeRecepcionLeido();
	$pde_oc = $pde_recepcion->getPdeOc();

    $txt_fecha = date('Y-m-d');
}


?>
<form id='form_recepcion' name='form_recepcion' method='post' action='<?php echo Gral::getPath('path_http')."admin/ajax/modulos/pde_recepcion_gestion/modal_registrar_pago.php" ?>' >
<div class="datos">

    <?php include "pde_recepcion_gestion_modal_top.php" ?>   

    <div class="par">
    	<div class="label"><?php Lang::_lang('PdeOc') ?></div>
    	<div class="dato"><?php Gral::_echo($pde_oc->getCodigo()) ?></div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('PdeRecepcion') ?></div>
    	<div class="dato"><?php Gral::_echo($pde_recepcion->getCodigo()) ?></div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Insumo') ?></div>
    	<div class="dato"><?php Gral::_echo($pde_recepcion->getInsInsumo()->getDescripcion()) ?></div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Cantidad') ?></div>
    	<div class="dato"><?php Gral::_echo($pde_recepcion->getCantidad()) ?> - (<?php Gral::_echo($pde_oc->getCantidad()) ?>)</div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Importe Unitario') ?></div>
    	<div class="dato"><?php Gral::_echoImp($pde_recepcion->getImporteUnidad()) ?>  - (<?php Gral::_echoImp($pde_oc->getImporteUnidad()) ?>)</div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Importe Total') ?></div>
    	<div class="dato"><?php Gral::_echoImp($pde_recepcion->getImporteTotal()) ?> - (<?php Gral::_echoImp($pde_oc->getImporteTotal()) ?>)</div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Fecha Entrega') ?></div>
    	<div class="dato"><?php Gral::_echo(Gral::getFechaToWeb($pde_recepcion->getFechaEntrega())) ?> - (<?php Gral::_echo(Gral::getFechaToWeb($pde_oc->getVencimiento())) ?>)</div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('PdeCentroRecepcion') ?></div>
    	<div class="dato"><?php Gral::_echo($pde_recepcion->getPdeCentroRecepcion()->getDescripcion()) ?> - (<?php Gral::_echo($pde_oc->getPdeCentroRecepcion()->getDescripcion()) ?>)</div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Fecha Pago') ?></div>
    	<div class="dato">
            <input name='txt_fecha' type='text' class='textbox date' id='txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($txt_fecha)) ?>' size='10' />
            <input type='button' id='cal_txt_fecha' value='...' />

            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha'
                });
            </script>
	    	<div class="error"><?php echo $txt_fecha_error ?></div>
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
    	<input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Registrar Pago') ?>' />
        <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pde_recepcion->getId() ?>' />

    	<input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
    	<input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se registro el Despacho correctamente') ?>' />
    </div>
    
</div>
</form>