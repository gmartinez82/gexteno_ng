
<?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_ALTA_VINCULO_VTA_POLITICA_DESCUENTO_RANGO')){ ?>
<div class='vinculo vta_politica_descuento_rango' padre='vta_politica_descuento' hijo='vta_politica_descuento_rango' padre_id='<?php echo $vta_politica_descuento->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('VtaPoliticaDescuentoRangos') ?>
        <?php 
        $cantidad_vta_politica_descuento_rangos = count($vta_politica_descuento->getVtaPoliticaDescuentoRangos());
        echo ($cantidad_vta_politica_descuento_rangos > 0) ? '('.$cantidad_vta_politica_descuento_rangos.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='vta_politica_descuento_rango_txt_buscar' id='vta_politica_descuento_rango_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_ALTA_VINCULO_VTA_POLITICA_DESCUENTO_RANGO_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_politica_descuento_rango/vta_politica_descuento_rango_alta.php?vta_politica_descuento_id=<?php Gral::_echo($vta_politica_descuento->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'vta_politica_descuento', 'vta_politica_descuento_rango', <?php Gral::_echo($vta_politica_descuento->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('VtaPoliticaDescuentoRango') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

