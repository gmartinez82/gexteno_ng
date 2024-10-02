<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeOrdenPagoEstado::SES_CRITERIOS);
$criterio->addTabla('pde_orden_pago_estado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_orden_pago_estado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_estado_descripcion' type='text' class='textbox' id='buscador_pde_orden_pago_estado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_estado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_estado_descripcion_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_estado.descripcion');
			if(trim($buscador_pde_orden_pago_estado_descripcion_comparador) == '') $buscador_pde_orden_pago_estado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_estado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOrdenPago') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_pde_orden_pago_id', Gral::getCmbFiltro(PdeOrdenPago::getPdeOrdenPagosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_estado.pde_orden_pago_id'), 'textbox')?>
        	<?php 
			$buscador_pde_orden_pago_estado_pde_orden_pago_id_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_estado.pde_orden_pago_id');
			if(trim($buscador_pde_orden_pago_estado_pde_orden_pago_id_comparador) == '') $buscador_pde_orden_pago_estado_pde_orden_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_pde_orden_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_estado_pde_orden_pago_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOrdenPagoTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_pde_orden_pago_tipo_estado_id', Gral::getCmbFiltro(PdeOrdenPagoTipoEstado::getPdeOrdenPagoTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_estado.pde_orden_pago_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_pde_orden_pago_estado_pde_orden_pago_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_estado.pde_orden_pago_tipo_estado_id');
			if(trim($buscador_pde_orden_pago_estado_pde_orden_pago_tipo_estado_id_comparador) == '') $buscador_pde_orden_pago_estado_pde_orden_pago_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_pde_orden_pago_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_estado_pde_orden_pago_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Inicial') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_inicial', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_estado.inicial'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_orden_pago_estado_inicial_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_estado.inicial');
			if(trim($buscador_pde_orden_pago_estado_inicial_comparador) == '') $buscador_pde_orden_pago_estado_inicial_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_inicial_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_estado_inicial_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Actual') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_actual', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_estado.actual'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_orden_pago_estado_actual_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_estado.actual');
			if(trim($buscador_pde_orden_pago_estado_actual_comparador) == '') $buscador_pde_orden_pago_estado_actual_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_actual_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_estado_actual_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvPreventista') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_prv_preventista_id', Gral::getCmbFiltro(PrvPreventista::getPrvPreventistasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_estado.prv_preventista_id'), 'textbox')?>
        	<?php 
			$buscador_pde_orden_pago_estado_prv_preventista_id_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_estado.prv_preventista_id');
			if(trim($buscador_pde_orden_pago_estado_prv_preventista_id_comparador) == '') $buscador_pde_orden_pago_estado_prv_preventista_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_prv_preventista_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_estado_prv_preventista_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEmpresaTransportadora') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_gral_empresa_transportadora_id', Gral::getCmbFiltro(GralEmpresaTransportadora::getGralEmpresaTransportadorasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_estado.gral_empresa_transportadora_id'), 'textbox')?>
        	<?php 
			$buscador_pde_orden_pago_estado_gral_empresa_transportadora_id_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_estado.gral_empresa_transportadora_id');
			if(trim($buscador_pde_orden_pago_estado_gral_empresa_transportadora_id_comparador) == '') $buscador_pde_orden_pago_estado_gral_empresa_transportadora_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_gral_empresa_transportadora_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_estado_gral_empresa_transportadora_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Guia') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_estado_guia' type='text' class='textbox' id='buscador_pde_orden_pago_estado_guia' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_estado.guia')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_estado_guia_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_estado.guia');
			if(trim($buscador_pde_orden_pago_estado_guia_comparador) == '') $buscador_pde_orden_pago_estado_guia_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_guia_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_estado_guia_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_estado_codigo' type='text' class='textbox' id='buscador_pde_orden_pago_estado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_estado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_estado_codigo_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_estado.codigo');
			if(trim($buscador_pde_orden_pago_estado_codigo_comparador) == '') $buscador_pde_orden_pago_estado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_estado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_estado_nota_interna' type='text' class='textbox' id='buscador_pde_orden_pago_estado_nota_interna' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_estado.nota_interna')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_estado_nota_interna_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_estado.nota_interna');
			if(trim($buscador_pde_orden_pago_estado_nota_interna_comparador) == '') $buscador_pde_orden_pago_estado_nota_interna_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_nota_interna_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_estado_nota_interna_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Publica') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_estado_nota_publica' type='text' class='textbox' id='buscador_pde_orden_pago_estado_nota_publica' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_estado.nota_publica')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_estado_nota_publica_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_estado.nota_publica');
			if(trim($buscador_pde_orden_pago_estado_nota_publica_comparador) == '') $buscador_pde_orden_pago_estado_nota_publica_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_nota_publica_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_estado_nota_publica_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_estado_observacion' type='text' class='textbox' id='buscador_pde_orden_pago_estado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_estado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_estado_observacion_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_estado.observacion');
			if(trim($buscador_pde_orden_pago_estado_observacion_comparador) == '') $buscador_pde_orden_pago_estado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_estado_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_estado.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_orden_pago_estado_estado_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_estado.estado');
			if(trim($buscador_pde_orden_pago_estado_estado_comparador) == '') $buscador_pde_orden_pago_estado_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_estado_estado_comparador, 'textbox comparador') ?>
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

