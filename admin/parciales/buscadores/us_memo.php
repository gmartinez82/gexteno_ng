<?php
include_once "_autoload.php";
$criterio = new Criterio(UsMemo::SES_CRITERIOS);
$criterio->addTabla('us_memo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='us_memo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_memo_descripcion' type='text' class='textbox' id='buscador_us_memo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_memo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_us_memo_descripcion_comparador = $criterio->getComparadorDeCampo('us_memo.descripcion');
			if(trim($buscador_us_memo_descripcion_comparador) == '') $buscador_us_memo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_memo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_us_memo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_us_memo_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_memo.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_us_memo_us_usuario_id_comparador = $criterio->getComparadorDeCampo('us_memo.us_usuario_id');
			if(trim($buscador_us_memo_us_usuario_id_comparador) == '') $buscador_us_memo_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_memo_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_us_memo_us_usuario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('UsMemoTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_us_memo_us_memo_tipo_estado_id', Gral::getCmbFiltro(UsMemoTipoEstado::getUsMemoTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_memo.us_memo_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_us_memo_us_memo_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('us_memo.us_memo_tipo_estado_id');
			if(trim($buscador_us_memo_us_memo_tipo_estado_id_comparador) == '') $buscador_us_memo_us_memo_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_memo_us_memo_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_us_memo_us_memo_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('UsMemoTipo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_us_memo_us_memo_tipo_id', Gral::getCmbFiltro(UsMemoTipo::getUsMemoTiposCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_memo.us_memo_tipo_id'), 'textbox')?>
        	<?php 
			$buscador_us_memo_us_memo_tipo_id_comparador = $criterio->getComparadorDeCampo('us_memo.us_memo_tipo_id');
			if(trim($buscador_us_memo_us_memo_tipo_id_comparador) == '') $buscador_us_memo_us_memo_tipo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_memo_us_memo_tipo_id_comparador', Criterio::getComparadoresCmb(), $buscador_us_memo_us_memo_tipo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_memo_codigo' type='text' class='textbox' id='buscador_us_memo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_memo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_us_memo_codigo_comparador = $criterio->getComparadorDeCampo('us_memo.codigo');
			if(trim($buscador_us_memo_codigo_comparador) == '') $buscador_us_memo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_memo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_us_memo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observacion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_memo_observacion' type='text' class='textbox' id='buscador_us_memo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_memo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_us_memo_observacion_comparador = $criterio->getComparadorDeCampo('us_memo.observacion');
			if(trim($buscador_us_memo_observacion_comparador) == '') $buscador_us_memo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_memo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_us_memo_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_memo_orden' type='text' class='textbox' id='buscador_us_memo_orden' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_memo.orden')) ?>' size='22' />
        	<?php 
			$buscador_us_memo_orden_comparador = $criterio->getComparadorDeCampo('us_memo.orden');
			if(trim($buscador_us_memo_orden_comparador) == '') $buscador_us_memo_orden_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_memo_orden_comparador', Criterio::getComparadoresCmb(), $buscador_us_memo_orden_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_us_memo_estado', Gral::getCmbFiltro(Est::getEstsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_memo.estado'), 'textbox')?>
        	<?php 
			$buscador_us_memo_estado_comparador = $criterio->getComparadorDeCampo('us_memo.estado');
			if(trim($buscador_us_memo_estado_comparador) == '') $buscador_us_memo_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_memo_estado_comparador', Criterio::getComparadoresCmb(), $buscador_us_memo_estado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_memo_creado' type='text' class='textbox' id='buscador_us_memo_creado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_memo.creado')) ?>' size='15' />
					<input type='button' id='cal_buscador_us_memo_creado' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_us_memo_creado', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_us_memo_creado'
						});
					</script>
		
        	<?php 
			$buscador_us_memo_creado_comparador = $criterio->getComparadorDeCampo('us_memo.creado');
			if(trim($buscador_us_memo_creado_comparador) == '') $buscador_us_memo_creado_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_memo_creado_comparador', Criterio::getComparadoresCmb(), $buscador_us_memo_creado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_memo_modificado' type='text' class='textbox' id='buscador_us_memo_modificado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_memo.modificado')) ?>' size='15' />
					<input type='button' id='cal_buscador_us_memo_modificado' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_us_memo_modificado', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_us_memo_modificado'
						});
					</script>
		
        	<?php 
			$buscador_us_memo_modificado_comparador = $criterio->getComparadorDeCampo('us_memo.modificado');
			if(trim($buscador_us_memo_modificado_comparador) == '') $buscador_us_memo_modificado_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_memo_modificado_comparador', Criterio::getComparadoresCmb(), $buscador_us_memo_modificado_comparador, 'textbox comparador') ?>
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

