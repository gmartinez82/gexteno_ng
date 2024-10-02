<?php
include_once "_autoload.php";
$criterio = new Criterio(AltAlertaUsUsuario::SES_CRITERIOS);
$criterio->addTabla('alt_alerta_us_usuario');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='alt_alerta_us_usuario'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Alerta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_alt_alerta_us_usuario_alt_alerta_id', Gral::getCmbFiltro(AltAlerta::getAltAlertasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta_us_usuario.alt_alerta_id'), 'textbox')?>
        	<?php 
			$buscador_alt_alerta_us_usuario_alt_alerta_id_comparador = $criterio->getComparadorDeCampo('alt_alerta_us_usuario.alt_alerta_id');
			if(trim($buscador_alt_alerta_us_usuario_alt_alerta_id_comparador) == '') $buscador_alt_alerta_us_usuario_alt_alerta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_us_usuario_alt_alerta_id_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_us_usuario_alt_alerta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Usuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_alt_alerta_us_usuario_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta_us_usuario.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_alt_alerta_us_usuario_us_usuario_id_comparador = $criterio->getComparadorDeCampo('alt_alerta_us_usuario.us_usuario_id');
			if(trim($buscador_alt_alerta_us_usuario_us_usuario_id_comparador) == '') $buscador_alt_alerta_us_usuario_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_us_usuario_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_us_usuario_us_usuario_id_comparador, 'textbox comparador') ?>
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

