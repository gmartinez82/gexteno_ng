<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaNotaDebitoWsFeOpeSolicitud::SES_CRITERIOS);
$criterio->addTabla('vta_nota_debito_ws_fe_ope_solicitud');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_nota_debito_ws_fe_ope_solicitud'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_debito_ws_fe_ope_solicitud_descripcion' type='text' class='textbox' id='buscador_vta_nota_debito_ws_fe_ope_solicitud_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_debito_ws_fe_ope_solicitud.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_debito_ws_fe_ope_solicitud_descripcion_comparador = $criterio->getComparadorDeCampo('vta_nota_debito_ws_fe_ope_solicitud.descripcion');
			if(trim($buscador_vta_nota_debito_ws_fe_ope_solicitud_descripcion_comparador) == '') $buscador_vta_nota_debito_ws_fe_ope_solicitud_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_nota_debito_ws_fe_ope_solicitud_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_debito_ws_fe_ope_solicitud_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaNotaDebito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_nota_debito_ws_fe_ope_solicitud_vta_nota_debito_id', Gral::getCmbFiltro(VtaNotaDebito::getVtaNotaDebitosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_debito_ws_fe_ope_solicitud.vta_nota_debito_id'), 'textbox')?>
        	<?php 
			$buscador_vta_nota_debito_ws_fe_ope_solicitud_vta_nota_debito_id_comparador = $criterio->getComparadorDeCampo('vta_nota_debito_ws_fe_ope_solicitud.vta_nota_debito_id');
			if(trim($buscador_vta_nota_debito_ws_fe_ope_solicitud_vta_nota_debito_id_comparador) == '') $buscador_vta_nota_debito_ws_fe_ope_solicitud_vta_nota_debito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_debito_ws_fe_ope_solicitud_vta_nota_debito_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_debito_ws_fe_ope_solicitud_vta_nota_debito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeOpeSolicitud') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_nota_debito_ws_fe_ope_solicitud_ws_fe_ope_solicitud_id', Gral::getCmbFiltro(WsFeOpeSolicitud::getWsFeOpeSolicitudsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_debito_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id'), 'textbox')?>
        	<?php 
			$buscador_vta_nota_debito_ws_fe_ope_solicitud_ws_fe_ope_solicitud_id_comparador = $criterio->getComparadorDeCampo('vta_nota_debito_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id');
			if(trim($buscador_vta_nota_debito_ws_fe_ope_solicitud_ws_fe_ope_solicitud_id_comparador) == '') $buscador_vta_nota_debito_ws_fe_ope_solicitud_ws_fe_ope_solicitud_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_debito_ws_fe_ope_solicitud_ws_fe_ope_solicitud_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_debito_ws_fe_ope_solicitud_ws_fe_ope_solicitud_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_debito_ws_fe_ope_solicitud_codigo' type='text' class='textbox' id='buscador_vta_nota_debito_ws_fe_ope_solicitud_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_debito_ws_fe_ope_solicitud.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_debito_ws_fe_ope_solicitud_codigo_comparador = $criterio->getComparadorDeCampo('vta_nota_debito_ws_fe_ope_solicitud.codigo');
			if(trim($buscador_vta_nota_debito_ws_fe_ope_solicitud_codigo_comparador) == '') $buscador_vta_nota_debito_ws_fe_ope_solicitud_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_nota_debito_ws_fe_ope_solicitud_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_debito_ws_fe_ope_solicitud_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_debito_ws_fe_ope_solicitud_observacion' type='text' class='textbox' id='buscador_vta_nota_debito_ws_fe_ope_solicitud_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_debito_ws_fe_ope_solicitud.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_debito_ws_fe_ope_solicitud_observacion_comparador = $criterio->getComparadorDeCampo('vta_nota_debito_ws_fe_ope_solicitud.observacion');
			if(trim($buscador_vta_nota_debito_ws_fe_ope_solicitud_observacion_comparador) == '') $buscador_vta_nota_debito_ws_fe_ope_solicitud_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_nota_debito_ws_fe_ope_solicitud_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_debito_ws_fe_ope_solicitud_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_nota_debito_ws_fe_ope_solicitud_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_debito_ws_fe_ope_solicitud.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_nota_debito_ws_fe_ope_solicitud_estado_comparador = $criterio->getComparadorDeCampo('vta_nota_debito_ws_fe_ope_solicitud.estado');
			if(trim($buscador_vta_nota_debito_ws_fe_ope_solicitud_estado_comparador) == '') $buscador_vta_nota_debito_ws_fe_ope_solicitud_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_debito_ws_fe_ope_solicitud_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_debito_ws_fe_ope_solicitud_estado_comparador, 'textbox comparador') ?>
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

