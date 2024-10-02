<?php
include "_autoload.php";

$asiento_id = Gral::getVars(Gral::VARS_GET, 'asiento_id', 0);

$importe_debe_total_calculado = 0;
$importe_haber_total_calculado = 0;

$cntb_diario_asiento = new CntbDiarioAsiento();
$cntb_diario_asiento->setFecha(date('Y-m-d'));
if ($asiento_id != 0) {
    $cntb_diario_asiento = CntbDiarioAsiento::getOxId($asiento_id);
    $cntb_diario_asiento_cuentas = $cntb_diario_asiento->getCntbDiarioAsientoCuentas();
    
    $importe_debe_total_calculado = $cntb_diario_asiento->getImporteDebeTotal();
    $importe_haber_total_calculado = $cntb_diario_asiento->getImporteHaberTotal();
}
?>
<form id="cntb_diario_asiento_agregar" name="cntb_diario_asiento_agregar" cntb_diario_asiento_id="<?php echo $cntb_diario_asiento->getId() ?>">
    <div class="datos cntb_diario_asiento_agregar">

        <div class="info-asiento">
            <div class="par">
                <div class="label">Ejercicio</div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_cntb_ejercicio_id', Gral::getCmbFiltro(CntbEjercicio::getCntbEjerciciosCmb(), '...'), $cntb_diario_asiento->getCntbEjercicioId(), 'textbox ' . $error_input_css) ?>
                    <div class="label-error" id="cmb_cntb_ejercicio_id_error"></div>
                </div>
            </div>
            <div class="par">
                <div class="label">Tipo de Asiento</div>
                <div class="dato">                    
                    <?php Html::html_dib_select(1, 'cmb_cntb_tipo_asiento_id', Gral::getCmbFiltro(CntbTipoAsiento::getCntbTipoAsientosCmb(), '...'), $cntb_diario_asiento->getCntbTipoAsientoId(), 'textbox ' . $error_input_css) ?>
                    <div class="label-error" id="cmb_cntb_tipo_asiento_id_error"></div>
                </div>
            </div>
            <div class="par">
                <div class="label">Actividad</div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), $cntb_diario_asiento->getGralActividadId(), 'textbox ' . $error_input_css) ?>
                    <div class="label-error" id="cmb_gral_actividad_id_error"></div>
                </div>
            </div>
            <div class="par">
                <div class="label">Tipo de Movimiento</div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_cntb_tipo_movimiento_id', Gral::getCmbFiltro(CntbTipoMovimiento::getCntbTipoMovimientosCmb(), '...'), $cntb_diario_asiento->getCntbTipoMovimientoId(), 'textbox ' . $error_input_css) ?>
                    <div class="label-error" id="cmb_cntb_tipo_movimiento_id_error"></div>
                </div>
            </div>
            <div class="par">
                <div class="label">Fecha</div>
                <div class="dato">
                    <input name='txt_fecha' type='text' class='textbox date <?php echo $error_input_css ?> ' id='txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWEB($cntb_diario_asiento->getFecha()), true) ?>' size='10' />
                    <div class="label-error" id="txt_fecha_error"></div>
                </div>
            </div>            
            <div class="par">
                <div class="label">Descripcion</div>
                <div class="dato">
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($cntb_diario_asiento->getDescripcion(), true) ?>' size='40' />
                    <div class="label-error" id="txt_descripcion_error"></div>
                </div>
            </div>
            <div class="par">
                <div class="label">Observacion</div>
                <div class="dato">
                    <input name='txt_observacion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_observacion' value='<?php Gral::_echoTxt($cntb_diario_asiento->getObservacion(), true) ?>' size='105' />
                    <div class="label-error" id="txt_observacion_error"></div>
                </div>
            </div>
        </div>

        <div class="info-asiento-cuentas">
            <div class="label-error" id="info_asiento_cuentas_error"></div>
            
            <table border='0' align='center' class='listado_cntb_diario_asiento_gestion_cuentas' id='listado_cntb_diario_asiento_gestion_cuentas' cantidad_filas="<?php echo (count($cntb_diario_asiento_cuentas) > 0) ? count($cntb_diario_asiento_cuentas) : 0 ?>">
                <thead>
                    <tr>

                        <th width='30' align='center' class='adm_tbl_encabezado'>
                            #
                        </th>

                        <th width='450' align='center' class='adm_tbl_encabezado'>
                            <?php Lang::_lang('Cuenta') ?>
                        </th>

                        <th width='100' align='center' class='adm_tbl_encabezado'>
                            <?php Lang::_lang('Nro Compr') ?>
                        </th>

                        <th width='150' align='center' class='adm_tbl_encabezado'>
                            <?php Lang::_lang('Debe') ?>
                        </th>

                        <th width='150' align='center' class='adm_tbl_encabezado'>
                            <?php Lang::_lang('Haber') ?>
                        </th>

                        <th width='50' align='center' class='adm_tbl_encabezado'>
                            <div class="accion agregar-cuenta">
                                <img src="imgs/btn_add.gif" width="25" title="<?php Lang::_lang('Agregar Cuenta') ?>">
                            </div>

                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($cntb_diario_asiento_cuentas as $cntb_diario_asiento_cuenta) {
                        ++$row;
                        $cntb_cuenta = $cntb_diario_asiento_cuenta->getCntbCuenta();

                        include "cntb_diario_asiento_gestion_cuenta_uno.php";
                    }
                    ?>
                </tbody>
                <tfoot>
                    <?php include "cntb_diario_asiento_gestion_cuenta_total.php"; ?>
                </tfoot>

            </table>

            <div class="botonera">
                <div class="label-error" id="botonera_error"></div>
                <button type="button" id="btn_registrar_asiento" name="btn_registrar_asiento" class="boton"><?php Lang::_lang('Registrar Asiento') ?></button>
            </div>

        </div>
</form>