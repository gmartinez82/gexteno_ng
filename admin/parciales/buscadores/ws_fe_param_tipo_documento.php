<?php
include_once "_autoload.php";
$criterio = new Criterio(WsFeParamTipoDocumento::SES_CRITERIOS);
$criterio->addTabla('ws_fe_param_tipo_documento');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ws_fe_param_tipo_documento'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_param_tipo_documento_descripcion' type='text' class='textbox' id='buscador_ws_fe_param_tipo_documento_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_param_tipo_documento.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_param_tipo_documento_descripcion_comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_documento.descripcion');
			if(trim($buscador_ws_fe_param_tipo_documento_descripcion_comparador) == '') $buscador_ws_fe_param_tipo_documento_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_param_tipo_documento_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_param_tipo_documento_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_param_tipo_documento_codigo' type='text' class='textbox' id='buscador_ws_fe_param_tipo_documento_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_param_tipo_documento.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_param_tipo_documento_codigo_comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_documento.codigo');
			if(trim($buscador_ws_fe_param_tipo_documento_codigo_comparador) == '') $buscador_ws_fe_param_tipo_documento_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_param_tipo_documento_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_param_tipo_documento_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Afip') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_param_tipo_documento_codigo_afip' type='text' class='textbox' id='buscador_ws_fe_param_tipo_documento_codigo_afip' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_param_tipo_documento.codigo_afip')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_param_tipo_documento_codigo_afip_comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_documento.codigo_afip');
			if(trim($buscador_ws_fe_param_tipo_documento_codigo_afip_comparador) == '') $buscador_ws_fe_param_tipo_documento_codigo_afip_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_param_tipo_documento_codigo_afip_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_param_tipo_documento_codigo_afip_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Desde') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_param_tipo_documento_fecha_desde' type='text' class='textbox' id='buscador_ws_fe_param_tipo_documento_fecha_desde' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_param_tipo_documento.fecha_desde')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_param_tipo_documento_fecha_desde_comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_documento.fecha_desde');
			if(trim($buscador_ws_fe_param_tipo_documento_fecha_desde_comparador) == '') $buscador_ws_fe_param_tipo_documento_fecha_desde_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_param_tipo_documento_fecha_desde_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_param_tipo_documento_fecha_desde_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Hasta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_param_tipo_documento_fecha_hasta' type='text' class='textbox' id='buscador_ws_fe_param_tipo_documento_fecha_hasta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_param_tipo_documento.fecha_hasta')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_param_tipo_documento_fecha_hasta_comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_documento.fecha_hasta');
			if(trim($buscador_ws_fe_param_tipo_documento_fecha_hasta_comparador) == '') $buscador_ws_fe_param_tipo_documento_fecha_hasta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_param_tipo_documento_fecha_hasta_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_param_tipo_documento_fecha_hasta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_param_tipo_documento_observacion' type='text' class='textbox' id='buscador_ws_fe_param_tipo_documento_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_param_tipo_documento.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_param_tipo_documento_observacion_comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_documento.observacion');
			if(trim($buscador_ws_fe_param_tipo_documento_observacion_comparador) == '') $buscador_ws_fe_param_tipo_documento_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_param_tipo_documento_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_param_tipo_documento_observacion_comparador, 'textbox comparador') ?>
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

