<?php
include_once "_autoload.php";
$criterio = new Criterio(FndChqCheque::SES_CRITERIOS);
$criterio->addTabla('fnd_chq_cheque');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='fnd_chq_cheque'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_cheque_descripcion' type='text' class='textbox' id='buscador_fnd_chq_cheque_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_cheque_descripcion_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.descripcion');
			if(trim($buscador_fnd_chq_cheque_descripcion_comparador) == '') $buscador_fnd_chq_cheque_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndChqChequera') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_chq_chequera_id', Gral::getCmbFiltro(FndChqChequera::getFndChqChequerasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_chequera_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_fnd_chq_chequera_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_chq_chequera_id');
			if(trim($buscador_fnd_chq_cheque_fnd_chq_chequera_id_comparador) == '') $buscador_fnd_chq_cheque_fnd_chq_chequera_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_chq_chequera_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_fnd_chq_chequera_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralBanco') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_gral_banco_id', Gral::getCmbFiltro(GralBanco::getGralBancosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.gral_banco_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_gral_banco_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.gral_banco_id');
			if(trim($buscador_fnd_chq_cheque_gral_banco_id_comparador) == '') $buscador_fnd_chq_cheque_gral_banco_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_gral_banco_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_gral_banco_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Sucursal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_cheque_codigo_sucursal' type='text' class='textbox' id='buscador_fnd_chq_cheque_codigo_sucursal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.codigo_sucursal')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_cheque_codigo_sucursal_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.codigo_sucursal');
			if(trim($buscador_fnd_chq_cheque_codigo_sucursal_comparador) == '') $buscador_fnd_chq_cheque_codigo_sucursal_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_codigo_sucursal_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_codigo_sucursal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_cheque_numero' type='text' class='textbox' id='buscador_fnd_chq_cheque_numero' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.numero')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_cheque_numero_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.numero');
			if(trim($buscador_fnd_chq_cheque_numero_comparador) == '') $buscador_fnd_chq_cheque_numero_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_numero_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_numero_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Emision') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_cheque_fecha_emision' type='text' class='textbox' id='buscador_fnd_chq_cheque_fecha_emision' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('fnd_chq_cheque.fecha_emision'))) ?>' size='15' />
					<input type='button' id='cal_buscador_fnd_chq_cheque_fecha_emision' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_fnd_chq_cheque_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_buscador_fnd_chq_cheque_fecha_emision'
						});
					</script>
		
        	<?php 
			$buscador_fnd_chq_cheque_fecha_emision_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fecha_emision');
			if(trim($buscador_fnd_chq_cheque_fecha_emision_comparador) == '') $buscador_fnd_chq_cheque_fecha_emision_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fecha_emision_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_fecha_emision_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Cobro') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_cheque_fecha_cobro' type='text' class='textbox' id='buscador_fnd_chq_cheque_fecha_cobro' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('fnd_chq_cheque.fecha_cobro'))) ?>' size='15' />
					<input type='button' id='cal_buscador_fnd_chq_cheque_fecha_cobro' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_fnd_chq_cheque_fecha_cobro', ifFormat: '%d/%m/%Y', button: 'cal_buscador_fnd_chq_cheque_fecha_cobro'
						});
					</script>
		
        	<?php 
			$buscador_fnd_chq_cheque_fecha_cobro_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fecha_cobro');
			if(trim($buscador_fnd_chq_cheque_fecha_cobro_comparador) == '') $buscador_fnd_chq_cheque_fecha_cobro_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fecha_cobro_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_fecha_cobro_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Acreditacion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_cheque_fecha_acreditacion' type='text' class='textbox' id='buscador_fnd_chq_cheque_fecha_acreditacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('fnd_chq_cheque.fecha_acreditacion'))) ?>' size='15' />
					<input type='button' id='cal_buscador_fnd_chq_cheque_fecha_acreditacion' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_fnd_chq_cheque_fecha_acreditacion', ifFormat: '%d/%m/%Y', button: 'cal_buscador_fnd_chq_cheque_fecha_acreditacion'
						});
					</script>
		
        	<?php 
			$buscador_fnd_chq_cheque_fecha_acreditacion_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fecha_acreditacion');
			if(trim($buscador_fnd_chq_cheque_fecha_acreditacion_comparador) == '') $buscador_fnd_chq_cheque_fecha_acreditacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fecha_acreditacion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_fecha_acreditacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Vencimiento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_cheque_fecha_vencimiento' type='text' class='textbox' id='buscador_fnd_chq_cheque_fecha_vencimiento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('fnd_chq_cheque.fecha_vencimiento'))) ?>' size='15' />
					<input type='button' id='cal_buscador_fnd_chq_cheque_fecha_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_fnd_chq_cheque_fecha_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_buscador_fnd_chq_cheque_fecha_vencimiento'
						});
					</script>
		
        	<?php 
			$buscador_fnd_chq_cheque_fecha_vencimiento_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fecha_vencimiento');
			if(trim($buscador_fnd_chq_cheque_fecha_vencimiento_comparador) == '') $buscador_fnd_chq_cheque_fecha_vencimiento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fecha_vencimiento_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_fecha_vencimiento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Firmante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_cheque_firmante' type='text' class='textbox' id='buscador_fnd_chq_cheque_firmante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.firmante')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_cheque_firmante_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.firmante');
			if(trim($buscador_fnd_chq_cheque_firmante_comparador) == '') $buscador_fnd_chq_cheque_firmante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_firmante_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_firmante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Entregador') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_cheque_entregador' type='text' class='textbox' id='buscador_fnd_chq_cheque_entregador' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.entregador')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_cheque_entregador_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.entregador');
			if(trim($buscador_fnd_chq_cheque_entregador_comparador) == '') $buscador_fnd_chq_cheque_entregador_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_entregador_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_entregador_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndChqTipoEmisor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_chq_tipo_emisor_id', Gral::getCmbFiltro(FndChqTipoEmisor::getFndChqTipoEmisorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_tipo_emisor_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_fnd_chq_tipo_emisor_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_chq_tipo_emisor_id');
			if(trim($buscador_fnd_chq_cheque_fnd_chq_tipo_emisor_id_comparador) == '') $buscador_fnd_chq_cheque_fnd_chq_tipo_emisor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_chq_tipo_emisor_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_fnd_chq_tipo_emisor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndChqTipoEmision') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_chq_tipo_emision_id', Gral::getCmbFiltro(FndChqTipoEmision::getFndChqTipoEmisionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_tipo_emision_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_fnd_chq_tipo_emision_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_chq_tipo_emision_id');
			if(trim($buscador_fnd_chq_cheque_fnd_chq_tipo_emision_id_comparador) == '') $buscador_fnd_chq_cheque_fnd_chq_tipo_emision_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_chq_tipo_emision_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_fnd_chq_tipo_emision_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndChqTipoPago') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_chq_tipo_pago_id', Gral::getCmbFiltro(FndChqTipoPago::getFndChqTipoPagosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_tipo_pago_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_fnd_chq_tipo_pago_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_chq_tipo_pago_id');
			if(trim($buscador_fnd_chq_cheque_fnd_chq_tipo_pago_id_comparador) == '') $buscador_fnd_chq_cheque_fnd_chq_tipo_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_chq_tipo_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_fnd_chq_tipo_pago_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndChqTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_chq_tipo_estado_id', Gral::getCmbFiltro(FndChqTipoEstado::getFndChqTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_fnd_chq_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_chq_tipo_estado_id');
			if(trim($buscador_fnd_chq_cheque_fnd_chq_tipo_estado_id_comparador) == '') $buscador_fnd_chq_cheque_fnd_chq_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_chq_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_fnd_chq_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_cheque_importe' type='text' class='textbox' id='buscador_fnd_chq_cheque_importe' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.importe')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_cheque_importe_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.importe');
			if(trim($buscador_fnd_chq_cheque_importe_comparador) == '') $buscador_fnd_chq_cheque_importe_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_importe_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_importe_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cruzado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_cruzado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.cruzado'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_chq_cheque_cruzado_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.cruzado');
			if(trim($buscador_fnd_chq_cheque_cruzado_comparador) == '') $buscador_fnd_chq_cheque_cruzado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_cruzado_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_cruzado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaRecibo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_vta_recibo_id', Gral::getCmbFiltro(VtaRecibo::getVtaRecibosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.vta_recibo_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_vta_recibo_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.vta_recibo_id');
			if(trim($buscador_fnd_chq_cheque_vta_recibo_id_comparador) == '') $buscador_fnd_chq_cheque_vta_recibo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_vta_recibo_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_vta_recibo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaReciboItem') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_vta_recibo_item_id', Gral::getCmbFiltro(VtaReciboItem::getVtaReciboItemsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.vta_recibo_item_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_vta_recibo_item_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.vta_recibo_item_id');
			if(trim($buscador_fnd_chq_cheque_vta_recibo_item_id_comparador) == '') $buscador_fnd_chq_cheque_vta_recibo_item_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_vta_recibo_item_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_vta_recibo_item_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaComision') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_vta_comision_id', Gral::getCmbFiltro(VtaComision::getVtaComisionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.vta_comision_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_vta_comision_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.vta_comision_id');
			if(trim($buscador_fnd_chq_cheque_vta_comision_id_comparador) == '') $buscador_fnd_chq_cheque_vta_comision_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_vta_comision_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_vta_comision_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaComisionGralFpFormaPago') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_vta_comision_gral_fp_forma_pago_id', Gral::getCmbFiltro(VtaComisionGralFpFormaPago::getVtaComisionGralFpFormaPagosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.vta_comision_gral_fp_forma_pago_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_vta_comision_gral_fp_forma_pago_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.vta_comision_gral_fp_forma_pago_id');
			if(trim($buscador_fnd_chq_cheque_vta_comision_gral_fp_forma_pago_id_comparador) == '') $buscador_fnd_chq_cheque_vta_comision_gral_fp_forma_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_vta_comision_gral_fp_forma_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_vta_comision_gral_fp_forma_pago_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('OrdenPago') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_pde_orden_pago_id', Gral::getCmbFiltro(PdeOrdenPago::getPdeOrdenPagosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.pde_orden_pago_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_pde_orden_pago_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.pde_orden_pago_id');
			if(trim($buscador_fnd_chq_cheque_pde_orden_pago_id_comparador) == '') $buscador_fnd_chq_cheque_pde_orden_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_pde_orden_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_pde_orden_pago_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOrdenPagoGralFpFormaPago') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_pde_orden_pago_gral_fp_forma_pago_id', Gral::getCmbFiltro(PdeOrdenPagoGralFpFormaPago::getPdeOrdenPagoGralFpFormaPagosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.pde_orden_pago_gral_fp_forma_pago_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_pde_orden_pago_gral_fp_forma_pago_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.pde_orden_pago_gral_fp_forma_pago_id');
			if(trim($buscador_fnd_chq_cheque_pde_orden_pago_gral_fp_forma_pago_id_comparador) == '') $buscador_fnd_chq_cheque_pde_orden_pago_gral_fp_forma_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_pde_orden_pago_gral_fp_forma_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_pde_orden_pago_gral_fp_forma_pago_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeRecibo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_pde_recibo_id', Gral::getCmbFiltro(PdeRecibo::getPdeRecibosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.pde_recibo_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_pde_recibo_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.pde_recibo_id');
			if(trim($buscador_fnd_chq_cheque_pde_recibo_id_comparador) == '') $buscador_fnd_chq_cheque_pde_recibo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_pde_recibo_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_pde_recibo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeReciboItem') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_pde_recibo_item_id', Gral::getCmbFiltro(PdeReciboItem::getPdeReciboItemsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.pde_recibo_item_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_pde_recibo_item_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.pde_recibo_item_id');
			if(trim($buscador_fnd_chq_cheque_pde_recibo_item_id_comparador) == '') $buscador_fnd_chq_cheque_pde_recibo_item_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_pde_recibo_item_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_pde_recibo_item_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCajaMovimiento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_caja_movimiento_id', Gral::getCmbFiltro(FndCajaMovimiento::getFndCajaMovimientosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_movimiento_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_fnd_caja_movimiento_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_caja_movimiento_id');
			if(trim($buscador_fnd_chq_cheque_fnd_caja_movimiento_id_comparador) == '') $buscador_fnd_chq_cheque_fnd_caja_movimiento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_caja_movimiento_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_fnd_caja_movimiento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCajaMovimientoItem') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_caja_movimiento_item_id', Gral::getCmbFiltro(FndCajaMovimientoItem::getFndCajaMovimientoItemsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_movimiento_item_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_fnd_caja_movimiento_item_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_caja_movimiento_item_id');
			if(trim($buscador_fnd_chq_cheque_fnd_caja_movimiento_item_id_comparador) == '') $buscador_fnd_chq_cheque_fnd_caja_movimiento_item_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_caja_movimiento_item_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_fnd_caja_movimiento_item_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCaja') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_caja_id', Gral::getCmbFiltro(FndCaja::getFndCajasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_fnd_caja_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_caja_id');
			if(trim($buscador_fnd_chq_cheque_fnd_caja_id_comparador) == '') $buscador_fnd_chq_cheque_fnd_caja_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_caja_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_fnd_caja_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralCaja') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_gral_caja_id', Gral::getCmbFiltro(GralCaja::getGralCajasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.gral_caja_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_gral_caja_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.gral_caja_id');
			if(trim($buscador_fnd_chq_cheque_gral_caja_id_comparador) == '') $buscador_fnd_chq_cheque_gral_caja_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_gral_caja_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_gral_caja_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCajaIngreso') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_caja_ingreso_id', Gral::getCmbFiltro(FndCajaIngreso::getFndCajaIngresosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_ingreso_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_fnd_caja_ingreso_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_caja_ingreso_id');
			if(trim($buscador_fnd_chq_cheque_fnd_caja_ingreso_id_comparador) == '') $buscador_fnd_chq_cheque_fnd_caja_ingreso_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_caja_ingreso_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_fnd_caja_ingreso_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCajaEgreso') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_caja_egreso_id', Gral::getCmbFiltro(FndCajaEgreso::getFndCajaEgresosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_egreso_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_cheque_fnd_caja_egreso_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_caja_egreso_id');
			if(trim($buscador_fnd_chq_cheque_fnd_caja_egreso_id_comparador) == '') $buscador_fnd_chq_cheque_fnd_caja_egreso_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_fnd_caja_egreso_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_fnd_caja_egreso_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_cheque_codigo' type='text' class='textbox' id='buscador_fnd_chq_cheque_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.codigo')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_cheque_codigo_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.codigo');
			if(trim($buscador_fnd_chq_cheque_codigo_comparador) == '') $buscador_fnd_chq_cheque_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_cheque_observacion' type='text' class='textbox' id='buscador_fnd_chq_cheque_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_cheque.observacion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_cheque_observacion_comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.observacion');
			if(trim($buscador_fnd_chq_cheque_observacion_comparador) == '') $buscador_fnd_chq_cheque_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_cheque_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_cheque_observacion_comparador, 'textbox comparador') ?>
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

