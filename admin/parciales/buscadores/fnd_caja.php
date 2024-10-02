<?php
include_once "_autoload.php";
$criterio = new Criterio(FndCaja::SES_CRITERIOS);
$criterio->addTabla('fnd_caja');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='fnd_caja'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_descripcion' type='text' class='textbox' id='buscador_fnd_caja_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_descripcion_comparador = $criterio->getComparadorDeCampo('fnd_caja.descripcion');
			if(trim($buscador_fnd_caja_descripcion_comparador) == '') $buscador_fnd_caja_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCajero') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_caja_fnd_cajero_id', Gral::getCmbFiltro(FndCajero::getFndCajerosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja.fnd_cajero_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_caja_fnd_cajero_id_comparador = $criterio->getComparadorDeCampo('fnd_caja.fnd_cajero_id');
			if(trim($buscador_fnd_caja_fnd_cajero_id_comparador) == '') $buscador_fnd_caja_fnd_cajero_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_fnd_cajero_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_fnd_cajero_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralCaja') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_caja_gral_caja_id', Gral::getCmbFiltro(GralCaja::getGralCajasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja.gral_caja_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_caja_gral_caja_id_comparador = $criterio->getComparadorDeCampo('fnd_caja.gral_caja_id');
			if(trim($buscador_fnd_caja_gral_caja_id_comparador) == '') $buscador_fnd_caja_gral_caja_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_gral_caja_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_gral_caja_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCajaTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_caja_fnd_caja_tipo_estado_id', Gral::getCmbFiltro(FndCajaTipoEstado::getFndCajaTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja.fnd_caja_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_caja_fnd_caja_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('fnd_caja.fnd_caja_tipo_estado_id');
			if(trim($buscador_fnd_caja_fnd_caja_tipo_estado_id_comparador) == '') $buscador_fnd_caja_fnd_caja_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_fnd_caja_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_fnd_caja_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Apertura') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_fecha_apertura' type='text' class='textbox' id='buscador_fnd_caja_fecha_apertura' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('fnd_caja.fecha_apertura'))) ?>' size='15' />
					<input type='button' id='cal_buscador_fnd_caja_fecha_apertura' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_fnd_caja_fecha_apertura', ifFormat: '%d/%m/%Y', button: 'cal_buscador_fnd_caja_fecha_apertura'
						});
					</script>
		
        	<?php 
			$buscador_fnd_caja_fecha_apertura_comparador = $criterio->getComparadorDeCampo('fnd_caja.fecha_apertura');
			if(trim($buscador_fnd_caja_fecha_apertura_comparador) == '') $buscador_fnd_caja_fecha_apertura_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_fecha_apertura_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_fecha_apertura_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Cierre') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_fecha_cierre' type='text' class='textbox' id='buscador_fnd_caja_fecha_cierre' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('fnd_caja.fecha_cierre'))) ?>' size='15' />
					<input type='button' id='cal_buscador_fnd_caja_fecha_cierre' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_fnd_caja_fecha_cierre', ifFormat: '%d/%m/%Y', button: 'cal_buscador_fnd_caja_fecha_cierre'
						});
					</script>
		
        	<?php 
			$buscador_fnd_caja_fecha_cierre_comparador = $criterio->getComparadorDeCampo('fnd_caja.fecha_cierre');
			if(trim($buscador_fnd_caja_fecha_cierre_comparador) == '') $buscador_fnd_caja_fecha_cierre_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_fecha_cierre_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_fecha_cierre_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Rendicion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_fecha_rendicion' type='text' class='textbox' id='buscador_fnd_caja_fecha_rendicion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('fnd_caja.fecha_rendicion'))) ?>' size='15' />
					<input type='button' id='cal_buscador_fnd_caja_fecha_rendicion' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_fnd_caja_fecha_rendicion', ifFormat: '%d/%m/%Y', button: 'cal_buscador_fnd_caja_fecha_rendicion'
						});
					</script>
		
        	<?php 
			$buscador_fnd_caja_fecha_rendicion_comparador = $criterio->getComparadorDeCampo('fnd_caja.fecha_rendicion');
			if(trim($buscador_fnd_caja_fecha_rendicion_comparador) == '') $buscador_fnd_caja_fecha_rendicion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_fecha_rendicion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_fecha_rendicion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Saldo Inicial Esperado') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_importe_saldo_inicial_esperado' type='text' class='textbox' id='buscador_fnd_caja_importe_saldo_inicial_esperado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja.importe_saldo_inicial_esperado')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_importe_saldo_inicial_esperado_comparador = $criterio->getComparadorDeCampo('fnd_caja.importe_saldo_inicial_esperado');
			if(trim($buscador_fnd_caja_importe_saldo_inicial_esperado_comparador) == '') $buscador_fnd_caja_importe_saldo_inicial_esperado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_importe_saldo_inicial_esperado_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_importe_saldo_inicial_esperado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Saldo Inicial Real') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_importe_saldo_inicial_real' type='text' class='textbox' id='buscador_fnd_caja_importe_saldo_inicial_real' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja.importe_saldo_inicial_real')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_importe_saldo_inicial_real_comparador = $criterio->getComparadorDeCampo('fnd_caja.importe_saldo_inicial_real');
			if(trim($buscador_fnd_caja_importe_saldo_inicial_real_comparador) == '') $buscador_fnd_caja_importe_saldo_inicial_real_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_importe_saldo_inicial_real_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_importe_saldo_inicial_real_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Saldo Inicial Diferencia') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_importe_saldo_inicial_diferencia' type='text' class='textbox' id='buscador_fnd_caja_importe_saldo_inicial_diferencia' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja.importe_saldo_inicial_diferencia')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_importe_saldo_inicial_diferencia_comparador = $criterio->getComparadorDeCampo('fnd_caja.importe_saldo_inicial_diferencia');
			if(trim($buscador_fnd_caja_importe_saldo_inicial_diferencia_comparador) == '') $buscador_fnd_caja_importe_saldo_inicial_diferencia_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_importe_saldo_inicial_diferencia_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_importe_saldo_inicial_diferencia_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Saldo Final') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_importe_saldo_final' type='text' class='textbox' id='buscador_fnd_caja_importe_saldo_final' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja.importe_saldo_final')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_importe_saldo_final_comparador = $criterio->getComparadorDeCampo('fnd_caja.importe_saldo_final');
			if(trim($buscador_fnd_caja_importe_saldo_final_comparador) == '') $buscador_fnd_caja_importe_saldo_final_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_importe_saldo_final_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_importe_saldo_final_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_codigo' type='text' class='textbox' id='buscador_fnd_caja_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja.codigo')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_codigo_comparador = $criterio->getComparadorDeCampo('fnd_caja.codigo');
			if(trim($buscador_fnd_caja_codigo_comparador) == '') $buscador_fnd_caja_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_observacion' type='text' class='textbox' id='buscador_fnd_caja_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja.observacion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_observacion_comparador = $criterio->getComparadorDeCampo('fnd_caja.observacion');
			if(trim($buscador_fnd_caja_observacion_comparador) == '') $buscador_fnd_caja_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_caja_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_caja_estado_comparador = $criterio->getComparadorDeCampo('fnd_caja.estado');
			if(trim($buscador_fnd_caja_estado_comparador) == '') $buscador_fnd_caja_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_estado_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_estado_comparador, 'textbox comparador') ?>
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

