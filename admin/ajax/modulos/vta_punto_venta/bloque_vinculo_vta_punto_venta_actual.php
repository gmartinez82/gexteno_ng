
<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA_VINCULO_VTA_PUNTO_VENTA_ACTUAL')){ ?>
<div class='vinculo vta_punto_venta_actual' padre='vta_punto_venta' hijo='vta_punto_venta_actual' padre_id='<?php echo $vta_punto_venta->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('VtaPuntoVentaActuals') ?>
        <?php 
        $cantidad_vta_punto_venta_actuals = count($vta_punto_venta->getVtaPuntoVentaActuals());
        echo ($cantidad_vta_punto_venta_actuals > 0) ? '('.$cantidad_vta_punto_venta_actuals.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='vta_punto_venta_actual_txt_buscar' id='vta_punto_venta_actual_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA_VINCULO_VTA_PUNTO_VENTA_ACTUAL_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_punto_venta_actual/vta_punto_venta_actual_alta.php?vta_punto_venta_id=<?php Gral::_echo($vta_punto_venta->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'vta_punto_venta', 'vta_punto_venta_actual', <?php Gral::_echo($vta_punto_venta->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('VtaPuntoVentaActual') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

