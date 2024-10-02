<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = "rep_vta_recibo_item";
$db_nombre_pagina = "rep_vta_recibo_item";

if (Gral::esPost()) {
    $cmb_filtro_gral_fp_forma_pago_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_fp_forma_pago_id', 0);
    $cmb_filtro_gral_fp_forma_pago_requiere_conciliacion = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_fp_forma_pago_requiere_conciliacion', -1);
    $cmb_filtro_vta_recibo_concepto_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_recibo_concepto_id', 0);
    $cmb_filtro_vta_recibo_item_conciliado = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_recibo_item_conciliado', -1);
    $cmb_filtro_gral_caja_id = Gral::getVars(1, 'cmb_filtro_gral_caja_id', 0);
    $cmb_filtro_fnd_caja_id = Gral::getVars(1, 'cmb_filtro_fnd_caja_id', 0);
    $cmb_filtro_fnd_cajero_id = Gral::getVars(1, 'cmb_filtro_fnd_cajero_id', 0);

    $txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
    $txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");

    include "rep_vta_recibo_item_xlsx.php";
} else {
    $txt_filtro_desde = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), -7));
    $txt_filtro_hasta = date('d/m/Y');
}
?>

<?php include 'parciales/head.php' ?>

<body>
    <?php include 'parciales/encabezado.php'; ?>
    <?php include 'parciales/user.php'; ?>
    <?php include 'parciales/mensajes.php'; ?>
    <div id='menu'>
        <?php include 'parciales/menuh.php'; ?>
    </div>
    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('Vta Recibo Item') ?> </div>
        <div class='contenedor central reportes'>

            <br />
            <br />

            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">

                    <div class="titulo"><?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('Lista de VtaReciboItem') ?></div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('GralFormaPago'); ?></div>
                        <div class="dato">
                            <?php //Html::html_dib_select(1, 'cmb_filtro_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmbRequiereConciliacion(true), '...'), $cmb_filtro_gral_fp_forma_pago_id, 'textbox');  ?>
                            <?php Html::html_dib_select(1, 'cmb_filtro_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(true), '...'), $cmb_filtro_gral_fp_forma_pago_id, 'textbox'); ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('VtaReciboConcepto'); ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_vta_recibo_concepto_id', Gral::getCmbFiltro(VtaReciboConcepto::getVtaReciboConceptosCmb(true), '...'), $cmb_filtro_vta_recibo_concepto_id, 'textbox'); ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Requiere Conciliacion'); ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_gral_fp_forma_pago_requiere_conciliacion', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_filtro_gral_fp_forma_pago_requiere_conciliacion, 'textbox'); ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Conciliado'); ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_vta_recibo_item_conciliado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_filtro_gral_fp_forma_pago_id, 'textbox'); ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Caja') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_gral_caja_id', Gral::getCmbFiltro(GralCaja::getGralCajasCmb(true), '...'), $cmb_filtro_gral_caja_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Caja Diaria') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_fnd_caja_id', Gral::getCmbFiltro(FndCaja::getFndCajasCmb(true), '...'), $cmb_filtro_fnd_caja_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Cajero') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_fnd_cajero_id', Gral::getCmbFiltro(FndCajero::getFndCajerosCmb(true), '...'), $cmb_filtro_fnd_cajero_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Desde') ?></div>
                        <div class="dato">
                            <input id="txt_filtro_desde" name="txt_filtro_desde" value="<?php echo $txt_filtro_desde; ?>" size="10" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
                            <input type="button" id="cal_txt_filtro_desde" value=" ... ">
                            <script type='text/javascript'>
                                Calendar.setup({
                                    inputField: 'txt_filtro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_desde', onUpdate: function () {
                                    }
                                });
                            </script>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Hasta') ?></div>
                        <div class="dato">
                            <input id="txt_filtro_hasta" name="txt_filtro_hasta" value="<?php echo $txt_filtro_hasta; ?>" size="10" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
                            <input type="button" id="cal_txt_filtro_hasta" value=" ... ">
                            <script type='text/javascript'>
                                Calendar.setup({
                                    inputField: 'txt_filtro_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_hasta', onUpdate: function () {
                                    }
                                });
                            </script>
                        </div>
                    </div>

                    <div class="botonera">
                        <input id="btn_enviar" name="btn_enviar" class="boton" type="submit" value="<?php Lang::_lang('Ver Reporte') ?>" />
                    </div>
                </div>
            </form>
            <br />
        </div>
    </div>
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    <div class="div_modal"></div>
</body>
</html>