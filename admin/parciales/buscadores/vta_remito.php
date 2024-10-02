<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaRemito::SES_CRITERIOS);
$criterio->addTabla('vta_remito');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_remito'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_remito_descripcion' type='text' class='textbox' id='buscador_vta_remito_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_remito_descripcion_comparador = $criterio->getComparadorDeCampo('vta_remito.descripcion');
			if(trim($buscador_vta_remito_descripcion_comparador) == '') $buscador_vta_remito_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_remito_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCliente') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_remito_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito.cli_cliente_id'), 'textbox')?>
        	<?php 
			$buscador_vta_remito_cli_cliente_id_comparador = $criterio->getComparadorDeCampo('vta_remito.cli_cliente_id');
			if(trim($buscador_vta_remito_cli_cliente_id_comparador) == '') $buscador_vta_remito_cli_cliente_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_cli_cliente_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_cli_cliente_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaRemitoTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_remito_vta_remito_tipo_estado_id', Gral::getCmbFiltro(VtaRemitoTipoEstado::getVtaRemitoTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito.vta_remito_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_vta_remito_vta_remito_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('vta_remito.vta_remito_tipo_estado_id');
			if(trim($buscador_vta_remito_vta_remito_tipo_estado_id_comparador) == '') $buscador_vta_remito_vta_remito_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_vta_remito_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_vta_remito_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoDocumento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_remito_gral_tipo_documento_id', Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito.gral_tipo_documento_id'), 'textbox')?>
        	<?php 
			$buscador_vta_remito_gral_tipo_documento_id_comparador = $criterio->getComparadorDeCampo('vta_remito.gral_tipo_documento_id');
			if(trim($buscador_vta_remito_gral_tipo_documento_id_comparador) == '') $buscador_vta_remito_gral_tipo_documento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_gral_tipo_documento_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_gral_tipo_documento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_remito_persona_descripcion' type='text' class='textbox' id='buscador_vta_remito_persona_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito.persona_descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_remito_persona_descripcion_comparador = $criterio->getComparadorDeCampo('vta_remito.persona_descripcion');
			if(trim($buscador_vta_remito_persona_descripcion_comparador) == '') $buscador_vta_remito_persona_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_remito_persona_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_persona_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_remito_persona_documento' type='text' class='textbox' id='buscador_vta_remito_persona_documento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito.persona_documento')) ?>' size='22' />
        	<?php 
			$buscador_vta_remito_persona_documento_comparador = $criterio->getComparadorDeCampo('vta_remito.persona_documento');
			if(trim($buscador_vta_remito_persona_documento_comparador) == '') $buscador_vta_remito_persona_documento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_remito_persona_documento_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_persona_documento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_remito_persona_email' type='text' class='textbox' id='buscador_vta_remito_persona_email' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito.persona_email')) ?>' size='22' />
        	<?php 
			$buscador_vta_remito_persona_email_comparador = $criterio->getComparadorDeCampo('vta_remito.persona_email');
			if(trim($buscador_vta_remito_persona_email_comparador) == '') $buscador_vta_remito_persona_email_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_remito_persona_email_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_persona_email_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_remito_fecha' type='text' class='textbox' id='buscador_vta_remito_fecha' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito.fecha')) ?>' size='15' />
					<input type='button' id='cal_buscador_vta_remito_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_vta_remito_fecha', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_vta_remito_fecha'
						});
					</script>
		
        	<?php 
			$buscador_vta_remito_fecha_comparador = $criterio->getComparadorDeCampo('vta_remito.fecha');
			if(trim($buscador_vta_remito_fecha_comparador) == '') $buscador_vta_remito_fecha_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_remito_fecha_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_fecha_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_remito_codigo' type='text' class='textbox' id='buscador_vta_remito_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_remito_codigo_comparador = $criterio->getComparadorDeCampo('vta_remito.codigo');
			if(trim($buscador_vta_remito_codigo_comparador) == '') $buscador_vta_remito_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_remito_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPresupuesto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_remito_vta_presupuesto_id', Gral::getCmbFiltro(VtaPresupuesto::getVtaPresupuestosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito.vta_presupuesto_id'), 'textbox')?>
        	<?php 
			$buscador_vta_remito_vta_presupuesto_id_comparador = $criterio->getComparadorDeCampo('vta_remito.vta_presupuesto_id');
			if(trim($buscador_vta_remito_vta_presupuesto_id_comparador) == '') $buscador_vta_remito_vta_presupuesto_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_vta_presupuesto_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_vta_presupuesto_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCentroRecepcion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_remito_cli_centro_recepcion_id', Gral::getCmbFiltro(CliCentroRecepcion::getCliCentroRecepcionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito.cli_centro_recepcion_id'), 'textbox')?>
        	<?php 
			$buscador_vta_remito_cli_centro_recepcion_id_comparador = $criterio->getComparadorDeCampo('vta_remito.cli_centro_recepcion_id');
			if(trim($buscador_vta_remito_cli_centro_recepcion_id_comparador) == '') $buscador_vta_remito_cli_centro_recepcion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_cli_centro_recepcion_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_cli_centro_recepcion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PanPanol') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_remito_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito.pan_panol_id'), 'textbox')?>
        	<?php 
			$buscador_vta_remito_pan_panol_id_comparador = $criterio->getComparadorDeCampo('vta_remito.pan_panol_id');
			if(trim($buscador_vta_remito_pan_panol_id_comparador) == '') $buscador_vta_remito_pan_panol_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_pan_panol_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_pan_panol_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('En Domicilio') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_remito_en_domicilio', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito.en_domicilio'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_remito_en_domicilio_comparador = $criterio->getComparadorDeCampo('vta_remito.en_domicilio');
			if(trim($buscador_vta_remito_en_domicilio_comparador) == '') $buscador_vta_remito_en_domicilio_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_en_domicilio_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_en_domicilio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_remito_observacion' type='text' class='textbox' id='buscador_vta_remito_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_remito_observacion_comparador = $criterio->getComparadorDeCampo('vta_remito.observacion');
			if(trim($buscador_vta_remito_observacion_comparador) == '') $buscador_vta_remito_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_remito_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_remito_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_remito.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_remito_estado_comparador = $criterio->getComparadorDeCampo('vta_remito.estado');
			if(trim($buscador_vta_remito_estado_comparador) == '') $buscador_vta_remito_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_remito_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_remito_estado_comparador, 'textbox comparador') ?>
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

