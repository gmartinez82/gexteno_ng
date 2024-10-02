<?php
include "_autoload.php";
?>

<div class="datos generar-nota-debito">

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


    <div class="div_datos_generar_nota_debitos">
        <?php //include "bloque_modal_vta_nota_debito_listado_datos.php" ?>
    </div>
</div>
