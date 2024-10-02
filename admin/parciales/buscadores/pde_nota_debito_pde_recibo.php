<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeNotaDebitoPdeRecibo::SES_CRITERIOS);
$criterio->addTabla('pde_nota_debito_pde_recibo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_nota_debito_pde_recibo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_pde_recibo_descripcion' type='text' class='textbox' id='buscador_pde_nota_debito_pde_recibo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito_pde_recibo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_pde_recibo_descripcion_comparador = $criterio->getComparadorDeCampo('pde_nota_debito_pde_recibo.descripcion');
			if(trim($buscador_pde_nota_debito_pde_recibo_descripcion_comparador) == '') $buscador_pde_nota_debito_pde_recibo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_recibo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_pde_recibo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeNotaDebito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_recibo_pde_nota_debito_id', Gral::getCmbFiltro(PdeNotaDebito::getPdeNotaDebitosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito_pde_recibo.pde_nota_debito_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_pde_recibo_pde_nota_debito_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito_pde_recibo.pde_nota_debito_id');
			if(trim($buscador_pde_nota_debito_pde_recibo_pde_nota_debito_id_comparador) == '') $buscador_pde_nota_debito_pde_recibo_pde_nota_debito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_recibo_pde_nota_debito_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_pde_recibo_pde_nota_debito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeRecibo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_recibo_pde_recibo_id', Gral::getCmbFiltro(PdeRecibo::getPdeRecibosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito_pde_recibo.pde_recibo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_pde_recibo_pde_recibo_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito_pde_recibo.pde_recibo_id');
			if(trim($buscador_pde_nota_debito_pde_recibo_pde_recibo_id_comparador) == '') $buscador_pde_nota_debito_pde_recibo_pde_recibo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_recibo_pde_recibo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_pde_recibo_pde_recibo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_pde_recibo_importe_afectado' type='text' class='textbox' id='buscador_pde_nota_debito_pde_recibo_importe_afectado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito_pde_recibo.importe_afectado')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_pde_recibo_importe_afectado_comparador = $criterio->getComparadorDeCampo('pde_nota_debito_pde_recibo.importe_afectado');
			if(trim($buscador_pde_nota_debito_pde_recibo_importe_afectado_comparador) == '') $buscador_pde_nota_debito_pde_recibo_importe_afectado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_recibo_importe_afectado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_pde_recibo_importe_afectado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_pde_recibo_codigo' type='text' class='textbox' id='buscador_pde_nota_debito_pde_recibo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito_pde_recibo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_pde_recibo_codigo_comparador = $criterio->getComparadorDeCampo('pde_nota_debito_pde_recibo.codigo');
			if(trim($buscador_pde_nota_debito_pde_recibo_codigo_comparador) == '') $buscador_pde_nota_debito_pde_recibo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_recibo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_pde_recibo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_pde_recibo_observacion' type='text' class='textbox' id='buscador_pde_nota_debito_pde_recibo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito_pde_recibo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_pde_recibo_observacion_comparador = $criterio->getComparadorDeCampo('pde_nota_debito_pde_recibo.observacion');
			if(trim($buscador_pde_nota_debito_pde_recibo_observacion_comparador) == '') $buscador_pde_nota_debito_pde_recibo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_recibo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_pde_recibo_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_recibo_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito_pde_recibo.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_nota_debito_pde_recibo_estado_comparador = $criterio->getComparadorDeCampo('pde_nota_debito_pde_recibo.estado');
			if(trim($buscador_pde_nota_debito_pde_recibo_estado_comparador) == '') $buscador_pde_nota_debito_pde_recibo_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_recibo_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_pde_recibo_estado_comparador, 'textbox comparador') ?>
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

