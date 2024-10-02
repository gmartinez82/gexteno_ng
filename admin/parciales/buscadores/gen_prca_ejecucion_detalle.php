<?php
include_once "_autoload.php";
$criterio = new Criterio(GenPrcaEjecucionDetalle::SES_CRITERIOS);
$criterio->addTabla('gen_prca_ejecucion_detalle');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gen_prca_ejecucion_detalle'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_prca_ejecucion_detalle_descripcion' type='text' class='textbox' id='buscador_gen_prca_ejecucion_detalle_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gen_prca_ejecucion_detalle_descripcion_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.descripcion');
			if(trim($buscador_gen_prca_ejecucion_detalle_descripcion_comparador) == '') $buscador_gen_prca_ejecucion_detalle_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_detalle_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GenApiProyecto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_gen_api_proyecto_id', Gral::getCmbFiltro(GenApiProyecto::getGenApiProyectosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.gen_api_proyecto_id'), 'textbox')?>
        	<?php 
			$buscador_gen_prca_ejecucion_detalle_gen_api_proyecto_id_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.gen_api_proyecto_id');
			if(trim($buscador_gen_prca_ejecucion_detalle_gen_api_proyecto_id_comparador) == '') $buscador_gen_prca_ejecucion_detalle_gen_api_proyecto_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_gen_api_proyecto_id_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_detalle_gen_api_proyecto_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GenPrcaProceso') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_gen_prca_proceso_id', Gral::getCmbFiltro(GenPrcaProceso::getGenPrcaProcesosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.gen_prca_proceso_id'), 'textbox')?>
        	<?php 
			$buscador_gen_prca_ejecucion_detalle_gen_prca_proceso_id_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.gen_prca_proceso_id');
			if(trim($buscador_gen_prca_ejecucion_detalle_gen_prca_proceso_id_comparador) == '') $buscador_gen_prca_ejecucion_detalle_gen_prca_proceso_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_gen_prca_proceso_id_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_detalle_gen_prca_proceso_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GenPrcaEjecucion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_gen_prca_ejecucion_id', Gral::getCmbFiltro(GenPrcaEjecucion::getGenPrcaEjecucionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.gen_prca_ejecucion_id'), 'textbox')?>
        	<?php 
			$buscador_gen_prca_ejecucion_detalle_gen_prca_ejecucion_id_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.gen_prca_ejecucion_id');
			if(trim($buscador_gen_prca_ejecucion_detalle_gen_prca_ejecucion_id_comparador) == '') $buscador_gen_prca_ejecucion_detalle_gen_prca_ejecucion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_gen_prca_ejecucion_id_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_detalle_gen_prca_ejecucion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Hora Inicio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_prca_ejecucion_detalle_fechahora_inicio' type='text' class='textbox' id='buscador_gen_prca_ejecucion_detalle_fechahora_inicio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.fechahora_inicio')) ?>' size='15' />
					<input type='button' id='cal_buscador_gen_prca_ejecucion_detalle_fechahora_inicio' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_gen_prca_ejecucion_detalle_fechahora_inicio', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_gen_prca_ejecucion_detalle_fechahora_inicio'
						});
					</script>
		
        	<?php 
			$buscador_gen_prca_ejecucion_detalle_fechahora_inicio_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.fechahora_inicio');
			if(trim($buscador_gen_prca_ejecucion_detalle_fechahora_inicio_comparador) == '') $buscador_gen_prca_ejecucion_detalle_fechahora_inicio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_fechahora_inicio_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_detalle_fechahora_inicio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Hora Fin') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_prca_ejecucion_detalle_fechahora_fin' type='text' class='textbox' id='buscador_gen_prca_ejecucion_detalle_fechahora_fin' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.fechahora_fin')) ?>' size='15' />
					<input type='button' id='cal_buscador_gen_prca_ejecucion_detalle_fechahora_fin' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_gen_prca_ejecucion_detalle_fechahora_fin', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_gen_prca_ejecucion_detalle_fechahora_fin'
						});
					</script>
		
        	<?php 
			$buscador_gen_prca_ejecucion_detalle_fechahora_fin_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.fechahora_fin');
			if(trim($buscador_gen_prca_ejecucion_detalle_fechahora_fin_comparador) == '') $buscador_gen_prca_ejecucion_detalle_fechahora_fin_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_fechahora_fin_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_detalle_fechahora_fin_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Iniciado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_iniciado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.iniciado'), 'textbox') ?>
		
        	<?php 
			$buscador_gen_prca_ejecucion_detalle_iniciado_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.iniciado');
			if(trim($buscador_gen_prca_ejecucion_detalle_iniciado_comparador) == '') $buscador_gen_prca_ejecucion_detalle_iniciado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_iniciado_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_detalle_iniciado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Finalizado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_finalizado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.finalizado'), 'textbox') ?>
		
        	<?php 
			$buscador_gen_prca_ejecucion_detalle_finalizado_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.finalizado');
			if(trim($buscador_gen_prca_ejecucion_detalle_finalizado_comparador) == '') $buscador_gen_prca_ejecucion_detalle_finalizado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_finalizado_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_detalle_finalizado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_prca_ejecucion_detalle_codigo' type='text' class='textbox' id='buscador_gen_prca_ejecucion_detalle_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gen_prca_ejecucion_detalle_codigo_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.codigo');
			if(trim($buscador_gen_prca_ejecucion_detalle_codigo_comparador) == '') $buscador_gen_prca_ejecucion_detalle_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_detalle_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Confirmado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_confirmado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.confirmado'), 'textbox') ?>
		
        	<?php 
			$buscador_gen_prca_ejecucion_detalle_confirmado_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.confirmado');
			if(trim($buscador_gen_prca_ejecucion_detalle_confirmado_comparador) == '') $buscador_gen_prca_ejecucion_detalle_confirmado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_confirmado_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_detalle_confirmado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_prca_ejecucion_detalle_observacion' type='text' class='textbox' id='buscador_gen_prca_ejecucion_detalle_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gen_prca_ejecucion_detalle_observacion_comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.observacion');
			if(trim($buscador_gen_prca_ejecucion_detalle_observacion_comparador) == '') $buscador_gen_prca_ejecucion_detalle_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_prca_ejecucion_detalle_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_ejecucion_detalle_observacion_comparador, 'textbox comparador') ?>
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

