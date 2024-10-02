
	<?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_ALTA_RELACION_VEH_COCHE')){ ?>
	<div class='relacion veh_coche' clase='veh_coche' padre='vta_presupuesto' padre_clase='VtaPresupuesto' relacion='VtaPresupuestoVehCoche'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VehCoches') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_veh_coches = $vta_presupuesto->getCantidadVehCochesXVtaPresupuestoVehCoche();
                echo ($cantidad_veh_coches > 0) ? '('.$cantidad_veh_coches.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_vta_presupuesto_alta_relacion_vta_presupuesto_veh_coche_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='veh_coche_txt_buscar' id='veh_coche_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_ALTA_RELACION_VEH_COCHE_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/veh_coche/veh_coche_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'veh_coche', 'vta_presupuesto', <?php Gral::_echo($vta_presupuesto->getId()) ?>, 'VtaPresupuesto', 'VtaPresupuestoVehCoche')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('veh_coche') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

