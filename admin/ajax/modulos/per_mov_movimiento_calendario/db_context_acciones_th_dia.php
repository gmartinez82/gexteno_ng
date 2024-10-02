<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$fecha = Gral::getVars(2, 'fecha', '');
$desde = $fecha;
$hasta = $fecha;

$arr_datos_filtrado = array();

$array = PerMovMovimiento::getGrillaCantidadHorasParaCalendario($desde, $hasta);
//Gral::prr($array);
//$arr_datos = $array[$co_sector_id][$per_id][$fecha];
foreach ($array as $arr_datos_sector) {
    foreach ($arr_datos_sector as $arr_datos_persona) {
        $cantidad_horas = $arr_datos_persona[$fecha]['cantidad_horas'];
        $arr_datos_filtrado[$cantidad_horas] = $cantidad_horas;
    }
}
//Gral::prr($arr_datos_filtrado);

// se recupera de session el array de filtros por th dia
$arr_filtro_th_dia = Gral::getSes('CRONOX_PER_MOV_MOVIMIENTO_CALENDARIO_FILTRO_TH_DIA');
?>
<div class="datos" 
     fecha="<?php Gral::_echo($fecha) ?>" 
     >

    <div class="titulo">
        <?php Lang::_lang('Movimientos vinculados a la fecha') ?>: 
        <strong><?php Gral::_echo(Gral::getFechaToWEB($fecha)) ?></strong>
        <br />
    </div>    

    <?php if (count($arr_datos_filtrado) > 0) { ?>
        <div class="carpetas">

            <?php
            foreach ($arr_datos_filtrado as $arr_dato_filtrado) {
                
                $cantidad_horas = $arr_dato_filtrado;
                
                $checked_estado = (in_array($cantidad_horas, $arr_filtro_th_dia[$fecha])) ? 1 : 0;
                $checked = ($checked_estado) ? 'checked="checked"' : '';
                $checked_css = ($checked_estado) ? 'sel' : '';
                ?>
                <div class="uno <?php echo $checked_css ?>">
                    <input type="checkbox" 
                           class="textbox chk_th_filtro_cantidad_horas" 
                           id="chk_th_filtro_cantidad_horas_<?php echo $cantidad_horas ?>" 
                           name="chk_th_filtro_cantidad_horas[<?php echo $cantidad_horas ?>]" 
                           value="<?php echo $cantidad_horas ?>" 
                           <?php echo $checked ?> 
                           >
                    <label class="descripcion" for="chk_th_filtro_cantidad_horas_<?php echo $cantidad_horas ?>"><?php Gral::_echo($cantidad_horas) ?></label>
                </div>
            <?php } ?>

            <!-- Fila Vacio -->
            <?php
            $checked_estado = (in_array(0, $arr_filtro_th_dia[$fecha])) ? 1 : 0;
            $checked = ($checked_estado) ? 'checked="checked"' : '';
            $checked_css = ($checked_estado) ? 'sel' : '';
            ?>
            <div class="uno <?php echo $checked_css ?>">
                <input type="checkbox" 
                       class="textbox chk_th_filtro_carpeta_id" 
                       id="chk_th_filtro_carpeta_id_0" 
                       name="chk_th_filtro_carpeta_id[0]" 
                       value="0" 
                       <?php echo $checked ?> 
                       >
                <label class="descripcion" for="chk_th_filtro_carpeta_id_0">(Vacío)</label>
            </div>

        </div>

        <div class="botonera">
            <button class="boton" type="button" id="btn_th_dia_filtrar" name="btn_th_dia_filtrar">Aplicar Filtros</button>

            <?php if (is_array($arr_filtro_th_dia[$fecha]) && count($arr_filtro_th_dia[$fecha]) > 0) { ?>
                <button class="boton" type="button" id="btn_th_dia_filtrar_limpiar" name="btn_th_dia_filtrar_limpiar">Eliminar Filtros</button>
            <?php } ?>

        </div>
    <?php } ?>

    <br />
</div>