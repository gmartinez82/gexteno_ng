
<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_EMAIL')){ ?>
<div class='vinculo prv_email' padre='prv_proveedor' hijo='prv_email' padre_id='<?php echo $prv_proveedor->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('PrvEmails') ?>
        <?php 
        $cantidad_prv_emails = count($prv_proveedor->getPrvEmails());
        echo ($cantidad_prv_emails > 0) ? '('.$cantidad_prv_emails.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='prv_email_txt_buscar' id='prv_email_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_EMAIL_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/prv_email/prv_email_alta.php?prv_proveedor_id=<?php Gral::_echo($prv_proveedor->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'prv_proveedor', 'prv_email', <?php Gral::_echo($prv_proveedor->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PrvEmail') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

