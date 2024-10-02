
<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_CLIENTE_ESTADO')){ ?>
<div class='vinculo cli_cliente_estado' padre='cli_cliente' hijo='cli_cliente_estado' padre_id='<?php echo $cli_cliente->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('CliClienteEstados') ?>
        <?php 
        $cantidad_cli_cliente_estados = count($cli_cliente->getCliClienteEstados());
        echo ($cantidad_cli_cliente_estados > 0) ? '('.$cantidad_cli_cliente_estados.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='cli_cliente_estado_txt_buscar' id='cli_cliente_estado_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_CLIENTE_ESTADO_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_cliente_estado/cli_cliente_estado_alta.php?cli_cliente_id=<?php Gral::_echo($cli_cliente->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'cli_cliente', 'cli_cliente_estado', <?php Gral::_echo($cli_cliente->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('CliClienteEstado') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

