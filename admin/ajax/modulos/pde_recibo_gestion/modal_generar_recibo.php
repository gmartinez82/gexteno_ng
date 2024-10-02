<?php
include '_autoload.php';

$var_sesion_random = '_' . rand(1, 999999);

foreach ($_SESSION as $key => $value) {
    // se limpia la variable de info de cheque
    //if (strpos($key, 'pde_recibo_cheque_info') === 0)
    //    unset($_SESSION[$key]);
}

//unset($_SESSION['pde_recibo_cheque_info']);
?>

<div class='datos generar-recibo' var_sesion_random='<?php echo $var_sesion_random; ?>'>

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


    <div class="div_datos_generar_recibos">
        <?php //include "bloque_modal_pde_recibo_listado_datos.php"  ?>
    </div>
</div>
