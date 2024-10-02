
<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_VINCULO_INS_INSUMO_INSTANCIA')){ ?>
<div class='vinculo ins_insumo_instancia' padre='ins_insumo' hijo='ins_insumo_instancia' padre_id='<?php echo $ins_insumo->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('InsInsumoInstancias') ?>
		 <?php 
		 $cantidad_ins_insumo_instancias = count($ins_insumo->getInsInsumoInstancias());
		 echo ($cantidad_ins_insumo_instancias > 0) ? '('.$cantidad_ins_insumo_instancias.')' : '' ;
		 ?>			 
    </div>

    <div class='buscador'>
        <input name='ins_insumo_instancia_txt_buscar' id='ins_insumo_instancia_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

		<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_VINCULO_INS_INSUMO_INSTANCIA_ACCIONES_ALTA')){ ?>
		<div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo_instancia/ins_insumo_instancia_alta.php?ins_insumo_id=<?php Gral::_echo($ins_insumo->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'ins_insumo', 'ins_insumo_instancia', <?php Gral::_echo($ins_insumo->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('InsInsumoInstancia') ?>'>
        	<img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
		</div>
		<?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

