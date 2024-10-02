<?php
include_once "_autoload.php";
$criterio = new Criterio(AltControlUsGrupo::SES_CRITERIOS);
$criterio->addTabla('alt_control_us_grupo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='alt_control_us_grupo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Control') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_alt_control_us_grupo_alt_control_id', Gral::getCmbFiltro(AltControl::getAltControlsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_control_us_grupo.alt_control_id'), 'textbox')?>
        	<?php 
			$buscador_alt_control_us_grupo_alt_control_id_comparador = $criterio->getComparadorDeCampo('alt_control_us_grupo.alt_control_id');
			if(trim($buscador_alt_control_us_grupo_alt_control_id_comparador) == '') $buscador_alt_control_us_grupo_alt_control_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_alt_control_us_grupo_alt_control_id_comparador', Criterio::getComparadoresCmb(), $buscador_alt_control_us_grupo_alt_control_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Grupo de Usuarios') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_alt_control_us_grupo_us_grupo_id', Gral::getCmbFiltro(UsGrupo::getUsGruposCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_control_us_grupo.us_grupo_id'), 'textbox')?>
        	<?php 
			$buscador_alt_control_us_grupo_us_grupo_id_comparador = $criterio->getComparadorDeCampo('alt_control_us_grupo.us_grupo_id');
			if(trim($buscador_alt_control_us_grupo_us_grupo_id_comparador) == '') $buscador_alt_control_us_grupo_us_grupo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_alt_control_us_grupo_us_grupo_id_comparador', Criterio::getComparadoresCmb(), $buscador_alt_control_us_grupo_us_grupo_id_comparador, 'textbox comparador') ?>
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

