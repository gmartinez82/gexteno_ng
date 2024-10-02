<?php
include_once "_autoload.php";
$criterio = new Criterio(PrvInsumo::SES_CRITERIOS);
$criterio->addTabla('prv_insumo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='prv_insumo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_insumo_descripcion' type='text' class='textbox' id='buscador_prv_insumo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_prv_insumo_descripcion_comparador = $criterio->getComparadorDeCampo('prv_insumo.descripcion');
			if(trim($buscador_prv_insumo_descripcion_comparador) == '') $buscador_prv_insumo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_insumo_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_prv_insumo_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('prv_insumo.ins_insumo_id');
			if(trim($buscador_prv_insumo_ins_insumo_id_comparador) == '') $buscador_prv_insumo_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_insumo_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_prv_insumo_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('prv_insumo.prv_proveedor_id');
			if(trim($buscador_prv_insumo_prv_proveedor_id_comparador) == '') $buscador_prv_insumo_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cod Proveedor') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_insumo_codigo_proveedor' type='text' class='textbox' id='buscador_prv_insumo_codigo_proveedor' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo.codigo_proveedor')) ?>' size='22' />
        	<?php 
			$buscador_prv_insumo_codigo_proveedor_comparador = $criterio->getComparadorDeCampo('prv_insumo.codigo_proveedor');
			if(trim($buscador_prv_insumo_codigo_proveedor_comparador) == '') $buscador_prv_insumo_codigo_proveedor_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_codigo_proveedor_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_codigo_proveedor_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsMarca') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_insumo_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo.ins_marca_id'), 'textbox')?>
        	<?php 
			$buscador_prv_insumo_ins_marca_id_comparador = $criterio->getComparadorDeCampo('prv_insumo.ins_marca_id');
			if(trim($buscador_prv_insumo_ins_marca_id_comparador) == '') $buscador_prv_insumo_ins_marca_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_ins_marca_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_ins_marca_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cod Marca') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_insumo_codigo_marca' type='text' class='textbox' id='buscador_prv_insumo_codigo_marca' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo.codigo_marca')) ?>' size='22' />
        	<?php 
			$buscador_prv_insumo_codigo_marca_comparador = $criterio->getComparadorDeCampo('prv_insumo.codigo_marca');
			if(trim($buscador_prv_insumo_codigo_marca_comparador) == '') $buscador_prv_insumo_codigo_marca_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_codigo_marca_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_codigo_marca_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsMatriz') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_insumo_ins_matriz_id', Gral::getCmbFiltro(InsMatriz::getInsMatrizsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo.ins_matriz_id'), 'textbox')?>
        	<?php 
			$buscador_prv_insumo_ins_matriz_id_comparador = $criterio->getComparadorDeCampo('prv_insumo.ins_matriz_id');
			if(trim($buscador_prv_insumo_ins_matriz_id_comparador) == '') $buscador_prv_insumo_ins_matriz_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_ins_matriz_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_ins_matriz_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsMarcaPieza') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_prv_insumo_ins_marca_pieza', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo.ins_marca_pieza'), 'textbox') ?>
		
        	<?php 
			$buscador_prv_insumo_ins_marca_pieza_comparador = $criterio->getComparadorDeCampo('prv_insumo.ins_marca_pieza');
			if(trim($buscador_prv_insumo_ins_marca_pieza_comparador) == '') $buscador_prv_insumo_ins_marca_pieza_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_ins_marca_pieza_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_ins_marca_pieza_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cod Pieza') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_insumo_codigo_pieza' type='text' class='textbox' id='buscador_prv_insumo_codigo_pieza' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo.codigo_pieza')) ?>' size='22' />
        	<?php 
			$buscador_prv_insumo_codigo_pieza_comparador = $criterio->getComparadorDeCampo('prv_insumo.codigo_pieza');
			if(trim($buscador_prv_insumo_codigo_pieza_comparador) == '') $buscador_prv_insumo_codigo_pieza_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_codigo_pieza_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_codigo_pieza_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_insumo_codigo' type='text' class='textbox' id='buscador_prv_insumo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_prv_insumo_codigo_comparador = $criterio->getComparadorDeCampo('prv_insumo.codigo');
			if(trim($buscador_prv_insumo_codigo_comparador) == '') $buscador_prv_insumo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_insumo_fecha_actualizacion' type='text' class='textbox' id='buscador_prv_insumo_fecha_actualizacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo.fecha_actualizacion')) ?>' size='15' />
					<input type='button' id='cal_buscador_prv_insumo_fecha_actualizacion' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_prv_insumo_fecha_actualizacion', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_prv_insumo_fecha_actualizacion'
						});
					</script>
		
        	<?php 
			$buscador_prv_insumo_fecha_actualizacion_comparador = $criterio->getComparadorDeCampo('prv_insumo.fecha_actualizacion');
			if(trim($buscador_prv_insumo_fecha_actualizacion_comparador) == '') $buscador_prv_insumo_fecha_actualizacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_fecha_actualizacion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_fecha_actualizacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_insumo_claves' type='text' class='textbox' id='buscador_prv_insumo_claves' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo.claves')) ?>' size='22' />
        	<?php 
			$buscador_prv_insumo_claves_comparador = $criterio->getComparadorDeCampo('prv_insumo.claves');
			if(trim($buscador_prv_insumo_claves_comparador) == '') $buscador_prv_insumo_claves_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_claves_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_claves_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_insumo_observacion' type='text' class='textbox' id='buscador_prv_insumo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_prv_insumo_observacion_comparador = $criterio->getComparadorDeCampo('prv_insumo.observacion');
			if(trim($buscador_prv_insumo_observacion_comparador) == '') $buscador_prv_insumo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_observacion_comparador, 'textbox comparador') ?>
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

