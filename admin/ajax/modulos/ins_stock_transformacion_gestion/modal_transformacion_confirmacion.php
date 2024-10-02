<?php
include "_autoload.php";

$cmb_pan_panol_id = Gral::getVars(1, 'cmb_pan_panol_id', null);
$cmb_ins_insumo_id = Gral::getVars(1, 'dbsug_ins_insumo_id', null);
$txt_cantidad = Gral::getVars(1, 'txt_cantidad', 0);

$cmb_afectar_costo = Gral::getVars(1, 'cmb_afectar_costo', 0);

$pan_panol = PanPanol::getOxId($cmb_pan_panol_id);
$ins_insumo = InsInsumo::getOxId($cmb_ins_insumo_id);
$ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
$ins_insumo_costo_actual = $ins_insumo->getInsInsumoCostoActual();

$ins_insumo_destino_transformacions = $ins_insumo->getInsInsumoDestinoTransformacions();


$arr_origen = array(
    array(
        'panol_id' => $cmb_pan_panol_id,
        'insumo_id' => $cmb_ins_insumo_id,
        'cantidad' => $txt_cantidad,
    )
);

foreach ($ins_insumo_destino_transformacions as $ins_insumo_destino_transformacion) {
    $array = array(
        'panol_id' => $cmb_pan_panol_id,
        'insumo_id' => $ins_insumo_destino_transformacion->getInsInsumoDestino(),
        'cantidad' => ($ins_insumo_destino_transformacion->getCantidad() * $txt_cantidad),
    );
    $arr_destino[] = $array;
}

if ($txt_cantidad == 0) {
    echo "Debe elegir una cantidad mayor a cero";
    exit;
}
?>

<div class="datos transformacion-confirmar" >

    <div class="bloque-insumos">

        <div class="insumo insumo-origen">
            <label class="cantidad"><?php Gral::_echo($txt_cantidad) ?> <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?></label>
            <label class="descripcion">de <?php Gral::_echo($ins_insumo->getDescripcion()) ?></label>
            <label class="panol">de <?php Gral::_echo($pan_panol->getDescripcion()) ?></label>
        </div>

        <div class="palabra-equivalencia">se transformara en</div>

        <?php
        foreach ($arr_destino as $arr) {
            $ins_insumo_destino = InsInsumo::getOxId($arr['insumo_id']);
            $ins_unidad_medida_destino = $ins_insumo_destino->getInsUnidadMedida();
            $ins_insumo_costo_actual_destino = $ins_insumo_destino->getInsInsumoCostoActual();

            $cantidad_destino = $arr['cantidad'];
            
            if($ins_insumo_costo_actual){
                $costo_nuevo_destino = $ins_insumo_costo_actual->getCosto() / $cantidad_destino;
            }
            ?>
            <div class="insumo insumo-destino">
                <label class="cantidad"><?php Gral::_echo($cantidad_destino) ?> <?php Gral::_echo($ins_unidad_medida_destino->getDescripcion()) ?></label>
                <label class="descripcion">de <?php Gral::_echo($ins_insumo_destino->getDescripcion()) ?></label>
            </div>
        <?php } ?>
    </div>

    <?php if ($cmb_afectar_costo == 1 && $ins_insumo_costo_actual) { ?>
        <div class="alerta-afecta-costo">
            <?php if ($ins_insumo_costo_actual_destino) { ?>
            Afectara el costo del insumo destino que pasara de costar <strong><?php Gral::_echoImp($ins_insumo_costo_actual_destino->getCosto()) ?></strong> a costar <strong><?php Gral::_echoImp($costo_nuevo_destino) ?></strong>.
            <?php } else { ?>
                Se inicializara costo del insumo destino en <strong><?php Gral::_echoImp($costo_nuevo_destino) ?></strong>
            <?php } ?>
        </div>
    <?php } ?>


    <div class="botonera">
        <input name='btn_registrar_transformacion_confirmacion' class="btn_registrar_transformacion_confirmacion boton" type='button' id='btn_registrar_transformacion_confirmacion' value='<?php Lang::_lang('Confirmar Transformacion de Insumos') ?>' />
    </div>	  

</div>