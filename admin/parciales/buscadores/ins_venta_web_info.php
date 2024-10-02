<?php
include_once "_autoload.php";
$criterio = new Criterio(InsVentaWebInfo::SES_CRITERIOS);
$criterio->addTabla('ins_venta_web_info');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_venta_web_info'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_venta_web_info_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_web_info.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_venta_web_info_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.ins_insumo_id');
			if(trim($buscador_ins_venta_web_info_ins_insumo_id_comparador) == '') $buscador_ins_venta_web_info_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_web_info_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_web_info_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Titulo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_web_info_descripcion' type='text' class='textbox' id='buscador_ins_venta_web_info_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_web_info.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_web_info_descripcion_comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.descripcion');
			if(trim($buscador_ins_venta_web_info_descripcion_comparador) == '') $buscador_ins_venta_web_info_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_web_info_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_web_info_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_web_info_codigo' type='text' class='textbox' id='buscador_ins_venta_web_info_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_web_info.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_web_info_codigo_comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.codigo');
			if(trim($buscador_ins_venta_web_info_codigo_comparador) == '') $buscador_ins_venta_web_info_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_web_info_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_web_info_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_web_info_badge' type='text' class='textbox' id='buscador_ins_venta_web_info_badge' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_web_info.badge')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_web_info_badge_comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.badge');
			if(trim($buscador_ins_venta_web_info_badge_comparador) == '') $buscador_ins_venta_web_info_badge_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_web_info_badge_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_web_info_badge_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Desc Breve') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_web_info_descripcion_breve' type='text' class='textbox' id='buscador_ins_venta_web_info_descripcion_breve' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_web_info.descripcion_breve')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_web_info_descripcion_breve_comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.descripcion_breve');
			if(trim($buscador_ins_venta_web_info_descripcion_breve_comparador) == '') $buscador_ins_venta_web_info_descripcion_breve_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_web_info_descripcion_breve_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_web_info_descripcion_breve_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Desc Extendida') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_web_info_descripcion_ext' type='text' class='textbox' id='buscador_ins_venta_web_info_descripcion_ext' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_web_info.descripcion_ext')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_web_info_descripcion_ext_comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.descripcion_ext');
			if(trim($buscador_ins_venta_web_info_descripcion_ext_comparador) == '') $buscador_ins_venta_web_info_descripcion_ext_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_web_info_descripcion_ext_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_web_info_descripcion_ext_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_web_info_observacion' type='text' class='textbox' id='buscador_ins_venta_web_info_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_web_info.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_web_info_observacion_comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.observacion');
			if(trim($buscador_ins_venta_web_info_observacion_comparador) == '') $buscador_ins_venta_web_info_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_web_info_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_web_info_observacion_comparador, 'textbox comparador') ?>
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

