<?php
include_once "_autoload.php";
$criterio = new Criterio(AppMovDispositivo::SES_CRITERIOS);
$criterio->addTabla('app_mov_dispositivo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='app_mov_dispositivo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_dispositivo_descripcion' type='text' class='textbox' id='buscador_app_mov_dispositivo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_dispositivo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_dispositivo_descripcion_comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.descripcion');
			if(trim($buscador_app_mov_dispositivo_descripcion_comparador) == '') $buscador_app_mov_dispositivo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_dispositivo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_dispositivo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_dispositivo_codigo' type='text' class='textbox' id='buscador_app_mov_dispositivo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_dispositivo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_dispositivo_codigo_comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.codigo');
			if(trim($buscador_app_mov_dispositivo_codigo_comparador) == '') $buscador_app_mov_dispositivo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_dispositivo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_dispositivo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('S.O. Descr') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_dispositivo_so_descripcion' type='text' class='textbox' id='buscador_app_mov_dispositivo_so_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_dispositivo.so_descripcion')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_dispositivo_so_descripcion_comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.so_descripcion');
			if(trim($buscador_app_mov_dispositivo_so_descripcion_comparador) == '') $buscador_app_mov_dispositivo_so_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_dispositivo_so_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_dispositivo_so_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('S.O. Version') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_dispositivo_so_version' type='text' class='textbox' id='buscador_app_mov_dispositivo_so_version' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_dispositivo.so_version')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_dispositivo_so_version_comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.so_version');
			if(trim($buscador_app_mov_dispositivo_so_version_comparador) == '') $buscador_app_mov_dispositivo_so_version_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_dispositivo_so_version_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_dispositivo_so_version_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Marca') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_dispositivo_marca' type='text' class='textbox' id='buscador_app_mov_dispositivo_marca' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_dispositivo.marca')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_dispositivo_marca_comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.marca');
			if(trim($buscador_app_mov_dispositivo_marca_comparador) == '') $buscador_app_mov_dispositivo_marca_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_dispositivo_marca_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_dispositivo_marca_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Modelo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_dispositivo_modelo' type='text' class='textbox' id='buscador_app_mov_dispositivo_modelo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_dispositivo.modelo')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_dispositivo_modelo_comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.modelo');
			if(trim($buscador_app_mov_dispositivo_modelo_comparador) == '') $buscador_app_mov_dispositivo_modelo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_dispositivo_modelo_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_dispositivo_modelo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('IMEI') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_dispositivo_imei' type='text' class='textbox' id='buscador_app_mov_dispositivo_imei' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_dispositivo.imei')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_dispositivo_imei_comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.imei');
			if(trim($buscador_app_mov_dispositivo_imei_comparador) == '') $buscador_app_mov_dispositivo_imei_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_dispositivo_imei_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_dispositivo_imei_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Telefono Nro') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_dispositivo_telefono_nro' type='text' class='textbox' id='buscador_app_mov_dispositivo_telefono_nro' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_dispositivo.telefono_nro')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_dispositivo_telefono_nro_comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.telefono_nro');
			if(trim($buscador_app_mov_dispositivo_telefono_nro_comparador) == '') $buscador_app_mov_dispositivo_telefono_nro_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_dispositivo_telefono_nro_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_dispositivo_telefono_nro_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Titular Apellido') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_dispositivo_titular_apellido' type='text' class='textbox' id='buscador_app_mov_dispositivo_titular_apellido' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_dispositivo.titular_apellido')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_dispositivo_titular_apellido_comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.titular_apellido');
			if(trim($buscador_app_mov_dispositivo_titular_apellido_comparador) == '') $buscador_app_mov_dispositivo_titular_apellido_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_dispositivo_titular_apellido_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_dispositivo_titular_apellido_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Titular Nombre') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_dispositivo_titular_nombre' type='text' class='textbox' id='buscador_app_mov_dispositivo_titular_nombre' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_dispositivo.titular_nombre')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_dispositivo_titular_nombre_comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.titular_nombre');
			if(trim($buscador_app_mov_dispositivo_titular_nombre_comparador) == '') $buscador_app_mov_dispositivo_titular_nombre_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_dispositivo_titular_nombre_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_dispositivo_titular_nombre_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_dispositivo_observacion' type='text' class='textbox' id='buscador_app_mov_dispositivo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_dispositivo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_dispositivo_observacion_comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.observacion');
			if(trim($buscador_app_mov_dispositivo_observacion_comparador) == '') $buscador_app_mov_dispositivo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_dispositivo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_dispositivo_observacion_comparador, 'textbox comparador') ?>
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

