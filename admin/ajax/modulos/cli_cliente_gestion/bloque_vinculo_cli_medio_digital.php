
<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_MEDIO_DIGITAL')){ ?>
<div class='vinculo cli_medio_digital' padre='cli_cliente' hijo='cli_medio_digital' padre_id='<?php echo $cli_cliente->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('CliMedioDigitals') ?>
        <?php 
        $cantidad_cli_medio_digitals = count($cli_cliente->getCliMedioDigitals());
        echo ($cantidad_cli_medio_digitals > 0) ? '('.$cantidad_cli_medio_digitals.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='cli_medio_digital_txt_buscar' id='cli_medio_digital_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_MEDIO_DIGITAL_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_medio_digital/cli_medio_digital_alta.php?cli_cliente_id=<?php Gral::_echo($cli_cliente->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'cli_cliente', 'cli_medio_digital', <?php Gral::_echo($cli_cliente->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('CliMedioDigital') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

