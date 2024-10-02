<?php
include_once "_autoload.php";
$criterio = new Criterio(PanPanolUsUsuario::SES_CRITERIOS);
$criterio->addTabla('pan_panol_us_usuario');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pan_panol_us_usuario'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PanPanol') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pan_panol_us_usuario_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_panol_us_usuario.pan_panol_id'), 'textbox')?>
        	<?php 
			$buscador_pan_panol_us_usuario_pan_panol_id_comparador = $criterio->getComparadorDeCampo('pan_panol_us_usuario.pan_panol_id');
			if(trim($buscador_pan_panol_us_usuario_pan_panol_id_comparador) == '') $buscador_pan_panol_us_usuario_pan_panol_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pan_panol_us_usuario_pan_panol_id_comparador', Criterio::getComparadoresCmb(), $buscador_pan_panol_us_usuario_pan_panol_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('UsUsuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pan_panol_us_usuario_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_panol_us_usuario.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_pan_panol_us_usuario_us_usuario_id_comparador = $criterio->getComparadorDeCampo('pan_panol_us_usuario.us_usuario_id');
			if(trim($buscador_pan_panol_us_usuario_us_usuario_id_comparador) == '') $buscador_pan_panol_us_usuario_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pan_panol_us_usuario_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_pan_panol_us_usuario_us_usuario_id_comparador, 'textbox comparador') ?>
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

