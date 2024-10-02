<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeCotizacionDestinatario::SES_CRITERIOS);
$criterio->addTabla('pde_cotizacion_destinatario');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_cotizacion_destinatario'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_cotizacion_destinatario_descripcion' type='text' class='textbox' id='buscador_pde_cotizacion_destinatario_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_cotizacion_destinatario.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_cotizacion_destinatario_descripcion_comparador = $criterio->getComparadorDeCampo('pde_cotizacion_destinatario.descripcion');
			if(trim($buscador_pde_cotizacion_destinatario_descripcion_comparador) == '') $buscador_pde_cotizacion_destinatario_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_cotizacion_destinatario_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_cotizacion_destinatario_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCotizacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_cotizacion_destinatario_pde_cotizacion_id', Gral::getCmbFiltro(PdeCotizacion::getPdeCotizacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_cotizacion_destinatario.pde_cotizacion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_cotizacion_destinatario_pde_cotizacion_id_comparador = $criterio->getComparadorDeCampo('pde_cotizacion_destinatario.pde_cotizacion_id');
			if(trim($buscador_pde_cotizacion_destinatario_pde_cotizacion_id_comparador) == '') $buscador_pde_cotizacion_destinatario_pde_cotizacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_cotizacion_destinatario_pde_cotizacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_cotizacion_destinatario_pde_cotizacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('UsUsuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_cotizacion_destinatario_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_cotizacion_destinatario.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_pde_cotizacion_destinatario_us_usuario_id_comparador = $criterio->getComparadorDeCampo('pde_cotizacion_destinatario.us_usuario_id');
			if(trim($buscador_pde_cotizacion_destinatario_us_usuario_id_comparador) == '') $buscador_pde_cotizacion_destinatario_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_cotizacion_destinatario_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_cotizacion_destinatario_us_usuario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_cotizacion_destinatario_codigo' type='text' class='textbox' id='buscador_pde_cotizacion_destinatario_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_cotizacion_destinatario.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_cotizacion_destinatario_codigo_comparador = $criterio->getComparadorDeCampo('pde_cotizacion_destinatario.codigo');
			if(trim($buscador_pde_cotizacion_destinatario_codigo_comparador) == '') $buscador_pde_cotizacion_destinatario_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_cotizacion_destinatario_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_cotizacion_destinatario_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_cotizacion_destinatario_observacion' type='text' class='textbox' id='buscador_pde_cotizacion_destinatario_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_cotizacion_destinatario.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_cotizacion_destinatario_observacion_comparador = $criterio->getComparadorDeCampo('pde_cotizacion_destinatario.observacion');
			if(trim($buscador_pde_cotizacion_destinatario_observacion_comparador) == '') $buscador_pde_cotizacion_destinatario_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_cotizacion_destinatario_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_cotizacion_destinatario_observacion_comparador, 'textbox comparador') ?>
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

