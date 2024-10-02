<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = "rep_pdi_reingresos";
$db_nombre_pagina = "rep_pdi_reingresos";

if (Gral::esPost()) {
    $txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', '', Gral::TIPO_STRING);
    $txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', '', Gral::TIPO_STRING);
    $txt_filtro_descripcion = Gral::getVars(Gral::VARS_POST, 'txt_filtro_descripcion', '', Gral::TIPO_STRING);
    $txt_codigo_interno = Gral::getVars(Gral::VARS_POST, 'txt_codigo_interno', '', Gral::TIPO_STRING);
    $cmb_pan_panol_id = Gral::getVars(Gral::VARS_POST, 'cmb_pan_panol_id', 0, Gral::TIPO_INTEGER);
    $cmb_ins_categoria_id = Gral::getVars(Gral::VARS_POST, 'cmb_ins_categoria_id', 0, Gral::TIPO_INTEGER);
    $cmb_ins_stock_tipo_movimiento_id = Gral::getVars(Gral::VARS_POST, 'cmb_ins_stock_tipo_movimiento_id', 0, Gral::TIPO_INTEGER);
    
    $txt_filtro_desde = Gral::getFechaToDB($txt_filtro_desde);
    $txt_filtro_hasta = Gral::getFechaToDB($txt_filtro_hasta);
    
    include "rep_pdi_reingresos_php_excel.php";
} else {
    $txt_filtro_desde = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), 0));
    $txt_filtro_hasta = date('d/m/Y');
}
?>

<?php include 'parciales/head.php' ?>

<body>
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>
    <div id='menu'>
        <?php include 'parciales/menuh.php' ?>
    </div>
    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('Reingesos de Stock') ?> </div>
        <div class='contenedor central reportes'>

            <br />
            <br />

            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">
                    
                    <div class="titulo"><?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('Reingresos de Stock por Devoluciones') ?></div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Descripcion') ?></div>
                        <div class="dato">
                            <input id="txt_descripcion" name="txt_filtro_descripcion" class="textbox" type="text" value="<?php Gral::_echo($txt_filtro_descripcion) ?>" size="20" />
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Codigo Interno') ?></div>
                        <div class="dato">
                            <input id='txt_codigo_interno' name='txt_codigo_interno' type='text' class='textbox <?php echo $error_input_css ?> ' value='<?php Gral::_echoTxt($txt_codigo_interno) ?>' size='20' />
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Deposito') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(true), '...'), $cmb_pan_panol_id, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Categoria') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(true), '...'), $cmb_ins_categoria_id, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Tipo Movimiento') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_ins_stock_tipo_movimiento_id', Gral::getCmbFiltro(InsStockTipoMovimiento::getInsStockTipoMovimientosCmbDeAjuste(true), '...'), $cmb_ins_stock_tipo_movimiento_id, 'textbox') ?>
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