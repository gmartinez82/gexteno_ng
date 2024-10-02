<?php
include "_autoload.php";

$cli_cliente_tienda_id = Gral::getVars(Gral::VARS_GET, 'identificador', 0, Gral::TIPO_INTEGER);

$cli_cliente_tienda = CliClienteTienda::getOxId($cli_cliente_tienda_id);

if($cli_cliente_tienda)
{
    $cli_cliente = CliCliente::getOxCuit($cli_cliente_tienda->getCuit());
    if($cli_cliente){
        $mensaje_error_general = Lang::_lang('Ya existe un cliente con el mismo CUIT', true).' - '.$cli_cliente->getDescripcion().' '.$cli_cliente->getCuit(); 
    }
}
?>

<form id='form_crear_cliente' name='form_crear_cliente' method='post' action='' >
    <div class="datos crear-cliente" >                
        <div class="label-error" id="error_general_error"><?php echo $mensaje_error_general; ?></div>
        
        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Crear Cliente'); ?>
            </div>
            <div class='dato'>
                
            </div>
        </div>
        
        
        <div class='par'>
            <div class="label"><?php Lang::_lang('Categoria') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_cli_categoria_id', Gral::getCmbFiltro(CliCategoria::getCliCategoriasCmb(true), '...'), $cmb_cli_categoria_id, 'textbox') ?>
                <div id='cmb_cli_categoria_id_error' class='label-error'></div>
            </div>
        </div>
        
        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_registrar' name='btn_registrar' type='button' gen-modal-file-post="ajax/modulos/cli_cliente_tienda_gestion/set_modal_crear_cliente.php?cli_cliente_tienda_id=<?php echo $cli_cliente_tienda_id; ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitCliClienteTiendaGestion(); refreshAdmUno('cli_cliente_tienda_gestion', <?php echo $cli_cliente_tienda_id; ?>);"><?php Lang::_lang('Crear Cliente') ?></button>
        </div>
    </div>
</form>
<script>
    setInit();
    setInitCliClienteTiendaGestion();
</script>