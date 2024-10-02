<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = "rep_gral_sucursal_valoracion";
$db_nombre_pagina = "rep_gral_sucursal_valoracion";

if (Gral::esPost()) {
    $txt_creado_desde = Gral::getVars(Gral::VARS_POST, 'txt_creado_desde', '', Gral::TIPO_STRING);
    $txt_creado_hasta = Gral::getVars(Gral::VARS_POST, 'txt_creado_hasta', '', Gral::TIPO_STRING);
    $cmb_gral_sucursal_id = Gral::getVars(Gral::VARS_POST, 'cmb_gral_sucursal_id', 0, Gral::TIPO_INTEGER);
    
    include "rep_gral_sucursal_valoracion_php_excel.php";
} else {
    $txt_creado_desde = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), -7));
    $txt_creado_hasta = date('d/m/Y');
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
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GralSucursalValoracion') ?> </div>
        <div class='contenedor central reportes'>

            <br />
            <br />
            
            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">
                    <div class="titulo"><?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('GralSucursalValoracion') ?></div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Sucursal') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(true), '...'), $cmb_gral_sucursal_id, 'textbox ') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Creado Desde') ?></div>
                        <div class="dato">
                            <input id="txt_creado_desde" name="txt_creado_desde" value="<?php echo $txt_creado_desde; ?>" size="10" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
                            <input type="button" id="cal_txt_creado_desde" value=" ... ">
                            <script type='text/javascript'>
                                Calendar.setup({
                                    inputField: 'txt_creado_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_creado_desde', onUpdate: function () {
                                    }
                                });
                            </script>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Creado Hasta') ?></div>
                        <div class="dato">
                            <input id="txt_creado_hasta" name="txt_creado_hasta" value="<?php echo $txt_creado_hasta; ?>" size="10" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
                            <input type="button" id="cal_txt_creado_hasta" value=" ... ">
                            <script type='text/javascript'>
                                Calendar.setup({
                                    inputField: 'txt_creado_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_creado_hasta', onUpdate: function () {
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