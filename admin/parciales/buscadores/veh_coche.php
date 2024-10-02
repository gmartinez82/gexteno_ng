<?php
include_once "_autoload.php";
$criterio = new Criterio(VehCoche::SES_CRITERIOS);
$criterio->addTabla('veh_coche');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='veh_coche'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Marca') ?></div>
		  <div class='dato' id='dato_buscador_veh_coche_veh_marca_id'>
			  <?php
				$cmb_veh_marca_id = $criterio->getValorDeCampo('veh_modelo.veh_marca_id');
					
				$c = new Criterio(VehMarca::SES_CRITERIOS);
				$c->add('x', $x, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('veh_marca');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_veh_coche_veh_marca_id', Gral::getCmbFiltro(VehMarca::getVehMarcasCmbF(null, $c),'Seleccione Marca'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('veh_modelo.veh_marca_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_veh_coche_x" elemento_id="buscador_veh_marca_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_veh_coche_veh_marca_id_comparador = $criterio->getComparadorDeCampo('veh_modelo.veh_marca_id');
			if(trim($buscador_veh_coche_veh_marca_id_comparador) == '') $buscador_veh_coche_veh_marca_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_veh_coche_veh_marca_id_comparador', Criterio::getComparadoresCmb(), $buscador_veh_coche_veh_marca_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Modelo') ?></div>
		  <div class='dato' id='dato_buscador_veh_coche_veh_modelo_id'>
			  <?php
				$cmb_veh_modelo_id = $criterio->getValorDeCampo('veh_coche.veh_modelo_id');
					
				$c = new Criterio(VehModelo::SES_CRITERIOS);
				$c->add('veh_marca_id', $cmb_veh_marca_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('veh_modelo');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_veh_coche_veh_modelo_id', Gral::getCmbFiltro(VehModelo::getVehModelosCmbF(null, $c),'Seleccione Modelo'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('veh_coche.veh_modelo_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_veh_coche_veh_marca_id" elemento_id="buscador_veh_modelo_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_veh_coche_veh_modelo_id_comparador = $criterio->getComparadorDeCampo('veh_coche.veh_modelo_id');
			if(trim($buscador_veh_coche_veh_modelo_id_comparador) == '') $buscador_veh_coche_veh_modelo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_veh_coche_veh_modelo_id_comparador', Criterio::getComparadoresCmb(), $buscador_veh_coche_veh_modelo_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_veh_coche_descripcion' type='text' class='textbox' id='buscador_veh_coche_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('veh_coche.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_veh_coche_descripcion_comparador = $criterio->getComparadorDeCampo('veh_coche.descripcion');
			if(trim($buscador_veh_coche_descripcion_comparador) == '') $buscador_veh_coche_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_veh_coche_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_veh_coche_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Version') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_veh_coche_version' type='text' class='textbox' id='buscador_veh_coche_version' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('veh_coche.version')) ?>' size='22' />
        	<?php 
			$buscador_veh_coche_version_comparador = $criterio->getComparadorDeCampo('veh_coche.version');
			if(trim($buscador_veh_coche_version_comparador) == '') $buscador_veh_coche_version_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_veh_coche_version_comparador', Criterio::getComparadoresCmb(), $buscador_veh_coche_version_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_veh_coche_codigo' type='text' class='textbox' id='buscador_veh_coche_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('veh_coche.codigo')) ?>' size='22' />
        	<?php 
			$buscador_veh_coche_codigo_comparador = $criterio->getComparadorDeCampo('veh_coche.codigo');
			if(trim($buscador_veh_coche_codigo_comparador) == '') $buscador_veh_coche_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_veh_coche_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_veh_coche_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Patente') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_veh_coche_patente' type='text' class='textbox' id='buscador_veh_coche_patente' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('veh_coche.patente')) ?>' size='22' />
        	<?php 
			$buscador_veh_coche_patente_comparador = $criterio->getComparadorDeCampo('veh_coche.patente');
			if(trim($buscador_veh_coche_patente_comparador) == '') $buscador_veh_coche_patente_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_veh_coche_patente_comparador', Criterio::getComparadoresCmb(), $buscador_veh_coche_patente_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Anio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_veh_coche_anio' type='text' class='textbox' id='buscador_veh_coche_anio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('veh_coche.anio')) ?>' size='22' />
        	<?php 
			$buscador_veh_coche_anio_comparador = $criterio->getComparadorDeCampo('veh_coche.anio');
			if(trim($buscador_veh_coche_anio_comparador) == '') $buscador_veh_coche_anio_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_veh_coche_anio_comparador', Criterio::getComparadoresCmb(), $buscador_veh_coche_anio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_veh_coche_observacion' type='text' class='textbox' id='buscador_veh_coche_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('veh_coche.observacion')) ?>' size='22' />
        	<?php 
			$buscador_veh_coche_observacion_comparador = $criterio->getComparadorDeCampo('veh_coche.observacion');
			if(trim($buscador_veh_coche_observacion_comparador) == '') $buscador_veh_coche_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_veh_coche_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_veh_coche_observacion_comparador, 'textbox comparador') ?>
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

