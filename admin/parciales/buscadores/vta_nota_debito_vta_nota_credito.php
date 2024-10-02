<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaNotaDebitoVtaNotaCredito::SES_CRITERIOS);
$criterio->addTabla('vta_nota_debito_vta_nota_credito');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_nota_debito_vta_nota_credito'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_debito_vta_nota_credito_descripcion' type='text' class='textbox' id='buscador_vta_nota_debito_vta_nota_credito_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_debito_vta_nota_credito.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_debito_vta_nota_credito_descripcion_comparador = $criterio->getComparadorDeCampo('vta_nota_debito_vta_nota_credito.descripcion');
			if(trim($buscador_vta_nota_debito_vta_nota_credito_descripcion_comparador) == '') $buscador_vta_nota_debito_vta_nota_credito_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_nota_debito_vta_nota_credito_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_debito_vta_nota_credito_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaNotaDebito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_nota_debito_vta_nota_credito_vta_nota_debito_id', Gral::getCmbFiltro(VtaNotaDebito::getVtaNotaDebitosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_debito_vta_nota_credito.vta_nota_debito_id'), 'textbox')?>
        	<?php 
			$buscador_vta_nota_debito_vta_nota_credito_vta_nota_debito_id_comparador = $criterio->getComparadorDeCampo('vta_nota_debito_vta_nota_credito.vta_nota_debito_id');
			if(trim($buscador_vta_nota_debito_vta_nota_credito_vta_nota_debito_id_comparador) == '') $buscador_vta_nota_debito_vta_nota_credito_vta_nota_debito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_debito_vta_nota_credito_vta_nota_debito_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_debito_vta_nota_credito_vta_nota_debito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaNotaCredito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_nota_debito_vta_nota_credito_vta_nota_credito_id', Gral::getCmbFiltro(VtaNotaCredito::getVtaNotaCreditosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_debito_vta_nota_credito.vta_nota_credito_id'), 'textbox')?>
        	<?php 
			$buscador_vta_nota_debito_vta_nota_credito_vta_nota_credito_id_comparador = $criterio->getComparadorDeCampo('vta_nota_debito_vta_nota_credito.vta_nota_credito_id');
			if(trim($buscador_vta_nota_debito_vta_nota_credito_vta_nota_credito_id_comparador) == '') $buscador_vta_nota_debito_vta_nota_credito_vta_nota_credito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_debito_vta_nota_credito_vta_nota_credito_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_debito_vta_nota_credito_vta_nota_credito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_debito_vta_nota_credito_importe_afectado' type='text' class='textbox' id='buscador_vta_nota_debito_vta_nota_credito_importe_afectado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_debito_vta_nota_credito.importe_afectado')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_debito_vta_nota_credito_importe_afectado_comparador = $criterio->getComparadorDeCampo('vta_nota_debito_vta_nota_credito.importe_afectado');
			if(trim($buscador_vta_nota_debito_vta_nota_credito_importe_afectado_comparador) == '') $buscador_vta_nota_debito_vta_nota_credito_importe_afectado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_debito_vta_nota_credito_importe_afectado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_debito_vta_nota_credito_importe_afectado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_debito_vta_nota_credito_codigo' type='text' class='textbox' id='buscador_vta_nota_debito_vta_nota_credito_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_debito_vta_nota_credito.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_debito_vta_nota_credito_codigo_comparador = $criterio->getComparadorDeCampo('vta_nota_debito_vta_nota_credito.codigo');
			if(trim($buscador_vta_nota_debito_vta_nota_credito_codigo_comparador) == '') $buscador_vta_nota_debito_vta_nota_credito_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_nota_debito_vta_nota_credito_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_debito_vta_nota_credito_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_debito_vta_nota_credito_observacion' type='text' class='textbox' id='buscador_vta_nota_debito_vta_nota_credito_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_debito_vta_nota_credito.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_debito_vta_nota_credito_observacion_comparador = $criterio->getComparadorDeCampo('vta_nota_debito_vta_nota_credito.observacion');
			if(trim($buscador_vta_nota_debito_vta_nota_credito_observacion_comparador) == '') $buscador_vta_nota_debito_vta_nota_credito_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_nota_debito_vta_nota_credito_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_debito_vta_nota_credito_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_nota_debito_vta_nota_credito_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_debito_vta_nota_credito.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_nota_debito_vta_nota_credito_estado_comparador = $criterio->getComparadorDeCampo('vta_nota_debito_vta_nota_credito.estado');
			if(trim($buscador_vta_nota_debito_vta_nota_credito_estado_comparador) == '') $buscador_vta_nota_debito_vta_nota_credito_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_debito_vta_nota_credito_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_debito_vta_nota_credito_estado_comparador, 'textbox comparador') ?>
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

