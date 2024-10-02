<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'rep_stock_resumen';
$db_nombre_pagina = 'rep_stock_resumen';

if (Gral::esPost()) {

    $cmb_pan_panol_id = Gral::getVars(1, 'cmb_pan_panol_id', 0);
    $cmb_ins_categoria_id = Gral::getVars(1, 'cmb_ins_categoria_id', 0);
    $cmb_ins_stock_resumen_tipo_estado_id = Gral::getVars(1, 'cmb_ins_stock_resumen_tipo_estado_id', 0);
    $txt_descripcion = Gral::getVars(1, 'txt_descripcion', '');
    $txt_codigo_interno = Gral::getVars(1, 'txt_codigo_interno', '');
    $cmb_ins_etiqueta_id = Gral::getVars(1, 'cmb_ins_etiqueta_id', 0);
    $cmb_prv_proveedor_id = Gral::getVars(1, 'cmb_prv_proveedor_id', 0);
    $cmb_datos_extra = Gral::getVars(1, 'cmb_datos_extra', 0);

    $txt_desde = Gral::getVars(1, 'txt_desde', '');
    $txt_hasta = Gral::getVars(1, 'txt_hasta', '');

    //include "rep_stock_resumen_xlsx.php";
    include "rep_stock_resumen_php_excel.php";
} else {

    $txt_desde = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), -7));
    $txt_desde = '';
    $txt_hasta = date('d/m/Y');
    $cmb_datos_extra = 0;
}
?>
<?php include 'parciales/head.php' ?>


<body>
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('Stock en Depositos') ?> </div>
        <div class='contenedor central reportes'>

            <br />
            
            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">
                    <div class="titulo"><?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('Stock en Depositos') ?></div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Deposito') ?></div>
                        <div class="dato"><?php Html::html_dib_select(1, 'cmb_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), $cmb_pan_panol_id, 'textbox') ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Clasificacion') ?></div>
                        <div class="dato"><?php Html::html_dib_select(1, 'cmb_ins_clasificacion_id', Gral::getCmbFiltro(InsClasificacion::getInsClasificacionsCmb(), '...'), $cmb_ins_stock_resumen_tipo_estado_id, 'textbox') ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Tipo Estado') ?></div>
                        <div class="dato"><?php Html::html_dib_select(1, 'cmb_ins_stock_resumen_tipo_estado_id', Gral::getCmbFiltro(InsStockResumenTipoEstado::getInsStockResumenTipoEstadosCmb(), '...'), $cmb_ins_stock_resumen_tipo_estado_id, 'textbox') ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Descripcion') ?></div>
                        <div class="dato">
                            <input id="txt_descripcion" name="txt_descripcion" class="textbox" type="text" value="<?php Gral::_echo($txt_descripcion) ?>" size="30" />
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Codigo Interno') ?></div>
                        <div class="dato">
                            <input id="txt_codigo_interno" name="txt_codigo_interno" class="textbox" type="text" value="<?php Gral::_echo($txt_codigo_interno) ?>" size="20" />
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Etiqueta') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_ins_etiqueta_id', Gral::getCmbFiltro(InsEtiqueta::getInsEtiquetasCmb(true), '...'), $cmb_ins_etiqueta_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Proveedor') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(true), '...'), $cmb_prv_proveedor_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Datos Extra') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_datos_extra', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_datos_extra, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Fecha Desde') ?></div>
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
                        <div class="label"><?php Lang::_lang('Fecha Hasta') ?></div>
                        <div class="dato">
                            <input id="txt_hasta" name="txt_hasta" class="textbox date" type="text" value="<?php Gral::_echo($txt_hasta) ?>" size="10" />
                            <input type='button' id='cal_txt_hasta' value='...' />

                            <script type='text/javascript'>
                                Calendar.setup({
                                    inputField: 'txt_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_hasta'
                                });
                            </script>
                        </div>
                        <div class="comentario">Las fechas filtran por el ultimo movimiento de STOCK de insumos</div>
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
