<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaVendedorUsUsuario::SES_CRITERIOS);
$criterio->addTabla('vta_vendedor_us_usuario');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_vendedor_us_usuario'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_us_usuario_descripcion' type='text' class='textbox' id='buscador_vta_vendedor_us_usuario_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_us_usuario.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_us_usuario_descripcion_comparador = $criterio->getComparadorDeCampo('vta_vendedor_us_usuario.descripcion');
			if(trim($buscador_vta_vendedor_us_usuario_descripcion_comparador) == '') $buscador_vta_vendedor_us_usuario_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_us_usuario_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_us_usuario_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaVendedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_vendedor_us_usuario_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_us_usuario.vta_vendedor_id'), 'textbox')?>
        	<?php 
			$buscador_vta_vendedor_us_usuario_vta_vendedor_id_comparador = $criterio->getComparadorDeCampo('vta_vendedor_us_usuario.vta_vendedor_id');
			if(trim($buscador_vta_vendedor_us_usuario_vta_vendedor_id_comparador) == '') $buscador_vta_vendedor_us_usuario_vta_vendedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_us_usuario_vta_vendedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_us_usuario_vta_vendedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('UsUsuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_vendedor_us_usuario_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_us_usuario.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_vta_vendedor_us_usuario_us_usuario_id_comparador = $criterio->getComparadorDeCampo('vta_vendedor_us_usuario.us_usuario_id');
			if(trim($buscador_vta_vendedor_us_usuario_us_usuario_id_comparador) == '') $buscador_vta_vendedor_us_usuario_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_us_usuario_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_us_usuario_us_usuario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_us_usuario_codigo' type='text' class='textbox' id='buscador_vta_vendedor_us_usuario_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_us_usuario.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_us_usuario_codigo_comparador = $criterio->getComparadorDeCampo('vta_vendedor_us_usuario.codigo');
			if(trim($buscador_vta_vendedor_us_usuario_codigo_comparador) == '') $buscador_vta_vendedor_us_usuario_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_us_usuario_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_us_usuario_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_us_usuario_observacion' type='text' class='textbox' id='buscador_vta_vendedor_us_usuario_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_us_usuario.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_us_usuario_observacion_comparador = $criterio->getComparadorDeCampo('vta_vendedor_us_usuario.observacion');
			if(trim($buscador_vta_vendedor_us_usuario_observacion_comparador) == '') $buscador_vta_vendedor_us_usuario_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_us_usuario_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_us_usuario_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_vendedor_us_usuario_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_us_usuario.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_vendedor_us_usuario_estado_comparador = $criterio->getComparadorDeCampo('vta_vendedor_us_usuario.estado');
			if(trim($buscador_vta_vendedor_us_usuario_estado_comparador) == '') $buscador_vta_vendedor_us_usuario_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_us_usuario_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_us_usuario_estado_comparador, 'textbox comparador') ?>
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

