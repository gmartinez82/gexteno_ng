<?php
include "_autoload.php";
$var_sesion_random = '_' . rand(1, 999999);

foreach ($_SESSION as $key => $value) {
    // se limpia la variable de info de cheque
    //if (strpos($key, 'pde_orden_pago_cheque_info') === 0)
    //    unset($_SESSION[$key]);
}

$tipo = Gral::getVars(Gral::VARS_GET, 'tipo', '');
?>

<div class="datos generar-orden_pago" tipo="<?php echo $tipo ?>" var_sesion_random='<?php echo $var_sesion_random; ?>'>

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

        <div class="" style="display: none;">
            <div class="col c2">
                <div class="label"><?php Lang::_lang('Cod Presupuesto (2 letras min)') ?></div>
                <input id="txt_buscador_codigo_presupuesto" name="txt_buscador_codigo_presupuesto" type="text" class="textbox" size="30" placeholder="<?php Lang::_lang('Ingrese codigo de presupuesto') ?>" title="<?php Lang::_lang('Ingrese codigo de presupuesto a buscar') ?>" />
                <img class="txt_buscador_codigo_presupuesto_boton" src="imgs/lupa.png" width="20">
            </div>

            <div class="col c3">
                <div class="label"><?php Lang::_lang('Persona Descripcion (2 letras min)') ?></div>
                <input id="txt_buscador_persona_descripcion" name="txt_buscador_persona_descripcion" type="text" class="textbox" size="30" placeholder="<?php Lang::_lang('Ingrese el nombre a buscar') ?>" title="<?php Lang::_lang('Ingrese el nombre a buscar') ?>" />
                <img class="txt_buscador_persona_descripcion_boton" src="imgs/lupa.png" width="20">
            </div>
        </div>

    </div>


    <div class="div_datos_generar_orden_pagos">
        <?php //include "bloque_pde_comprobante_listado_datos.php"  ?>
    </div>
</div>
