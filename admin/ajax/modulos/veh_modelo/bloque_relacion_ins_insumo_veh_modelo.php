
	<?php if(UsCredencial::getEsAcreditado('VEH_MODELO_ALTA_RELACION_INS_INSUMO')){ ?>
	<div class='relacion ins_insumo' clase='ins_insumo' padre='veh_modelo' padre_clase='VehModelo' relacion='InsInsumoVehModelo'>

	<div class='titulo'>
            <?php Lang::_lang('InsInsumos') ?>
            <?php 
            $cantidad_ins_insumos = $veh_modelo->getCantidadInsInsumosXInsInsumoVehModelo();
            echo ($cantidad_ins_insumos > 0) ? '('.$cantidad_ins_insumos.')' : '' ;
            ?>			 
	</div>

	<div class='buscador'>
            <input name='ins_insumo_txt_buscar' id='ins_insumo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VEH_MODELO_ALTA_RELACION_INS_INSUMO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo/ins_insumo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ins_insumo', 'veh_modelo', <?php Gral::_echo($veh_modelo->getId()) ?>, 'VehModelo', 'ins_insumo_veh_modelo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ins_insumo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

