<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaComision::SES_CRITERIOS);
$criterio->addTabla('vta_comision');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_comision'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_descripcion' type='text' class='textbox' id='buscador_vta_comision_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_descripcion_comparador = $criterio->getComparadorDeCampo('vta_comision.descripcion');
			if(trim($buscador_vta_comision_descripcion_comparador) == '') $buscador_vta_comision_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPreventista') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_comision_vta_preventista_id', Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision.vta_preventista_id'), 'textbox')?>
        	<?php 
			$buscador_vta_comision_vta_preventista_id_comparador = $criterio->getComparadorDeCampo('vta_comision.vta_preventista_id');
			if(trim($buscador_vta_comision_vta_preventista_id_comparador) == '') $buscador_vta_comision_vta_preventista_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_vta_preventista_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_vta_preventista_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaComprador') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_comision_vta_comprador_id', Gral::getCmbFiltro(VtaComprador::getVtaCompradorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision.vta_comprador_id'), 'textbox')?>
        	<?php 
			$buscador_vta_comision_vta_comprador_id_comparador = $criterio->getComparadorDeCampo('vta_comision.vta_comprador_id');
			if(trim($buscador_vta_comision_vta_comprador_id_comparador) == '') $buscador_vta_comision_vta_comprador_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_vta_comprador_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_vta_comprador_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaVendedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_comision_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision.vta_vendedor_id'), 'textbox')?>
        	<?php 
			$buscador_vta_comision_vta_vendedor_id_comparador = $criterio->getComparadorDeCampo('vta_comision.vta_vendedor_id');
			if(trim($buscador_vta_comision_vta_vendedor_id_comparador) == '') $buscador_vta_comision_vta_vendedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_vta_vendedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_vta_vendedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaComisionTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_comision_vta_comision_tipo_estado_id', Gral::getCmbFiltro(VtaComisionTipoEstado::getVtaComisionTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision.vta_comision_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_vta_comision_vta_comision_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('vta_comision.vta_comision_tipo_estado_id');
			if(trim($buscador_vta_comision_vta_comision_tipo_estado_id_comparador) == '') $buscador_vta_comision_vta_comision_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_vta_comision_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_vta_comision_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_fecha_emision' type='text' class='textbox' id='buscador_vta_comision_fecha_emision' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('vta_comision.fecha_emision'))) ?>' size='15' />
					<input type='button' id='cal_buscador_vta_comision_fecha_emision' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_vta_comision_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_buscador_vta_comision_fecha_emision'
						});
					</script>
		
        	<?php 
			$buscador_vta_comision_fecha_emision_comparador = $criterio->getComparadorDeCampo('vta_comision.fecha_emision');
			if(trim($buscador_vta_comision_fecha_emision_comparador) == '') $buscador_vta_comision_fecha_emision_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_fecha_emision_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_fecha_emision_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_persona_descripcion' type='text' class='textbox' id='buscador_vta_comision_persona_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision.persona_descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_persona_descripcion_comparador = $criterio->getComparadorDeCampo('vta_comision.persona_descripcion');
			if(trim($buscador_vta_comision_persona_descripcion_comparador) == '') $buscador_vta_comision_persona_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_persona_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_persona_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_codigo' type='text' class='textbox' id='buscador_vta_comision_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_codigo_comparador = $criterio->getComparadorDeCampo('vta_comision.codigo');
			if(trim($buscador_vta_comision_codigo_comparador) == '') $buscador_vta_comision_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_observacion' type='text' class='textbox' id='buscador_vta_comision_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_observacion_comparador = $criterio->getComparadorDeCampo('vta_comision.observacion');
			if(trim($buscador_vta_comision_observacion_comparador) == '') $buscador_vta_comision_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_comision_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_comision_estado_comparador = $criterio->getComparadorDeCampo('vta_comision.estado');
			if(trim($buscador_vta_comision_estado_comparador) == '') $buscador_vta_comision_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_estado_comparador, 'textbox comparador') ?>
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

