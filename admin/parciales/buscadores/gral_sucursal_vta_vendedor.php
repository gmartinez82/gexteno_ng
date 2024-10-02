<?php
include_once "_autoload.php";
$criterio = new Criterio(GralSucursalVtaVendedor::SES_CRITERIOS);
$criterio->addTabla('gral_sucursal_vta_vendedor');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_sucursal_vta_vendedor'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_sucursal_vta_vendedor_descripcion' type='text' class='textbox' id='buscador_gral_sucursal_vta_vendedor_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_sucursal_vta_vendedor_descripcion_comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.descripcion');
			if(trim($buscador_gral_sucursal_vta_vendedor_descripcion_comparador) == '') $buscador_gral_sucursal_vta_vendedor_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_vta_vendedor_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_vta_vendedor_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralSucursal') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_sucursal_vta_vendedor_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.gral_sucursal_id'), 'textbox')?>
        	<?php 
			$buscador_gral_sucursal_vta_vendedor_gral_sucursal_id_comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.gral_sucursal_id');
			if(trim($buscador_gral_sucursal_vta_vendedor_gral_sucursal_id_comparador) == '') $buscador_gral_sucursal_vta_vendedor_gral_sucursal_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_vta_vendedor_gral_sucursal_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_vta_vendedor_gral_sucursal_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaVendedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_sucursal_vta_vendedor_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.vta_vendedor_id'), 'textbox')?>
        	<?php 
			$buscador_gral_sucursal_vta_vendedor_vta_vendedor_id_comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.vta_vendedor_id');
			if(trim($buscador_gral_sucursal_vta_vendedor_vta_vendedor_id_comparador) == '') $buscador_gral_sucursal_vta_vendedor_vta_vendedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_vta_vendedor_vta_vendedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_vta_vendedor_vta_vendedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_sucursal_vta_vendedor_codigo' type='text' class='textbox' id='buscador_gral_sucursal_vta_vendedor_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_sucursal_vta_vendedor_codigo_comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.codigo');
			if(trim($buscador_gral_sucursal_vta_vendedor_codigo_comparador) == '') $buscador_gral_sucursal_vta_vendedor_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_vta_vendedor_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_vta_vendedor_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_sucursal_vta_vendedor_observacion' type='text' class='textbox' id='buscador_gral_sucursal_vta_vendedor_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_sucursal_vta_vendedor_observacion_comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.observacion');
			if(trim($buscador_gral_sucursal_vta_vendedor_observacion_comparador) == '') $buscador_gral_sucursal_vta_vendedor_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_vta_vendedor_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_vta_vendedor_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_sucursal_vta_vendedor_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_sucursal_vta_vendedor_estado_comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.estado');
			if(trim($buscador_gral_sucursal_vta_vendedor_estado_comparador) == '') $buscador_gral_sucursal_vta_vendedor_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_vta_vendedor_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_vta_vendedor_estado_comparador, 'textbox comparador') ?>
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

