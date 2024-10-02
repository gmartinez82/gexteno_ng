<?php
include_once "_autoload.php";
$criterio = new Criterio(GenPrcaEjecucion::SES_CRITERIOS);
$criterio->addTabla('gen_prca_ejecucion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gen_prca_ejecucion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_prca_ejecucion_descripcion' type='text' class='textbox' id='buscador_gen_prca_ejecucion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gen_prca_ejecucion_descripcion_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.descripcion');
			if(trim($buscador_gen_prca_ejecucion_descripcion_comparador) == '') $buscador_gen_prca_ejecucion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GenApiProyecto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_gen_api_proyecto_id', Gral::getCmbFiltro(GenApiProyecto::getGenApiProyectosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion.gen_api_proyecto_id'), 'textbox')?>
        	<?php 
			$buscador_gen_prca_ejecucion_gen_api_proyecto_id_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.gen_api_proyecto_id');
			if(trim($buscador_gen_prca_ejecucion_gen_api_proyecto_id_comparador) == '') $buscador_gen_prca_ejecucion_gen_api_proyecto_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_gen_api_proyecto_id_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_gen_api_proyecto_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GenPrcaProceso') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_gen_prca_proceso_id', Gral::getCmbFiltro(GenPrcaProceso::getGenPrcaProcesosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion.gen_prca_proceso_id'), 'textbox')?>
        	<?php 
			$buscador_gen_prca_ejecucion_gen_prca_proceso_id_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.gen_prca_proceso_id');
			if(trim($buscador_gen_prca_ejecucion_gen_prca_proceso_id_comparador) == '') $buscador_gen_prca_ejecucion_gen_prca_proceso_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_gen_prca_proceso_id_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_gen_prca_proceso_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Hora Inicio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_prca_ejecucion_fechahora_inicio' type='text' class='textbox' id='buscador_gen_prca_ejecucion_fechahora_inicio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion.fechahora_inicio')) ?>' size='15' />
					<input type='button' id='cal_buscador_gen_prca_ejecucion_fechahora_inicio' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_gen_prca_ejecucion_fechahora_inicio', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_gen_prca_ejecucion_fechahora_inicio'
						});
					</script>
		
        	<?php 
			$buscador_gen_prca_ejecucion_fechahora_inicio_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.fechahora_inicio');
			if(trim($buscador_gen_prca_ejecucion_fechahora_inicio_comparador) == '') $buscador_gen_prca_ejecucion_fechahora_inicio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_fechahora_inicio_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_fechahora_inicio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Hora Fin') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_prca_ejecucion_fechahora_fin' type='text' class='textbox' id='buscador_gen_prca_ejecucion_fechahora_fin' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion.fechahora_fin')) ?>' size='15' />
					<input type='button' id='cal_buscador_gen_prca_ejecucion_fechahora_fin' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_gen_prca_ejecucion_fechahora_fin', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_gen_prca_ejecucion_fechahora_fin'
						});
					</script>
		
        	<?php 
			$buscador_gen_prca_ejecucion_fechahora_fin_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.fechahora_fin');
			if(trim($buscador_gen_prca_ejecucion_fechahora_fin_comparador) == '') $buscador_gen_prca_ejecucion_fechahora_fin_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_fechahora_fin_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_fechahora_fin_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Iniciado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_iniciado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion.iniciado'), 'textbox') ?>
		
        	<?php 
			$buscador_gen_prca_ejecucion_iniciado_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.iniciado');
			if(trim($buscador_gen_prca_ejecucion_iniciado_comparador) == '') $buscador_gen_prca_ejecucion_iniciado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_iniciado_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_iniciado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Finalizado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_finalizado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion.finalizado'), 'textbox') ?>
		
        	<?php 
			$buscador_gen_prca_ejecucion_finalizado_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.finalizado');
			if(trim($buscador_gen_prca_ejecucion_finalizado_comparador) == '') $buscador_gen_prca_ejecucion_finalizado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_finalizado_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_finalizado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_prca_ejecucion_codigo' type='text' class='textbox' id='buscador_gen_prca_ejecucion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gen_prca_ejecucion_codigo_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.codigo');
			if(trim($buscador_gen_prca_ejecucion_codigo_comparador) == '') $buscador_gen_prca_ejecucion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Confirmado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_confirmado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion.confirmado'), 'textbox') ?>
		
        	<?php 
			$buscador_gen_prca_ejecucion_confirmado_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.confirmado');
			if(trim($buscador_gen_prca_ejecucion_confirmado_comparador) == '') $buscador_gen_prca_ejecucion_confirmado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_confirmado_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_confirmado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_prca_ejecucion_observacion' type='text' class='textbox' id='buscador_gen_prca_ejecucion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gen_prca_ejecucion_observacion_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.observacion');
			if(trim($buscador_gen_prca_ejecucion_observacion_comparador) == '') $buscador_gen_prca_ejecucion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_observacion_comparador, 'textbox comparador') ?>
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

