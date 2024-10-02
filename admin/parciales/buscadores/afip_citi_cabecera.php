<?php
include_once "_autoload.php";
$criterio = new Criterio(AfipCitiCabecera::SES_CRITERIOS);
$criterio->addTabla('afip_citi_cabecera');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='afip_citi_cabecera'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_cabecera_descripcion' type='text' class='textbox' id='buscador_afip_citi_cabecera_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_cabecera_descripcion_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.descripcion');
			if(trim($buscador_afip_citi_cabecera_descripcion_comparador) == '') $buscador_afip_citi_cabecera_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_cabecera_codigo' type='text' class='textbox' id='buscador_afip_citi_cabecera_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.codigo')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_cabecera_codigo_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.codigo');
			if(trim($buscador_afip_citi_cabecera_codigo_comparador) == '') $buscador_afip_citi_cabecera_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AfipCitiPrc') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_cabecera_afip_citi_prc_id', Gral::getCmbFiltro(AfipCitiPrc::getAfipCitiPrcsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_prc_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_cabecera_afip_citi_prc_id_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_prc_id');
			if(trim($buscador_afip_citi_cabecera_afip_citi_prc_id_comparador) == '') $buscador_afip_citi_cabecera_afip_citi_prc_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_afip_citi_prc_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_afip_citi_prc_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Inicial') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_afip_citi_cabecera_inicial', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.inicial'), 'textbox') ?>
		
        	<?php 
			$buscador_afip_citi_cabecera_inicial_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.inicial');
			if(trim($buscador_afip_citi_cabecera_inicial_comparador) == '') $buscador_afip_citi_cabecera_inicial_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_inicial_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_inicial_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Actual') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_afip_citi_cabecera_actual', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.actual'), 'textbox') ?>
		
        	<?php 
			$buscador_afip_citi_cabecera_actual_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.actual');
			if(trim($buscador_afip_citi_cabecera_actual_comparador) == '') $buscador_afip_citi_cabecera_actual_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_actual_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_actual_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cuit Informante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_cabecera_afip_citi_cuit_informante' type='text' class='textbox' id='buscador_afip_citi_cabecera_afip_citi_cuit_informante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_cuit_informante')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_cabecera_afip_citi_cuit_informante_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_cuit_informante');
			if(trim($buscador_afip_citi_cabecera_afip_citi_cuit_informante_comparador) == '') $buscador_afip_citi_cabecera_afip_citi_cuit_informante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_afip_citi_cuit_informante_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_afip_citi_cuit_informante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Periodo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_cabecera_afip_citi_periodo' type='text' class='textbox' id='buscador_afip_citi_cabecera_afip_citi_periodo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_periodo')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_cabecera_afip_citi_periodo_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_periodo');
			if(trim($buscador_afip_citi_cabecera_afip_citi_periodo_comparador) == '') $buscador_afip_citi_cabecera_afip_citi_periodo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_afip_citi_periodo_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_afip_citi_periodo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Secuencia') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_cabecera_afip_citi_secuencia' type='text' class='textbox' id='buscador_afip_citi_cabecera_afip_citi_secuencia' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_secuencia')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_cabecera_afip_citi_secuencia_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_secuencia');
			if(trim($buscador_afip_citi_cabecera_afip_citi_secuencia_comparador) == '') $buscador_afip_citi_cabecera_afip_citi_secuencia_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_afip_citi_secuencia_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_afip_citi_secuencia_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Sin Movimiento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_cabecera_afip_citi_sin_movimiento' type='text' class='textbox' id='buscador_afip_citi_cabecera_afip_citi_sin_movimiento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_sin_movimiento')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_cabecera_afip_citi_sin_movimiento_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_sin_movimiento');
			if(trim($buscador_afip_citi_cabecera_afip_citi_sin_movimiento_comparador) == '') $buscador_afip_citi_cabecera_afip_citi_sin_movimiento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_afip_citi_sin_movimiento_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_afip_citi_sin_movimiento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Prorratear Cred Fiscal computable') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_cabecera_afip_citi_prorratear_cf_computable' type='text' class='textbox' id='buscador_afip_citi_cabecera_afip_citi_prorratear_cf_computable' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_prorratear_cf_computable')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_cabecera_afip_citi_prorratear_cf_computable_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_prorratear_cf_computable');
			if(trim($buscador_afip_citi_cabecera_afip_citi_prorratear_cf_computable_comparador) == '') $buscador_afip_citi_cabecera_afip_citi_prorratear_cf_computable_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_afip_citi_prorratear_cf_computable_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_afip_citi_prorratear_cf_computable_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cred Fiscal Computable o Comprobante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_cabecera_afip_citi_cf_computable_o_comprobante' type='text' class='textbox' id='buscador_afip_citi_cabecera_afip_citi_cf_computable_o_comprobante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_cf_computable_o_comprobante')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_cabecera_afip_citi_cf_computable_o_comprobante_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_cf_computable_o_comprobante');
			if(trim($buscador_afip_citi_cabecera_afip_citi_cf_computable_o_comprobante_comparador) == '') $buscador_afip_citi_cabecera_afip_citi_cf_computable_o_comprobante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_afip_citi_cf_computable_o_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_afip_citi_cf_computable_o_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Cred Fiscal Computable Global') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_global' type='text' class='textbox' id='buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_global' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_global')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_global_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_global');
			if(trim($buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_global_comparador) == '') $buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_global_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_global_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_global_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Cred Fiscal Computable Asignacion Directa') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_asignacion_directa' type='text' class='textbox' id='buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_asignacion_directa' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_asignacion_directa')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_asignacion_directa_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_asignacion_directa');
			if(trim($buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_asignacion_directa_comparador) == '') $buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_asignacion_directa_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_asignacion_directa_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_asignacion_directa_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Cred Fiscal Computable Prorrateo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_prorrateo' type='text' class='textbox' id='buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_prorrateo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_prorrateo')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_prorrateo_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_prorrateo');
			if(trim($buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_prorrateo_comparador) == '') $buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_prorrateo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_prorrateo_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_prorrateo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Cred Fiscal No Computable Global') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_cabecera_afip_citi_importe_cf_no_computable_global' type='text' class='textbox' id='buscador_afip_citi_cabecera_afip_citi_importe_cf_no_computable_global' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_no_computable_global')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_cabecera_afip_citi_importe_cf_no_computable_global_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_no_computable_global');
			if(trim($buscador_afip_citi_cabecera_afip_citi_importe_cf_no_computable_global_comparador) == '') $buscador_afip_citi_cabecera_afip_citi_importe_cf_no_computable_global_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_no_computable_global_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_afip_citi_importe_cf_no_computable_global_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Cred Fiscal Contribuyente Seg Social') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_cabecera_afip_citi_importe_cf_contribuyente_ss_y_oc' type='text' class='textbox' id='buscador_afip_citi_cabecera_afip_citi_importe_cf_contribuyente_ss_y_oc' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_contribuyente_ss_y_oc')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_cabecera_afip_citi_importe_cf_contribuyente_ss_y_oc_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_contribuyente_ss_y_oc');
			if(trim($buscador_afip_citi_cabecera_afip_citi_importe_cf_contribuyente_ss_y_oc_comparador) == '') $buscador_afip_citi_cabecera_afip_citi_importe_cf_contribuyente_ss_y_oc_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_contribuyente_ss_y_oc_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_afip_citi_importe_cf_contribuyente_ss_y_oc_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Cred Fiscal Computable Seg Social') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_ss_y_oc' type='text' class='textbox' id='buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_ss_y_oc' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_ss_y_oc')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_ss_y_oc_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_ss_y_oc');
			if(trim($buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_ss_y_oc_comparador) == '') $buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_ss_y_oc_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_ss_y_oc_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_ss_y_oc_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_cabecera_observacion' type='text' class='textbox' id='buscador_afip_citi_cabecera_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_cabecera.observacion')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_cabecera_observacion_comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.observacion');
			if(trim($buscador_afip_citi_cabecera_observacion_comparador) == '') $buscador_afip_citi_cabecera_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_cabecera_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_cabecera_observacion_comparador, 'textbox comparador') ?>
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

