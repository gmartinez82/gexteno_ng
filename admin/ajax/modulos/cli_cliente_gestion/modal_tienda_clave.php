<?php
include "_autoload.php";

$cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_id', 0);
$cli_centro_pedido_id = Gral::getVars(Gral::VARS_GET, 'cli_centro_pedido_id', 0);

$cli_cliente = CliCliente::getOxId($cli_cliente_id);
$cli_centro_pedido = CliCentroPedido::getOxId($cli_centro_pedido_id);
//Gral::prr($cli_cliente);
//Gral::prr($cli_centro_pedido);

$cli_cliente_tienda = $cli_centro_pedido->getCliClienteTienda();
//Gral::prr($cli_cliente_tienda);

// -----------------------------------------------------------------------------
// se determina el email para crear el cli cliente tienda
// si el centro de pedido tiene email, se toma ese
// sino se propone el email del cliente
// -----------------------------------------------------------------------------
if($cli_centro_pedido){
    $txt_email = $cli_centro_pedido->getEmail();
    if(!Ctrl::esEmail($txt_email)){
        $txt_email = $cli_cliente->getEmail();        
    }
}
?>
<div class="datos generar-clave-tienda" cli_cliente_id="<?php Gral::_echo($cli_cliente->getId()) ?>">
    <form id='form_generar_clave_tienda' name='form_generar_clave_tienda' method='post' action='' >

        <div class="label-error" id="error_general_error"></div>

        <?php if ($cli_cliente_tienda) { ?>
            <div class="cli-cliente-tienda-info">

                <div class="par">
                    <div class="label"><?php Lang::_lang('Cliente Tienda') ?></div>
                    <div class="dato"><?php Gral::_echo($cli_cliente_tienda->getDescripcion()) ?></div>
                </div>

            </div>
        <?php } ?>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cliente') ?></div>
            <div class="dato"><?php Gral::_echo($cli_cliente->getDescripcion()) ?></div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Centro de Pedido') ?></div>
            <div class="dato"><?php Gral::_echo($cli_centro_pedido->getDescripcion()) ?> - <?php Gral::_echo($cli_centro_pedido->getEmail()) ?></div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato"><?php Gral::_echo($cli_cliente->getCuit()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Razon Social') ?></div>
            <div class="dato"><?php Gral::_echo($cli_cliente->getRazonSocial()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato"><?php Gral::_echo($cli_cliente->getTelefono()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Categoria') ?></div>
            <div class="dato">
               <?php Html::html_dib_select(1, 'cmb_cli_categoria_id', Gral::getCmbFiltro(CliCategoria::getCliCategoriasCmb(), '...'), $cli_cliente->getCliCategoriaId(), 'textbox '.$error_input_css)?>
                <div class="label-error" id="cmb_cli_categoria_id_error"><?php Gral::_echo($cmb_cli_categoria_id_error) ?></div>  
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Whatsapp') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getTelefonoWhatsapp()) ?><br />
                <input name='txt_telefono_whatsapp' type='text' class='textbox' id='txt_telefono_whatsapp' value='<?php Gral::_echoTxt($cli_cliente->getTelefonoWhatsapp()) ?>' size='30' />
                <div class="label-error" id="txt_telefono_whatsapp_error"><?php Gral::_echo($txt_telefono_whatsapp_error) ?></div>  
                <div class="comentario">Ingresar numeros sin espacios ni caracteres especiales, por ej 5491145467879</div>  
            </div>
        </div>

        <?php if($cli_cliente_tienda){ ?>
            <div class="par">
                <div class="label"><?php Lang::_lang('Email de la Tienda') ?></div>
                <div class="dato">
                    <?php Gral::_echo($cli_cliente_tienda->getEmail()) ?><br />
                    <input name='txt_email' type='text' class='textbox' id='txt_email' value='<?php Gral::_echoTxt($cli_cliente_tienda->getEmail()) ?>' size='40' />
                    <div class="label-error" id="txt_email_error"><?php Gral::_echo($txt_email_error) ?></div>  
                    <div class="comentario">Confirmar email de acceso a la tienda, la cuenta de la tienda utilizara este email.</div>  
                </div>
            </div>
        <?php }else{ ?>
            <div class="par">
                <div class="label"><?php Lang::_lang('Email') ?></div>
                <div class="dato">
                    <?php Gral::_echo($txt_email) ?><br />
                    <input name='txt_email' type='text' class='textbox' id='txt_email' value='<?php Gral::_echoTxt($txt_email) ?>' size='40' />
                    <div class="label-error" id="txt_email_error"><?php Gral::_echo($txt_email_error) ?></div>  
                    <div class="comentario">Ingresar o confirmar el email del cliente, la cuenta de la tienda se creara con este email.</div>  
                </div>
            </div>
        <?php } ?>

        <div class="par">
            <div class="label"><?php Lang::_lang('Clave de Acceso') ?></div>
            <div class="dato">
                <input name='txt_password' type='text' class='textbox' id='txt_password' value='' size='20' />
                <div class="label-error" id="txt_password_error"><?php Gral::_echo($txt_password_error) ?></div>  
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Enviar Email') ?></div>
            <div class="dato">
               <?php Html::html_dib_select(1, 'cmb_enviar_email', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), $cmb_enviar_email, 'textbox '.$error_input_css)?>
                <div class="label-error" id="cmb_enviar_email_error"><?php Gral::_echo($cmb_enviar_email_error) ?></div>  
            </div>
        </div>
        
        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_registrar' name='btn_registrar' type='button' gen-modal-file-post="ajax/modulos/cli_cliente_gestion/set_tienda_clave.php?cli_cliente_id=<?php echo $cli_cliente->getId() ?>&cli_centro_pedido_id=<?php echo $cli_centro_pedido->getId() ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitCliClienteGestion(); refreshAdmUno('cli_cliente_gestion', <?php echo $cli_cliente->getId() ?>);">
                <?php if ($cli_cliente_tienda) { ?>
                    <?php Lang::_lang('Regenerar Clave para Tienda') ?>
                <?php } else { ?>
                    <?php Lang::_lang('Generar Usuario y Clave para Tienda') ?>
                <?php } ?>
            </button>
        </div>

    </form>
</div>
<script>
    setInitCliClienteGestion();
    setInit();
</script>
