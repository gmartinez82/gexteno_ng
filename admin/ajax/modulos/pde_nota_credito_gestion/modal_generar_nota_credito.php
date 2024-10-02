<?php
include "_autoload.php";
?>

<div class="datos generar-nota-credito">

    <div class="buscador">
        <div class="col c1">
            <div class="label">
                <?php Lang::_lang('Proveedor'); ?>
            </div>
            <div class="dato">
                <?php echo Html::html_get_dbsuggest(1, 'dbsug_prv_proveedor', 'ajax/modulos/prv_proveedor/prv_proveedor_dbsuggest_custom.php', false, true, true, 'Ingrese ...', null, '') ?>
                <div id="dbsug_prv_proveedor_id_error" class="error label-error" ><?php Gral::_echo($dbsug_prv_proveedor_id_error) ?></div>   
            </div>
        </div>

    </div>


    <div class="div_datos_generar_nota_creditos">
        <?php //include "bloque_modal_pde_nota_credito_listado_datos.php" ?>
    </div>
</div>
