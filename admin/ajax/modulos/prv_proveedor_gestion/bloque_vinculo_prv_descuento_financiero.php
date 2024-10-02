
<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_DESCUENTO_FINANCIERO')){ ?>
<div class='vinculo prv_descuento_financiero' padre='prv_proveedor' hijo='prv_descuento_financiero' padre_id='<?php echo $prv_proveedor->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('PrvDescuentoFinancieros') ?>
        <?php 
        $cantidad_prv_descuento_financieros = count($prv_proveedor->getPrvDescuentoFinancieros());
        echo ($cantidad_prv_descuento_financieros > 0) ? '('.$cantidad_prv_descuento_financieros.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='prv_descuento_financiero_txt_buscar' id='prv_descuento_financiero_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_DESCUENTO_FINANCIERO_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/prv_descuento_financiero/prv_descuento_financiero_alta.php?prv_proveedor_id=<?php Gral::_echo($prv_proveedor->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'prv_proveedor', 'prv_descuento_financiero', <?php Gral::_echo($prv_proveedor->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PrvDescuentoFinanciero') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

