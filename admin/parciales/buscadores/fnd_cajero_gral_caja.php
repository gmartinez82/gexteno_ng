<?php
include_once "_autoload.php";
$criterio = new Criterio(FndCajeroGralCaja::SES_CRITERIOS);
$criterio->addTabla('fnd_cajero_gral_caja');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='fnd_cajero_gral_caja'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCajero') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_cajero_gral_caja_fnd_cajero_id', Gral::getCmbFiltro(FndCajero::getFndCajerosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_cajero_gral_caja.fnd_cajero_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_cajero_gral_caja_fnd_cajero_id_comparador = $criterio->getComparadorDeCampo('fnd_cajero_gral_caja.fnd_cajero_id');
			if(trim($buscador_fnd_cajero_gral_caja_fnd_cajero_id_comparador) == '') $buscador_fnd_cajero_gral_caja_fnd_cajero_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_cajero_gral_caja_fnd_cajero_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_cajero_gral_caja_fnd_cajero_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralCaja') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_cajero_gral_caja_gral_caja_id', Gral::getCmbFiltro(GralCaja::getGralCajasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_cajero_gral_caja.gral_caja_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_cajero_gral_caja_gral_caja_id_comparador = $criterio->getComparadorDeCampo('fnd_cajero_gral_caja.gral_caja_id');
			if(trim($buscador_fnd_cajero_gral_caja_gral_caja_id_comparador) == '') $buscador_fnd_cajero_gral_caja_gral_caja_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_cajero_gral_caja_gral_caja_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_cajero_gral_caja_gral_caja_id_comparador, 'textbox comparador') ?>
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

