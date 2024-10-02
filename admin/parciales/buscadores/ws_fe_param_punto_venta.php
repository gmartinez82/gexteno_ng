<?php
include_once "_autoload.php";
$criterio = new Criterio(WsFeParamPuntoVenta::SES_CRITERIOS);
$criterio->addTabla('ws_fe_param_punto_venta');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ws_fe_param_punto_venta'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_param_punto_venta_descripcion' type='text' class='textbox' id='buscador_ws_fe_param_punto_venta_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_param_punto_venta.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_param_punto_venta_descripcion_comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.descripcion');
			if(trim($buscador_ws_fe_param_punto_venta_descripcion_comparador) == '') $buscador_ws_fe_param_punto_venta_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_param_punto_venta_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_param_punto_venta_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ws_fe_param_punto_venta_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_param_punto_venta.gral_empresa_id'), 'textbox')?>
        	<?php 
			$buscador_ws_fe_param_punto_venta_gral_empresa_id_comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.gral_empresa_id');
			if(trim($buscador_ws_fe_param_punto_venta_gral_empresa_id_comparador) == '') $buscador_ws_fe_param_punto_venta_gral_empresa_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_param_punto_venta_gral_empresa_id_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_param_punto_venta_gral_empresa_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CUIT') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_param_punto_venta_cuit' type='text' class='textbox' id='buscador_ws_fe_param_punto_venta_cuit' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_param_punto_venta.cuit')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_param_punto_venta_cuit_comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.cuit');
			if(trim($buscador_ws_fe_param_punto_venta_cuit_comparador) == '') $buscador_ws_fe_param_punto_venta_cuit_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_param_punto_venta_cuit_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_param_punto_venta_cuit_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_param_punto_venta_codigo' type='text' class='textbox' id='buscador_ws_fe_param_punto_venta_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_param_punto_venta.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_param_punto_venta_codigo_comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.codigo');
			if(trim($buscador_ws_fe_param_punto_venta_codigo_comparador) == '') $buscador_ws_fe_param_punto_venta_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_param_punto_venta_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_param_punto_venta_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_param_punto_venta_numero' type='text' class='textbox' id='buscador_ws_fe_param_punto_venta_numero' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_param_punto_venta.numero')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_param_punto_venta_numero_comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.numero');
			if(trim($buscador_ws_fe_param_punto_venta_numero_comparador) == '') $buscador_ws_fe_param_punto_venta_numero_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_param_punto_venta_numero_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_param_punto_venta_numero_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Tipo de Emision') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_param_punto_venta_tipo_emision' type='text' class='textbox' id='buscador_ws_fe_param_punto_venta_tipo_emision' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_param_punto_venta.tipo_emision')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_param_punto_venta_tipo_emision_comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.tipo_emision');
			if(trim($buscador_ws_fe_param_punto_venta_tipo_emision_comparador) == '') $buscador_ws_fe_param_punto_venta_tipo_emision_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_param_punto_venta_tipo_emision_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_param_punto_venta_tipo_emision_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Bloqueado') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_param_punto_venta_bloqueado' type='text' class='textbox' id='buscador_ws_fe_param_punto_venta_bloqueado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_param_punto_venta.bloqueado')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_param_punto_venta_bloqueado_comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.bloqueado');
			if(trim($buscador_ws_fe_param_punto_venta_bloqueado_comparador) == '') $buscador_ws_fe_param_punto_venta_bloqueado_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_param_punto_venta_bloqueado_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_param_punto_venta_bloqueado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Baja') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_param_punto_venta_fecha_baja' type='text' class='textbox' id='buscador_ws_fe_param_punto_venta_fecha_baja' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_param_punto_venta.fecha_baja')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_param_punto_venta_fecha_baja_comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.fecha_baja');
			if(trim($buscador_ws_fe_param_punto_venta_fecha_baja_comparador) == '') $buscador_ws_fe_param_punto_venta_fecha_baja_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_param_punto_venta_fecha_baja_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_param_punto_venta_fecha_baja_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_param_punto_venta_observacion' type='text' class='textbox' id='buscador_ws_fe_param_punto_venta_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_param_punto_venta.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_param_punto_venta_observacion_comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.observacion');
			if(trim($buscador_ws_fe_param_punto_venta_observacion_comparador) == '') $buscador_ws_fe_param_punto_venta_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_param_punto_venta_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_param_punto_venta_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		     
  <div class='botones'>
    <input name='btn_buscar' type='submit' id='btn_buscar' value='&nbsp;&nbsp;&nbsp; <?php Lang::_lang('Buscar') ?>' />    
    <input name='btn_limpiar' type='submit' id='btn_limpiar' value='<?php Lang::_lang('Limpiar') ?>' />
  </div>

</form>
</div>
<script>
try{
	setInit();
	setInitAdm();
}catch(e){}
</script>

