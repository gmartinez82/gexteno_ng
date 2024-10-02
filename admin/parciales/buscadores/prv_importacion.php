<?php
include_once "_autoload.php";
$criterio = new Criterio(PrvImportacion::SES_CRITERIOS);
$criterio->addTabla('prv_importacion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='prv_importacion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_importacion_descripcion' type='text' class='textbox' id='buscador_prv_importacion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_prv_importacion_descripcion_comparador = $criterio->getComparadorDeCampo('prv_importacion.descripcion');
			if(trim($buscador_prv_importacion_descripcion_comparador) == '') $buscador_prv_importacion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_importacion_codigo' type='text' class='textbox' id='buscador_prv_importacion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_prv_importacion_codigo_comparador = $criterio->getComparadorDeCampo('prv_importacion.codigo');
			if(trim($buscador_prv_importacion_codigo_comparador) == '') $buscador_prv_importacion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_importacion_prv_importacion_tipo_estado_id', Gral::getCmbFiltro(PrvImportacionTipoEstado::getPrvImportacionTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion.prv_importacion_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_prv_importacion_prv_importacion_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('prv_importacion.prv_importacion_tipo_estado_id');
			if(trim($buscador_prv_importacion_prv_importacion_tipo_estado_id_comparador) == '') $buscador_prv_importacion_prv_importacion_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_prv_importacion_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_prv_importacion_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_importacion_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_prv_importacion_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('prv_importacion.prv_proveedor_id');
			if(trim($buscador_prv_importacion_prv_proveedor_id_comparador) == '') $buscador_prv_importacion_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsMarca') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_importacion_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion.ins_marca_id'), 'textbox')?>
        	<?php 
			$buscador_prv_importacion_ins_marca_id_comparador = $criterio->getComparadorDeCampo('prv_importacion.ins_marca_id');
			if(trim($buscador_prv_importacion_ins_marca_id_comparador) == '') $buscador_prv_importacion_ins_marca_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_ins_marca_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_ins_marca_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Marca Pieza') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_prv_importacion_ins_marca_pieza', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion.ins_marca_pieza'), 'textbox') ?>
		
        	<?php 
			$buscador_prv_importacion_ins_marca_pieza_comparador = $criterio->getComparadorDeCampo('prv_importacion.ins_marca_pieza');
			if(trim($buscador_prv_importacion_ins_marca_pieza_comparador) == '') $buscador_prv_importacion_ins_marca_pieza_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_ins_marca_pieza_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_ins_marca_pieza_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvConvenioDescuento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_importacion_prv_convenio_descuento_id', Gral::getCmbFiltro(PrvConvenioDescuento::getPrvConvenioDescuentosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion.prv_convenio_descuento_id'), 'textbox')?>
        	<?php 
			$buscador_prv_importacion_prv_convenio_descuento_id_comparador = $criterio->getComparadorDeCampo('prv_importacion.prv_convenio_descuento_id');
			if(trim($buscador_prv_importacion_prv_convenio_descuento_id_comparador) == '') $buscador_prv_importacion_prv_convenio_descuento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_prv_convenio_descuento_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_prv_convenio_descuento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descuento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_importacion_descuento' type='text' class='textbox' id='buscador_prv_importacion_descuento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion.descuento')) ?>' size='22' />
        	<?php 
			$buscador_prv_importacion_descuento_comparador = $criterio->getComparadorDeCampo('prv_importacion.descuento');
			if(trim($buscador_prv_importacion_descuento_comparador) == '') $buscador_prv_importacion_descuento_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_descuento_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_descuento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cant Tab 1') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_importacion_cantidad_tab1' type='text' class='textbox' id='buscador_prv_importacion_cantidad_tab1' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion.cantidad_tab1')) ?>' size='22' />
        	<?php 
			$buscador_prv_importacion_cantidad_tab1_comparador = $criterio->getComparadorDeCampo('prv_importacion.cantidad_tab1');
			if(trim($buscador_prv_importacion_cantidad_tab1_comparador) == '') $buscador_prv_importacion_cantidad_tab1_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_cantidad_tab1_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_cantidad_tab1_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cant Tab 2') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_importacion_cantidad_tab2' type='text' class='textbox' id='buscador_prv_importacion_cantidad_tab2' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion.cantidad_tab2')) ?>' size='22' />
        	<?php 
			$buscador_prv_importacion_cantidad_tab2_comparador = $criterio->getComparadorDeCampo('prv_importacion.cantidad_tab2');
			if(trim($buscador_prv_importacion_cantidad_tab2_comparador) == '') $buscador_prv_importacion_cantidad_tab2_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_cantidad_tab2_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_cantidad_tab2_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cant Tab 3') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_importacion_cantidad_tab3' type='text' class='textbox' id='buscador_prv_importacion_cantidad_tab3' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion.cantidad_tab3')) ?>' size='22' />
        	<?php 
			$buscador_prv_importacion_cantidad_tab3_comparador = $criterio->getComparadorDeCampo('prv_importacion.cantidad_tab3');
			if(trim($buscador_prv_importacion_cantidad_tab3_comparador) == '') $buscador_prv_importacion_cantidad_tab3_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_cantidad_tab3_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_cantidad_tab3_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cant Tab 4') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_importacion_cantidad_tab4' type='text' class='textbox' id='buscador_prv_importacion_cantidad_tab4' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion.cantidad_tab4')) ?>' size='22' />
        	<?php 
			$buscador_prv_importacion_cantidad_tab4_comparador = $criterio->getComparadorDeCampo('prv_importacion.cantidad_tab4');
			if(trim($buscador_prv_importacion_cantidad_tab4_comparador) == '') $buscador_prv_importacion_cantidad_tab4_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_cantidad_tab4_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_cantidad_tab4_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_importacion_observacion' type='text' class='textbox' id='buscador_prv_importacion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_prv_importacion_observacion_comparador = $criterio->getComparadorDeCampo('prv_importacion.observacion');
			if(trim($buscador_prv_importacion_observacion_comparador) == '') $buscador_prv_importacion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_observacion_comparador, 'textbox comparador') ?>
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

