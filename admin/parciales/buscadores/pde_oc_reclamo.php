<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeOcReclamo::SES_CRITERIOS);
$criterio->addTabla('pde_oc_reclamo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_oc_reclamo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_reclamo_descripcion' type='text' class='textbox' id='buscador_pde_oc_reclamo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_reclamo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_reclamo_descripcion_comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.descripcion');
			if(trim($buscador_pde_oc_reclamo_descripcion_comparador) == '') $buscador_pde_oc_reclamo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_reclamo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_reclamo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_reclamo_codigo' type='text' class='textbox' id='buscador_pde_oc_reclamo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_reclamo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_reclamo_codigo_comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.codigo');
			if(trim($buscador_pde_oc_reclamo_codigo_comparador) == '') $buscador_pde_oc_reclamo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_reclamo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_reclamo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOc') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_reclamo_pde_oc_id', Gral::getCmbFiltro(PdeOc::getPdeOcsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_reclamo.pde_oc_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_reclamo_pde_oc_id_comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.pde_oc_id');
			if(trim($buscador_pde_oc_reclamo_pde_oc_id_comparador) == '') $buscador_pde_oc_reclamo_pde_oc_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_reclamo_pde_oc_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_reclamo_pde_oc_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_reclamo_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_reclamo.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_reclamo_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.prv_proveedor_id');
			if(trim($buscador_pde_oc_reclamo_prv_proveedor_id_comparador) == '') $buscador_pde_oc_reclamo_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_reclamo_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_reclamo_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOcReclamoMotivo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_reclamo_pde_oc_reclamo_motivo_id', Gral::getCmbFiltro(PdeOcReclamoMotivo::getPdeOcReclamoMotivosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_reclamo.pde_oc_reclamo_motivo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_reclamo_pde_oc_reclamo_motivo_id_comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.pde_oc_reclamo_motivo_id');
			if(trim($buscador_pde_oc_reclamo_pde_oc_reclamo_motivo_id_comparador) == '') $buscador_pde_oc_reclamo_pde_oc_reclamo_motivo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_reclamo_pde_oc_reclamo_motivo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_reclamo_pde_oc_reclamo_motivo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_reclamo_observacion' type='text' class='textbox' id='buscador_pde_oc_reclamo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_reclamo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_reclamo_observacion_comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.observacion');
			if(trim($buscador_pde_oc_reclamo_observacion_comparador) == '') $buscador_pde_oc_reclamo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_reclamo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_reclamo_observacion_comparador, 'textbox comparador') ?>
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

