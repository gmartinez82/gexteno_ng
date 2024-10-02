
<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_VTA_TRIBUTO_EXENCION')){ ?>
<div class='vinculo vta_tributo_exencion' padre='cli_cliente' hijo='vta_tributo_exencion' padre_id='<?php echo $cli_cliente->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('VtaTributoExencions') ?>
        <?php 
        $cantidad_vta_tributo_exencions = count($cli_cliente->getVtaTributoExencions());
        echo ($cantidad_vta_tributo_exencions > 0) ? '('.$cantidad_vta_tributo_exencions.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='vta_tributo_exencion_txt_buscar' id='vta_tributo_exencion_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_VTA_TRIBUTO_EXENCION_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_tributo_exencion/vta_tributo_exencion_alta.php?cli_cliente_id=<?php Gral::_echo($cli_cliente->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'cli_cliente', 'vta_tributo_exencion', <?php Gral::_echo($cli_cliente->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('VtaTributoExencion') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

