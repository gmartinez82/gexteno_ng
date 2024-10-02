
<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_DOMICILIO')){ ?>
<div class='vinculo cli_domicilio' padre='cli_cliente' hijo='cli_domicilio' padre_id='<?php echo $cli_cliente->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('CliDomicilios') ?>
        <?php 
        $cantidad_cli_domicilios = count($cli_cliente->getCliDomicilios());
        echo ($cantidad_cli_domicilios > 0) ? '('.$cantidad_cli_domicilios.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='cli_domicilio_txt_buscar' id='cli_domicilio_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_DOMICILIO_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_domicilio/cli_domicilio_alta.php?cli_cliente_id=<?php Gral::_echo($cli_cliente->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'cli_cliente', 'cli_domicilio', <?php Gral::_echo($cli_cliente->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('CliDomicilio') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

