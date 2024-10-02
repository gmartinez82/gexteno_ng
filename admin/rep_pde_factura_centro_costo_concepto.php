<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = "rep_pde_factura_centro_costo_concepto";
$db_nombre_pagina = "rep_pde_factura_centro_costo_concepto";

if (Gral::esPost()) {
    $txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', '', Gral::TIPO_STRING);
    $txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', '', Gral::TIPO_STRING);
    
    $cmb_gral_centro_costo_id = Gral::getVars(Gral::VARS_POST, 'cmb_gral_centro_costo_id', 0, Gral::TIPO_INTEGER);
    $cmb_prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_prv_proveedor_id', 0, Gral::TIPO_INTEGER);
    $cmb_pde_factura_concepto_id = Gral::getVars(Gral::VARS_POST, 'cmb_pde_factura_concepto_id', 0, Gral::TIPO_INTEGER);
    
    $txt_filtro_desde = Gral::getFechaToDB($txt_filtro_desde);
    $txt_filtro_hasta = Gral::getFechaToDB($txt_filtro_hasta);
    
    include "rep_pde_factura_centro_costo_concepto_php_excel.php";
} else {
    //$txt_desde = '';
    //$txt_hasta = '';
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
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('Pde Factura Centro Costo Concepto') ?> </div>
        <div class='contenedor central reportes'>

            <br />
            <br />

            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">
                    
                    <div class="titulo"><?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('Lista de PdeFacturaCentroCostoConcepto') ?></div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Centro Costo') ?></div>
                        <div class="dato"><?php Html::html_dib_select(1, 'cmb_gral_centro_costo_id', Gral::getCmbFiltro(GralCentroCosto::getGralCentroCostosCmb(), '...'), $cmb_gral_centro_costo_id, 'textbox') ?></div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Proveedor') ?></div>
                        <div class="dato"><?php Html::html_dib_select(1, 'cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $cmb_prv_proveedor_id, 'textbox') ?></div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Concepto') ?></div>
                        <div class="dato"><?php Html::html_dib_select(1, 'cmb_pde_factura_concepto_id', Gral::getCmbFiltro(PdeFacturaConcepto::getPdeFacturaConceptosCmb(), '...'), $cmb_pde_factura_concepto_id, 'textbox') ?></div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Desde') ?></div>
                        <div class="dato">
                            <input id="txt_filtro_desde" name="txt_filtro_desde" value="<?php echo Gral::getFechaToWEB($txt_filtro_desde) ?>" size="10" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
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
                            <input id="txt_filtro_hasta" name="txt_filtro_hasta" value="<?php echo Gral::getFechaToWEB($txt_filtro_hasta) ?>" size="10" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
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