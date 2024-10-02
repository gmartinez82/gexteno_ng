<?php
include_once '_autoload.php';

$db_nombre_objeto = 'pde_pedido';


$pde_pedido = new PdePedido();
$error = new Error();

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');
	
	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
        
	$pde_pedido = new PdePedido();
	if(trim($hdn_id) != '') $pde_pedido->setId($hdn_id, false);
	$pde_pedido->setInsInsumoId(Gral::getVars(1, "cmb_ins_insumo_id", null));
	$pde_pedido->setPdeUrgenciaId(Gral::getVars(1, "cmb_pde_urgencia_id", null));
	$pde_pedido->setCantidad(Gral::getVars(1, "txt_cantidad", 0));
	$pde_pedido->setVencimiento(Gral::getFechaToDb(Gral::getVars(1, "txt_vencimiento")));
	$pde_pedido->setObservacion(Gral::getVars(1, "txa_observacion"));
	$pde_pedido->setEstado(1);


        //Gral::prr($pde_pedido);
        //exit;
        
	$pde_pedido_estado = new PdePedido();
	if(trim($hdn_id) != ''){
            $pde_pedido_estado->setId($hdn_id);
            $pde_pedido->setEstado($pde_pedido_estado->getEstado());
				
	}else{
            $pde_pedido->setEstado(1);				
	}
	
        // control de datos
	$estado = true;
        
        
        
	if($estado){
            $error = $pde_pedido->control();
            if(!$error->getExisteError()){
                $pde_pedido->save();
                $pde_pedido->setCodigo($pde_pedido->getCodigoConCeros());
                $pde_pedido->save();
                
                // se registra estado del pedido, PdeEstado
                $pde_estado = $pde_pedido->setPdePedidoEstado(
                    PdeTipoEstado::TIPO_ESTADO_SOLICITADO,
                    $pde_pedido->getObservacion()
                 );

                // se registran destinatarios del pedido, PdePedidoDestinatario
                $pde_pedido->setPdePedidoDestinatarios(); // va en el estado APROBADO

            }
            
	}
}else{
    $pedido_id = Gral::getVars(2, 'pedido_id', 0);
    if($pedido_id != 0){
        $pde_pedido = PdePedido::getOxId($pedido_id);
    }
    $vencimiento = Date::sumarDias(date('Y-m-d'), 7);
    $pde_pedido->setVencimiento($vencimiento);
    
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_pedido->setId($hdn_id);
}

$parametro = new Parametro();
?>
<form id='form_div_modal' name='form_div_modal' method='post' action='<?php echo Gral::getPath('path_http')."admin/ajax/modulos/pde_pedido/modal_pedido_agregar.php" ?>' >
<div id='cuerpo' >

    <div class="alta datos">
      
	  <div class="titulo"><?php Lang::_lang('Datos del PdePedido') ?></div>
	  
	  <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_pde_pedido'>
        
		
        <tr>
          <td width='' class='adm_carga_datos_titulos'><?php Lang::_lang('InsInsumo') ?></td>
          <td width='' class='adm_carga_datos_datos' id="dato_cmb_ins_insumo_id">
          
<?php Html::html_dib_select(1, 'cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(),'Seleccione InsInsumo'), $pde_pedido->getInsInsumoId(), 'textbox') ?>

          </td>
        </tr>
        
        <tr>
          <td width='' class='adm_carga_datos_titulos'><?php Lang::_lang('PdeUrgencia') ?></td>
          <td width='' class='adm_carga_datos_datos' id="dato_cmb_pde_urgencia_id">
          
<?php Html::html_dib_select(1, 'cmb_pde_urgencia_id', Gral::getCmbFiltro(PdeUrgencia::getPdeUrgenciasCmb(),'Seleccione PdeUrgencia'), $pde_pedido->getPdeUrgenciaId(), 'textbox') ?>
          </td>
        </tr>
        
        <tr>
          <td width='' class='adm_carga_datos_titulos'><?php Lang::_lang('Cantidad') ?></td>
          <td width='' class='adm_carga_datos_datos' id="dato_txt_cantidad">
          
          <input name='txt_cantidad' type='text' class='textbox' id='txt_cantidad' value='<?php Gral::_echoTxt($pde_pedido->getCantidad()) ?>' size='5' />
          </td>
        </tr>
        
        <tr>
          <td width='' class='adm_carga_datos_titulos'><?php Lang::_lang('Vencimiento') ?></td>
          <td width='' class='adm_carga_datos_datos' id="dato_txt_vencimiento">
          
          <input name='txt_vencimiento' type='text' class='textbox' id='txt_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_pedido->getVencimiento())) ?>' size='20' />
            <input type='button' id='cal_txt_vencimiento' value='...' />

            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_txt_vencimiento'
                });
            </script>

          </td>
        </tr>
        
        <tr>
          <td width='' class='adm_carga_datos_titulos'><?php Lang::_lang('Observaciones') ?></td>
          <td width='' class='adm_carga_datos_datos' id="dato_txa_observacion">
          
    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox '><?php Gral::_echoTxt($pde_pedido->getObservacion()) ?></textarea>
          </td>
        </tr>
				
      </table>
      
	  <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
              <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_pedido->getId()) ?>'/>

              <input name='btn_guardar' class="btn_guardar" type='button' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />

              <input name='btn_publicar' class="btn_publicar" type='button' id='btn_publicar' value='<?php Lang::_lang('Publicar') ?>' />

              <input name='btn_regenerar' class="btn_regenerar" type='button' id='btn_regenerar' value='<?php Lang::_lang('Regenerar') ?>' />

            </td>
        </tr>
      </table>
	</div>


	<?php if(trim($pde_pedido->getId()) != ''){ ?>
    <div class="alta relaciones">
		
		<?php include Gral::getPathAbs()."admin/ajax/modulos/pde_pedido/bloque_relacion_pde_pedido_prv_proveedor.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/pde_pedido/bloque_relacion_pde_pedido_ins_marca.php" ?>
    </div>
	<?php } ?>


	  <?php //include 'pde_pedido_set.php' ?>
	  </div>

</div>

</form>
