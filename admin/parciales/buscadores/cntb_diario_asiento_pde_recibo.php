<?php
include_once "_autoload.php";
$criterio = new Criterio(CntbDiarioAsientoPdeRecibo::SES_CRITERIOS);
$criterio->addTabla('cntb_diario_asiento_pde_recibo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cntb_diario_asiento_pde_recibo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbPeriodo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_pde_recibo_cntb_periodo_id', Gral::getCmbFiltro(CntbPeriodo::getCntbPeriodosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_pde_recibo.cntb_periodo_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_pde_recibo_cntb_periodo_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_pde_recibo.cntb_periodo_id');
			if(trim($buscador_cntb_diario_asiento_pde_recibo_cntb_periodo_id_comparador) == '') $buscador_cntb_diario_asiento_pde_recibo_cntb_periodo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_pde_recibo_cntb_periodo_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_pde_recibo_cntb_periodo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbDiarioAsiento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_pde_recibo_cntb_diario_asiento_id', Gral::getCmbFiltro(CntbDiarioAsiento::getCntbDiarioAsientosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_pde_recibo.cntb_diario_asiento_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_pde_recibo_cntb_diario_asiento_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_pde_recibo.cntb_diario_asiento_id');
			if(trim($buscador_cntb_diario_asiento_pde_recibo_cntb_diario_asiento_id_comparador) == '') $buscador_cntb_diario_asiento_pde_recibo_cntb_diario_asiento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_pde_recibo_cntb_diario_asiento_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_pde_recibo_cntb_diario_asiento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeRecibo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_pde_recibo_pde_recibo_id', Gral::getCmbFiltro(PdeRecibo::getPdeRecibosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_pde_recibo.pde_recibo_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_pde_recibo_pde_recibo_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_pde_recibo.pde_recibo_id');
			if(trim($buscador_cntb_diario_asiento_pde_recibo_pde_recibo_id_comparador) == '') $buscador_cntb_diario_asiento_pde_recibo_pde_recibo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_pde_recibo_pde_recibo_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_pde_recibo_pde_recibo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_pde_recibo_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_pde_recibo.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_cntb_diario_asiento_pde_recibo_estado_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_pde_recibo.estado');
			if(trim($buscador_cntb_diario_asiento_pde_recibo_estado_comparador) == '') $buscador_cntb_diario_asiento_pde_recibo_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_pde_recibo_estado_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_pde_recibo_estado_comparador, 'textbox comparador') ?>
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

