<?php
include_once "_autoload.php";
$criterio = new Criterio(InsVentaMlInfo::SES_CRITERIOS);
$criterio->addTabla('ins_venta_ml_info');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_venta_ml_info'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_venta_ml_info_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ins_insumo_id');
			if(trim($buscador_ins_venta_ml_info_ins_insumo_id_comparador) == '') $buscador_ins_venta_ml_info_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Titulo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_descripcion' type='text' class='textbox' id='buscador_ins_venta_ml_info_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_descripcion_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.descripcion');
			if(trim($buscador_ins_venta_ml_info_descripcion_comparador) == '') $buscador_ins_venta_ml_info_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Desc Breve') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_descripcion_breve' type='text' class='textbox' id='buscador_ins_venta_ml_info_descripcion_breve' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.descripcion_breve')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_descripcion_breve_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.descripcion_breve');
			if(trim($buscador_ins_venta_ml_info_descripcion_breve_comparador) == '') $buscador_ins_venta_ml_info_descripcion_breve_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_descripcion_breve_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_descripcion_breve_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Desc Empresa') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_descripcion_empresa' type='text' class='textbox' id='buscador_ins_venta_ml_info_descripcion_empresa' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.descripcion_empresa')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_descripcion_empresa_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.descripcion_empresa');
			if(trim($buscador_ins_venta_ml_info_descripcion_empresa_comparador) == '') $buscador_ins_venta_ml_info_descripcion_empresa_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_descripcion_empresa_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_descripcion_empresa_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_cantidad' type='text' class='textbox' id='buscador_ins_venta_ml_info_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_cantidad_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.cantidad');
			if(trim($buscador_ins_venta_ml_info_cantidad_comparador) == '') $buscador_ins_venta_ml_info_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_importe' type='text' class='textbox' id='buscador_ins_venta_ml_info_importe' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.importe')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_importe_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.importe');
			if(trim($buscador_ins_venta_ml_info_importe_comparador) == '') $buscador_ins_venta_ml_info_importe_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_importe_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_importe_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_codigo' type='text' class='textbox' id='buscador_ins_venta_ml_info_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_codigo_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.codigo');
			if(trim($buscador_ins_venta_ml_info_codigo_comparador) == '') $buscador_ins_venta_ml_info_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML ID') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_identificador' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_identificador' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_identificador')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_identificador_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_identificador');
			if(trim($buscador_ins_venta_ml_info_ml_identificador_comparador) == '') $buscador_ins_venta_ml_info_ml_identificador_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_identificador_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_identificador_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Cat') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_category_id' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_category_id' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_category_id')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_category_id_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_category_id');
			if(trim($buscador_ins_venta_ml_info_ml_category_id_comparador) == '') $buscador_ins_venta_ml_info_ml_category_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_category_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_category_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Cat') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_category_desc' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_category_desc' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_category_desc')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_category_desc_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_category_desc');
			if(trim($buscador_ins_venta_ml_info_ml_category_desc_comparador) == '') $buscador_ins_venta_ml_info_ml_category_desc_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_category_desc_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_category_desc_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Cat Cod') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_category_cod' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_category_cod' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_category_cod')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_category_cod_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_category_cod');
			if(trim($buscador_ins_venta_ml_info_ml_category_cod_comparador) == '') $buscador_ins_venta_ml_info_ml_category_cod_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_category_cod_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_category_cod_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Listing Type') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_listing_type_id' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_listing_type_id' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_listing_type_id')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_listing_type_id_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_listing_type_id');
			if(trim($buscador_ins_venta_ml_info_ml_listing_type_id_comparador) == '') $buscador_ins_venta_ml_info_ml_listing_type_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_listing_type_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_listing_type_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Listing Type') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_listing_type_desc' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_listing_type_desc' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_listing_type_desc')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_listing_type_desc_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_listing_type_desc');
			if(trim($buscador_ins_venta_ml_info_ml_listing_type_desc_comparador) == '') $buscador_ins_venta_ml_info_ml_listing_type_desc_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_listing_type_desc_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_listing_type_desc_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Condition') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_condition_id' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_condition_id' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_condition_id')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_condition_id_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_condition_id');
			if(trim($buscador_ins_venta_ml_info_ml_condition_id_comparador) == '') $buscador_ins_venta_ml_info_ml_condition_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_condition_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_condition_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Condition') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_condition_desc' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_condition_desc' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_condition_desc')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_condition_desc_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_condition_desc');
			if(trim($buscador_ins_venta_ml_info_ml_condition_desc_comparador) == '') $buscador_ins_venta_ml_info_ml_condition_desc_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_condition_desc_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_condition_desc_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Shipping Mode') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_shipping_mode_id' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_shipping_mode_id' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_shipping_mode_id')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_shipping_mode_id_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_shipping_mode_id');
			if(trim($buscador_ins_venta_ml_info_ml_shipping_mode_id_comparador) == '') $buscador_ins_venta_ml_info_ml_shipping_mode_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_shipping_mode_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_shipping_mode_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Shipping Mode') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_shipping_mode_desc' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_shipping_mode_desc' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_shipping_mode_desc')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_shipping_mode_desc_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_shipping_mode_desc');
			if(trim($buscador_ins_venta_ml_info_ml_shipping_mode_desc_comparador) == '') $buscador_ins_venta_ml_info_ml_shipping_mode_desc_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_shipping_mode_desc_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_shipping_mode_desc_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Permalink') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_permalink' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_permalink' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_permalink')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_permalink_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_permalink');
			if(trim($buscador_ins_venta_ml_info_ml_permalink_comparador) == '') $buscador_ins_venta_ml_info_ml_permalink_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_permalink_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_permalink_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Start Time') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_start_time' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_start_time' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_start_time')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_start_time_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_start_time');
			if(trim($buscador_ins_venta_ml_info_ml_start_time_comparador) == '') $buscador_ins_venta_ml_info_ml_start_time_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_start_time_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_start_time_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Exp Time') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_expiration_time' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_expiration_time' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_expiration_time')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_expiration_time_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_expiration_time');
			if(trim($buscador_ins_venta_ml_info_ml_expiration_time_comparador) == '') $buscador_ins_venta_ml_info_ml_expiration_time_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_expiration_time_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_expiration_time_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Seller') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_seller' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_seller' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_seller')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_seller_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_seller');
			if(trim($buscador_ins_venta_ml_info_ml_seller_comparador) == '') $buscador_ins_venta_ml_info_ml_seller_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_seller_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_seller_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Status') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_status' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_status' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_status')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_status_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_status');
			if(trim($buscador_ins_venta_ml_info_ml_status_comparador) == '') $buscador_ins_venta_ml_info_ml_status_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_status_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_status_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('MlItemStatus') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_item_status_id', Gral::getCmbFiltro(MlItemStatus::getMlItemStatussCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_item_status_id'), 'textbox')?>
        	<?php 
			$buscador_ins_venta_ml_info_ml_item_status_id_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_item_status_id');
			if(trim($buscador_ins_venta_ml_info_ml_item_status_id_comparador) == '') $buscador_ins_venta_ml_info_ml_item_status_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_item_status_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_item_status_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Initial Quantity') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_initial_quantity' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_initial_quantity' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_initial_quantity')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_initial_quantity_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_initial_quantity');
			if(trim($buscador_ins_venta_ml_info_ml_initial_quantity_comparador) == '') $buscador_ins_venta_ml_info_ml_initial_quantity_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_initial_quantity_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_initial_quantity_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Available Quantity') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_available_quantity' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_available_quantity' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_available_quantity')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_available_quantity_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_available_quantity');
			if(trim($buscador_ins_venta_ml_info_ml_available_quantity_comparador) == '') $buscador_ins_venta_ml_info_ml_available_quantity_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_available_quantity_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_available_quantity_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Sold Quantity') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_sold_quantity' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_sold_quantity' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_sold_quantity')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_sold_quantity_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_sold_quantity');
			if(trim($buscador_ins_venta_ml_info_ml_sold_quantity_comparador) == '') $buscador_ins_venta_ml_info_ml_sold_quantity_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_sold_quantity_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_sold_quantity_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Price') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_price' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_price' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_price')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_price_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_price');
			if(trim($buscador_ins_venta_ml_info_ml_price_comparador) == '') $buscador_ins_venta_ml_info_ml_price_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_price_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_price_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Ult Act') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_ultima_actualizacion' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_ultima_actualizacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_ultima_actualizacion')) ?>' size='15' />
					<input type='button' id='cal_buscador_ins_venta_ml_info_ml_ultima_actualizacion' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_ins_venta_ml_info_ml_ultima_actualizacion', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_ins_venta_ml_info_ml_ultima_actualizacion'
						});
					</script>
		
        	<?php 
			$buscador_ins_venta_ml_info_ml_ultima_actualizacion_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_ultima_actualizacion');
			if(trim($buscador_ins_venta_ml_info_ml_ultima_actualizacion_comparador) == '') $buscador_ins_venta_ml_info_ml_ultima_actualizacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_ultima_actualizacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_ultima_actualizacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Free Shipping') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_free_shipping', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_free_shipping'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_venta_ml_info_ml_free_shipping_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_free_shipping');
			if(trim($buscador_ins_venta_ml_info_ml_free_shipping_comparador) == '') $buscador_ins_venta_ml_info_ml_free_shipping_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_free_shipping_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_free_shipping_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Local Pickup') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_local_pickup', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.ml_local_pickup'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_venta_ml_info_ml_local_pickup_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_local_pickup');
			if(trim($buscador_ins_venta_ml_info_ml_local_pickup_comparador) == '') $buscador_ins_venta_ml_info_ml_local_pickup_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_local_pickup_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_local_pickup_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_observacion' type='text' class='textbox' id='buscador_ins_venta_ml_info_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_observacion_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.observacion');
			if(trim($buscador_ins_venta_ml_info_observacion_comparador) == '') $buscador_ins_venta_ml_info_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_observacion_comparador, 'textbox comparador') ?>
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

