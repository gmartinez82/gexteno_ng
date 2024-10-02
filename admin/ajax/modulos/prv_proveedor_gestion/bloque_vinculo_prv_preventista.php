
<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_PREVENTISTA')){ ?>
<div class='vinculo prv_preventista' padre='prv_proveedor' hijo='prv_preventista' padre_id='<?php echo $prv_proveedor->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('PrvPreventistas') ?>
        <?php 
        $cantidad_prv_preventistas = count($prv_proveedor->getPrvPreventistas());
        echo ($cantidad_prv_preventistas > 0) ? '('.$cantidad_prv_preventistas.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='prv_preventista_txt_buscar' id='prv_preventista_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_PREVENTISTA_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/prv_preventista/prv_preventista_alta.php?prv_proveedor_id=<?php Gral::_echo($prv_proveedor->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'prv_proveedor', 'prv_preventista', <?php Gral::_echo($prv_proveedor->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PrvPreventista') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

