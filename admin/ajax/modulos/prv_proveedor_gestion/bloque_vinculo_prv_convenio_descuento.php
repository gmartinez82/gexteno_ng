
<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_CONVENIO_DESCUENTO')){ ?>
<div class='vinculo prv_convenio_descuento' padre='prv_proveedor' hijo='prv_convenio_descuento' padre_id='<?php echo $prv_proveedor->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('PrvConvenioDescuentos') ?>
        <?php 
        $cantidad_prv_convenio_descuentos = count($prv_proveedor->getPrvConvenioDescuentos());
        echo ($cantidad_prv_convenio_descuentos > 0) ? '('.$cantidad_prv_convenio_descuentos.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='prv_convenio_descuento_txt_buscar' id='prv_convenio_descuento_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_CONVENIO_DESCUENTO_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/prv_convenio_descuento/prv_convenio_descuento_alta.php?prv_proveedor_id=<?php Gral::_echo($prv_proveedor->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'prv_proveedor', 'prv_convenio_descuento', <?php Gral::_echo($prv_proveedor->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PrvConvenioDescuento') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

