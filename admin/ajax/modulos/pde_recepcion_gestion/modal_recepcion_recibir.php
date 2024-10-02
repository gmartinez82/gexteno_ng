<?php

/**
 * OJO, Falta modificar lo realizado en OC recibir oc en panol para registrar codigo_interno
 */


include_once '_autoload.php';

$db_nombre_objeto = 'pde_oc';
$hdn_error = 1;

$pde_recepcion = new PdeRecepcion();

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');
	$pde_recepcion = PdeRecepcion::getOxId($hdn_id);
	
	$cmb_ins_insumo_id = Gral::getVars(1, "cmb_ins_insumo_id");
	$txt_cantidad = Gral::getVars(1, "txt_cantidad", 0);
	$txa_observacion = Gral::getVars(1, "txa_observacion");
	
	$txt_insumo_identificado = $_POST['txt_insumo_identificado'];
	$cmb_ins_marca_id = $_POST['cmb_ins_marca_id'];
	$cmb_ins_insumo_instancia_id = $_POST['cmb_ins_insumo_instancia_id'];
	$txt_km = $_POST['txt_km'];
	$txt_km_total = $_POST['txt_km_total'];
	
	//Gral::prr($cmb_ins_insumo_instancia_id);
	//exit;
	
	$ins_insumo = InsInsumo::getOxId($cmb_ins_insumo_id);
	$cantidad = $txt_cantidad;
	$insumo_id = $pde_recepcion->getInsInsumoId();
	$pan_panol_id = ($pde_recepcion->getPanPanol()) ? $pde_recepcion->getPanPanol()->getId() : null;

	// control de datos
	$estado = true;

	if(Ctrl::esVacio($cmb_ins_insumo_id)){ 
            $estado = false; $cmb_ins_insumo_id_error = Lang::_lang('Debe seleccionar un Insumo', true); 
	}   
	if(!Ctrl::esNumero($txt_cantidad) || trim($txt_cantidad) == 0){ 
            $estado = false; $txt_cantidad_error = Lang::_lang('Debe ingresar un valor mayor a 1', true); 
	}
        
	if($ins_insumo->getIdentificable()){
		// se controlan los insumos identificados
		for($i = 1; $i <= $cantidad; $i++){
			// identificado
			if(Ctrl::esVacio($txt_insumo_identificado[$i])){ 
				$estado = false; $txt_insumo_identificado_error[$i] = Lang::_lang('Debe registrar Codigo', true); 
			}else{
				// control de duplicidad de codigos
				$o = InsInsumoIdentificado::getOxDescripcion(strtoupper(str_replace(' ', '', $txt_insumo_identificado[$i])));
				if($o){
					$txt_insumo_identificado_error[$i] = Lang::_lang('Ya Existe: '.$o->getDescripcionLarga(), true);
				}
				$cantidad_apariciones = Gral::getCantidadAparicionesEnArray($txt_insumo_identificado[$i], $txt_insumo_identificado);
				if($cantidad_apariciones > 1){
					$txt_insumo_identificado_error[$i] = Lang::_lang('Codigo Duplicado: '.$txt_insumo_identificado[$i], true);
				}
			}
			// marca
			if(Ctrl::esVacio($cmb_ins_marca_id[$i])){ 
				$estado = false; $cmb_ins_marca_id_error[$i] = Lang::_lang('Debe seleccionar Marca', true); 
			}
			// instancia
			if(Ctrl::esVacio($cmb_ins_insumo_instancia_id[$i])){ 
				$estado = false; $cmb_ins_insumo_instancia_id_error[$i] = Lang::_lang('Debe seleccionar Instancia', true); 
			}
			// km
			if(!Ctrl::esDigito($txt_km[$i])){ 
				$estado = false; $txt_km_error[$i] = Lang::_lang('Debe registrar km', true); 
			}
			// km total
			if(!Ctrl::esDigito($txt_km_total[$i])){ 
				$estado = false; $txt_km_total_error[$i] = Lang::_lang('Debe registrar km total', true); 
			}
		}
	}
        
        //$estado = false;
	if($estado){
            $hdn_error = 0;
            //$pde_recepcion->save();

            // se registra estado de la recepcion, PdeRecepcionEstado
            $pde_recepcion_estado = $pde_recepcion->setPdeRecepcionEstado(
                    PdeRecepcionTipoEstado::TIPO_RECIBIDO_POR_PANOL,
                    $pde_centro_recepcion_id = null, 
                    $pan_panol_id = $pan_panol_id, 
                    $cantidad = $txt_cantidad, 
                    $veh_coche_id = null, 
                    $ope_chofer_id = null, 
                    $fecha_conciliacion = false, 
                    $observaciones = $txa_observacion
             );

            // se registra aviso destinatarios de la recepcion, PdeRecepcionDestinatario
            $pde_recepcion->setPdeRecepcionDestinatariosAviso();

            $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_INGRESO;
            
            // se registra pedido para control y actualizacion de stock
            $pdi_pedido = PdiPedido::setPdiPedidoPorMovimientoManualDeInsumo(
                $ins_insumo->getId(), 
                $panol_origen = $pan_panol_id, 
                $panol_destino = $pan_panol_id, 
                $cantidad, 
                $observacion = 'Recepcion de Compra '.$pde_recepcion->getCodigo(),
                $ins_stock_tipo_movimiento_codigo
                );            

            // se registran los movimientos de insumo identificado
            if($ins_insumo->getIdentificable()){
                for($i = 1; $i <= $cantidad; $i++){
                    // se iniciliza el insumo identificado
                    $ins_insumo_identificado = InsInsumoIdentificado::setInicializarIdentificadoNuevoEnPanol(
                        $pdi_pedido,
                        $pde_recepcion, 
                        $pan_panol_id,
                        $ins_insumo->getId(),
                        $txt_insumo_identificado[$i], 
                            "",
                        $cmb_ins_marca_id[$i], 
                        $cmb_ins_insumo_instancia_id[$i], 
                        $txt_km[$i], 
                        $txt_km_total[$i],
                        $observaciones = 'Movimiento por Recepcion de Insumo en Pañol desde PDE'
                        );
                    
                    // se registra el costo inicial del insumo identificado
                    $ins_insumo_identificado->setInsInsumoIdentificadoCostoActual($pde_recepcion);
                }
            }
            
            // se envia aviso ---------------------------------------------------------------------
            $asunto = 'PDR Recibido #'.$pde_recepcion->getCodigo().' '.date('d/m/Y H:m');
            $pde_recepcion->enviarAvisos($asunto);
            // ------------------------------------------------------------------------------------
	}
}else{
    $recepcion_id = Gral::getVars(2, 'recepcion_id', 0);
    $pde_recepcion = PdeRecepcion::getOxId($recepcion_id);
    
    $ins_insumo = $pde_recepcion->getInsInsumo();
    
    $cmb_ins_insumo_id = $pde_recepcion->getInsInsumoId();
    $txt_cantidad = $pde_recepcion->getCantidad();
    
    $cantidad = $txt_cantidad;
    $insumo_id = $pde_recepcion->getInsInsumoId();
}

