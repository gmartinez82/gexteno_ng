
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_VEH_MODELO')){ ?>
	<div class='relacion veh_modelo' clase='veh_modelo' padre='ins_insumo' padre_clase='InsInsumo' relacion='InsInsumoVehModelo'>

	<div class='titulo'>
            <?php Lang::_lang('VehModelos') ?>
            <?php 
            $cantidad_veh_modelos = $ins_insumo->getCantidadVehModelosXInsInsumoVehModelo();
            echo ($cantidad_veh_modelos > 0) ? '('.$cantidad_veh_modelos.')' : '' ;
            ?>			 
	</div>

	<div class='buscador'>
            <input name='veh_modelo_txt_buscar' id='veh_modelo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_VEH_MODELO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/veh_modelo/veh_modelo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'veh_modelo', 'ins_insumo', <?php Gral::_echo($ins_insumo->getId()) ?>, 'InsInsumo', 'ins_insumo_veh_modelo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('veh_modelo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

