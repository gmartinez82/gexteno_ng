<?php
include_once "_autoload.php";
$criterio = new Criterio(AppMovVersion::SES_CRITERIOS);
$criterio->addTabla('app_mov_version');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='app_mov_version'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_version_descripcion' type='text' class='textbox' id='buscador_app_mov_version_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_version.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_version_descripcion_comparador = $criterio->getComparadorDeCampo('app_mov_version.descripcion');
			if(trim($buscador_app_mov_version_descripcion_comparador) == '') $buscador_app_mov_version_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_version_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_version_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AppMovModulo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_app_mov_version_app_mov_modulo_id', Gral::getCmbFiltro(AppMovModulo::getAppMovModulosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_version.app_mov_modulo_id'), 'textbox')?>
        	<?php 
			$buscador_app_mov_version_app_mov_modulo_id_comparador = $criterio->getComparadorDeCampo('app_mov_version.app_mov_modulo_id');
			if(trim($buscador_app_mov_version_app_mov_modulo_id_comparador) == '') $buscador_app_mov_version_app_mov_modulo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_app_mov_version_app_mov_modulo_id_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_version_app_mov_modulo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_version_codigo' type='text' class='textbox' id='buscador_app_mov_version_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_version.codigo')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_version_codigo_comparador = $criterio->getComparadorDeCampo('app_mov_version.codigo');
			if(trim($buscador_app_mov_version_codigo_comparador) == '') $buscador_app_mov_version_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_version_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_version_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Version') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_version_version' type='text' class='textbox' id='buscador_app_mov_version_version' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_version.version')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_version_version_comparador = $criterio->getComparadorDeCampo('app_mov_version.version');
			if(trim($buscador_app_mov_version_version_comparador) == '') $buscador_app_mov_version_version_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_version_version_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_version_version_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Version Min') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_version_version_minima' type='text' class='textbox' id='buscador_app_mov_version_version_minima' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_version.version_minima')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_version_version_minima_comparador = $criterio->getComparadorDeCampo('app_mov_version.version_minima');
			if(trim($buscador_app_mov_version_version_minima_comparador) == '') $buscador_app_mov_version_version_minima_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_version_version_minima_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_version_version_minima_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_version_fecha' type='text' class='textbox' id='buscador_app_mov_version_fecha' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('app_mov_version.fecha'))) ?>' size='15' />
					<input type='button' id='cal_buscador_app_mov_version_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_app_mov_version_fecha', ifFormat: '%d/%m/%Y', button: 'cal_buscador_app_mov_version_fecha'
						});
					</script>
		
        	<?php 
			$buscador_app_mov_version_fecha_comparador = $criterio->getComparadorDeCampo('app_mov_version.fecha');
			if(trim($buscador_app_mov_version_fecha_comparador) == '') $buscador_app_mov_version_fecha_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_version_fecha_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_version_fecha_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_version_observacion' type='text' class='textbox' id='buscador_app_mov_version_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_version.observacion')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_version_observacion_comparador = $criterio->getComparadorDeCampo('app_mov_version.observacion');
			if(trim($buscador_app_mov_version_observacion_comparador) == '') $buscador_app_mov_version_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_version_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_version_observacion_comparador, 'textbox comparador') ?>
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

