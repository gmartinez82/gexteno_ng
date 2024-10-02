<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaVendedor::SES_CRITERIOS);
$criterio->addTabla('vta_vendedor');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_vendedor'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_descripcion' type='text' class='textbox' id='buscador_vta_vendedor_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_descripcion_comparador = $criterio->getComparadorDeCampo('vta_vendedor.descripcion');
			if(trim($buscador_vta_vendedor_descripcion_comparador) == '') $buscador_vta_vendedor_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Apellido') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_apellido' type='text' class='textbox' id='buscador_vta_vendedor_apellido' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor.apellido')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_apellido_comparador = $criterio->getComparadorDeCampo('vta_vendedor.apellido');
			if(trim($buscador_vta_vendedor_apellido_comparador) == '') $buscador_vta_vendedor_apellido_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_apellido_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_apellido_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nombre') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_nombre' type='text' class='textbox' id='buscador_vta_vendedor_nombre' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor.nombre')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_nombre_comparador = $criterio->getComparadorDeCampo('vta_vendedor.nombre');
			if(trim($buscador_vta_vendedor_nombre_comparador) == '') $buscador_vta_vendedor_nombre_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_nombre_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_nombre_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaTipoVendedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_vendedor_vta_tipo_vendedor_id', Gral::getCmbFiltro(VtaTipoVendedor::getVtaTipoVendedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor.vta_tipo_vendedor_id'), 'textbox')?>
        	<?php 
			$buscador_vta_vendedor_vta_tipo_vendedor_id_comparador = $criterio->getComparadorDeCampo('vta_vendedor.vta_tipo_vendedor_id');
			if(trim($buscador_vta_vendedor_vta_tipo_vendedor_id_comparador) == '') $buscador_vta_vendedor_vta_tipo_vendedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_vta_tipo_vendedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_vta_tipo_vendedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Email') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_email' type='text' class='textbox' id='buscador_vta_vendedor_email' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor.email')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_email_comparador = $criterio->getComparadorDeCampo('vta_vendedor.email');
			if(trim($buscador_vta_vendedor_email_comparador) == '') $buscador_vta_vendedor_email_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_email_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_email_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Telefono') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_telefono' type='text' class='textbox' id='buscador_vta_vendedor_telefono' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor.telefono')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_telefono_comparador = $criterio->getComparadorDeCampo('vta_vendedor.telefono');
			if(trim($buscador_vta_vendedor_telefono_comparador) == '') $buscador_vta_vendedor_telefono_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_telefono_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_telefono_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Celular') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_celular' type='text' class='textbox' id='buscador_vta_vendedor_celular' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor.celular')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_celular_comparador = $criterio->getComparadorDeCampo('vta_vendedor.celular');
			if(trim($buscador_vta_vendedor_celular_comparador) == '') $buscador_vta_vendedor_celular_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_celular_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_celular_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Porc Comision') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_porcentaje_comision' type='text' class='textbox' id='buscador_vta_vendedor_porcentaje_comision' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor.porcentaje_comision')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_porcentaje_comision_comparador = $criterio->getComparadorDeCampo('vta_vendedor.porcentaje_comision');
			if(trim($buscador_vta_vendedor_porcentaje_comision_comparador) == '') $buscador_vta_vendedor_porcentaje_comision_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_porcentaje_comision_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_porcentaje_comision_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_codigo' type='text' class='textbox' id='buscador_vta_vendedor_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_codigo_comparador = $criterio->getComparadorDeCampo('vta_vendedor.codigo');
			if(trim($buscador_vta_vendedor_codigo_comparador) == '') $buscador_vta_vendedor_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_observacion' type='text' class='textbox' id='buscador_vta_vendedor_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_observacion_comparador = $criterio->getComparadorDeCampo('vta_vendedor.observacion');
			if(trim($buscador_vta_vendedor_observacion_comparador) == '') $buscador_vta_vendedor_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_vendedor_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_vendedor_estado_comparador = $criterio->getComparadorDeCampo('vta_vendedor.estado');
			if(trim($buscador_vta_vendedor_estado_comparador) == '') $buscador_vta_vendedor_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_estado_comparador, 'textbox comparador') ?>
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

