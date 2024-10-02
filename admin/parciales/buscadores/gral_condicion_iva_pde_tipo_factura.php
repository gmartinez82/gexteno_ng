<?php
include_once "_autoload.php";
$criterio = new Criterio(GralCondicionIvaPdeTipoFactura::SES_CRITERIOS);
$criterio->addTabla('gral_condicion_iva_pde_tipo_factura');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_condicion_iva_pde_tipo_factura'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_condicion_iva_pde_tipo_factura_descripcion' type='text' class='textbox' id='buscador_gral_condicion_iva_pde_tipo_factura_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_factura.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_condicion_iva_pde_tipo_factura_descripcion_comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_factura.descripcion');
			if(trim($buscador_gral_condicion_iva_pde_tipo_factura_descripcion_comparador) == '') $buscador_gral_condicion_iva_pde_tipo_factura_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_condicion_iva_pde_tipo_factura_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_condicion_iva_pde_tipo_factura_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_condicion_iva_pde_tipo_factura_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_factura.gral_condicion_iva_id'), 'textbox')?>
        	<?php 
			$buscador_gral_condicion_iva_pde_tipo_factura_gral_condicion_iva_id_comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_factura.gral_condicion_iva_id');
			if(trim($buscador_gral_condicion_iva_pde_tipo_factura_gral_condicion_iva_id_comparador) == '') $buscador_gral_condicion_iva_pde_tipo_factura_gral_condicion_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_condicion_iva_pde_tipo_factura_gral_condicion_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_condicion_iva_pde_tipo_factura_gral_condicion_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeTipofactura') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_condicion_iva_pde_tipo_factura_pde_tipo_factura_id', Gral::getCmbFiltro(PdeTipoFactura::getPdeTipoFacturasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_factura.pde_tipo_factura_id'), 'textbox')?>
        	<?php 
			$buscador_gral_condicion_iva_pde_tipo_factura_pde_tipo_factura_id_comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_factura.pde_tipo_factura_id');
			if(trim($buscador_gral_condicion_iva_pde_tipo_factura_pde_tipo_factura_id_comparador) == '') $buscador_gral_condicion_iva_pde_tipo_factura_pde_tipo_factura_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_condicion_iva_pde_tipo_factura_pde_tipo_factura_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_condicion_iva_pde_tipo_factura_pde_tipo_factura_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Predeterminado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_condicion_iva_pde_tipo_factura_predeterminado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_factura.predeterminado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_condicion_iva_pde_tipo_factura_predeterminado_comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_factura.predeterminado');
			if(trim($buscador_gral_condicion_iva_pde_tipo_factura_predeterminado_comparador) == '') $buscador_gral_condicion_iva_pde_tipo_factura_predeterminado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_condicion_iva_pde_tipo_factura_predeterminado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_condicion_iva_pde_tipo_factura_predeterminado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_condicion_iva_pde_tipo_factura_codigo' type='text' class='textbox' id='buscador_gral_condicion_iva_pde_tipo_factura_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_factura.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_condicion_iva_pde_tipo_factura_codigo_comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_factura.codigo');
			if(trim($buscador_gral_condicion_iva_pde_tipo_factura_codigo_comparador) == '') $buscador_gral_condicion_iva_pde_tipo_factura_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_condicion_iva_pde_tipo_factura_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_condicion_iva_pde_tipo_factura_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_condicion_iva_pde_tipo_factura_observacion' type='text' class='textbox' id='buscador_gral_condicion_iva_pde_tipo_factura_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_factura.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_condicion_iva_pde_tipo_factura_observacion_comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_factura.observacion');
			if(trim($buscador_gral_condicion_iva_pde_tipo_factura_observacion_comparador) == '') $buscador_gral_condicion_iva_pde_tipo_factura_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_condicion_iva_pde_tipo_factura_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_condicion_iva_pde_tipo_factura_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_condicion_iva_pde_tipo_factura_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_factura.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_condicion_iva_pde_tipo_factura_estado_comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_factura.estado');
			if(trim($buscador_gral_condicion_iva_pde_tipo_factura_estado_comparador) == '') $buscador_gral_condicion_iva_pde_tipo_factura_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_condicion_iva_pde_tipo_factura_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_condicion_iva_pde_tipo_factura_estado_comparador, 'textbox comparador') ?>
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

