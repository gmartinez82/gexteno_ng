<?php
include_once "_autoload.php";
$criterio = new Criterio(AfipCitiPrc::SES_CRITERIOS);
$criterio->addTabla('afip_citi_prc');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='afip_citi_prc'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_prc_descripcion' type='text' class='textbox' id='buscador_afip_citi_prc_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_prc.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_prc_descripcion_comparador = $criterio->getComparadorDeCampo('afip_citi_prc.descripcion');
			if(trim($buscador_afip_citi_prc_descripcion_comparador) == '') $buscador_afip_citi_prc_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_prc_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_prc_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_prc_codigo' type='text' class='textbox' id='buscador_afip_citi_prc_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_prc.codigo')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_prc_codigo_comparador = $criterio->getComparadorDeCampo('afip_citi_prc.codigo');
			if(trim($buscador_afip_citi_prc_codigo_comparador) == '') $buscador_afip_citi_prc_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_prc_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_prc_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_prc_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_prc.gral_empresa_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_prc_gral_empresa_id_comparador = $criterio->getComparadorDeCampo('afip_citi_prc.gral_empresa_id');
			if(trim($buscador_afip_citi_prc_gral_empresa_id_comparador) == '') $buscador_afip_citi_prc_gral_empresa_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_prc_gral_empresa_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_prc_gral_empresa_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Anio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_prc_anio' type='text' class='textbox' id='buscador_afip_citi_prc_anio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_prc.anio')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_prc_anio_comparador = $criterio->getComparadorDeCampo('afip_citi_prc.anio');
			if(trim($buscador_afip_citi_prc_anio_comparador) == '') $buscador_afip_citi_prc_anio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_prc_anio_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_prc_anio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralMes') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_prc_gral_mes_id', Gral::getCmbFiltro(GralMes::getGralMessCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_prc.gral_mes_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_prc_gral_mes_id_comparador = $criterio->getComparadorDeCampo('afip_citi_prc.gral_mes_id');
			if(trim($buscador_afip_citi_prc_gral_mes_id_comparador) == '') $buscador_afip_citi_prc_gral_mes_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_prc_gral_mes_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_prc_gral_mes_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_prc_observacion' type='text' class='textbox' id='buscador_afip_citi_prc_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_prc.observacion')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_prc_observacion_comparador = $criterio->getComparadorDeCampo('afip_citi_prc.observacion');
			if(trim($buscador_afip_citi_prc_observacion_comparador) == '') $buscador_afip_citi_prc_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_prc_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_prc_observacion_comparador, 'textbox comparador') ?>
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

