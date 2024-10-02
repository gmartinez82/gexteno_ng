<?php
include_once "_autoload.php";
$criterio = new Criterio(PrvDomicilio::SES_CRITERIOS);
$criterio->addTabla('prv_domicilio');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='prv_domicilio'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_domicilio_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_domicilio.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_prv_domicilio_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('prv_domicilio.prv_proveedor_id');
			if(trim($buscador_prv_domicilio_prv_proveedor_id_comparador) == '') $buscador_prv_domicilio_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_domicilio_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_domicilio_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Domicilio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_domicilio_descripcion' type='text' class='textbox' id='buscador_prv_domicilio_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_domicilio.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_prv_domicilio_descripcion_comparador = $criterio->getComparadorDeCampo('prv_domicilio.descripcion');
			if(trim($buscador_prv_domicilio_descripcion_comparador) == '') $buscador_prv_domicilio_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_domicilio_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_domicilio_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_domicilio_codigo' type='text' class='textbox' id='buscador_prv_domicilio_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_domicilio.codigo')) ?>' size='22' />
        	<?php 
			$buscador_prv_domicilio_codigo_comparador = $criterio->getComparadorDeCampo('prv_domicilio.codigo');
			if(trim($buscador_prv_domicilio_codigo_comparador) == '') $buscador_prv_domicilio_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_domicilio_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_prv_domicilio_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_domicilio_observacion' type='text' class='textbox' id='buscador_prv_domicilio_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_domicilio.observacion')) ?>' size='22' />
        	<?php 
			$buscador_prv_domicilio_observacion_comparador = $criterio->getComparadorDeCampo('prv_domicilio.observacion');
			if(trim($buscador_prv_domicilio_observacion_comparador) == '') $buscador_prv_domicilio_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_domicilio_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_domicilio_observacion_comparador, 'textbox comparador') ?>
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

