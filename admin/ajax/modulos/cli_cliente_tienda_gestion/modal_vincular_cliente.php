<?php
include "_autoload.php";

$cli_cliente_tienda_id = Gral::getVars(Gral::VARS_GET, 'identificador', 0, Gral::TIPO_INTEGER);

$cli_cliente_tienda = CliClienteTienda::getOxId($cli_cliente_tienda_id);
?>

<form id='form_vincular_cliente' name='form_vincular_cliente' method='post' action='' >
    <div class="datos vincular-cliente" >                
        <div class="label-error" id="error_general_error"><?php echo $mensaje_error_general; ?></div>
        
        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Vincular Cliente'); ?>
            </div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(true), '...'), $cmb_cli_cliente_id, 'textbox selective-input-filtro') ?>
                <div id='cmb_cli_cliente_id_error' class='label-error'></div>
            </div>
        </div>
        
        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_vincular' name='btn_vincular' type='button' gen-modal-file-post="ajax/modulos/cli_cliente_tienda_gestion/set_modal_vincular_cliente.php?cli_cliente_tienda_id=<?php echo $cli_cliente_tienda_id; ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitCliClienteTiendaGestion(); refreshAdmUno('cli_cliente_tienda_gestion', <?php echo $cli_cliente_tienda_id; ?>);"><?php Lang::_lang('Vincular Cliente') ?></button>
        </div>
    </div>
</form>
<script>
    setInit();
    setInitCliClienteTiendaGestion();
</script>