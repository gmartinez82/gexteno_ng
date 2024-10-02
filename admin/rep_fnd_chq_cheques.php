<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'rep_fnd_chq_cheques';
$db_nombre_pagina = 'rep_fnd_chq_cheques';

if (Gral::esPost()) {
    $btn_enviar_xls = Gral::getVars(1, 'btn_enviar_xls', '');
    $btn_enviar_pdf = Gral::getVars(1, 'btn_enviar_pdf', '');

    $cmb_filtro_fnd_chq_tipo_emisor_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_fnd_chq_tipo_emisor_id', 0);
    $cmb_filtro_fnd_chq_tipo_emision_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_fnd_chq_tipo_emision_id', 0);
    $cmb_filtro_fnd_chq_tipo_pago_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_fnd_chq_tipo_pago_id', 0);
    $cmb_filtro_gral_banco_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_banco_id', 0);
    $cmb_filtro_fnd_chq_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_fnd_chq_tipo_estado_id', 0);
    $cmb_fnd_chq_en_cartera = Gral::getVars(Gral::VARS_POST, 'cmb_fnd_chq_en_cartera', -1);
    
    $txt_filtro_fecha_cobro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_cobro_desde', '');
    $txt_filtro_fecha_cobro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_cobro_hasta', '');
    
    $txt_filtro_fecha_creado_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_creado_desde', '');
    $txt_filtro_fecha_creado_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_creado_hasta', '');

    if ($btn_enviar_xls != '') {
        include "rep_fnd_chq_cheques_xlsx.php";
    } elseif ($btn_enviar_pdf != '') {
        include "rep_fnd_chq_cheques_pdf.php";
    }
} else {
    $cmb_actual = 1;

    $txt_filtro_fecha_cobro_desde = date('d/m/Y');
    $txt_filtro_fecha_cobro_hasta = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), 7));
    
    $txt_filtro_fecha_creado_desde = date('d/m/Y');
    $txt_filtro_fecha_creado_hasta = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), 7));
}
?>

<?php include 'parciales/head.php' ?>

<body>
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>
    <div id='menu'><?php include 'parciales/menuh.php' ?></div>
    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('Cheques') ?> </div>
        <div class='contenedor central reportes'>

            <br />
            <br />
            
            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">

                    <div class="titulo">
                        <?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('Cheques') ?>
                    </div>

                    <div class="par">
                        <div class="label">
                            <?php Lang::_lang('Tipo Emisor'); ?>
                        </div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_fnd_chq_tipo_emisor_id', Gral::getCmbFiltro(FndChqTipoEmisor::getFndChqTipoEmisorsCmb(true), '...'), $cmb_filtro_fnd_chq_tipo_emisor_id, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label">
                            <?php Lang::_lang('Tipo Emision'); ?>
                        </div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_fnd_chq_tipo_emision_id', Gral::getCmbFiltro(FndChqTipoEmision::getFndChqTipoEmisionsCmb(true), '...'), $cmb_filtro_fnd_chq_tipo_emision_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label">
                            <?php Lang::_lang('Tipo Pago'); ?>
                        </div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_fnd_chq_tipo_pago_id', Gral::getCmbFiltro(FndChqTipoPago::getFndChqTipoPagosCmb(true), '...'), $cmb_filtro_fnd_chq_tipo_emision_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label">
                            <?php Lang::_lang('Banco'); ?>
                        </div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_gral_banco_id', Gral::getCmbFiltro(GralBanco::getGralBancosCmb(true), '...'), $cmb_filtro_gral_banco_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label">
                            <?php Lang::_lang('Tipo Estado'); ?>
                        </div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_fnd_chq_tipo_estado_id', Gral::getCmbFiltro(FndChqTipoEstado::getFndChqTipoEstadosCmb(true), '...'), $cmb_filtro_fnd_chq_tipo_emision_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('En Cartera') ?></div>
                        <div class="dato">
                            <?php
                            Html::html_dib_select(1, 'cmb_fnd_chq_en_cartera', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_fnd_chq_en_cartera, 'textbox');
                            ?>                            
                        </div>
                    </div>

                    <div class="agrupador-min">
                        <div class="agrupador-min-titulo">Fecha de Cobro del Cheque</div>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Cobro Desde') ?></div>
                            <div class="dato">
                                <input id="txt_filtro_fecha_cobro_desde" name="txt_filtro_fecha_cobro_desde" value="<?php Gral::_echo($txt_filtro_fecha_cobro_desde) ?>" type="text" class="textbox date" size="10" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
                                <input type="button" id="cal_txt_filtro_fecha_cobro_desde" value=" ... ">
                                <script type='text/javascript'>
                                    Calendar.setup({
                                        inputField: 'txt_filtro_fecha_cobro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_fecha_cobro_desde', onUpdate: function () {
                                        }
                                    });
                                </script>
                            </div>
                        </div>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Cobro Hasta') ?></div>
                            <div class="dato">
                                <input id="txt_filtro_fecha_cobro_hasta" name="txt_filtro_fecha_cobro_hasta" value="<?php Gral::_echo($txt_filtro_fecha_cobro_hasta) ?>" type="text" class="textbox date" size="10" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
                                <input type="button" id="cal_txt_filtro_fecha_cobro_hasta" value=" ... ">
                                <script type='text/javascript'>
                                    Calendar.setup({
                                        inputField: 'txt_filtro_fecha_cobro_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_fecha_cobro_hasta', onUpdate: function () {
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="agrupador-min">
                        <div class="agrupador-min-titulo">Fecha de Creacion del Cheque</div>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Creado Desde') ?></div>
                            <div class="dato">
                                <input id="txt_filtro_fecha_creado_desde" name="txt_filtro_fecha_creado_desde" value="" type="text" class="textbox date" size="10" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
                                <input type="button" id="cal_txt_filtro_fecha_creado_desde" value=" ... ">
                                <script type='text/javascript'>
                                    Calendar.setup({
                                        inputField: 'txt_filtro_fecha_creado_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_fecha_creado_desde', onUpdate: function () {
                                        }
                                    });
                                </script>
                            </div>
                        </div>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Creado Hasta') ?></div>
                            <div class="dato">
                                <input id="txt_filtro_fecha_creado_hasta" name="txt_filtro_fecha_creado_hasta" value="" type="text" class="textbox date" size="10" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
                                <input type="button" id="cal_txt_filtro_fecha_creado_hasta" value=" ... ">
                                <script type='text/javascript'>
                                    Calendar.setup({
                                        inputField: 'txt_filtro_fecha_creado_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_fecha_creado_hasta', onUpdate: function () {
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    
                    <div class="botonera">
                        <input id="btn_enviar_xls" name="btn_enviar_xls" class="boton" type="submit" value="<?php Lang::_lang('Cheques en Excel') ?>" />
                        <input id="btn_enviar_pdf" name="btn_enviar_pdf" class="boton" type="submit" value="<?php Lang::_lang('Cheques en PDF') ?>" />
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
