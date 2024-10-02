<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = "rep_pde_resumen_cuenta";
$db_nombre_pagina = "rep_pde_resumen_cuenta";

if (Gral::esPost()) {
    $cmb_filtro_prv_proveedor_id = Gral::getVars(1, 'cmb_filtro_prv_proveedor_id', false);
    $txt_filtro_desde = Gral::getVars(1, 'txt_filtro_desde', "");
    $txt_filtro_hasta = Gral::getVars(1, 'txt_filtro_hasta', "");
    $cmb_filtro_excluir_saldo_cero = Gral::getVars(1, 'cmb_filtro_excluir_saldo_cero', 0);
    $txt_saldo_margen = Gral::getVars(1, 'txt_saldo_margen', 0);
    $cmb_filtro_incluir_detalles = Gral::getVars(1, 'cmb_filtro_incluir_detalles', 0);
    
    $txt_filtro_desde = Gral::getFechaToDB($txt_filtro_desde);
    $txt_filtro_hasta = Gral::getFechaToDB($txt_filtro_hasta);
    $txt_saldo_margen = Gral::getImporteDesdePriceFormatToDB($txt_saldo_margen);

    include "rep_pde_resumen_cuenta_xlsx.php";
} else {
    //$txt_desde = '';
    //$txt_hasta = '';
    $txt_filtro_desde = Date::sumarDias(date('Y-m-d'), -60);
    $txt_filtro_desde = '2020-01-01';
    $txt_filtro_hasta = date('Y-m-d');
    $cmb_filtro_excluir_saldo_cero = 1;    
    $cmb_filtro_incluir_detalles = 1;
    $txt_saldo_margen = 0.5;
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
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('Resumen de Cuenta') ?> </div>
        <div class='contenedor central reportes'>
            <br />	
            <br />
            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">

                    <div class="titulo"><?php Lang::_lang('Resumen de Cuenta') ?> <?php Lang::_lang('de Proveedores') ?></div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Proveedor') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(true), '...'), $cmb_filtro_prv_proveedor_id, 'textbox') ?>
                        </div>
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

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Excluir Saldo Menor a') ?></div>
                        <div class="dato">
                            <input id="txt_saldo_margen" name="txt_saldo_margen" value="<?php echo Gral::getImporteDesdeDbToPriceFormat($txt_saldo_margen) ?>" size="4" type="text" class="textbox moneda" size="3" title="<?php Lang::_lang('Ingrese saldo a excluir') ?>" />
                            <?php Html::html_dib_select(1, 'cmb_filtro_excluir_saldo_cero', GralSiNo::getGralSiNosCmb(true), $cmb_filtro_excluir_saldo_cero, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Incluir Detalles') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_incluir_detalles', GralSiNo::getGralSiNosCmb(true), $cmb_filtro_incluir_detalles, 'textbox') ?>
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