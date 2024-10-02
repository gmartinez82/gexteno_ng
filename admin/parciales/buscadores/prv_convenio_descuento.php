<?php
include_once "_autoload.php";
$criterio = new Criterio(PrvConvenioDescuento::SES_CRITERIOS);
$criterio->addTabla('prv_convenio_descuento');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='prv_convenio_descuento'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_convenio_descuento_descripcion' type='text' class='textbox' id='buscador_prv_convenio_descuento_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_convenio_descuento.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_prv_convenio_descuento_descripcion_comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.descripcion');
			if(trim($buscador_prv_convenio_descuento_descripcion_comparador) == '') $buscador_prv_convenio_descuento_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_convenio_descuento_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_convenio_descuento_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_convenio_descuento_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_convenio_descuento.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_prv_convenio_descuento_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.prv_proveedor_id');
			if(trim($buscador_prv_convenio_descuento_prv_proveedor_id_comparador) == '') $buscador_prv_convenio_descuento_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_convenio_descuento_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_convenio_descuento_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_convenio_descuento_codigo' type='text' class='textbox' id='buscador_prv_convenio_descuento_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_convenio_descuento.codigo')) ?>' size='22' />
        	<?php 
			$buscador_prv_convenio_descuento_codigo_comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.codigo');
			if(trim($buscador_prv_convenio_descuento_codigo_comparador) == '') $buscador_prv_convenio_descuento_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_convenio_descuento_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_prv_convenio_descuento_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Porc Descuento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_convenio_descuento_porcentaje_descuento' type='text' class='textbox' id='buscador_prv_convenio_descuento_porcentaje_descuento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_convenio_descuento.porcentaje_descuento')) ?>' size='22' />
        	<?php 
			$buscador_prv_convenio_descuento_porcentaje_descuento_comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.porcentaje_descuento');
			if(trim($buscador_prv_convenio_descuento_porcentaje_descuento_comparador) == '') $buscador_prv_convenio_descuento_porcentaje_descuento_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_convenio_descuento_porcentaje_descuento_comparador', Criterio::getComparadoresCmb(), $buscador_prv_convenio_descuento_porcentaje_descuento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_convenio_descuento_observacion' type='text' class='textbox' id='buscador_prv_convenio_descuento_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_convenio_descuento.observacion')) ?>' size='22' />
        	<?php 
			$buscador_prv_convenio_descuento_observacion_comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.observacion');
			if(trim($buscador_prv_convenio_descuento_observacion_comparador) == '') $buscador_prv_convenio_descuento_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_convenio_descuento_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_convenio_descuento_observacion_comparador, 'textbox comparador') ?>
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

