<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$ins_insumo_pan_panol = new InsInsumoPanPanol();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');
    $ins_insumo = InsInsumo::getOxId($hdn_id);
    
    // se reciben variable por post
    $cmb_pde_centro_pedido_id = Gral::getVars(1, 'cmb_pde_centro_pedido_id', 0);
    $txt_costo = Gral::getVars(1, 'txt_costo', 0);
    $txa_observacion = Gral::getVars(1, 'txa_observacion', '');
    
    $estado = true;
    // se realizan los controles necesarios
    if(Ctrl::esVacio($cmb_pde_centro_pedido_id)){
        $estado = false; $cmb_pde_centro_pedido_id_error = 'Debe seleccionar un centro de pedido';
    }
    if(!Ctrl::esNumero($txt_costo) || $txt_costo <= 0){
        $estado = false; $txt_costo_error = 'Debe ingresar un costo real';
    }

    if($estado){
        
        $pde_centro_pedido = PdeCentroPedido::getOxId($cmb_pde_centro_pedido_id);
        
        $ins_insumo->setInsInsumoCostoActual(
                false,
                false,
                false,
                $pde_centro_pedido,
                $txt_costo,
                $txa_observacion
            );
        
        $hdn_error = 0;
    }
    
}else{
    $id = Gral::getVars(2, 'stock_resumen_id', 0);
    $ins_stock_resumen = InsStockResumen::getOxId($id);
    $ins_insumo = $ins_stock_resumen->getInsInsumo();    
}
$ins_categoria = $ins_insumo->getInsCategoria();

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_stock_resumen_gestion/modal_costo_agregar.php' >
      
    <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_insumo_pan_panol'>
        
        <tr>
          <td width='150' class='adm_carga_datos_titulos'>
              <?php Lang::_lang('InsCategoria') ?>
          </td>
          <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_ins_insumo_id">
                <div class="insumo">    
<strong><?php Gral::_echo($ins_categoria->getDescripcion()) ?></strong>
                </div>
          </td>
        </tr>
        
        <tr>
          <td width='150' class='adm_carga_datos_titulos'>
              <?php Lang::_lang('InsInsumo') ?>
          </td>
          <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_ins_insumo_id">
                <div class="insumo">    
<strong><?php Gral::_echo($ins_insumo->getDescripcion()) ?></strong>
                </div>
          </td>
        </tr>

        <tr>
          <td width='150' class='adm_carga_datos_titulos'>

          <?php Lang::_lang('PdeCentroPedido') ?>

          </td>
          <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_pan_ubi_piso_id">
                <?php Html::html_dib_select(1, 'cmb_pde_centro_pedido_id', PdeCentroPedido::getPdeCentroPedidosCmbFxCredencial(), $cmb_pde_centro_pedido_id, 'textbox '.$error_input_css)?>
          </td>
        </tr>

        <tr>
          <td width='150' class='adm_carga_datos_titulos'>
            <?php Lang::_lang('Costo del Insumo') ?>
          </td>
          <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_txt_punto_minimo">
            <?php $error_input_css = ($txt_costo_error) ? 'error-mensaje-input' : ''; ?>
            <input name='txt_costo' type='text' class='textbox <?php echo $error_input_css ?>' id='txt_costo' value='<?php Gral::_echoTxt($txt_costo) ?>' size='15' />
            <div class="error-mensaje-input-texto"><?php Gral::_echo($txt_costo_error) ?></div>
          </td>
        </tr>

        <tr>
          <td width='150' class='adm_carga_datos_titulos'>
            <?php Lang::_lang('Observaciones') ?>
          </td>
          <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_txt_punto_minimo">
            <?php $error_input_css = ($txa_observacion_error) ? 'error-mensaje-input' : ''; ?>
            <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($txa_observacion) ?></textarea>
            <div class="error-mensaje-input-texto"><?php Gral::_echo($txa_observacion_error) ?></div>
          </td>
        </tr>
        
				
      </table>
      <table border='0' align='center'>
        <tr>
          <td width='550' class='adm_carga_datos_botones'>
		  <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_insumo->getId(), true) ?>'/>
		  <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
		  
		  <input name='hdn_error' type='hidden' class='hdn_error' value='<?php echo $hdn_error ?>' />

		  <input name='btn_cerrar' type='button' class='btn_cerrar' value='<?php Lang::_lang('Cerrar') ?>' />
			  
		  <input name='btn_guardar' type='button' class='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' /></td>
        </tr>
      </table>
	  
	  
</form>
</body>
</html>
<script>
setInit();
</script>
