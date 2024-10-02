<?php
include "_autoload.php";

$var_sesion_random = '_' . rand(1, 999999);

foreach ($_SESSION as $key => $value) {
    // se limpia la variable de info de cheque
    //if (strpos($key, 'vta_recibo_cheque_info') === 0)
    //    unset($_SESSION[$key]);

    // se limpia la variable de info de cheque
    //if (strpos($key, 'vta_recibo_retencion_info') === 0)
    //    unset($_SESSION[$key]);
}
?>

<div class='datos generar-recibo' var_sesion_random='<?php echo $var_sesion_random; ?>'>

    <div class="buscador">
        <div class="col c1">
            <div class="label">
                <?php Lang::_lang('Cliente'); ?>
            </div>
            <div class="dato">
                <?php echo Html::html_get_dbsuggest(1, 'dbsug_cli_cliente', 'ajax/modulos/cli_cliente/cli_cliente_dbsuggest_custom.php', false, true, true, 'Ingrese ...', null, '') ?>
                <div id="dbsug_cli_cliente_id_error" class="error label-error" ><?php Gral::_echo($dbsug_cli_cliente_id_error) ?></div>   
            </div>
        </div>

    </div>


    <div class="div_datos_generar_recibos">
        <?php //include "bloque_modal_vta_recibo_listado_datos.php" ?>
    </div>
</div>
