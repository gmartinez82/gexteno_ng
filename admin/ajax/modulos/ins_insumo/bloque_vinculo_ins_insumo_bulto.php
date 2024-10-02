
<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_VINCULO_INS_INSUMO_BULTO')){ ?>
<div class='vinculo ins_insumo_bulto' padre='ins_insumo' hijo='ins_insumo_bulto' padre_id='<?php echo $ins_insumo->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('InsInsumoBultos') ?>
        <?php 
        $cantidad_ins_insumo_bultos = count($ins_insumo->getInsInsumoBultos());
        echo ($cantidad_ins_insumo_bultos > 0) ? '('.$cantidad_ins_insumo_bultos.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='ins_insumo_bulto_txt_buscar' id='ins_insumo_bulto_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_VINCULO_INS_INSUMO_BULTO_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo_bulto/ins_insumo_bulto_alta.php?ins_insumo_id=<?php Gral::_echo($ins_insumo->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'ins_insumo', 'ins_insumo_bulto', <?php Gral::_echo($ins_insumo->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('InsInsumoBulto') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

