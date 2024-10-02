	<?php
    	$ins_insumo_identificado_movimiento_actual = $o->getInsInsumoIdentificadoMovimientoActual();
		$ins_insumo_identificado_tipo_estado = $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado();

		$tal_insumo_asignado = $o->getTalInsumoAsignadoActual();
		if(!$tal_insumo_asignado) $tal_insumo_asignado = new TalInsumoAsignado();

   ?>
   <li value="<?php Gral::_echo($o->getId()) ?>" class="uno" descripcion="<?php Gral::_echo($o->getDescripcion()) ?>">
        
	   <div class="datos-uno">
           <div class="descripcion">
               <img src="imgs/ins_<?php Gral::_echo($ins_insumo_identificado_tipo_estado->getCodigo()) ?>.png" alt="estado" title="<?php Gral::_echo($ins_insumo_identificado_tipo_estado->getDescripcion()) ?>" width="16" align="absmiddle">
               <label><?php Gral::_echo($o->getDescripcionLarga()) ?></label>
           </div>
           <?php
           //$ins_insumo_identificado_movimiento_actual = $o->getInsInsumoIdentificadoMovimientoActual();
		   if($ins_insumo_identificado_movimiento_actual){
		   ?>
           <div style="font-weight:normal;"><?php Gral::_echo($o->getInsInsumo()->getInsCategoria()->getDescripcion()) ?> - <?php Gral::_echo($o->getInsInsumo()->getDescripcion()) ?></div>
           
           <div class="panol-actual" style="font-size:11px;">
		   	<?php if($ins_insumo_identificado_movimiento_actual->getPanPanolId() != 'null'){ ?>
			<?php Lang::_lang('Ultimo Panol') ?>: <strong><?php Gral::_echo($ins_insumo_identificado_movimiento_actual->getPanPanol()->getDescripcion()) ?></strong>
            <?php } ?>
           </div>
           <div class="coche-ultimo" style="font-size:11px;">
		   	<?php if($ins_insumo_identificado_movimiento_actual->getVehCocheId() != 'null'){ ?>
		   	<?php Lang::_lang('Ultimo Coche') ?>: <strong><?php Gral::_echo($ins_insumo_identificado_movimiento_actual->getVehCoche()->getDescripcion()) ?></strong><br />
            <label><?php Gral::_echo(($tal_insumo_asignado->getId() != '') ? $tal_insumo_asignado->getTalTareaResuelta()->getTalTareaBase()->getCodigo() : '') ?></label>
            <?php } ?>
           </div>
           <div class="tipo-estado-actual" style="font-size:11px;">
			<?php Lang::_lang('Actualmente') ?>: <strong><?php Gral::_echo($ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado()->getDescripcion()) ?></strong>
           </div>
           <div class="instancia-actual" style="font-size:11px;">
		   	<?php Lang::_lang('Instancia Actual') ?>: <strong><?php Gral::_echo($ins_insumo_identificado_movimiento_actual->getInsInsumoInstancia()->getDescripcion()) ?></strong>
           </div>
           <div class="km-actual" style="font-size:11px;">
		   	<?php Lang::_lang('Km Actual') ?>: <strong><?php Gral::_echo(($tal_insumo_asignado->getId() != '') ? $tal_insumo_asignado->getKmInsumoConsumo() : $ins_insumo_identificado_movimiento_actual->getKm()) ?></strong> km
           </div>

           <?php } ?>
           <div class="observacion" style="font-size:11px;"><?php Gral::_echo($o->getObservacion()) ?></div>
            
       </div>
   </li>
