<?php
include_once "_autoload.php";
$criterio = new Criterio(InsInsumoDestinoTransformacion::SES_CRITERIOS);
$criterio->addTabla('ins_insumo_destino_transformacion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_insumo_destino_transformacion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_destino_transformacion_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_destino_transformacion.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_destino_transformacion_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.ins_insumo_id');
			if(trim($buscador_ins_insumo_destino_transformacion_ins_insumo_id_comparador) == '') $buscador_ins_insumo_destino_transformacion_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_destino_transformacion_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_destino_transformacion_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo Destino') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_insumo_destino_transformacion_ins_insumo_destino', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_destino_transformacion.ins_insumo_destino'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_insumo_destino_transformacion_ins_insumo_destino_comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.ins_insumo_destino');
			if(trim($buscador_ins_insumo_destino_transformacion_ins_insumo_destino_comparador) == '') $buscador_ins_insumo_destino_transformacion_ins_insumo_destino_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_destino_transformacion_ins_insumo_destino_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_destino_transformacion_ins_insumo_destino_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_destino_transformacion_cantidad' type='text' class='textbox' id='buscador_ins_insumo_destino_transformacion_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_destino_transformacion.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_destino_transformacion_cantidad_comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.cantidad');
			if(trim($buscador_ins_insumo_destino_transformacion_cantidad_comparador) == '') $buscador_ins_insumo_destino_transformacion_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_destino_transformacion_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_destino_transformacion_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_destino_transformacion_descripcion' type='text' class='textbox' id='buscador_ins_insumo_destino_transformacion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_destino_transformacion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_destino_transformacion_descripcion_comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.descripcion');
			if(trim($buscador_ins_insumo_destino_transformacion_descripcion_comparador) == '') $buscador_ins_insumo_destino_transformacion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_destino_transformacion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_destino_transformacion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_destino_transformacion_codigo' type='text' class='textbox' id='buscador_ins_insumo_destino_transformacion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_destino_transformacion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_destino_transformacion_codigo_comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.codigo');
			if(trim($buscador_ins_insumo_destino_transformacion_codigo_comparador) == '') $buscador_ins_insumo_destino_transformacion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_destino_transformacion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_destino_transformacion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_destino_transformacion_observacion' type='text' class='textbox' id='buscador_ins_insumo_destino_transformacion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_destino_transformacion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_destino_transformacion_observacion_comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.observacion');
			if(trim($buscador_ins_insumo_destino_transformacion_observacion_comparador) == '') $buscador_ins_insumo_destino_transformacion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_destino_transformacion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_destino_transformacion_observacion_comparador, 'textbox comparador') ?>
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

