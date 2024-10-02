<?php
include "_autoload.php";

$panol_id = Gral::getVars(2, 'panol_id', 0);
$insumo_id = Gral::getVars(2, 'insumo_id', 0);

$pan_panol = PanPanol::getOxId($panol_id);
$ins_insumo = InsInsumo::getOxId($insumo_id);

if ($pan_panol && $ins_insumo) {
    if (!$ins_insumo->getIdentificable()) {
        
        $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);
        $ins_insumo_costo_actual = $ins_insumo->getInsInsumoCostoActual();
        
        if($ins_insumo_costo_actual){
            $costo_actual = $ins_insumo_costo_actual->getCosto();
            $costo_nuevo_destino = $ins_insumo_costo_actual->getCosto() / $cantidad_destino;
        }
        
        if ($ins_stock_resumen) {
            $txt_cantidad = $ins_stock_resumen->getCantidad();
            ?>

            <h3><?php Lang::_lang('Stock en') ?> "<?php Gral::_echo($pan_panol->getDescripcion()) ?>"</h3>

            <div class="par">
                <div class="label"><?php Lang::_lang('Insumo') ?></div>
                <div class="dato">
                    <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Codigo Interno') ?></div>
                <div class="dato">
                    <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
                </div>
            </div>
            
            <div class="par">
                <div class="label"><?php Lang::_lang('Stock Actual') ?></div>
                <div class="dato cantidad">
                    <?php Gral::_echo($txt_cantidad) ?>
                    <?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcion()) ?>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Costo Actual') ?></div>
                <div class="dato">
                    <?php Gral::_echoImp($costo_actual) ?>
                </div>
            </div>
            
            <div class="par">
                <div class="label"><?php Lang::_lang('Cantidad') ?></div>
                <div class="dato">
                    <input name='txt_cantidad' type='text' class='textbox spinner' id='txt_cantidad' value='0' size='5' min="0" max="<?php Gral::_echo($txt_cantidad) ?>" />

                    <?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcion()) ?>

                    <div class="error label-error" id="txt_cantidad_error"></div>
                </div>
            </div>
        <?php } else { ?>
            <div class="comentario">Stock no Inicializado para el Insumo en el "<?php Gral::_echo($pan_panol->getDescripcion()) ?>"</div>
        <?php } ?>

    <?php } else { ?>
        <div class="comentario">Los insumos IDENTIFICABLES no pueden ser transformados</div>
    <?php } ?>

<?php } else { ?>
    <div class="comentario">Debe elegir un Insumo y un Panol</div>
<?php } ?>
