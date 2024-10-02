
<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_DESCUENTO_COMERCIAL')){ ?>
<div class='vinculo prv_descuento_comercial' padre='prv_proveedor' hijo='prv_descuento_comercial' padre_id='<?php echo $prv_proveedor->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('PrvDescuentoComercials') ?>
        <?php 
        $cantidad_prv_descuento_comercials = count($prv_proveedor->getPrvDescuentoComercials());
        echo ($cantidad_prv_descuento_comercials > 0) ? '('.$cantidad_prv_descuento_comercials.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='prv_descuento_comercial_txt_buscar' id='prv_descuento_comercial_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_DESCUENTO_COMERCIAL_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/prv_descuento_comercial/prv_descuento_comercial_alta.php?prv_proveedor_id=<?php Gral::_echo($prv_proveedor->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'prv_proveedor', 'prv_descuento_comercial', <?php Gral::_echo($prv_proveedor->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PrvDescuentoComercial') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

