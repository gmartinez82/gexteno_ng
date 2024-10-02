<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeRecepcionAgrupacion::SES_CRITERIOS);
$criterio->addTabla('pde_recepcion_agrupacion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_recepcion_agrupacion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_agrupacion_descripcion' type='text' class='textbox' id='buscador_pde_recepcion_agrupacion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_agrupacion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_agrupacion_descripcion_comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.descripcion');
			if(trim($buscador_pde_recepcion_agrupacion_descripcion_comparador) == '') $buscador_pde_recepcion_agrupacion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_agrupacion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_agrupacion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_agrupacion_codigo' type='text' class='textbox' id='buscador_pde_recepcion_agrupacion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_agrupacion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_agrupacion_codigo_comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.codigo');
			if(trim($buscador_pde_recepcion_agrupacion_codigo_comparador) == '') $buscador_pde_recepcion_agrupacion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_agrupacion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_agrupacion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nro Comprobante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_agrupacion_nro_comprobante' type='text' class='textbox' id='buscador_pde_recepcion_agrupacion_nro_comprobante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_agrupacion.nro_comprobante')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_agrupacion_nro_comprobante_comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.nro_comprobante');
			if(trim($buscador_pde_recepcion_agrupacion_nro_comprobante_comparador) == '') $buscador_pde_recepcion_agrupacion_nro_comprobante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_agrupacion_nro_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_agrupacion_nro_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeTipoRecepcion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_agrupacion_pde_tipo_recepcion_id', Gral::getCmbFiltro(PdeTipoRecepcion::getPdeTipoRecepcionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_agrupacion.pde_tipo_recepcion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_agrupacion_pde_tipo_recepcion_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.pde_tipo_recepcion_id');
			if(trim($buscador_pde_recepcion_agrupacion_pde_tipo_recepcion_id_comparador) == '') $buscador_pde_recepcion_agrupacion_pde_tipo_recepcion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_agrupacion_pde_tipo_recepcion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_agrupacion_pde_tipo_recepcion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCentroRecepcion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_agrupacion_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_agrupacion.pde_centro_recepcion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_agrupacion_pde_centro_recepcion_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.pde_centro_recepcion_id');
			if(trim($buscador_pde_recepcion_agrupacion_pde_centro_recepcion_id_comparador) == '') $buscador_pde_recepcion_agrupacion_pde_centro_recepcion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_agrupacion_pde_centro_recepcion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_agrupacion_pde_centro_recepcion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_agrupacion_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_agrupacion.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_agrupacion_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.prv_proveedor_id');
			if(trim($buscador_pde_recepcion_agrupacion_prv_proveedor_id_comparador) == '') $buscador_pde_recepcion_agrupacion_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_agrupacion_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_agrupacion_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Entrega') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_agrupacion_fecha_entrega' type='text' class='textbox' id='buscador_pde_recepcion_agrupacion_fecha_entrega' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('pde_recepcion_agrupacion.fecha_entrega'))) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_recepcion_agrupacion_fecha_entrega' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_recepcion_agrupacion_fecha_entrega', ifFormat: '%d/%m/%Y', button: 'cal_buscador_pde_recepcion_agrupacion_fecha_entrega'
						});
					</script>
		
        	<?php 
			$buscador_pde_recepcion_agrupacion_fecha_entrega_comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.fecha_entrega');
			if(trim($buscador_pde_recepcion_agrupacion_fecha_entrega_comparador) == '') $buscador_pde_recepcion_agrupacion_fecha_entrega_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_agrupacion_fecha_entrega_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_agrupacion_fecha_entrega_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_agrupacion_observacion' type='text' class='textbox' id='buscador_pde_recepcion_agrupacion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_agrupacion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_agrupacion_observacion_comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.observacion');
			if(trim($buscador_pde_recepcion_agrupacion_observacion_comparador) == '') $buscador_pde_recepcion_agrupacion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_agrupacion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_agrupacion_observacion_comparador, 'textbox comparador') ?>
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

