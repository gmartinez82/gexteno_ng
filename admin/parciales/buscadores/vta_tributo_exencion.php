<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaTributoExencion::SES_CRITERIOS);
$criterio->addTabla('vta_tributo_exencion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_tributo_exencion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tributo_exencion_descripcion' type='text' class='textbox' id='buscador_vta_tributo_exencion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo_exencion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_tributo_exencion_descripcion_comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.descripcion');
			if(trim($buscador_vta_tributo_exencion_descripcion_comparador) == '') $buscador_vta_tributo_exencion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_exencion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_exencion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaTributo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_tributo_exencion_vta_tributo_id', Gral::getCmbFiltro(VtaTributo::getVtaTributosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo_exencion.vta_tributo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_tributo_exencion_vta_tributo_id_comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.vta_tributo_id');
			if(trim($buscador_vta_tributo_exencion_vta_tributo_id_comparador) == '') $buscador_vta_tributo_exencion_vta_tributo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_exencion_vta_tributo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_exencion_vta_tributo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCliente') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_tributo_exencion_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo_exencion.cli_cliente_id'), 'textbox')?>
        	<?php 
			$buscador_vta_tributo_exencion_cli_cliente_id_comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.cli_cliente_id');
			if(trim($buscador_vta_tributo_exencion_cli_cliente_id_comparador) == '') $buscador_vta_tributo_exencion_cli_cliente_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_exencion_cli_cliente_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_exencion_cli_cliente_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Inicio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tributo_exencion_fecha_inicio' type='text' class='textbox' id='buscador_vta_tributo_exencion_fecha_inicio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('vta_tributo_exencion.fecha_inicio'))) ?>' size='15' />
					<input type='button' id='cal_buscador_vta_tributo_exencion_fecha_inicio' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_vta_tributo_exencion_fecha_inicio', ifFormat: '%d/%m/%Y', button: 'cal_buscador_vta_tributo_exencion_fecha_inicio'
						});
					</script>
		
        	<?php 
			$buscador_vta_tributo_exencion_fecha_inicio_comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.fecha_inicio');
			if(trim($buscador_vta_tributo_exencion_fecha_inicio_comparador) == '') $buscador_vta_tributo_exencion_fecha_inicio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_exencion_fecha_inicio_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_exencion_fecha_inicio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Fin') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tributo_exencion_fecha_fin' type='text' class='textbox' id='buscador_vta_tributo_exencion_fecha_fin' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('vta_tributo_exencion.fecha_fin'))) ?>' size='15' />
					<input type='button' id='cal_buscador_vta_tributo_exencion_fecha_fin' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_vta_tributo_exencion_fecha_fin', ifFormat: '%d/%m/%Y', button: 'cal_buscador_vta_tributo_exencion_fecha_fin'
						});
					</script>
		
        	<?php 
			$buscador_vta_tributo_exencion_fecha_fin_comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.fecha_fin');
			if(trim($buscador_vta_tributo_exencion_fecha_fin_comparador) == '') $buscador_vta_tributo_exencion_fecha_fin_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_exencion_fecha_fin_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_exencion_fecha_fin_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tributo_exencion_codigo' type='text' class='textbox' id='buscador_vta_tributo_exencion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo_exencion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_tributo_exencion_codigo_comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.codigo');
			if(trim($buscador_vta_tributo_exencion_codigo_comparador) == '') $buscador_vta_tributo_exencion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_exencion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_exencion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tributo_exencion_observacion' type='text' class='textbox' id='buscador_vta_tributo_exencion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo_exencion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_tributo_exencion_observacion_comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.observacion');
			if(trim($buscador_vta_tributo_exencion_observacion_comparador) == '') $buscador_vta_tributo_exencion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_exencion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_exencion_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_tributo_exencion_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo_exencion.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_tributo_exencion_estado_comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.estado');
			if(trim($buscador_vta_tributo_exencion_estado_comparador) == '') $buscador_vta_tributo_exencion_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_exencion_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_exencion_estado_comparador, 'textbox comparador') ?>
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

