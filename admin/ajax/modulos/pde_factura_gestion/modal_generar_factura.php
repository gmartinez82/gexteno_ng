<?php
include "_autoload.php";

$tipo = Gral::getVars(Gral::VARS_GET, 'tipo', '');
?>

<div class="datos generar-factura" tipo="<?php echo $tipo ?>" >
    <div class="label-error" id="error_general"></div>
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


    <div class="div_datos_generar_facturas">
        <?php //include "bloque_pde_oc_listado_datos.php" ?>
    </div>
</div>
