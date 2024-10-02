<?php
include_once "_autoload.php";
$criterio = new Criterio(CntbCuenta::SES_CRITERIOS);
$criterio->addTabla('cntb_cuenta');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cntb_cuenta'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_cuenta_descripcion' type='text' class='textbox' id='buscador_cntb_cuenta_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_cuenta.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_cuenta_descripcion_comparador = $criterio->getComparadorDeCampo('cntb_cuenta.descripcion');
			if(trim($buscador_cntb_cuenta_descripcion_comparador) == '') $buscador_cntb_cuenta_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_cuenta_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_cuenta_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_cuenta_familia_descripcion' type='text' class='textbox' id='buscador_cntb_cuenta_familia_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_cuenta.familia_descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_cuenta_familia_descripcion_comparador = $criterio->getComparadorDeCampo('cntb_cuenta.familia_descripcion');
			if(trim($buscador_cntb_cuenta_familia_descripcion_comparador) == '') $buscador_cntb_cuenta_familia_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_cuenta_familia_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_cuenta_familia_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbCuentaPlan') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_cuenta_cntb_cuenta_plan_id', Gral::getCmbFiltro(CntbCuentaPlan::getCntbCuentaPlansCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_cuenta.cntb_cuenta_plan_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_cuenta_cntb_cuenta_plan_id_comparador = $criterio->getComparadorDeCampo('cntb_cuenta.cntb_cuenta_plan_id');
			if(trim($buscador_cntb_cuenta_cntb_cuenta_plan_id_comparador) == '') $buscador_cntb_cuenta_cntb_cuenta_plan_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_cuenta_cntb_cuenta_plan_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_cuenta_cntb_cuenta_plan_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cuenta Padre') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cntb_cuenta_cntb_cuenta_padre', Gral::getCmbFiltro(CntbCuenta::getCntbCuentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_cuenta.cntb_cuenta_padre'), 'textbox') ?>
		
        	<?php 
			$buscador_cntb_cuenta_cntb_cuenta_padre_comparador = $criterio->getComparadorDeCampo('cntb_cuenta.cntb_cuenta_padre');
			if(trim($buscador_cntb_cuenta_cntb_cuenta_padre_comparador) == '') $buscador_cntb_cuenta_cntb_cuenta_padre_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_cuenta_cntb_cuenta_padre_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_cuenta_cntb_cuenta_padre_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbTipoCuenta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_cuenta_cntb_tipo_cuenta_id', Gral::getCmbFiltro(CntbTipoCuenta::getCntbTipoCuentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_cuenta.cntb_tipo_cuenta_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_cuenta_cntb_tipo_cuenta_id_comparador = $criterio->getComparadorDeCampo('cntb_cuenta.cntb_tipo_cuenta_id');
			if(trim($buscador_cntb_cuenta_cntb_tipo_cuenta_id_comparador) == '') $buscador_cntb_cuenta_cntb_tipo_cuenta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_cuenta_cntb_tipo_cuenta_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_cuenta_cntb_tipo_cuenta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_cuenta_numero' type='text' class='textbox' id='buscador_cntb_cuenta_numero' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_cuenta.numero')) ?>' size='22' />
        	<?php 
			$buscador_cntb_cuenta_numero_comparador = $criterio->getComparadorDeCampo('cntb_cuenta.numero');
			if(trim($buscador_cntb_cuenta_numero_comparador) == '') $buscador_cntb_cuenta_numero_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_cuenta_numero_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_cuenta_numero_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nivel') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_cuenta_nivel' type='text' class='textbox' id='buscador_cntb_cuenta_nivel' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_cuenta.nivel')) ?>' size='22' />
        	<?php 
			$buscador_cntb_cuenta_nivel_comparador = $criterio->getComparadorDeCampo('cntb_cuenta.nivel');
			if(trim($buscador_cntb_cuenta_nivel_comparador) == '') $buscador_cntb_cuenta_nivel_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_cuenta_nivel_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_cuenta_nivel_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Imputable') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cntb_cuenta_imputable', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_cuenta.imputable'), 'textbox') ?>
		
        	<?php 
			$buscador_cntb_cuenta_imputable_comparador = $criterio->getComparadorDeCampo('cntb_cuenta.imputable');
			if(trim($buscador_cntb_cuenta_imputable_comparador) == '') $buscador_cntb_cuenta_imputable_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_cuenta_imputable_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_cuenta_imputable_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_cuenta_codigo' type='text' class='textbox' id='buscador_cntb_cuenta_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_cuenta.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cntb_cuenta_codigo_comparador = $criterio->getComparadorDeCampo('cntb_cuenta.codigo');
			if(trim($buscador_cntb_cuenta_codigo_comparador) == '') $buscador_cntb_cuenta_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_cuenta_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_cuenta_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_cuenta_observacion' type='text' class='textbox' id='buscador_cntb_cuenta_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_cuenta.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_cuenta_observacion_comparador = $criterio->getComparadorDeCampo('cntb_cuenta.observacion');
			if(trim($buscador_cntb_cuenta_observacion_comparador) == '') $buscador_cntb_cuenta_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_cuenta_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_cuenta_observacion_comparador, 'textbox comparador') ?>
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

