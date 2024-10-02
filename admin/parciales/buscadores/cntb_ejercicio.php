<?php
include_once "_autoload.php";
$criterio = new Criterio(CntbEjercicio::SES_CRITERIOS);
$criterio->addTabla('cntb_ejercicio');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cntb_ejercicio'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_ejercicio_descripcion' type='text' class='textbox' id='buscador_cntb_ejercicio_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_ejercicio.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_ejercicio_descripcion_comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.descripcion');
			if(trim($buscador_cntb_ejercicio_descripcion_comparador) == '') $buscador_cntb_ejercicio_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_ejercicio_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_ejercicio_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_ejercicio_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_ejercicio.gral_empresa_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_ejercicio_gral_empresa_id_comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.gral_empresa_id');
			if(trim($buscador_cntb_ejercicio_gral_empresa_id_comparador) == '') $buscador_cntb_ejercicio_gral_empresa_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_ejercicio_gral_empresa_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_ejercicio_gral_empresa_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Inicio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_ejercicio_fecha_inicio' type='text' class='textbox' id='buscador_cntb_ejercicio_fecha_inicio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('cntb_ejercicio.fecha_inicio'))) ?>' size='15' />
					<input type='button' id='cal_buscador_cntb_ejercicio_fecha_inicio' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_cntb_ejercicio_fecha_inicio', ifFormat: '%d/%m/%Y', button: 'cal_buscador_cntb_ejercicio_fecha_inicio'
						});
					</script>
		
        	<?php 
			$buscador_cntb_ejercicio_fecha_inicio_comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.fecha_inicio');
			if(trim($buscador_cntb_ejercicio_fecha_inicio_comparador) == '') $buscador_cntb_ejercicio_fecha_inicio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_ejercicio_fecha_inicio_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_ejercicio_fecha_inicio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Fin') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_ejercicio_fecha_fin' type='text' class='textbox' id='buscador_cntb_ejercicio_fecha_fin' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('cntb_ejercicio.fecha_fin'))) ?>' size='15' />
					<input type='button' id='cal_buscador_cntb_ejercicio_fecha_fin' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_cntb_ejercicio_fecha_fin', ifFormat: '%d/%m/%Y', button: 'cal_buscador_cntb_ejercicio_fecha_fin'
						});
					</script>
		
        	<?php 
			$buscador_cntb_ejercicio_fecha_fin_comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.fecha_fin');
			if(trim($buscador_cntb_ejercicio_fecha_fin_comparador) == '') $buscador_cntb_ejercicio_fecha_fin_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_ejercicio_fecha_fin_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_ejercicio_fecha_fin_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_ejercicio_codigo' type='text' class='textbox' id='buscador_cntb_ejercicio_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_ejercicio.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cntb_ejercicio_codigo_comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.codigo');
			if(trim($buscador_cntb_ejercicio_codigo_comparador) == '') $buscador_cntb_ejercicio_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_ejercicio_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_ejercicio_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_ejercicio_observacion' type='text' class='textbox' id='buscador_cntb_ejercicio_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_ejercicio.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_ejercicio_observacion_comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.observacion');
			if(trim($buscador_cntb_ejercicio_observacion_comparador) == '') $buscador_cntb_ejercicio_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_ejercicio_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_ejercicio_observacion_comparador, 'textbox comparador') ?>
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

