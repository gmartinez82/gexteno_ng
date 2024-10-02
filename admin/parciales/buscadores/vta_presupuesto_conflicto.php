<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaPresupuestoConflicto::SES_CRITERIOS);
$criterio->addTabla('vta_presupuesto_conflicto');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_presupuesto_conflicto'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_conflicto_descripcion' type='text' class='textbox' id='buscador_vta_presupuesto_conflicto_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_conflicto.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_conflicto_descripcion_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.descripcion');
			if(trim($buscador_vta_presupuesto_conflicto_descripcion_comparador) == '') $buscador_vta_presupuesto_conflicto_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_conflicto_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPresupuestoInsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_vta_presupuesto_ins_insumo_id', Gral::getCmbFiltro(VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_conflicto.vta_presupuesto_ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_conflicto_vta_presupuesto_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.vta_presupuesto_ins_insumo_id');
			if(trim($buscador_vta_presupuesto_conflicto_vta_presupuesto_ins_insumo_id_comparador) == '') $buscador_vta_presupuesto_conflicto_vta_presupuesto_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_vta_presupuesto_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_conflicto_vta_presupuesto_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_conflicto_importe_inicial' type='text' class='textbox' id='buscador_vta_presupuesto_conflicto_importe_inicial' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_conflicto.importe_inicial')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_conflicto_importe_inicial_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.importe_inicial');
			if(trim($buscador_vta_presupuesto_conflicto_importe_inicial_comparador) == '') $buscador_vta_presupuesto_conflicto_importe_inicial_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_importe_inicial_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_conflicto_importe_inicial_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_conflicto_importe_actualizado' type='text' class='textbox' id='buscador_vta_presupuesto_conflicto_importe_actualizado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_conflicto.importe_actualizado')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_conflicto_importe_actualizado_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.importe_actualizado');
			if(trim($buscador_vta_presupuesto_conflicto_importe_actualizado_comparador) == '') $buscador_vta_presupuesto_conflicto_importe_actualizado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_importe_actualizado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_conflicto_importe_actualizado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_conflicto_importe_diferencia' type='text' class='textbox' id='buscador_vta_presupuesto_conflicto_importe_diferencia' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_conflicto.importe_diferencia')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_conflicto_importe_diferencia_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.importe_diferencia');
			if(trim($buscador_vta_presupuesto_conflicto_importe_diferencia_comparador) == '') $buscador_vta_presupuesto_conflicto_importe_diferencia_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_importe_diferencia_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_conflicto_importe_diferencia_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_conflicto_importe_resuelto' type='text' class='textbox' id='buscador_vta_presupuesto_conflicto_importe_resuelto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_conflicto.importe_resuelto')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_conflicto_importe_resuelto_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.importe_resuelto');
			if(trim($buscador_vta_presupuesto_conflicto_importe_resuelto_comparador) == '') $buscador_vta_presupuesto_conflicto_importe_resuelto_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_importe_resuelto_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_conflicto_importe_resuelto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Conflicto') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_conflicto_fecha_conflicto' type='text' class='textbox' id='buscador_vta_presupuesto_conflicto_fecha_conflicto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('vta_presupuesto_conflicto.fecha_conflicto'))) ?>' size='15' />
					<input type='button' id='cal_buscador_vta_presupuesto_conflicto_fecha_conflicto' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_vta_presupuesto_conflicto_fecha_conflicto', ifFormat: '%d/%m/%Y', button: 'cal_buscador_vta_presupuesto_conflicto_fecha_conflicto'
						});
					</script>
		
        	<?php 
			$buscador_vta_presupuesto_conflicto_fecha_conflicto_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.fecha_conflicto');
			if(trim($buscador_vta_presupuesto_conflicto_fecha_conflicto_comparador) == '') $buscador_vta_presupuesto_conflicto_fecha_conflicto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_fecha_conflicto_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_conflicto_fecha_conflicto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Resolucion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_conflicto_fecha_resolucion' type='text' class='textbox' id='buscador_vta_presupuesto_conflicto_fecha_resolucion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('vta_presupuesto_conflicto.fecha_resolucion'))) ?>' size='15' />
					<input type='button' id='cal_buscador_vta_presupuesto_conflicto_fecha_resolucion' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_vta_presupuesto_conflicto_fecha_resolucion', ifFormat: '%d/%m/%Y', button: 'cal_buscador_vta_presupuesto_conflicto_fecha_resolucion'
						});
					</script>
		
        	<?php 
			$buscador_vta_presupuesto_conflicto_fecha_resolucion_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.fecha_resolucion');
			if(trim($buscador_vta_presupuesto_conflicto_fecha_resolucion_comparador) == '') $buscador_vta_presupuesto_conflicto_fecha_resolucion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_fecha_resolucion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_conflicto_fecha_resolucion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('UsUsuario Resolucion') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_us_usuario_resolucion', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_conflicto.us_usuario_resolucion'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_presupuesto_conflicto_us_usuario_resolucion_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.us_usuario_resolucion');
			if(trim($buscador_vta_presupuesto_conflicto_us_usuario_resolucion_comparador) == '') $buscador_vta_presupuesto_conflicto_us_usuario_resolucion_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_us_usuario_resolucion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_conflicto_us_usuario_resolucion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Resuelto') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_resuelto', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_conflicto.resuelto'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_presupuesto_conflicto_resuelto_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.resuelto');
			if(trim($buscador_vta_presupuesto_conflicto_resuelto_comparador) == '') $buscador_vta_presupuesto_conflicto_resuelto_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_resuelto_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_conflicto_resuelto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_conflicto_codigo' type='text' class='textbox' id='buscador_vta_presupuesto_conflicto_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_conflicto.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_conflicto_codigo_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.codigo');
			if(trim($buscador_vta_presupuesto_conflicto_codigo_comparador) == '') $buscador_vta_presupuesto_conflicto_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_conflicto_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_conflicto_observacion' type='text' class='textbox' id='buscador_vta_presupuesto_conflicto_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_conflicto.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_conflicto_observacion_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.observacion');
			if(trim($buscador_vta_presupuesto_conflicto_observacion_comparador) == '') $buscador_vta_presupuesto_conflicto_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_conflicto_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_conflicto.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_presupuesto_conflicto_estado_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.estado');
			if(trim($buscador_vta_presupuesto_conflicto_estado_comparador) == '') $buscador_vta_presupuesto_conflicto_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_conflicto_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_conflicto_estado_comparador, 'textbox comparador') ?>
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

