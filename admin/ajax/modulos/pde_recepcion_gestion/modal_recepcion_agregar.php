<?php
include_once '_autoload.php';

$db_nombre_objeto = 'pde_oc';
$hdn_error = 1;

$pde_recepcion = new PdeRecepcion();

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');
	
        $cmb_pde_centro_recepcion_id = Gral::getVars(1, "cmb_pde_centro_recepcion_id");
	$cmb_prv_proveedor_id = Gral::getVars(1, "cmb_prv_proveedor_id");
        $cmb_ins_insumo_id = Gral::getVars(1, "cmb_ins_insumo_id");
        $cmb_ins_marca_id = Gral::getVars(1, "cmb_ins_marca_id");
	$txt_cantidad = Gral::getVars(1, "txt_cantidad", 0);
        $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "txt_importe_unitario", 0));
        $txt_nro_comprobante = Gral::getVars(1, "txt_nro_comprobante");
        $txt_fecha = Gral::getFechaToDB(Gral::getVars(1, "txt_fecha", 0));
	$txa_observacion = Gral::getVars(1, "txa_observacion");
	//Gral::prr($pde_oc);
	//exit;

	// control de datos
	$estado = true;

	if(Ctrl::esVacio($cmb_pde_centro_recepcion_id)){ 
            $estado = false; $cmb_pde_centro_recepcion_id_error = Lang::_lang('Debe seleccionar un Centro de Recepcion', true); 
	}
        if(Ctrl::esVacio($cmb_prv_proveedor_id)){ 
            $estado = false; $cmb_prv_proveedor_id_error = Lang::_lang('Debe seleccionar un Proveedor', true); 
	}
        if(Ctrl::esVacio($cmb_ins_insumo_id)){ 
            $estado = false; $cmb_ins_insumo_id_error = Lang::_lang('Debe seleccionar un Insumo', true); 
	}
        if(Ctrl::esVacio($cmb_ins_marca_id)){ 
            $estado = false; $cmb_ins_marca_id_error = Lang::_lang('Debe seleccionar una Marca', true); 
	}        
	if(!Ctrl::esNumero($txt_cantidad) || trim($txt_cantidad) == 0){ 
            $estado = false; $txt_cantidad_error = Lang::_lang('Debe ingresar un valor mayor a 1', true); 
	}
	if(!Ctrl::esNumero($txt_importe_unitario)){ 
            //$estado = false; $txt_importe_unitario_error = Lang::_lang('Debe ingresar un importe', true); 
	}
	if(!Ctrl::esNumero($txt_nro_comprobante)){ 
            //$estado = false; $txt_nro_comprobante_error = Lang::_lang('Debe ingresar un comprobante', true); 
	}
        if(!Ctrl::esFechaValida($txt_fecha)){ 
            $estado = false; $txt_fecha_error = Lang::_lang('Debe ingresar una fecha valida', true); 
	}
        
	if($estado){
            $hdn_error = 0;
            //$pde_oc->save();

            // se registra la recepcion extraordinaria
            $pde_recepcion = PdeRecepcion::addPdeRecepcion(
                    $cmb_pde_centro_recepcion_id,
                    $cmb_prv_proveedor_id, 
                    $cmb_ins_insumo_id, 
                    $cmb_ins_marca_id, 
                    $txt_cantidad, 
                    $txt_importe_unitario, 
                    $txt_nro_comprobante, 
                    $txt_fecha, 
                    $txa_observacion
                    );

            // se envia aviso ---------------------------------------------------------------------
            $asunto = 'PDE Recepcion #'.$pde_recepcion->getCodigo().' '.date('d/m/Y H:m');
            //$pde_recepcion->enviarAvisos($asunto);
            // ------------------------------------------------------------------------------------
	}
}else{    
    $cmb_pde_centro_recepcion_id = 0;
    $cmb_ins_insumo_id = 0;
    $txt_cantidad = 1;
    $txt_importe_unitario = 0;
    $txt_nro_comprobante = '';
    $txt_fecha = date('Y-m-d');
}

?>
<form id='form_recepcion' name='form_recepcion' method='post' action='<?php echo Gral::getPath('path_http')."admin/ajax/modulos/pde_recepcion_gestion/modal_recepcion_agregar.php" ?>' >
<div class='datos' >

    <?php //include "pde_oc_modal_top.php" ?>   

    <div class="par">
    	<div class="label"><?php Lang::_lang('Centro de Recepcion') ?></div>
    	<div class="dato">
            <?php Html::html_dib_select(1, 'cmb_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmbXUsUsuario(),'...'), $cmb_pde_centro_recepcion_id, 'textbox') ?>
            <div class="error"><?php Gral::_echo($cmb_pde_centro_recepcion_id_error) ?></div>
        </div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Proveedor') ?></div>
    	<div class="dato">
            <?php Html::html_dib_select(1, 'cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(),'...'), $cmb_prv_proveedor_id, 'textbox') ?>
            <div class="error"><?php Gral::_echo($cmb_prv_proveedor_id_error) ?></div>
        </div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Insumo') ?></div>
    	<div class="dato">
            <?php Html::html_dib_select(1, 'cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(),'...'), $cmb_ins_insumo_id, 'textbox') ?>
            <div class="error"><?php Gral::_echo($cmb_ins_insumo_id_error) ?></div>
        </div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Marca') ?></div>
    	<div class="dato">
            <?php Html::html_dib_select(1, 'cmb_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(),'...'), $cmb_ins_marca_id, 'textbox') ?>
            <div class="error"><?php Gral::_echo($cmb_ins_marca_id_error) ?></div>
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
        <div class="label"><?php Lang::_lang('Importe Unitario Real') ?></div>
        <div class="dato">
            <input name='txt_importe_unitario' type='text' class='textbox moneda' id='txt_importe_unitario' value='<?php Gral::_echoImp($txt_importe_unitario) ?>' size='15' />
            <div class="comentario">
                <?php Lang::_lang('Precio Final IVA Inc') ?><br />
                <?php Lang::_lang('Formato: AR$ 9.999,99') ?>
            </div>
            <div class="error"><?php Gral::_echo($txt_importe_unitario_error) ?></div>  
        </div>        
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Nro Comprobante') ?></div>
    	<div class="dato">
            <input name='txt_nro_comprobante' type='text' class='textbox' id='txt_nro_comprobante' value='<?php Gral::_echo($txt_nro_comprobante) ?>' size='15' />
            
            <div class="error"><?php Gral::_echo($txt_nro_comprobante_error) ?></div>  
        </div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Fecha Recepcion') ?></div>
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
    	<input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Registrar Recepcion') ?>' />
        <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pde_recepcion->getId() ?>' />

    	<input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
    	<input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se registro la Recepcion correctamente') ?>' />
    </div>
    
</div>
</form>
