
<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_ALTA_VINCULO_PDE_CENTRO_PEDIDO_EMAIL')){ ?>
<div class='vinculo pde_centro_pedido_email' padre='pde_centro_pedido' hijo='pde_centro_pedido_email' padre_id='<?php echo $pde_centro_pedido->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('PdeCentroPedidoEmails') ?>
        <?php 
        $cantidad_pde_centro_pedido_emails = count($pde_centro_pedido->getPdeCentroPedidoEmails());
        echo ($cantidad_pde_centro_pedido_emails > 0) ? '('.$cantidad_pde_centro_pedido_emails.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='pde_centro_pedido_email_txt_buscar' id='pde_centro_pedido_email_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_ALTA_VINCULO_PDE_CENTRO_PEDIDO_EMAIL_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_centro_pedido_email/pde_centro_pedido_email_alta.php?pde_centro_pedido_id=<?php Gral::_echo($pde_centro_pedido->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'pde_centro_pedido', 'pde_centro_pedido_email', <?php Gral::_echo($pde_centro_pedido->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PdeCentroPedidoEmail') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

