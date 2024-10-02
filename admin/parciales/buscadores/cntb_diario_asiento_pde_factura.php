<?php
include_once "_autoload.php";
$criterio = new Criterio(CntbDiarioAsientoPdeFactura::SES_CRITERIOS);
$criterio->addTabla('cntb_diario_asiento_pde_factura');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cntb_diario_asiento_pde_factura'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbPeriodo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_pde_factura_cntb_periodo_id', Gral::getCmbFiltro(CntbPeriodo::getCntbPeriodosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_pde_factura.cntb_periodo_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_pde_factura_cntb_periodo_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_pde_factura.cntb_periodo_id');
			if(trim($buscador_cntb_diario_asiento_pde_factura_cntb_periodo_id_comparador) == '') $buscador_cntb_diario_asiento_pde_factura_cntb_periodo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_pde_factura_cntb_periodo_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_pde_factura_cntb_periodo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbDiarioAsiento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_pde_factura_cntb_diario_asiento_id', Gral::getCmbFiltro(CntbDiarioAsiento::getCntbDiarioAsientosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_pde_factura.cntb_diario_asiento_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_pde_factura_cntb_diario_asiento_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_pde_factura.cntb_diario_asiento_id');
			if(trim($buscador_cntb_diario_asiento_pde_factura_cntb_diario_asiento_id_comparador) == '') $buscador_cntb_diario_asiento_pde_factura_cntb_diario_asiento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_pde_factura_cntb_diario_asiento_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_pde_factura_cntb_diario_asiento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeFactura') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_pde_factura_pde_factura_id', Gral::getCmbFiltro(PdeFactura::getPdeFacturasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_pde_factura.pde_factura_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_pde_factura_pde_factura_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_pde_factura.pde_factura_id');
			if(trim($buscador_cntb_diario_asiento_pde_factura_pde_factura_id_comparador) == '') $buscador_cntb_diario_asiento_pde_factura_pde_factura_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_pde_factura_pde_factura_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_pde_factura_pde_factura_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_pde_factura_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_pde_factura.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_cntb_diario_asiento_pde_factura_estado_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_pde_factura.estado');
			if(trim($buscador_cntb_diario_asiento_pde_factura_estado_comparador) == '') $buscador_cntb_diario_asiento_pde_factura_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_pde_factura_estado_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_pde_factura_estado_comparador, 'textbox comparador') ?>
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

