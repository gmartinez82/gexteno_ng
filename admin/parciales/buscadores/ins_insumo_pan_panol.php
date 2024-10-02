<?php
include_once "_autoload.php";
$criterio = new Criterio(InsInsumoPanPanol::SES_CRITERIOS);
$criterio->addTabla('ins_insumo_pan_panol');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_insumo_pan_panol'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_pan_panol.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_pan_panol_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.ins_insumo_id');
			if(trim($buscador_ins_insumo_pan_panol_ins_insumo_id_comparador) == '') $buscador_ins_insumo_pan_panol_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_pan_panol_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PanPanol') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_pan_panol.pan_panol_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_pan_panol_pan_panol_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.pan_panol_id');
			if(trim($buscador_ins_insumo_pan_panol_pan_panol_id_comparador) == '') $buscador_ins_insumo_pan_panol_pan_panol_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_pan_panol_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_pan_panol_pan_panol_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PanUbiPiso') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_pan_ubi_piso_id', Gral::getCmbFiltro(PanUbiPiso::getPanUbiPisosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_piso_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_pan_panol_pan_ubi_piso_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.pan_ubi_piso_id');
			if(trim($buscador_ins_insumo_pan_panol_pan_ubi_piso_id_comparador) == '') $buscador_ins_insumo_pan_panol_pan_ubi_piso_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_pan_ubi_piso_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_pan_panol_pan_ubi_piso_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PanUbiPasillo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_pan_ubi_pasillo_id', Gral::getCmbFiltro(PanUbiPasillo::getPanUbiPasillosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_pasillo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_pan_panol_pan_ubi_pasillo_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.pan_ubi_pasillo_id');
			if(trim($buscador_ins_insumo_pan_panol_pan_ubi_pasillo_id_comparador) == '') $buscador_ins_insumo_pan_panol_pan_ubi_pasillo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_pan_ubi_pasillo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_pan_panol_pan_ubi_pasillo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PanUbiEstante') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_pan_ubi_estante_id', Gral::getCmbFiltro(PanUbiEstante::getPanUbiEstantesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_estante_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_pan_panol_pan_ubi_estante_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.pan_ubi_estante_id');
			if(trim($buscador_ins_insumo_pan_panol_pan_ubi_estante_id_comparador) == '') $buscador_ins_insumo_pan_panol_pan_ubi_estante_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_pan_ubi_estante_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_pan_panol_pan_ubi_estante_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PanUbiAltura') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_pan_ubi_altura_id', Gral::getCmbFiltro(PanUbiAltura::getPanUbiAlturasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_altura_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_pan_panol_pan_ubi_altura_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.pan_ubi_altura_id');
			if(trim($buscador_ins_insumo_pan_panol_pan_ubi_altura_id_comparador) == '') $buscador_ins_insumo_pan_panol_pan_ubi_altura_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_pan_ubi_altura_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_pan_panol_pan_ubi_altura_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PanUbiCasillero') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_pan_ubi_casillero_id', Gral::getCmbFiltro(PanUbiCasillero::getPanUbiCasillerosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_casillero_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_pan_panol_pan_ubi_casillero_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.pan_ubi_casillero_id');
			if(trim($buscador_ins_insumo_pan_panol_pan_ubi_casillero_id_comparador) == '') $buscador_ins_insumo_pan_panol_pan_ubi_casillero_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_pan_ubi_casillero_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_pan_panol_pan_ubi_casillero_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PanUbiCelda') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_pan_ubi_celda_id', Gral::getCmbFiltro(PanUbiCelda::getPanUbiCeldasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_celda_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_pan_panol_pan_ubi_celda_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.pan_ubi_celda_id');
			if(trim($buscador_ins_insumo_pan_panol_pan_ubi_celda_id_comparador) == '') $buscador_ins_insumo_pan_panol_pan_ubi_celda_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_pan_ubi_celda_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_pan_panol_pan_ubi_celda_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Clasificacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_ins_clasificacion_id', Gral::getCmbFiltro(InsClasificacion::getInsClasificacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_pan_panol.ins_clasificacion_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_pan_panol_ins_clasificacion_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.ins_clasificacion_id');
			if(trim($buscador_ins_insumo_pan_panol_ins_clasificacion_id_comparador) == '') $buscador_ins_insumo_pan_panol_ins_clasificacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_ins_clasificacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_pan_panol_ins_clasificacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Punto de Minimo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_pan_panol_punto_minimo' type='text' class='textbox' id='buscador_ins_insumo_pan_panol_punto_minimo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_pan_panol.punto_minimo')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_pan_panol_punto_minimo_comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.punto_minimo');
			if(trim($buscador_ins_insumo_pan_panol_punto_minimo_comparador) == '') $buscador_ins_insumo_pan_panol_punto_minimo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_punto_minimo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_pan_panol_punto_minimo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Punto de Pedido') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_pan_panol_punto_pedido' type='text' class='textbox' id='buscador_ins_insumo_pan_panol_punto_pedido' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_pan_panol.punto_pedido')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_pan_panol_punto_pedido_comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.punto_pedido');
			if(trim($buscador_ins_insumo_pan_panol_punto_pedido_comparador) == '') $buscador_ins_insumo_pan_panol_punto_pedido_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_punto_pedido_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_pan_panol_punto_pedido_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Punto de Maximo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_pan_panol_punto_maximo' type='text' class='textbox' id='buscador_ins_insumo_pan_panol_punto_maximo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_pan_panol.punto_maximo')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_pan_panol_punto_maximo_comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.punto_maximo');
			if(trim($buscador_ins_insumo_pan_panol_punto_maximo_comparador) == '') $buscador_ins_insumo_pan_panol_punto_maximo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_pan_panol_punto_maximo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_pan_panol_punto_maximo_comparador, 'textbox comparador') ?>
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

