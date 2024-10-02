<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeReciboItemCheque::SES_CRITERIOS);
$criterio->addTabla('pde_recibo_item_cheque');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_recibo_item_cheque'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recibo_item_cheque_descripcion' type='text' class='textbox' id='buscador_pde_recibo_item_cheque_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recibo_item_cheque.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_recibo_item_cheque_descripcion_comparador = $criterio->getComparadorDeCampo('pde_recibo_item_cheque.descripcion');
			if(trim($buscador_pde_recibo_item_cheque_descripcion_comparador) == '') $buscador_pde_recibo_item_cheque_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_item_cheque_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_item_cheque_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeRecibo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recibo_item_cheque_pde_recibo_id', Gral::getCmbFiltro(PdeRecibo::getPdeRecibosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recibo_item_cheque.pde_recibo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recibo_item_cheque_pde_recibo_id_comparador = $criterio->getComparadorDeCampo('pde_recibo_item_cheque.pde_recibo_id');
			if(trim($buscador_pde_recibo_item_cheque_pde_recibo_id_comparador) == '') $buscador_pde_recibo_item_cheque_pde_recibo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_item_cheque_pde_recibo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_item_cheque_pde_recibo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeReciboItem') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recibo_item_cheque_pde_recibo_item_id', Gral::getCmbFiltro(PdeReciboItem::getPdeReciboItemsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recibo_item_cheque.pde_recibo_item_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recibo_item_cheque_pde_recibo_item_id_comparador = $criterio->getComparadorDeCampo('pde_recibo_item_cheque.pde_recibo_item_id');
			if(trim($buscador_pde_recibo_item_cheque_pde_recibo_item_id_comparador) == '') $buscador_pde_recibo_item_cheque_pde_recibo_item_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_item_cheque_pde_recibo_item_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_item_cheque_pde_recibo_item_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralBanco') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recibo_item_cheque_gral_banco_id', Gral::getCmbFiltro(GralBanco::getGralBancosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recibo_item_cheque.gral_banco_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recibo_item_cheque_gral_banco_id_comparador = $criterio->getComparadorDeCampo('pde_recibo_item_cheque.gral_banco_id');
			if(trim($buscador_pde_recibo_item_cheque_gral_banco_id_comparador) == '') $buscador_pde_recibo_item_cheque_gral_banco_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_item_cheque_gral_banco_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_item_cheque_gral_banco_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de Cheque') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recibo_item_cheque_numero_cheque' type='text' class='textbox' id='buscador_pde_recibo_item_cheque_numero_cheque' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recibo_item_cheque.numero_cheque')) ?>' size='22' />
        	<?php 
			$buscador_pde_recibo_item_cheque_numero_cheque_comparador = $criterio->getComparadorDeCampo('pde_recibo_item_cheque.numero_cheque');
			if(trim($buscador_pde_recibo_item_cheque_numero_cheque_comparador) == '') $buscador_pde_recibo_item_cheque_numero_cheque_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_item_cheque_numero_cheque_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_item_cheque_numero_cheque_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recibo_item_cheque_fecha_emision' type='text' class='textbox' id='buscador_pde_recibo_item_cheque_fecha_emision' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('pde_recibo_item_cheque.fecha_emision'))) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_recibo_item_cheque_fecha_emision' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_recibo_item_cheque_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_buscador_pde_recibo_item_cheque_fecha_emision'
						});
					</script>
		
        	<?php 
			$buscador_pde_recibo_item_cheque_fecha_emision_comparador = $criterio->getComparadorDeCampo('pde_recibo_item_cheque.fecha_emision');
			if(trim($buscador_pde_recibo_item_cheque_fecha_emision_comparador) == '') $buscador_pde_recibo_item_cheque_fecha_emision_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_item_cheque_fecha_emision_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_item_cheque_fecha_emision_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Cobro') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recibo_item_cheque_fecha_cobro' type='text' class='textbox' id='buscador_pde_recibo_item_cheque_fecha_cobro' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('pde_recibo_item_cheque.fecha_cobro'))) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_recibo_item_cheque_fecha_cobro' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_recibo_item_cheque_fecha_cobro', ifFormat: '%d/%m/%Y', button: 'cal_buscador_pde_recibo_item_cheque_fecha_cobro'
						});
					</script>
		
        	<?php 
			$buscador_pde_recibo_item_cheque_fecha_cobro_comparador = $criterio->getComparadorDeCampo('pde_recibo_item_cheque.fecha_cobro');
			if(trim($buscador_pde_recibo_item_cheque_fecha_cobro_comparador) == '') $buscador_pde_recibo_item_cheque_fecha_cobro_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_item_cheque_fecha_cobro_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_item_cheque_fecha_cobro_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Firmante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recibo_item_cheque_firmante' type='text' class='textbox' id='buscador_pde_recibo_item_cheque_firmante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recibo_item_cheque.firmante')) ?>' size='22' />
        	<?php 
			$buscador_pde_recibo_item_cheque_firmante_comparador = $criterio->getComparadorDeCampo('pde_recibo_item_cheque.firmante');
			if(trim($buscador_pde_recibo_item_cheque_firmante_comparador) == '') $buscador_pde_recibo_item_cheque_firmante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_item_cheque_firmante_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_item_cheque_firmante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Entregador') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recibo_item_cheque_entregador' type='text' class='textbox' id='buscador_pde_recibo_item_cheque_entregador' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recibo_item_cheque.entregador')) ?>' size='22' />
        	<?php 
			$buscador_pde_recibo_item_cheque_entregador_comparador = $criterio->getComparadorDeCampo('pde_recibo_item_cheque.entregador');
			if(trim($buscador_pde_recibo_item_cheque_entregador_comparador) == '') $buscador_pde_recibo_item_cheque_entregador_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_item_cheque_entregador_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_item_cheque_entregador_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recibo_item_cheque_codigo' type='text' class='textbox' id='buscador_pde_recibo_item_cheque_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recibo_item_cheque.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_recibo_item_cheque_codigo_comparador = $criterio->getComparadorDeCampo('pde_recibo_item_cheque.codigo');
			if(trim($buscador_pde_recibo_item_cheque_codigo_comparador) == '') $buscador_pde_recibo_item_cheque_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_item_cheque_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_item_cheque_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recibo_item_cheque_observacion' type='text' class='textbox' id='buscador_pde_recibo_item_cheque_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recibo_item_cheque.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_recibo_item_cheque_observacion_comparador = $criterio->getComparadorDeCampo('pde_recibo_item_cheque.observacion');
			if(trim($buscador_pde_recibo_item_cheque_observacion_comparador) == '') $buscador_pde_recibo_item_cheque_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_item_cheque_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_item_cheque_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_recibo_item_cheque_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recibo_item_cheque.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_recibo_item_cheque_estado_comparador = $criterio->getComparadorDeCampo('pde_recibo_item_cheque.estado');
			if(trim($buscador_pde_recibo_item_cheque_estado_comparador) == '') $buscador_pde_recibo_item_cheque_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_item_cheque_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_item_cheque_estado_comparador, 'textbox comparador') ?>
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

