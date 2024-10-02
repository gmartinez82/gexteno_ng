<?php
include "_autoload.php";

$panol_id = Gral::getVars(2, 'panol_id', 0);
$insumo_id = Gral::getVars(2, 'insumo_id', 0);

$pan_panol = PanPanol::getOxId($panol_id);
$ins_insumo = InsInsumo::getOxId($insumo_id);

if ($pan_panol && $ins_insumo) {
    $ins_insumo_costo_actual = $ins_insumo->getInsInsumoCostoActual();
    $ins_insumo_destino_transformacions = $ins_insumo->getInsInsumoDestinoTransformacions();
    ?>

    <?php
    if (count($ins_insumo_destino_transformacions) > 0) {
        foreach ($ins_insumo_destino_transformacions as $ins_insumo_destino_transformacion) {

            $ins_insumo_destino = $ins_insumo_destino_transformacion->getInsInsumoDestinoObj();
            $ins_categoria_destino = $ins_insumo_destino->getInsCategoria();
            $ins_insumo_costo_actual_destino = $ins_insumo_destino->getInsInsumoCostoActual();

            if ($ins_insumo_costo_actual_destino) {
                $costo_actual_destino = $ins_insumo_costo_actual_destino->getCosto();
            }
            if ($ins_insumo_costo_actual) {
                $costo_nuevo_destino = $ins_insumo_costo_actual->getCosto() / $ins_insumo_destino_transformacion->getCantidad();
            }
            ?>

            <div class="par">
                <div class="label"><?php Lang::_lang('Categoria') ?></div>
                <div class="dato">
                    <?php Gral::_echo($ins_categoria_destino->getArbolFamiliaDescripcion()) ?>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Insumo') ?></div>
                <div class="dato">
                    <?php Gral::_echo($ins_insumo_destino->getDescripcion()) ?>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Cantidad') ?></div>
                <div class="dato cantidad">
                    <?php Gral::_echo($ins_insumo_destino_transformacion->getCantidad()) ?>
                    <?php Gral::_echo($ins_insumo_destino->getInsUnidadMedida()->getDescripcion()) ?>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Costo Actual') ?></div>
                <div class="dato">
                    <?php Gral::_echoImp($costo_actual_destino) ?>
                </div>
            </div>

            <?php if ($ins_insumo_costo_actual) { ?>
                <?php if ($costo_actual_destino != $costo_nuevo_destino) { ?>
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Costo Nuevo') ?></div>
                        <div class="dato">
                            <?php Gral::_echoImp($costo_nuevo_destino) ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Afectar Costo') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_afectar_costo', GralSiNo::getGralSiNosCmb(), $cmb_afectar_costo, 'textbox') ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

        <?php } ?>
        <div class="botonera">
            <input name='btn_registrar_transformacion' class="btn_registrar_transformacion boton" type='button' id='btn_registrar_transformacion' value='<?php Lang::_lang('Registrar Transformacion') ?>' />
        </div>	  

    <?php } ?>

<?php } else { ?>
    <div class="comentario">Debe elegir un Insumo y un Panol</div>
<?php } ?>

