<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'rep_cli_cliente';
$db_nombre_pagina = 'rep_cli_cliente';

if (Gral::esPost()) {
    $txt_descripcion = Gral::getVars(Gral::VARS_POST, 'txt_descripcion', '', Gral::TIPO_STRING);
    $cmb_gral_tipo_personeria_id = Gral::getVars(Gral::VARS_POST, 'cmb_gral_tipo_personeria_id', 0, Gral::TIPO_INTEGER);
    $cmb_gral_condicion_iva_id = Gral::getVars(Gral::VARS_POST, 'cmb_gral_condicion_iva_id', 0, Gral::TIPO_INTEGER);
    $cmb_geo_pais_id = Gral::getVars(Gral::VARS_POST, 'cmb_geo_pais_id', 0, Gral::TIPO_INTEGER);
    $cmb_geo_provincia_id = Gral::getVars(Gral::VARS_POST, 'cmb_geo_provincia_id', 0, Gral::TIPO_INTEGER);
    $cmb_geo_localidad_id = Gral::getVars(Gral::VARS_POST, 'cmb_geo_localidad_id', 0, Gral::TIPO_INTEGER);
    $cmb_geo_zona_id = Gral::getVars(Gral::VARS_POST, 'cmb_geo_zona_id', 0, Gral::TIPO_INTEGER);
    $cmb_cli_rubro_id = Gral::getVars(Gral::VARS_POST, 'cmb_cli_rubro_id', 0, Gral::TIPO_INTEGER);
    $cmb_vta_vendedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_vta_vendedor_id', 0, Gral::TIPO_INTEGER);
    $cmb_cli_grupo_id = Gral::getVars(Gral::VARS_POST, 'cmb_cli_grupo_id', 0, Gral::TIPO_INTEGER);
    $cmb_cli_categoria_id = Gral::getVars(Gral::VARS_POST, 'cmb_cli_categoria_id', 0, Gral::TIPO_INTEGER);
    $cmb_cli_estado = Gral::getVars(Gral::VARS_POST, 'cmb_cli_estado', -1, Gral::TIPO_INTEGER);
    $txt_creado_desde = Gral::getVars(Gral::VARS_POST, 'txt_creado_desde', '', Gral::TIPO_STRING);
    $txt_creado_hasta = Gral::getVars(Gral::VARS_POST, 'txt_creado_hasta', '', Gral::TIPO_STRING);
    $txt_modificado_desde = Gral::getVars(Gral::VARS_POST, 'txt_modificado_desde', '', Gral::TIPO_STRING);
    $txt_modificado_hasta = Gral::getVars(Gral::VARS_POST, 'txt_modificado_hasta', '', Gral::TIPO_STRING);

    include "rep_cli_cliente_xlsx.php";
} else {
    $txt_creado_desde = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), -7));
    $txt_creado_hasta = date('d/m/Y');
    $txt_modificado_desde = '';
    $txt_modificado_hasta = '';
}
?>

<?php include 'parciales/head.php' ?>

<body>
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>
    <div id='menu'><?php include 'parciales/menuh.php' ?></div>
    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('CliCliente') ?> </div>
        <div class='contenedor central reportes'>

            <br />
            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">
                    <div class="titulo"><?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('Lista de CliCliente') ?></div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Descripcion') ?></div>
                        <div class="dato">
                            <input id='txt_descripcion' name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' value='<?php Gral::_echoTxt($txt_descripcion) ?>' size='50' />
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(true), '...'), $cmb_gral_tipo_personeria_id, 'textbox ') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(true), '...'), $cmb_gral_condicion_iva_id, 'textbox ') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Pais') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmb(true), '...'), $cmb_geo_pais_id, 'textbox ') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Provincia') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasFullCmb(true), '...'), $cmb_geo_provincia_id, 'textbox selective-input-filtro') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Localidad') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsFullCmb(true), '...'), $cmb_geo_localidad_id, 'textbox selective-input-filtro') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Zonas') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_geo_zona_id', Gral::getCmbFiltro(GeoZona::getGeoZonasCmb(true), '...'), $cmb_geo_zona_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Rubro') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_cli_rubro_id', Gral::getCmbFiltro(CliRubro::getCliRubrosCmb(true), '...'), $cmb_cli_rubro_id, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Vendedor') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(true), '...'), $cmb_vta_vendedor_idy, 'textbox ') ?>
                        </div>
                    </div>                    
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Grupo') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_cli_grupo_id', Gral::getCmbFiltro(CliGrupo::getCliGruposCmb(true), '...'), $cmb_cli_grupo_id, 'textbox ') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Categoria') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_cli_categoria_id', Gral::getCmbFiltro(CliCategoria::getCliCategoriasCmb(true), '...'), $cmb_cli_categoria_id, 'textbox ') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Estado') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_cli_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_cli_estado, 'textbox') ?>
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

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Modificado Desde') ?></div>
                        <div class="dato">
                            <input id="txt_modificado_desde" name="txt_modificado_desde" value="<?php echo $txt_modificado_desde; ?>" size="10" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
                            <input type="button" id="cal_txt_modificado_desde" value=" ... ">
                            <script type='text/javascript'>
                                Calendar.setup({
                                    inputField: 'txt_modificado_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_modificado_desde', onUpdate: function () {
                                    }
                                });
                            </script>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Modificado Hasta') ?></div>
                        <div class="dato">
                            <input id="txt_modificado_hasta" name="txt_modificado_hasta" value="<?php echo $txt_modificado_hasta; ?>" size="10" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
                            <input type="button" id="cal_txt_modificado_hasta" value=" ... ">
                            <script type='text/javascript'>
                                Calendar.setup({
                                    inputField: 'txt_modificado_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_modificado_hasta', onUpdate: function () {
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
