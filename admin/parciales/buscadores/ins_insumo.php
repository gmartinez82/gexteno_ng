<?php
include_once "_autoload.php";
$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
$criterio->addTabla('ins_insumo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_insumo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsCategoria') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.ins_categoria_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_ins_categoria_id_comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_categoria_id');
			if(trim($buscador_ins_insumo_ins_categoria_id_comparador) == '') $buscador_ins_insumo_ins_categoria_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_categoria_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_categoria_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_ins_matriz_id', Gral::getCmbFiltro(InsMatriz::getInsMatrizsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.ins_matriz_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_ins_matriz_id_comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_matriz_id');
			if(trim($buscador_ins_insumo_ins_matriz_id_comparador) == '') $buscador_ins_insumo_ins_matriz_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_matriz_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_matriz_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_descripcion' type='text' class='textbox' id='buscador_ins_insumo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_descripcion_comparador = $criterio->getComparadorDeCampo('ins_insumo.descripcion');
			if(trim($buscador_ins_insumo_descripcion_comparador) == '') $buscador_ins_insumo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsMarca') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.ins_marca_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_ins_marca_id_comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_marca_id');
			if(trim($buscador_ins_insumo_ins_marca_id_comparador) == '') $buscador_ins_insumo_ins_marca_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_marca_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_marca_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_descripcion_corta' type='text' class='textbox' id='buscador_ins_insumo_descripcion_corta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.descripcion_corta')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_descripcion_corta_comparador = $criterio->getComparadorDeCampo('ins_insumo.descripcion_corta');
			if(trim($buscador_ins_insumo_descripcion_corta_comparador) == '') $buscador_ins_insumo_descripcion_corta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_descripcion_corta_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_descripcion_corta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_descripcion_web' type='text' class='textbox' id='buscador_ins_insumo_descripcion_web' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.descripcion_web')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_descripcion_web_comparador = $criterio->getComparadorDeCampo('ins_insumo.descripcion_web');
			if(trim($buscador_ins_insumo_descripcion_web_comparador) == '') $buscador_ins_insumo_descripcion_web_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_descripcion_web_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_descripcion_web_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_codigo' type='text' class='textbox' id='buscador_ins_insumo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_codigo_comparador = $criterio->getComparadorDeCampo('ins_insumo.codigo');
			if(trim($buscador_ins_insumo_codigo_comparador) == '') $buscador_ins_insumo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_codigo_marca' type='text' class='textbox' id='buscador_ins_insumo_codigo_marca' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.codigo_marca')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_codigo_marca_comparador = $criterio->getComparadorDeCampo('ins_insumo.codigo_marca');
			if(trim($buscador_ins_insumo_codigo_marca_comparador) == '') $buscador_ins_insumo_codigo_marca_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_codigo_marca_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_codigo_marca_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Interno') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_codigo_interno' type='text' class='textbox' id='buscador_ins_insumo_codigo_interno' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.codigo_interno')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_codigo_interno_comparador = $criterio->getComparadorDeCampo('ins_insumo.codigo_interno');
			if(trim($buscador_ins_insumo_codigo_interno_comparador) == '') $buscador_ins_insumo_codigo_interno_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_codigo_interno_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_codigo_interno_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_codigo_barra' type='text' class='textbox' id='buscador_ins_insumo_codigo_barra' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.codigo_barra')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_codigo_barra_comparador = $criterio->getComparadorDeCampo('ins_insumo.codigo_barra');
			if(trim($buscador_ins_insumo_codigo_barra_comparador) == '') $buscador_ins_insumo_codigo_barra_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_codigo_barra_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_codigo_barra_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_codigo_barra_interno' type='text' class='textbox' id='buscador_ins_insumo_codigo_barra_interno' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.codigo_barra_interno')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_codigo_barra_interno_comparador = $criterio->getComparadorDeCampo('ins_insumo.codigo_barra_interno');
			if(trim($buscador_ins_insumo_codigo_barra_interno_comparador) == '') $buscador_ins_insumo_codigo_barra_interno_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_codigo_barra_interno_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_codigo_barra_interno_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_ins_unidad_medida_id', Gral::getCmbFiltro(InsUnidadMedida::getInsUnidadMedidasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.ins_unidad_medida_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_ins_unidad_medida_id_comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_unidad_medida_id');
			if(trim($buscador_ins_insumo_ins_unidad_medida_id_comparador) == '') $buscador_ins_insumo_ins_unidad_medida_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_unidad_medida_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_unidad_medida_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_insumo_es_comprable', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.es_comprable'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_insumo_es_comprable_comparador = $criterio->getComparadorDeCampo('ins_insumo.es_comprable');
			if(trim($buscador_ins_insumo_es_comprable_comparador) == '') $buscador_ins_insumo_es_comprable_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_es_comprable_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_es_comprable_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_insumo_es_consumible', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.es_consumible'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_insumo_es_consumible_comparador = $criterio->getComparadorDeCampo('ins_insumo.es_consumible');
			if(trim($buscador_ins_insumo_es_consumible_comparador) == '') $buscador_ins_insumo_es_consumible_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_es_consumible_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_es_consumible_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_insumo_es_transformable_origen', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.es_transformable_origen'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_insumo_es_transformable_origen_comparador = $criterio->getComparadorDeCampo('ins_insumo.es_transformable_origen');
			if(trim($buscador_ins_insumo_es_transformable_origen_comparador) == '') $buscador_ins_insumo_es_transformable_origen_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_es_transformable_origen_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_es_transformable_origen_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_insumo_es_transformable_destino', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.es_transformable_destino'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_insumo_es_transformable_destino_comparador = $criterio->getComparadorDeCampo('ins_insumo.es_transformable_destino');
			if(trim($buscador_ins_insumo_es_transformable_destino_comparador) == '') $buscador_ins_insumo_es_transformable_destino_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_es_transformable_destino_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_es_transformable_destino_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_ins_unidad_medida_pedido_id', Gral::getCmbFiltro(InsUnidadMedidaPedido::getInsUnidadMedidaPedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.ins_unidad_medida_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_ins_unidad_medida_pedido_id_comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_unidad_medida_pedido_id');
			if(trim($buscador_ins_insumo_ins_unidad_medida_pedido_id_comparador) == '') $buscador_ins_insumo_ins_unidad_medida_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_unidad_medida_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_unidad_medida_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_ins_tipo_consumo_id', Gral::getCmbFiltro(InsTipoConsumo::getInsTipoConsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.ins_tipo_consumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_ins_tipo_consumo_id_comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_tipo_consumo_id');
			if(trim($buscador_ins_insumo_ins_tipo_consumo_id_comparador) == '') $buscador_ins_insumo_ins_tipo_consumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_tipo_consumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_tipo_consumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_insumo_retornable', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.retornable'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_insumo_retornable_comparador = $criterio->getComparadorDeCampo('ins_insumo.retornable');
			if(trim($buscador_ins_insumo_retornable_comparador) == '') $buscador_ins_insumo_retornable_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_retornable_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_retornable_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_insumo_identificable', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.identificable'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_insumo_identificable_comparador = $criterio->getComparadorDeCampo('ins_insumo.identificable');
			if(trim($buscador_ins_insumo_identificable_comparador) == '') $buscador_ins_insumo_identificable_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_identificable_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_identificable_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_insumo_control_stock', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.control_stock'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_insumo_control_stock_comparador = $criterio->getComparadorDeCampo('ins_insumo.control_stock');
			if(trim($buscador_ins_insumo_control_stock_comparador) == '') $buscador_ins_insumo_control_stock_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_control_stock_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_control_stock_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_punto_minimo' type='text' class='textbox' id='buscador_ins_insumo_punto_minimo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.punto_minimo')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_punto_minimo_comparador = $criterio->getComparadorDeCampo('ins_insumo.punto_minimo');
			if(trim($buscador_ins_insumo_punto_minimo_comparador) == '') $buscador_ins_insumo_punto_minimo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_punto_minimo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_punto_minimo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_punto_pedido' type='text' class='textbox' id='buscador_ins_insumo_punto_pedido' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.punto_pedido')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_punto_pedido_comparador = $criterio->getComparadorDeCampo('ins_insumo.punto_pedido');
			if(trim($buscador_ins_insumo_punto_pedido_comparador) == '') $buscador_ins_insumo_punto_pedido_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_punto_pedido_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_punto_pedido_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_punto_maximo' type='text' class='textbox' id='buscador_ins_insumo_punto_maximo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.punto_maximo')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_punto_maximo_comparador = $criterio->getComparadorDeCampo('ins_insumo.punto_maximo');
			if(trim($buscador_ins_insumo_punto_maximo_comparador) == '') $buscador_ins_insumo_punto_maximo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_punto_maximo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_punto_maximo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_cantidad_maxima_pedido' type='text' class='textbox' id='buscador_ins_insumo_cantidad_maxima_pedido' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.cantidad_maxima_pedido')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_cantidad_maxima_pedido_comparador = $criterio->getComparadorDeCampo('ins_insumo.cantidad_maxima_pedido');
			if(trim($buscador_ins_insumo_cantidad_maxima_pedido_comparador) == '') $buscador_ins_insumo_cantidad_maxima_pedido_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_cantidad_maxima_pedido_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_cantidad_maxima_pedido_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_ins_tipo_necesidad_id', Gral::getCmbFiltro(InsTipoNecesidad::getInsTipoNecesidadsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.ins_tipo_necesidad_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_ins_tipo_necesidad_id_comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_tipo_necesidad_id');
			if(trim($buscador_ins_insumo_ins_tipo_necesidad_id_comparador) == '') $buscador_ins_insumo_ins_tipo_necesidad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_tipo_necesidad_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_tipo_necesidad_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_ins_nivel_aprovisionamiento_id', Gral::getCmbFiltro(InsNivelAprovisionamiento::getInsNivelAprovisionamientosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.ins_nivel_aprovisionamiento_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_ins_nivel_aprovisionamiento_id_comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_nivel_aprovisionamiento_id');
			if(trim($buscador_ins_insumo_ins_nivel_aprovisionamiento_id_comparador) == '') $buscador_ins_insumo_ins_nivel_aprovisionamiento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_nivel_aprovisionamiento_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_nivel_aprovisionamiento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_insumo_hereda_marcas', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.hereda_marcas'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_insumo_hereda_marcas_comparador = $criterio->getComparadorDeCampo('ins_insumo.hereda_marcas');
			if(trim($buscador_ins_insumo_hereda_marcas_comparador) == '') $buscador_ins_insumo_hereda_marcas_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_hereda_marcas_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_hereda_marcas_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_insumo_venta_web', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.venta_web'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_insumo_venta_web_comparador = $criterio->getComparadorDeCampo('ins_insumo.venta_web');
			if(trim($buscador_ins_insumo_venta_web_comparador) == '') $buscador_ins_insumo_venta_web_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_venta_web_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_venta_web_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_insumo_venta_mercadolibre', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.venta_mercadolibre'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_insumo_venta_mercadolibre_comparador = $criterio->getComparadorDeCampo('ins_insumo.venta_mercadolibre');
			if(trim($buscador_ins_insumo_venta_mercadolibre_comparador) == '') $buscador_ins_insumo_venta_mercadolibre_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_venta_mercadolibre_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_venta_mercadolibre_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_insumo_gral_tipo_iva_compra', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.gral_tipo_iva_compra'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_insumo_gral_tipo_iva_compra_comparador = $criterio->getComparadorDeCampo('ins_insumo.gral_tipo_iva_compra');
			if(trim($buscador_ins_insumo_gral_tipo_iva_compra_comparador) == '') $buscador_ins_insumo_gral_tipo_iva_compra_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_gral_tipo_iva_compra_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_gral_tipo_iva_compra_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_insumo_gral_tipo_iva_venta', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.gral_tipo_iva_venta'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_insumo_gral_tipo_iva_venta_comparador = $criterio->getComparadorDeCampo('ins_insumo.gral_tipo_iva_venta');
			if(trim($buscador_ins_insumo_gral_tipo_iva_venta_comparador) == '') $buscador_ins_insumo_gral_tipo_iva_venta_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_gral_tipo_iva_venta_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_gral_tipo_iva_venta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsTipoInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_ins_tipo_insumo_id', Gral::getCmbFiltro(InsTipoInsumo::getInsTipoInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.ins_tipo_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_ins_tipo_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_tipo_insumo_id');
			if(trim($buscador_ins_insumo_ins_tipo_insumo_id_comparador) == '') $buscador_ins_insumo_ins_tipo_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_tipo_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_tipo_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_ins_tipo_fabricante_id', Gral::getCmbFiltro(InsTipoFabricante::getInsTipoFabricantesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.ins_tipo_fabricante_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_ins_tipo_fabricante_id_comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_tipo_fabricante_id');
			if(trim($buscador_ins_insumo_ins_tipo_fabricante_id_comparador) == '') $buscador_ins_insumo_ins_tipo_fabricante_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_tipo_fabricante_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_tipo_fabricante_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Notas Internas') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_notas_internas' type='text' class='textbox' id='buscador_ins_insumo_notas_internas' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.notas_internas')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_notas_internas_comparador = $criterio->getComparadorDeCampo('ins_insumo.notas_internas');
			if(trim($buscador_ins_insumo_notas_internas_comparador) == '') $buscador_ins_insumo_notas_internas_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_notas_internas_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_notas_internas_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_observacion' type='text' class='textbox' id='buscador_ins_insumo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_observacion_comparador = $criterio->getComparadorDeCampo('ins_insumo.observacion');
			if(trim($buscador_ins_insumo_observacion_comparador) == '') $buscador_ins_insumo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Datos Migracion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_datos_migracion' type='text' class='textbox' id='buscador_ins_insumo_datos_migracion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.datos_migracion')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_datos_migracion_comparador = $criterio->getComparadorDeCampo('ins_insumo.datos_migracion');
			if(trim($buscador_ins_insumo_datos_migracion_comparador) == '') $buscador_ins_insumo_datos_migracion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_datos_migracion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_datos_migracion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_claves' type='text' class='textbox' id='buscador_ins_insumo_claves' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.claves')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_claves_comparador = $criterio->getComparadorDeCampo('ins_insumo.claves');
			if(trim($buscador_ins_insumo_claves_comparador) == '') $buscador_ins_insumo_claves_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_claves_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_claves_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_claves_atributos' type='text' class='textbox' id='buscador_ins_insumo_claves_atributos' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo.claves_atributos')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_claves_atributos_comparador = $criterio->getComparadorDeCampo('ins_insumo.claves_atributos');
			if(trim($buscador_ins_insumo_claves_atributos_comparador) == '') $buscador_ins_insumo_claves_atributos_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_claves_atributos_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_claves_atributos_comparador, 'textbox comparador') ?>
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

