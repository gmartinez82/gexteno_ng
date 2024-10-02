<?php
include "_autoload.php";

$prv_proveedor_id = Gral::getSes('prv_proveedor_id');

$actualiza_descripcions = Gral::getVars(1, 'check_seleccion', 0);
$actualiza_nuevos = Gral::getVars(1, 'check_nuevo', 0);
$ins_marca_ids = Gral::getVars(1, 'cmb_ins_marca_id', 0);
$ins_pieza_ids = Gral::getVars(1, 'cmb_pieza_id', 0);
$actualizar_costos = Gral::getVars(1, 'check_actualizar_costo', 0);


$prv_importacion_id = Gral::getSes('prv_importacion_id');
$prv_importacion = PrvImportacion::getOxId($prv_importacion_id);
if ($prv_importacion) {
    $prv_importacion->setPrvImportacionEstado(PrvImportacionTipoEstado::TIPO_EN_TAB_4);
}

include 'prv_importacion_logica_tab_4.php';

?>
<?php include "prv_importacion_info_top.php" ?>

<table class="display" id="tabla_tabs_4">
    <thead>
        <tr>
            <th class="t3_th_nro_fila">#</th>
            <th class="t3_th_nuevo">Nvo</th>
            <th class="t3_th_id">ID</th>
            <th class="t3_th_cod_proveedor">Cod PRV</th>
            <th class="t3_th_insumo">Insumo</th>
            <th class="t3_th_cod_marca">Marca</th>
            <th class="t3_th_cod_pieza">OEM</th>
            <th class="t3_th_nuevo_importe">Imp S/D</th>
            <th class="t3_th_nuevo_descuento">% Desc</th>
            <th class="t3_th_nuevo_importe_neto">Imp Neto</th>
            <th class="t3_th_ultimo_importe">Ult Imp</th>
            <th class="t3_th_ultimo_fecha">Fech Imp</th>
            <th class="t3_th_nuevo_incremento">% Increm</th>
            <th class="t3_th_insumo_importe">Costo Actual</th>
            <th class="t3_th_insumo_incremento">% Increm</th>
            <th class="t3_th_insumo_accion">Act</th>
            <th class="t3_th_cancelar">-</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $ins_marcas = InsMarca::getInsMarcas();

        foreach ($arr_rows as $row => $arr_row) {
        ?>
            <tr id="tr_prv_insumo_<?php echo $row ?>" class="uno" identificador="<?php echo $row ?>">
                <?php include "prv_insumo_uno_list.php"; ?>
            </tr>
        <?php } ?>

    </tbody>
</table>

<div class="botonera botonera-siguiente">
    <a class="boton" id="siguiente_tabs_5" href="#">Confirmar Importación de Datos</a>
</div>