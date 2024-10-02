<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'rep_vta_ajuste_debe';
$db_nombre_pagina = 'rep_vta_ajuste_debe';

if (Gral::esPost()) {
    $txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', '', Gral::TIPO_STRING);
    $txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', '', Gral::TIPO_STRING);
    $cmb_filtro_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cli_cliente_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_vta_ajuste_debe_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_ajuste_debe_tipo_estado_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_vta_tipo_ajuste_debe_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_tipo_ajuste_debe_id', 0, Gral::TIPO_INTEGER);
    
    $cmb_filtro_gral_sucursal_id = Gral::getVars(1, 'cmb_filtro_gral_sucursal_id', 0);
    $cmb_filtro_vta_vendedor_id = Gral::getVars(1, 'cmb_filtro_vta_vendedor_id', 0);

    $cmb_filtro_gral_actividad_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_actividad_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_gral_escenario_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_escenario_id', 0, Gral::TIPO_INTEGER);
    
    $txt_filtro_desde = Gral::getFechaToDB($txt_filtro_desde);
    $txt_filtro_hasta = Gral::getFechaToDB($txt_filtro_hasta);

    include "rep_vta_ajuste_debe_php_excel.php";
} else {
    $txt_filtro_desde = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), -7));
    $txt_filtro_hasta = date('d/m/Y');
}
?>

<?php include 'parciales/head.php' ?>

<body>
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>
    <div id='menu'><?php include 'parciales/menuh.php' ?></div>
    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaAjusteDebe') ?> </div>
        <div class='contenedor central reportes'>
            <br />
            <br />
            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">
                    <div class="titulo"><?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('VtaAjusteDebe') ?></div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Cliente') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(true), '...'), $cmb_filtro_cli_cliente_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Estado') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_vta_ajuste_debe_tipo_estado_id', Gral::getCmbFiltro(VtaAjusteDebeTipoEstado::getVtaAjusteDebeTipoEstadosCmb(true), '...'), $cmb_filtro_vta_ajuste_debe_tipo_estado_id, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Tipo de Ajuste Debe') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_vta_tipo_ajuste_debe_id', Gral::getCmbFiltro(VtaTipoAjusteDebe::getVtaTipoAjusteDebesCmb(true), '...'), $cmb_filtro_vta_tipo_ajuste_debe_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Sucursal') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(true), '...'), $cmb_filtro_gral_sucursal_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Vendedor') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(true), '...'), $cmb_filtro_vta_vendedor_id, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Actividad') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(true), '...'), $cmb_filtro_gral_actividad_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Escenario') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_gral_escenario_id', Gral::getCmbFiltro(GralEscenario::getGralEscenariosCmb(true), '...'), $cmb_filtro_gral_escenario_id, 'textbox') ?>
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
                                    inputField: 'txt_filtro_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_hasta', onUpdate: function (){
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
