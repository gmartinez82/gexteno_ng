<?php
include_once "_autoload.php";
$criterio = new Criterio(CntbCuentaPlan::SES_CRITERIOS);
$criterio->addTabla('cntb_cuenta_plan');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cntb_cuenta_plan'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_cuenta_plan_descripcion' type='text' class='textbox' id='buscador_cntb_cuenta_plan_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_cuenta_plan.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_cuenta_plan_descripcion_comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.descripcion');
			if(trim($buscador_cntb_cuenta_plan_descripcion_comparador) == '') $buscador_cntb_cuenta_plan_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_cuenta_plan_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_cuenta_plan_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_cuenta_plan_codigo' type='text' class='textbox' id='buscador_cntb_cuenta_plan_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_cuenta_plan.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cntb_cuenta_plan_codigo_comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.codigo');
			if(trim($buscador_cntb_cuenta_plan_codigo_comparador) == '') $buscador_cntb_cuenta_plan_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_cuenta_plan_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_cuenta_plan_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PHP Clase') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_cuenta_plan_php_clase' type='text' class='textbox' id='buscador_cntb_cuenta_plan_php_clase' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_cuenta_plan.php_clase')) ?>' size='22' />
        	<?php 
			$buscador_cntb_cuenta_plan_php_clase_comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.php_clase');
			if(trim($buscador_cntb_cuenta_plan_php_clase_comparador) == '') $buscador_cntb_cuenta_plan_php_clase_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_cuenta_plan_php_clase_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_cuenta_plan_php_clase_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('BD Tabla') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_cuenta_plan_bd_tabla' type='text' class='textbox' id='buscador_cntb_cuenta_plan_bd_tabla' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_cuenta_plan.bd_tabla')) ?>' size='22' />
        	<?php 
			$buscador_cntb_cuenta_plan_bd_tabla_comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.bd_tabla');
			if(trim($buscador_cntb_cuenta_plan_bd_tabla_comparador) == '') $buscador_cntb_cuenta_plan_bd_tabla_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_cuenta_plan_bd_tabla_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_cuenta_plan_bd_tabla_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_cuenta_plan_observacion' type='text' class='textbox' id='buscador_cntb_cuenta_plan_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_cuenta_plan.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_cuenta_plan_observacion_comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.observacion');
			if(trim($buscador_cntb_cuenta_plan_observacion_comparador) == '') $buscador_cntb_cuenta_plan_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_cuenta_plan_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_cuenta_plan_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cntb_cuenta_plan_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_cuenta_plan.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_cntb_cuenta_plan_estado_comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.estado');
			if(trim($buscador_cntb_cuenta_plan_estado_comparador) == '') $buscador_cntb_cuenta_plan_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_cuenta_plan_estado_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_cuenta_plan_estado_comparador, 'textbox comparador') ?>
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

