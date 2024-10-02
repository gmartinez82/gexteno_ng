<?php
include_once "_autoload.php";
$criterio = new Criterio(PrvPreventista::SES_CRITERIOS);
$criterio->addTabla('prv_preventista');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='prv_preventista'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_preventista_descripcion' type='text' class='textbox' id='buscador_prv_preventista_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_preventista.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_prv_preventista_descripcion_comparador = $criterio->getComparadorDeCampo('prv_preventista.descripcion');
			if(trim($buscador_prv_preventista_descripcion_comparador) == '') $buscador_prv_preventista_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_preventista_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_preventista_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_preventista_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_preventista.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_prv_preventista_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('prv_preventista.prv_proveedor_id');
			if(trim($buscador_prv_preventista_prv_proveedor_id_comparador) == '') $buscador_prv_preventista_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_preventista_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_preventista_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Apellido') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_preventista_apellido' type='text' class='textbox' id='buscador_prv_preventista_apellido' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_preventista.apellido')) ?>' size='22' />
        	<?php 
			$buscador_prv_preventista_apellido_comparador = $criterio->getComparadorDeCampo('prv_preventista.apellido');
			if(trim($buscador_prv_preventista_apellido_comparador) == '') $buscador_prv_preventista_apellido_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_preventista_apellido_comparador', Criterio::getComparadoresCmb(), $buscador_prv_preventista_apellido_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nombre') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_preventista_nombre' type='text' class='textbox' id='buscador_prv_preventista_nombre' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_preventista.nombre')) ?>' size='22' />
        	<?php 
			$buscador_prv_preventista_nombre_comparador = $criterio->getComparadorDeCampo('prv_preventista.nombre');
			if(trim($buscador_prv_preventista_nombre_comparador) == '') $buscador_prv_preventista_nombre_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_preventista_nombre_comparador', Criterio::getComparadoresCmb(), $buscador_prv_preventista_nombre_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Email') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_preventista_email' type='text' class='textbox' id='buscador_prv_preventista_email' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_preventista.email')) ?>' size='22' />
        	<?php 
			$buscador_prv_preventista_email_comparador = $criterio->getComparadorDeCampo('prv_preventista.email');
			if(trim($buscador_prv_preventista_email_comparador) == '') $buscador_prv_preventista_email_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_preventista_email_comparador', Criterio::getComparadoresCmb(), $buscador_prv_preventista_email_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Telefono') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_preventista_telefono' type='text' class='textbox' id='buscador_prv_preventista_telefono' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_preventista.telefono')) ?>' size='22' />
        	<?php 
			$buscador_prv_preventista_telefono_comparador = $criterio->getComparadorDeCampo('prv_preventista.telefono');
			if(trim($buscador_prv_preventista_telefono_comparador) == '') $buscador_prv_preventista_telefono_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_preventista_telefono_comparador', Criterio::getComparadoresCmb(), $buscador_prv_preventista_telefono_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Celular') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_preventista_celular' type='text' class='textbox' id='buscador_prv_preventista_celular' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_preventista.celular')) ?>' size='22' />
        	<?php 
			$buscador_prv_preventista_celular_comparador = $criterio->getComparadorDeCampo('prv_preventista.celular');
			if(trim($buscador_prv_preventista_celular_comparador) == '') $buscador_prv_preventista_celular_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_preventista_celular_comparador', Criterio::getComparadoresCmb(), $buscador_prv_preventista_celular_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_preventista_codigo' type='text' class='textbox' id='buscador_prv_preventista_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_preventista.codigo')) ?>' size='22' />
        	<?php 
			$buscador_prv_preventista_codigo_comparador = $criterio->getComparadorDeCampo('prv_preventista.codigo');
			if(trim($buscador_prv_preventista_codigo_comparador) == '') $buscador_prv_preventista_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_preventista_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_prv_preventista_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_preventista_observacion' type='text' class='textbox' id='buscador_prv_preventista_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_preventista.observacion')) ?>' size='22' />
        	<?php 
			$buscador_prv_preventista_observacion_comparador = $criterio->getComparadorDeCampo('prv_preventista.observacion');
			if(trim($buscador_prv_preventista_observacion_comparador) == '') $buscador_prv_preventista_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_preventista_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_preventista_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_prv_preventista_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_preventista.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_prv_preventista_estado_comparador = $criterio->getComparadorDeCampo('prv_preventista.estado');
			if(trim($buscador_prv_preventista_estado_comparador) == '') $buscador_prv_preventista_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_preventista_estado_comparador', Criterio::getComparadoresCmb(), $buscador_prv_preventista_estado_comparador, 'textbox comparador') ?>
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

