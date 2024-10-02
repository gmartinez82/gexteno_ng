<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaRemitoEstado::SES_CRITERIOS);
$criterio->addTabla('vta_remito_estado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_remito_estado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_remito_estado_descripcion' type='text' class='textbox' id='buscador_vta_remito_estado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito_estado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_remito_estado_descripcion_comparador = $criterio->getComparadorDeCampo('vta_remito_estado.descripcion');
			if(trim($buscador_vta_remito_estado_descripcion_comparador) == '') $buscador_vta_remito_estado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_remito_estado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_estado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaRemito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_remito_estado_vta_remito_id', Gral::getCmbFiltro(VtaRemito::getVtaRemitosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito_estado.vta_remito_id'), 'textbox')?>
        	<?php 
			$buscador_vta_remito_estado_vta_remito_id_comparador = $criterio->getComparadorDeCampo('vta_remito_estado.vta_remito_id');
			if(trim($buscador_vta_remito_estado_vta_remito_id_comparador) == '') $buscador_vta_remito_estado_vta_remito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_estado_vta_remito_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_estado_vta_remito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaRemitoTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_remito_estado_vta_remito_tipo_estado_id', Gral::getCmbFiltro(VtaRemitoTipoEstado::getVtaRemitoTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito_estado.vta_remito_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_vta_remito_estado_vta_remito_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('vta_remito_estado.vta_remito_tipo_estado_id');
			if(trim($buscador_vta_remito_estado_vta_remito_tipo_estado_id_comparador) == '') $buscador_vta_remito_estado_vta_remito_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_estado_vta_remito_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_estado_vta_remito_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Inicial') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_remito_estado_inicial', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito_estado.inicial'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_remito_estado_inicial_comparador = $criterio->getComparadorDeCampo('vta_remito_estado.inicial');
			if(trim($buscador_vta_remito_estado_inicial_comparador) == '') $buscador_vta_remito_estado_inicial_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_estado_inicial_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_estado_inicial_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Actual') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_remito_estado_actual', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito_estado.actual'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_remito_estado_actual_comparador = $criterio->getComparadorDeCampo('vta_remito_estado.actual');
			if(trim($buscador_vta_remito_estado_actual_comparador) == '') $buscador_vta_remito_estado_actual_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_estado_actual_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_estado_actual_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cant Bultos') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_remito_estado_cantidad_bultos', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito_estado.cantidad_bultos'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_remito_estado_cantidad_bultos_comparador = $criterio->getComparadorDeCampo('vta_remito_estado.cantidad_bultos');
			if(trim($buscador_vta_remito_estado_cantidad_bultos_comparador) == '') $buscador_vta_remito_estado_cantidad_bultos_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_estado_cantidad_bultos_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_estado_cantidad_bultos_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Peso') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_remito_estado_peso', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito_estado.peso'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_remito_estado_peso_comparador = $criterio->getComparadorDeCampo('vta_remito_estado.peso');
			if(trim($buscador_vta_remito_estado_peso_comparador) == '') $buscador_vta_remito_estado_peso_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_estado_peso_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_estado_peso_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Costo Envio') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_remito_estado_costo_envio', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito_estado.costo_envio'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_remito_estado_costo_envio_comparador = $criterio->getComparadorDeCampo('vta_remito_estado.costo_envio');
			if(trim($buscador_vta_remito_estado_costo_envio_comparador) == '') $buscador_vta_remito_estado_costo_envio_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_estado_costo_envio_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_estado_costo_envio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEmpresaTransportadora') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_remito_estado_gral_empresa_transportadora_id', Gral::getCmbFiltro(GralEmpresaTransportadora::getGralEmpresaTransportadorasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito_estado.gral_empresa_transportadora_id'), 'textbox')?>
        	<?php 
			$buscador_vta_remito_estado_gral_empresa_transportadora_id_comparador = $criterio->getComparadorDeCampo('vta_remito_estado.gral_empresa_transportadora_id');
			if(trim($buscador_vta_remito_estado_gral_empresa_transportadora_id_comparador) == '') $buscador_vta_remito_estado_gral_empresa_transportadora_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_estado_gral_empresa_transportadora_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_estado_gral_empresa_transportadora_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Guia') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_remito_estado_guia' type='text' class='textbox' id='buscador_vta_remito_estado_guia' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito_estado.guia')) ?>' size='22' />
        	<?php 
			$buscador_vta_remito_estado_guia_comparador = $criterio->getComparadorDeCampo('vta_remito_estado.guia');
			if(trim($buscador_vta_remito_estado_guia_comparador) == '') $buscador_vta_remito_estado_guia_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_remito_estado_guia_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_estado_guia_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_remito_estado_codigo' type='text' class='textbox' id='buscador_vta_remito_estado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito_estado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_remito_estado_codigo_comparador = $criterio->getComparadorDeCampo('vta_remito_estado.codigo');
			if(trim($buscador_vta_remito_estado_codigo_comparador) == '') $buscador_vta_remito_estado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_remito_estado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_estado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_remito_estado_nota_interna' type='text' class='textbox' id='buscador_vta_remito_estado_nota_interna' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito_estado.nota_interna')) ?>' size='22' />
        	<?php 
			$buscador_vta_remito_estado_nota_interna_comparador = $criterio->getComparadorDeCampo('vta_remito_estado.nota_interna');
			if(trim($buscador_vta_remito_estado_nota_interna_comparador) == '') $buscador_vta_remito_estado_nota_interna_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_remito_estado_nota_interna_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_estado_nota_interna_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_remito_estado_observacion' type='text' class='textbox' id='buscador_vta_remito_estado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito_estado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_remito_estado_observacion_comparador = $criterio->getComparadorDeCampo('vta_remito_estado.observacion');
			if(trim($buscador_vta_remito_estado_observacion_comparador) == '') $buscador_vta_remito_estado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_remito_estado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_estado_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_remito_estado_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito_estado.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_remito_estado_estado_comparador = $criterio->getComparadorDeCampo('vta_remito_estado.estado');
			if(trim($buscador_vta_remito_estado_estado_comparador) == '') $buscador_vta_remito_estado_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_estado_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_estado_estado_comparador, 'textbox comparador') ?>
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

