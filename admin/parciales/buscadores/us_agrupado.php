<?php
include_once "_autoload.php";
$criterio = new Criterio(UsAgrupado::SES_CRITERIOS);
$criterio->addTabla('us_agrupado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='us_agrupado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Grupo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_us_agrupado_us_grupo_id', Gral::getCmbFiltro(UsGrupo::getUsGruposCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_agrupado.us_grupo_id'), 'textbox')?>
        	<?php 
			$buscador_us_agrupado_us_grupo_id_comparador = $criterio->getComparadorDeCampo('us_agrupado.us_grupo_id');
			if(trim($buscador_us_agrupado_us_grupo_id_comparador) == '') $buscador_us_agrupado_us_grupo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_agrupado_us_grupo_id_comparador', Criterio::getComparadoresCmb(), $buscador_us_agrupado_us_grupo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Usuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_us_agrupado_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_agrupado.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_us_agrupado_us_usuario_id_comparador = $criterio->getComparadorDeCampo('us_agrupado.us_usuario_id');
			if(trim($buscador_us_agrupado_us_usuario_id_comparador) == '') $buscador_us_agrupado_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_agrupado_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_us_agrupado_us_usuario_id_comparador, 'textbox comparador') ?>
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