?>
<form id='form_recepcion' name='form_recepcion' method='post' action='<?php echo Gral::getPath('path_http')."admin/ajax/modulos/pde_recepcion_gestion/modal_recepcion_recibir.php" ?>' >
<div class='datos modal-recibir' >

    <?php include "pde_recepcion_gestion_modal_top.php" ?>   

    <div class="par">
    	<div class="label"><?php Lang::_lang('Panol que Recibe') ?></div>
    	<div class="dato">
            <?php Gral::_echo(($pde_recepcion->getPanPanol()) ? $pde_recepcion->getPanPanol()->getDescripcion() : '') ?>
        </div>
    </div>
    
    <div class="par">
    	<div class="label"><?php Lang::_lang('Cod Recepcion') ?></div>
    	<div class="dato">
            <?php Gral::_echo($pde_recepcion->getCodigo()) ?>
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
            <?php Html::html_dib_select(1, 'cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(true),'...'), $cmb_ins_insumo_id, 'textbox') ?>
            <div class="error"><?php Gral::_echo($cmb_ins_insumo_id_error) ?></div>
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
    

	<?php if($ins_insumo->getIdentificable()){ ?>
    <h4><?php Lang::_lang('Insumos Identificados') ?></h4>
    <div class="bloque bloque_insumos_identificados_entrantes">
        <?php include "bloque_insumos_identificados_entrantes.php" ?>
    </div>
    <?php } ?>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Observaciones') ?></div>
    	<div class="dato">
            <textarea name='txa_observacion' rows='4' cols='80' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($txa_observacion) ?></textarea>
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
