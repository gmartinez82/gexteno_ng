<?php
include_once "_autoload.php";
$criterio = new Criterio(PrvRubro::SES_CRITERIOS);
$criterio->addTabla('prv_rubro');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='prv_rubro'>
	
	<div class='par-buscador'>
	  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
	  <div class='dato'>
	  
		<?php Html::html_dib_select(1, 'buscador_prv_proveedor_prv_rubro_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb()), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor_prv_rubro.prv_proveedor_id'), 'textbox')?>
		<?php 
		$buscador_prv_proveedor_prv_rubro_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('prv_proveedor_prv_rubro.prv_proveedor_id');
		if(trim($buscador_prv_proveedor_prv_rubro_prv_proveedor_id_comparador) == '') $buscador_prv_proveedor_prv_rubro_prv_proveedor_id_comparador = Criterio::IGUAL;
		
		Html::html_dib_select(1, 'buscador_prv_proveedor_prv_rubro_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_prv_rubro_prv_proveedor_id_comparador, 'textbox comparador') ?>
	  </div>
	</div>
	  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_rubro_descripcion' type='text' class='textbox' id='buscador_prv_rubro_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_rubro.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_prv_rubro_descripcion_comparador = $criterio->getComparadorDeCampo('prv_rubro.descripcion');
			if(trim($buscador_prv_rubro_descripcion_comparador) == '') $buscador_prv_rubro_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_rubro_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_rubro_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_rubro_codigo' type='text' class='textbox' id='buscador_prv_rubro_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_rubro.codigo')) ?>' size='22' />
        	<?php 
			$buscador_prv_rubro_codigo_comparador = $criterio->getComparadorDeCampo('prv_rubro.codigo');
			if(trim($buscador_prv_rubro_codigo_comparador) == '') $buscador_prv_rubro_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_rubro_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_prv_rubro_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_rubro_observacion' type='text' class='textbox' id='buscador_prv_rubro_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_rubro.observacion')) ?>' size='22' />
        	<?php 
			$buscador_prv_rubro_observacion_comparador = $criterio->getComparadorDeCampo('prv_rubro.observacion');
			if(trim($buscador_prv_rubro_observacion_comparador) == '') $buscador_prv_rubro_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_rubro_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_rubro_observacion_comparador, 'textbox comparador') ?>
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

