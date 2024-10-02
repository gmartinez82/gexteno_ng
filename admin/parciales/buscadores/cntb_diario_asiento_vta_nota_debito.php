<?php
include_once "_autoload.php";
$criterio = new Criterio(CntbDiarioAsientoVtaNotaDebito::SES_CRITERIOS);
$criterio->addTabla('cntb_diario_asiento_vta_nota_debito');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cntb_diario_asiento_vta_nota_debito'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbPeriodo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_vta_nota_debito_cntb_periodo_id', Gral::getCmbFiltro(CntbPeriodo::getCntbPeriodosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.cntb_periodo_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_vta_nota_debito_cntb_periodo_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_nota_debito.cntb_periodo_id');
			if(trim($buscador_cntb_diario_asiento_vta_nota_debito_cntb_periodo_id_comparador) == '') $buscador_cntb_diario_asiento_vta_nota_debito_cntb_periodo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_vta_nota_debito_cntb_periodo_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_vta_nota_debito_cntb_periodo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbDiarioAsiento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_vta_nota_debito_cntb_diario_asiento_id', Gral::getCmbFiltro(CntbDiarioAsiento::getCntbDiarioAsientosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.cntb_diario_asiento_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_vta_nota_debito_cntb_diario_asiento_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_nota_debito.cntb_diario_asiento_id');
			if(trim($buscador_cntb_diario_asiento_vta_nota_debito_cntb_diario_asiento_id_comparador) == '') $buscador_cntb_diario_asiento_vta_nota_debito_cntb_diario_asiento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_vta_nota_debito_cntb_diario_asiento_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_vta_nota_debito_cntb_diario_asiento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaNotaDebito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_vta_nota_debito_vta_nota_debito_id', Gral::getCmbFiltro(VtaNotaDebito::getVtaNotaDebitosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.vta_nota_debito_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_vta_nota_debito_vta_nota_debito_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_nota_debito.vta_nota_debito_id');
			if(trim($buscador_cntb_diario_asiento_vta_nota_debito_vta_nota_debito_id_comparador) == '') $buscador_cntb_diario_asiento_vta_nota_debito_vta_nota_debito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_vta_nota_debito_vta_nota_debito_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_vta_nota_debito_vta_nota_debito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_vta_nota_debito_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_cntb_diario_asiento_vta_nota_debito_estado_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_nota_debito.estado');
			if(trim($buscador_cntb_diario_asiento_vta_nota_debito_estado_comparador) == '') $buscador_cntb_diario_asiento_vta_nota_debito_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_vta_nota_debito_estado_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_vta_nota_debito_estado_comparador, 'textbox comparador') ?>
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

