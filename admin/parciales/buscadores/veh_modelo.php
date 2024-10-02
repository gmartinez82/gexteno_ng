<?php
include_once "_autoload.php";
$criterio = new Criterio(VehModelo::SES_CRITERIOS);
$criterio->addTabla('veh_modelo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='veh_modelo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Marca') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_veh_modelo_veh_marca_id', Gral::getCmbFiltro(VehMarca::getVehMarcasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('veh_modelo.veh_marca_id'), 'textbox')?>
        	<?php 
			$buscador_veh_modelo_veh_marca_id_comparador = $criterio->getComparadorDeCampo('veh_modelo.veh_marca_id');
			if(trim($buscador_veh_modelo_veh_marca_id_comparador) == '') $buscador_veh_modelo_veh_marca_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_veh_modelo_veh_marca_id_comparador', Criterio::getComparadoresCmb(), $buscador_veh_modelo_veh_marca_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_veh_modelo_descripcion' type='text' class='textbox' id='buscador_veh_modelo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('veh_modelo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_veh_modelo_descripcion_comparador = $criterio->getComparadorDeCampo('veh_modelo.descripcion');
			if(trim($buscador_veh_modelo_descripcion_comparador) == '') $buscador_veh_modelo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_veh_modelo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_veh_modelo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_veh_modelo_codigo' type='text' class='textbox' id='buscador_veh_modelo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('veh_modelo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_veh_modelo_codigo_comparador = $criterio->getComparadorDeCampo('veh_modelo.codigo');
			if(trim($buscador_veh_modelo_codigo_comparador) == '') $buscador_veh_modelo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_veh_modelo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_veh_modelo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_veh_modelo_observacion' type='text' class='textbox' id='buscador_veh_modelo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('veh_modelo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_veh_modelo_observacion_comparador = $criterio->getComparadorDeCampo('veh_modelo.observacion');
			if(trim($buscador_veh_modelo_observacion_comparador) == '') $buscador_veh_modelo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_veh_modelo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_veh_modelo_observacion_comparador, 'textbox comparador') ?>
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

