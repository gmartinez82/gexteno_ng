<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'rep_fnd_caja';
$db_nombre_pagina = 'rep_fnd_caja';

if (Gral::esPost()) {
    $btn_enviar_xls = Gral::getVars(1, 'btn_enviar_xls', '');

    $cmb_filtro_gral_caja_id = Gral::getVars(1, 'cmb_filtro_gral_caja_id', 0);
    $cmb_filtro_fnd_cajero_id = Gral::getVars(1, 'cmb_filtro_fnd_cajero_id', 0);
    $cmb_filtro_fnd_caja_tipo_estado_id = Gral::getVars(1, 'cmb_filtro_fnd_caja_tipo_estado_id', 0);
    
    $txt_filtro_fecha_apertura_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_apertura_desde', '');
    $txt_filtro_fecha_apertura_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_apertura_hasta', '');
    
    $txt_filtro_fecha_cierre_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_cierre_desde', '');
    $txt_filtro_fecha_cierre_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_cierre_hasta', '');

    $txt_filtro_fecha_rendicion_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_rendicion_desde', '');
    $txt_filtro_fecha_rendicion_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_rendicion_hasta', '');
    
    if ($btn_enviar_xls != '') {
        include "rep_fnd_caja_xlsx.php";
    }
} else {
    $cmb_actual = 1;

    $txt_filtro_fecha_apertura_desde = date('d/m/Y');
    $txt_filtro_fecha_apertura_hasta = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), 1));
    
    $txt_filtro_fecha_cierre_desde = date('d/m/Y');
    $txt_filtro_fecha_cierre_hasta = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), 1));
    
    $txt_filtro_fecha_rendicion_desde = date('d/m/Y');
    $txt_filtro_fecha_rendicion_hasta = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), 1));
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
                        <?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('Cajas') ?>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Caja') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_gral_caja_id', Gral::getCmbFiltro(GralCaja::getGralCajasCmb(true), '...'), $cmb_filtro_gral_caja_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Cajero') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_fnd_cajero_id', Gral::getCmbFiltro(FndCajero::getFndCajerosCmb(true), '...'), $cmb_filtro_fnd_cajero_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label">
                            <?php Lang::_lang('Tipo Estado'); ?>
                        </div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_fnd_caja_tipo_estado_id', Gral::getCmbFiltro(FndCajaTipoEstado::getFndCajaTipoEstadosCmb(true), '...'), $cmb_filtro_fnd_caja_tipo_estado_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="agrupador-min">
                        <div class="agrupador-min-titulo">Fecha de Apertura de la Caja</div>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Apertura Desde') ?></div>
                            <div class="dato">
                                <input id="txt_filtro_fecha_apertura_desde" name="txt_filtro_fecha_apertura_desde" value="<?php Gral::_echo($txt_filtro_fecha_apertura_desde) ?>" type="text" class="textbox date" size="10" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
                                <input type="button" id="cal_txt_filtro_fecha_apertura_desde" value=" ... ">
                                <script type='text/javascript'>
                                    Calendar.setup({
                                        inputField: 'txt_filtro_fecha_apertura_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_fecha_apertura_desde', onUpdate: function () {
                                        }
                                    });
                                </script>
                            </div>
                        </div>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Apertura Hasta') ?></div>
                            <div class="dato">
                                <input id="txt_filtro_fecha_apertura_hasta" name="txt_filtro_fecha_apertura_hasta" value="<?php Gral::_echo($txt_filtro_fecha_apertura_hasta) ?>" type="text" class="textbox date" size="10" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
                                <input type="button" id="cal_txt_filtro_fecha_apertura_hasta" value=" ... ">
                                <script type='text/javascript'>
                                    Calendar.setup({
                                        inputField: 'txt_filtro_fecha_apertura_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_fecha_apertura_hasta', onUpdate: function () {
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="agrupador-min">
                        <div class="agrupador-min-titulo">Fecha de Cierre de la Caja</div>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Cierre Desde') ?></div>
                            <div class="dato">
                                <input id="txt_filtro_fecha_cierre_desde" name="txt_filtro_fecha_cierre_desde" value="" type="text" class="textbox date" size="10" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
                                <input type="button" id="cal_txt_filtro_fecha_cierre_desde" value=" ... ">
                                <script type='text/javascript'>
                                    Calendar.setup({
                                        inputField: 'txt_filtro_fecha_cierre_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_fecha_cierre_desde', onUpdate: function () {
                                        }
                                    });
                                </script>
                            </div>
                        </div>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Cierre Hasta') ?></div>
                            <div class="dato">
                                <input id="txt_filtro_fecha_cierre_hasta" name="txt_filtro_fecha_cierre_hasta" value="" type="text" class="textbox date" size="10" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
                                <input type="button" id="cal_txt_filtro_fecha_cierre_hasta" value=" ... ">
                                <script type='text/javascript'>
                                    Calendar.setup({
                                        inputField: 'txt_filtro_fecha_cierre_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_fecha_cierre_hasta', onUpdate: function () {
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    
                    <div class="agrupador-min">
                        <div class="agrupador-min-titulo">Fecha de Rendicion de la Caja</div>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Rendicion Desde') ?></div>
                            <div class="dato">
                                <input id="txt_filtro_fecha_rendicion_desde" name="txt_filtro_fecha_rendicion_desde" value="" type="text" class="textbox date" size="10" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
                                <input type="button" id="cal_txt_filtro_fecha_rendicion_desde" value=" ... ">
                                <script type='text/javascript'>
                                    Calendar.setup({
                                        inputField: 'txt_filtro_fecha_rendicion_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_fecha_rendicion_desde', onUpdate: function () {
                                        }
                                    });
                                </script>
                            </div>
                        </div>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Rendicion Hasta') ?></div>
                            <div class="dato">
                                <input id="txt_filtro_fecha_rendicion_hasta" name="txt_filtro_fecha_rendicion_hasta" value="" type="text" class="textbox date" size="10" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
                                <input type="button" id="cal_txt_filtro_fecha_rendicion_hasta" value=" ... ">
                                <script type='text/javascript'>
                                    Calendar.setup({
                                        inputField: 'txt_filtro_fecha_rendicion_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_fecha_rendicion_hasta', onUpdate: function () {
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    
                    <div class="botonera">
                        <input id="btn_enviar_xls" name="btn_enviar_xls" class="boton" type="submit" value="<?php Lang::_lang('Ver Reporte') ?>" />
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
