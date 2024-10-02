
<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_CENTRO_RECEPCION')){ ?>
<div class='vinculo cli_centro_recepcion' padre='cli_cliente' hijo='cli_centro_recepcion' padre_id='<?php echo $cli_cliente->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('CliCentroRecepcions') ?>
        <?php 
        $cantidad_cli_centro_recepcions = count($cli_cliente->getCliCentroRecepcions());
        echo ($cantidad_cli_centro_recepcions > 0) ? '('.$cantidad_cli_centro_recepcions.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='cli_centro_recepcion_txt_buscar' id='cli_centro_recepcion_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_CENTRO_RECEPCION_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_centro_recepcion/cli_centro_recepcion_alta.php?cli_cliente_id=<?php Gral::_echo($cli_cliente->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'cli_cliente', 'cli_centro_recepcion', <?php Gral::_echo($cli_cliente->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('CliCentroRecepcion') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

