
<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_VINCULO_INS_VENTA_ML_INFO')){ ?>
<div class='vinculo ins_venta_ml_info' padre='ins_insumo' hijo='ins_venta_ml_info' padre_id='<?php echo $ins_insumo->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('InsVentaMlInfos') ?>
		 <?php 
		 $cantidad_ins_venta_ml_infos = count($ins_insumo->getInsVentaMlInfos());
		 echo ($cantidad_ins_venta_ml_infos > 0) ? '('.$cantidad_ins_venta_ml_infos.')' : '' ;
		 ?>			 
    </div>

    <div class='buscador'>
        <input name='ins_venta_ml_info_txt_buscar' id='ins_venta_ml_info_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

		<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_VINCULO_INS_VENTA_ML_INFO_ACCIONES_ALTA')){ ?>
		<div class="trigger wopenModal boton" archivo="ajax/modulos/ins_venta_ml_info/ins_venta_ml_info_alta.php?ins_insumo_id=<?php Gral::_echo($ins_insumo->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'ins_insumo', 'ins_venta_ml_info', <?php Gral::_echo($ins_insumo->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('InsVentaMlInfo') ?>'>
        	<img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
		</div>
		<?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

