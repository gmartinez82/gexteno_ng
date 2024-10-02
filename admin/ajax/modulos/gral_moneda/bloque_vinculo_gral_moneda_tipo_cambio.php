
<?php if(UsCredencial::getEsAcreditado('GRAL_MONEDA_ALTA_VINCULO_GRAL_MONEDA_TIPO_CAMBIO')){ ?>
<div class='vinculo gral_moneda_tipo_cambio' padre='gral_moneda' hijo='gral_moneda_tipo_cambio' padre_id='<?php echo $gral_moneda->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('GralMonedaTipoCambios') ?>
        <?php 
        $cantidad_gral_moneda_tipo_cambios = count($gral_moneda->getGralMonedaTipoCambios());
        echo ($cantidad_gral_moneda_tipo_cambios > 0) ? '('.$cantidad_gral_moneda_tipo_cambios.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='gral_moneda_tipo_cambio_txt_buscar' id='gral_moneda_tipo_cambio_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('GRAL_MONEDA_ALTA_VINCULO_GRAL_MONEDA_TIPO_CAMBIO_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_moneda_tipo_cambio/gral_moneda_tipo_cambio_alta.php?gral_moneda_id=<?php Gral::_echo($gral_moneda->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'gral_moneda', 'gral_moneda_tipo_cambio', <?php Gral::_echo($gral_moneda->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('GralMonedaTipoCambio') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

