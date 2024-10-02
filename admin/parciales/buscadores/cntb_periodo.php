<?php
include_once "_autoload.php";
$criterio = new Criterio(CntbPeriodo::SES_CRITERIOS);
$criterio->addTabla('cntb_periodo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cntb_periodo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_periodo_descripcion' type='text' class='textbox' id='buscador_cntb_periodo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_periodo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_periodo_descripcion_comparador = $criterio->getComparadorDeCampo('cntb_periodo.descripcion');
			if(trim($buscador_cntb_periodo_descripcion_comparador) == '') $buscador_cntb_periodo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_periodo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_periodo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_periodo_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_periodo.gral_empresa_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_periodo_gral_empresa_id_comparador = $criterio->getComparadorDeCampo('cntb_periodo.gral_empresa_id');
			if(trim($buscador_cntb_periodo_gral_empresa_id_comparador) == '') $buscador_cntb_periodo_gral_empresa_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_periodo_gral_empresa_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_periodo_gral_empresa_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbEjercicio') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_periodo_cntb_ejercicio_id', Gral::getCmbFiltro(CntbEjercicio::getCntbEjerciciosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_periodo.cntb_ejercicio_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_periodo_cntb_ejercicio_id_comparador = $criterio->getComparadorDeCampo('cntb_periodo.cntb_ejercicio_id');
			if(trim($buscador_cntb_periodo_cntb_ejercicio_id_comparador) == '') $buscador_cntb_periodo_cntb_ejercicio_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_periodo_cntb_ejercicio_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_periodo_cntb_ejercicio_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Anio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_periodo_anio' type='text' class='textbox' id='buscador_cntb_periodo_anio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_periodo.anio')) ?>' size='22' />
        	<?php 
			$buscador_cntb_periodo_anio_comparador = $criterio->getComparadorDeCampo('cntb_periodo.anio');
			if(trim($buscador_cntb_periodo_anio_comparador) == '') $buscador_cntb_periodo_anio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_periodo_anio_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_periodo_anio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralMes') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_periodo_gral_mes_id', Gral::getCmbFiltro(GralMes::getGralMessCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_periodo.gral_mes_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_periodo_gral_mes_id_comparador = $criterio->getComparadorDeCampo('cntb_periodo.gral_mes_id');
			if(trim($buscador_cntb_periodo_gral_mes_id_comparador) == '') $buscador_cntb_periodo_gral_mes_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_periodo_gral_mes_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_periodo_gral_mes_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Inicio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_periodo_fecha_inicio' type='text' class='textbox' id='buscador_cntb_periodo_fecha_inicio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('cntb_periodo.fecha_inicio'))) ?>' size='15' />
					<input type='button' id='cal_buscador_cntb_periodo_fecha_inicio' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_cntb_periodo_fecha_inicio', ifFormat: '%d/%m/%Y', button: 'cal_buscador_cntb_periodo_fecha_inicio'
						});
					</script>
		
        	<?php 
			$buscador_cntb_periodo_fecha_inicio_comparador = $criterio->getComparadorDeCampo('cntb_periodo.fecha_inicio');
			if(trim($buscador_cntb_periodo_fecha_inicio_comparador) == '') $buscador_cntb_periodo_fecha_inicio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_periodo_fecha_inicio_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_periodo_fecha_inicio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Fin') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_periodo_fecha_fin' type='text' class='textbox' id='buscador_cntb_periodo_fecha_fin' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('cntb_periodo.fecha_fin'))) ?>' size='15' />
					<input type='button' id='cal_buscador_cntb_periodo_fecha_fin' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_cntb_periodo_fecha_fin', ifFormat: '%d/%m/%Y', button: 'cal_buscador_cntb_periodo_fecha_fin'
						});
					</script>
		
        	<?php 
			$buscador_cntb_periodo_fecha_fin_comparador = $criterio->getComparadorDeCampo('cntb_periodo.fecha_fin');
			if(trim($buscador_cntb_periodo_fecha_fin_comparador) == '') $buscador_cntb_periodo_fecha_fin_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_periodo_fecha_fin_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_periodo_fecha_fin_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_periodo_codigo' type='text' class='textbox' id='buscador_cntb_periodo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_periodo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cntb_periodo_codigo_comparador = $criterio->getComparadorDeCampo('cntb_periodo.codigo');
			if(trim($buscador_cntb_periodo_codigo_comparador) == '') $buscador_cntb_periodo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_periodo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_periodo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_periodo_observacion' type='text' class='textbox' id='buscador_cntb_periodo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_periodo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_periodo_observacion_comparador = $criterio->getComparadorDeCampo('cntb_periodo.observacion');
			if(trim($buscador_cntb_periodo_observacion_comparador) == '') $buscador_cntb_periodo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_periodo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_periodo_observacion_comparador, 'textbox comparador') ?>
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

