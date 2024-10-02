
<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_CLIENTE_ESTADO_VENTA')){ ?>
<div class='vinculo cli_cliente_estado_venta' padre='cli_cliente' hijo='cli_cliente_estado_venta' padre_id='<?php echo $cli_cliente->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('CliClienteEstadoVentas') ?>
        <?php 
        $cantidad_cli_cliente_estado_ventas = count($cli_cliente->getCliClienteEstadoVentas());
        echo ($cantidad_cli_cliente_estado_ventas > 0) ? '('.$cantidad_cli_cliente_estado_ventas.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='cli_cliente_estado_venta_txt_buscar' id='cli_cliente_estado_venta_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_CLIENTE_ESTADO_VENTA_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_cliente_estado_venta/cli_cliente_estado_venta_alta.php?cli_cliente_id=<?php Gral::_echo($cli_cliente->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'cli_cliente', 'cli_cliente_estado_venta', <?php Gral::_echo($cli_cliente->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('CliClienteEstadoVenta') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

