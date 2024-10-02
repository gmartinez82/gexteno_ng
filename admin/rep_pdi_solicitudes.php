<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'rep_pdi_solicitudes';
$db_nombre_pagina = 'rep_pdi_solicitudes';

if (Gral::esPost()) {

    $cmb_pan_panol_origen = Gral::getVars(1, 'cmb_pan_panol_origen', 0);
    $cmb_pan_panol_destino = Gral::getVars(1, 'cmb_pan_panol_destino', 0);
    $txt_descripcion = Gral::getVars(Gral::VARS_POST, 'txt_descripcion', '', Gral::TIPO_STRING);
    $txt_codigo_interno = Gral::getVars(Gral::VARS_POST, 'txt_codigo_interno', '', Gral::TIPO_STRING);
    $cmb_ins_categoria_id = Gral::getVars(1, 'cmb_ins_categoria_id', 0);

    $txt_desde = Gral::getVars(1, 'txt_desde');
    $txt_hasta = Gral::getVars(1, 'txt_hasta');

    include "rep_pdi_solicitudes_xlsx.php";
} else {
    $txt_desde = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), -7));
    $txt_hasta = date('d/m/Y');
}
?>
<?php include 'parciales/head.php' ?>


<body>
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('Solicitudes de Insumos') ?> </div>
        <div class='contenedor central reportes'>

            <br />
            <br />

            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">
                    <div class="titulo"><?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('Solicitudes de Insumos') ?></div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Solicitante') ?></div>
                        <div class="dato"><?php Html::html_dib_select(1, 'cmb_pan_panol_origen', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), $cmb_pan_panol_origen, 'textbox') ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Solicita a') ?></div>
                        <div class="dato"><?php Html::html_dib_select(1, 'cmb_pan_panol_destino', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), $cmb_pan_panol_destino, 'textbox') ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Descripcion') ?></div>
                        <div class="dato">
                            <input id='txt_descripcion' name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' value='<?php Gral::_echoTxt($txt_descripcion) ?>' size='50' />
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Codigo Interno') ?></div>
                        <div class="dato">
                            <input id='txt_codigo_interno' name='txt_codigo_interno' type='text' class='textbox <?php echo $error_input_css ?> ' value='<?php Gral::_echoTxt($txt_codigo_interno) ?>' size='20' />
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Categoria') ?></div>
                        <div class="dato"><?php Html::html_dib_select(1, 'cmb_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(), '...'), $cmb_ins_categoria_id, 'textbox') ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Fecha Solicitud Desde') ?></div>
                        <div class="dato">
                            <input id="txt_desde" name="txt_desde" class="textbox date" type="text" value="<?php Gral::_echo($txt_desde) ?>" size="10" />
                            <input type='button' id='cal_txt_desde' value='...' />

                            <script type='text/javascript'>
                                Calendar.setup({
                                    inputField: 'txt_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_desde'
                                });
                            </script>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Fecha Solicitud Hasta') ?></div>
                        <div class="dato">
                            <input id="txt_hasta" name="txt_hasta" class="textbox date" type="text" value="<?php Gral::_echo($txt_hasta) ?>" size="10" />
                            <input type='button' id='cal_txt_hasta' value='...' />

                            <script type='text/javascript'>
                                Calendar.setup({
                                    inputField: 'txt_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_hasta'
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
