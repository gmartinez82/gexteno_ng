<?php
include_once "_autoload.php";
$criterio = new Criterio(PrvTelefono::SES_CRITERIOS);
$criterio->addTabla('prv_telefono');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='prv_telefono'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_telefono_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_telefono.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_prv_telefono_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('prv_telefono.prv_proveedor_id');
			if(trim($buscador_prv_telefono_prv_proveedor_id_comparador) == '') $buscador_prv_telefono_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_telefono_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_telefono_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvTelefonoTipo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_telefono_prv_telefono_tipo_id', Gral::getCmbFiltro(PrvTelefonoTipo::getPrvTelefonoTiposCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_telefono.prv_telefono_tipo_id'), 'textbox')?>
        	<?php 
			$buscador_prv_telefono_prv_telefono_tipo_id_comparador = $criterio->getComparadorDeCampo('prv_telefono.prv_telefono_tipo_id');
			if(trim($buscador_prv_telefono_prv_telefono_tipo_id_comparador) == '') $buscador_prv_telefono_prv_telefono_tipo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_telefono_prv_telefono_tipo_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_telefono_prv_telefono_tipo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_telefono_descripcion' type='text' class='textbox' id='buscador_prv_telefono_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_telefono.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_prv_telefono_descripcion_comparador = $criterio->getComparadorDeCampo('prv_telefono.descripcion');
			if(trim($buscador_prv_telefono_descripcion_comparador) == '') $buscador_prv_telefono_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_telefono_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_telefono_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GeoPais') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_telefono_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_telefono.geo_pais_id'), 'textbox')?>
        	<?php 
			$buscador_prv_telefono_geo_pais_id_comparador = $criterio->getComparadorDeCampo('prv_telefono.geo_pais_id');
			if(trim($buscador_prv_telefono_geo_pais_id_comparador) == '') $buscador_prv_telefono_geo_pais_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_telefono_geo_pais_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_telefono_geo_pais_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cod Area') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_telefono_codigo' type='text' class='textbox' id='buscador_prv_telefono_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_telefono.codigo')) ?>' size='22' />
        	<?php 
			$buscador_prv_telefono_codigo_comparador = $criterio->getComparadorDeCampo('prv_telefono.codigo');
			if(trim($buscador_prv_telefono_codigo_comparador) == '') $buscador_prv_telefono_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_telefono_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_prv_telefono_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Telefono') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_telefono_telefono' type='text' class='textbox' id='buscador_prv_telefono_telefono' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_telefono.telefono')) ?>' size='22' />
        	<?php 
			$buscador_prv_telefono_telefono_comparador = $criterio->getComparadorDeCampo('prv_telefono.telefono');
			if(trim($buscador_prv_telefono_telefono_comparador) == '') $buscador_prv_telefono_telefono_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_telefono_telefono_comparador', Criterio::getComparadoresCmb(), $buscador_prv_telefono_telefono_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_telefono_observacion' type='text' class='textbox' id='buscador_prv_telefono_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_telefono.observacion')) ?>' size='22' />
        	<?php 
			$buscador_prv_telefono_observacion_comparador = $criterio->getComparadorDeCampo('prv_telefono.observacion');
			if(trim($buscador_prv_telefono_observacion_comparador) == '') $buscador_prv_telefono_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_telefono_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_telefono_observacion_comparador, 'textbox comparador') ?>
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

