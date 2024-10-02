
	<?php if(UsCredencial::getEsAcreditado('VEH_COCHE_ALTA_RELACION_VTA_PRESUPUESTO')){ ?>
	<div class='relacion vta_presupuesto' clase='vta_presupuesto' padre='veh_coche' padre_clase='VehCoche' relacion='VtaPresupuestoVehCoche'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaPresupuestos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_presupuestos = $veh_coche->getCantidadVtaPresupuestosXVtaPresupuestoVehCoche();
                echo ($cantidad_vta_presupuestos > 0) ? '('.$cantidad_vta_presupuestos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_veh_coche_alta_relacion_vta_presupuesto_veh_coche_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_presupuesto_txt_buscar' id='vta_presupuesto_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VEH_COCHE_ALTA_RELACION_VTA_PRESUPUESTO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_presupuesto/vta_presupuesto_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_presupuesto', 'veh_coche', <?php Gral::_echo($veh_coche->getId()) ?>, 'VehCoche', 'VtaPresupuestoVehCoche')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_presupuesto') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

