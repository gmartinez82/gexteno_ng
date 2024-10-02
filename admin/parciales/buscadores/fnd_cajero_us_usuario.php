<?php
include_once "_autoload.php";
$criterio = new Criterio(FndCajeroUsUsuario::SES_CRITERIOS);
$criterio->addTabla('fnd_cajero_us_usuario');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='fnd_cajero_us_usuario'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCajero') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_cajero_us_usuario_fnd_cajero_id', Gral::getCmbFiltro(FndCajero::getFndCajerosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_cajero_us_usuario.fnd_cajero_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_cajero_us_usuario_fnd_cajero_id_comparador = $criterio->getComparadorDeCampo('fnd_cajero_us_usuario.fnd_cajero_id');
			if(trim($buscador_fnd_cajero_us_usuario_fnd_cajero_id_comparador) == '') $buscador_fnd_cajero_us_usuario_fnd_cajero_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_cajero_us_usuario_fnd_cajero_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_cajero_us_usuario_fnd_cajero_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('UsUsuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_cajero_us_usuario_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_cajero_us_usuario.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_cajero_us_usuario_us_usuario_id_comparador = $criterio->getComparadorDeCampo('fnd_cajero_us_usuario.us_usuario_id');
			if(trim($buscador_fnd_cajero_us_usuario_us_usuario_id_comparador) == '') $buscador_fnd_cajero_us_usuario_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_cajero_us_usuario_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_cajero_us_usuario_us_usuario_id_comparador, 'textbox comparador') ?>
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

