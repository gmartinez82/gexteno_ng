<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeOrdenPago::SES_CRITERIOS);
$criterio->addTabla('pde_orden_pago');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_orden_pago'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_descripcion' type='text' class='textbox' id='buscador_pde_orden_pago_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_descripcion_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.descripcion');
			if(trim($buscador_pde_orden_pago_descripcion_comparador) == '') $buscador_pde_orden_pago_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_pde_orden_pago_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.prv_proveedor_id');
			if(trim($buscador_pde_orden_pago_prv_proveedor_id_comparador) == '') $buscador_pde_orden_pago_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOrdenPagoTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_pde_orden_pago_tipo_estado_id', Gral::getCmbFiltro(PdeOrdenPagoTipoEstado::getPdeOrdenPagoTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.pde_orden_pago_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_pde_orden_pago_pde_orden_pago_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.pde_orden_pago_tipo_estado_id');
			if(trim($buscador_pde_orden_pago_pde_orden_pago_tipo_estado_id_comparador) == '') $buscador_pde_orden_pago_pde_orden_pago_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_pde_orden_pago_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_pde_orden_pago_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.gral_condicion_iva_id'), 'textbox')?>
        	<?php 
			$buscador_pde_orden_pago_gral_condicion_iva_id_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.gral_condicion_iva_id');
			if(trim($buscador_pde_orden_pago_gral_condicion_iva_id_comparador) == '') $buscador_pde_orden_pago_gral_condicion_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_gral_condicion_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_gral_condicion_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.gral_tipo_personeria_id'), 'textbox')?>
        	<?php 
			$buscador_pde_orden_pago_gral_tipo_personeria_id_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.gral_tipo_personeria_id');
			if(trim($buscador_pde_orden_pago_gral_tipo_personeria_id_comparador) == '') $buscador_pde_orden_pago_gral_tipo_personeria_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_gral_tipo_personeria_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_gral_tipo_personeria_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.gral_empresa_id'), 'textbox')?>
        	<?php 
			$buscador_pde_orden_pago_gral_empresa_id_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.gral_empresa_id');
			if(trim($buscador_pde_orden_pago_gral_empresa_id_comparador) == '') $buscador_pde_orden_pago_gral_empresa_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_gral_empresa_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_gral_empresa_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCentroPedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.pde_centro_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pde_orden_pago_pde_centro_pedido_id_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.pde_centro_pedido_id');
			if(trim($buscador_pde_orden_pago_pde_centro_pedido_id_comparador) == '') $buscador_pde_orden_pago_pde_centro_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_pde_centro_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_pde_centro_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_fecha_emision' type='text' class='textbox' id='buscador_pde_orden_pago_fecha_emision' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('pde_orden_pago.fecha_emision'))) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_orden_pago_fecha_emision' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_orden_pago_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_buscador_pde_orden_pago_fecha_emision'
						});
					</script>
		
        	<?php 
			$buscador_pde_orden_pago_fecha_emision_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.fecha_emision');
			if(trim($buscador_pde_orden_pago_fecha_emision_comparador) == '') $buscador_pde_orden_pago_fecha_emision_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_fecha_emision_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_fecha_emision_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_persona_descripcion' type='text' class='textbox' id='buscador_pde_orden_pago_persona_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.persona_descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_persona_descripcion_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.persona_descripcion');
			if(trim($buscador_pde_orden_pago_persona_descripcion_comparador) == '') $buscador_pde_orden_pago_persona_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_persona_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_persona_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Razon Social') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_razon_social' type='text' class='textbox' id='buscador_pde_orden_pago_razon_social' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.razon_social')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_razon_social_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.razon_social');
			if(trim($buscador_pde_orden_pago_razon_social_comparador) == '') $buscador_pde_orden_pago_razon_social_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_razon_social_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_razon_social_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_domicilio_legal' type='text' class='textbox' id='buscador_pde_orden_pago_domicilio_legal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.domicilio_legal')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_domicilio_legal_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.domicilio_legal');
			if(trim($buscador_pde_orden_pago_domicilio_legal_comparador) == '') $buscador_pde_orden_pago_domicilio_legal_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_domicilio_legal_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_domicilio_legal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CUIT') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_cuit' type='text' class='textbox' id='buscador_pde_orden_pago_cuit' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.cuit')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_cuit_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.cuit');
			if(trim($buscador_pde_orden_pago_cuit_comparador) == '') $buscador_pde_orden_pago_cuit_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_cuit_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_cuit_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_codigo' type='text' class='textbox' id='buscador_pde_orden_pago_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_codigo_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.codigo');
			if(trim($buscador_pde_orden_pago_codigo_comparador) == '') $buscador_pde_orden_pago_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Anio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_anio' type='text' class='textbox' id='buscador_pde_orden_pago_anio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.anio')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_anio_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.anio');
			if(trim($buscador_pde_orden_pago_anio_comparador) == '') $buscador_pde_orden_pago_anio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_anio_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_anio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralMes') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_gral_mes_id', Gral::getCmbFiltro(GralMes::getGralMessCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.gral_mes_id'), 'textbox')?>
        	<?php 
			$buscador_pde_orden_pago_gral_mes_id_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.gral_mes_id');
			if(trim($buscador_pde_orden_pago_gral_mes_id_comparador) == '') $buscador_pde_orden_pago_gral_mes_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_gral_mes_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_gral_mes_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCaja') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_fnd_caja_id', Gral::getCmbFiltro(FndCaja::getFndCajasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.fnd_caja_id'), 'textbox')?>
        	<?php 
			$buscador_pde_orden_pago_fnd_caja_id_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.fnd_caja_id');
			if(trim($buscador_pde_orden_pago_fnd_caja_id_comparador) == '') $buscador_pde_orden_pago_fnd_caja_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_fnd_caja_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_fnd_caja_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_observacion' type='text' class='textbox' id='buscador_pde_orden_pago_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_observacion_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.observacion');
			if(trim($buscador_pde_orden_pago_observacion_comparador) == '') $buscador_pde_orden_pago_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Publica') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_nota_publica' type='text' class='textbox' id='buscador_pde_orden_pago_nota_publica' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.nota_publica')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_nota_publica_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.nota_publica');
			if(trim($buscador_pde_orden_pago_nota_publica_comparador) == '') $buscador_pde_orden_pago_nota_publica_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_nota_publica_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_nota_publica_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_orden_pago_estado_comparador = $criterio->getComparadorDeCampo('pde_orden_pago.estado');
			if(trim($buscador_pde_orden_pago_estado_comparador) == '') $buscador_pde_orden_pago_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_estado_comparador, 'textbox comparador') ?>
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

