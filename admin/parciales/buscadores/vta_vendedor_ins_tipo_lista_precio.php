<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaVendedorInsTipoListaPrecio::SES_CRITERIOS);
$criterio->addTabla('vta_vendedor_ins_tipo_lista_precio');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_vendedor_ins_tipo_lista_precio'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_ins_tipo_lista_precio_descripcion' type='text' class='textbox' id='buscador_vta_vendedor_ins_tipo_lista_precio_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_ins_tipo_lista_precio.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_ins_tipo_lista_precio_descripcion_comparador = $criterio->getComparadorDeCampo('vta_vendedor_ins_tipo_lista_precio.descripcion');
			if(trim($buscador_vta_vendedor_ins_tipo_lista_precio_descripcion_comparador) == '') $buscador_vta_vendedor_ins_tipo_lista_precio_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_ins_tipo_lista_precio_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_ins_tipo_lista_precio_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaVendedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_vendedor_ins_tipo_lista_precio_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_ins_tipo_lista_precio.vta_vendedor_id'), 'textbox')?>
        	<?php 
			$buscador_vta_vendedor_ins_tipo_lista_precio_vta_vendedor_id_comparador = $criterio->getComparadorDeCampo('vta_vendedor_ins_tipo_lista_precio.vta_vendedor_id');
			if(trim($buscador_vta_vendedor_ins_tipo_lista_precio_vta_vendedor_id_comparador) == '') $buscador_vta_vendedor_ins_tipo_lista_precio_vta_vendedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_ins_tipo_lista_precio_vta_vendedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_ins_tipo_lista_precio_vta_vendedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsTipoListaPrecio') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_vendedor_ins_tipo_lista_precio_ins_tipo_lista_precio_id', Gral::getCmbFiltro(InsTipoListaPrecio::getInsTipoListaPreciosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_ins_tipo_lista_precio.ins_tipo_lista_precio_id'), 'textbox')?>
        	<?php 
			$buscador_vta_vendedor_ins_tipo_lista_precio_ins_tipo_lista_precio_id_comparador = $criterio->getComparadorDeCampo('vta_vendedor_ins_tipo_lista_precio.ins_tipo_lista_precio_id');
			if(trim($buscador_vta_vendedor_ins_tipo_lista_precio_ins_tipo_lista_precio_id_comparador) == '') $buscador_vta_vendedor_ins_tipo_lista_precio_ins_tipo_lista_precio_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_ins_tipo_lista_precio_ins_tipo_lista_precio_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_ins_tipo_lista_precio_ins_tipo_lista_precio_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_ins_tipo_lista_precio_codigo' type='text' class='textbox' id='buscador_vta_vendedor_ins_tipo_lista_precio_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_ins_tipo_lista_precio.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_ins_tipo_lista_precio_codigo_comparador = $criterio->getComparadorDeCampo('vta_vendedor_ins_tipo_lista_precio.codigo');
			if(trim($buscador_vta_vendedor_ins_tipo_lista_precio_codigo_comparador) == '') $buscador_vta_vendedor_ins_tipo_lista_precio_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_ins_tipo_lista_precio_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_ins_tipo_lista_precio_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_ins_tipo_lista_precio_observacion' type='text' class='textbox' id='buscador_vta_vendedor_ins_tipo_lista_precio_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_ins_tipo_lista_precio.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_ins_tipo_lista_precio_observacion_comparador = $criterio->getComparadorDeCampo('vta_vendedor_ins_tipo_lista_precio.observacion');
			if(trim($buscador_vta_vendedor_ins_tipo_lista_precio_observacion_comparador) == '') $buscador_vta_vendedor_ins_tipo_lista_precio_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_ins_tipo_lista_precio_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_ins_tipo_lista_precio_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_vendedor_ins_tipo_lista_precio_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_ins_tipo_lista_precio.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_vendedor_ins_tipo_lista_precio_estado_comparador = $criterio->getComparadorDeCampo('vta_vendedor_ins_tipo_lista_precio.estado');
			if(trim($buscador_vta_vendedor_ins_tipo_lista_precio_estado_comparador) == '') $buscador_vta_vendedor_ins_tipo_lista_precio_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_ins_tipo_lista_precio_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_ins_tipo_lista_precio_estado_comparador, 'textbox comparador') ?>
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

