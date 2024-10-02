<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = "rep_vta_orden_venta";
$db_nombre_pagina = "rep_vta_orden_venta";

if (Gral::esPost()) {
    $txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', '', Gral::TIPO_STRING);
    $txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', '', Gral::TIPO_STRING);
    
    $cmb_filtro_vta_orden_venta_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_orden_venta_tipo_estado_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_vta_orden_venta_tipo_estado_remision_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_orden_venta_tipo_estado_remision_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_vta_orden_venta_tipo_estado_facturacion_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_orden_venta_tipo_estado_facturacion_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cli_cliente_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_cli_categoria_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cli_categoria_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_cli_rubro_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cli_rubro_id', 0, Gral::TIPO_INTEGER);
    $txt_filtro_descripcion = Gral::getVars(Gral::VARS_POST, 'txt_filtro_descripcion', '', Gral::TIPO_STRING);
    $txt_filtro_codigo_interno = Gral::getVars(Gral::VARS_POST, 'txt_filtro_codigo_interno', '', Gral::TIPO_STRING);
    $cmb_filtro_geo_localidad_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_geo_localidad_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_geo_zona_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_geo_zona_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_ins_tipo_lista_precio_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_ins_tipo_lista_precio_id', 0, Gral::TIPO_INTEGER);

    $cmb_filtro_gral_actividad_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_actividad_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_gral_escenario_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_escenario_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_gral_sucursal_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_sucursal_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_ins_etiqueta_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_ins_etiqueta_id', 0, Gral::TIPO_INTEGER);    
    $cmb_filtro_ins_categoria_id = Gral::getVars(Gral::VARS_POST, '_cmb_filtro_ins_categoria_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_vta_vendedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_vendedor_id', 0, Gral::TIPO_INTEGER);

    $cmb_filtro_vta_presupuesto_tipo_despacho_id = Gral::getVars(1, 'cmb_filtro_vta_presupuesto_tipo_despacho_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_gral_sucursal_retiro = Gral::getVars(1, 'cmb_filtro_gral_sucursal_retiro', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_vta_presupuesto_tipo_venta_id = Gral::getVars(1, 'cmb_filtro_vta_presupuesto_tipo_venta_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_vta_presupuesto_tipo_emision_id = Gral::getVars(1, 'cmb_filtro_vta_presupuesto_tipo_emision_id', 0, Gral::TIPO_INTEGER);
    
    $cmb_filtro_gral_ruta_id = Gral::getVars(1, 'cmb_filtro_gral_ruta_id', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_geo_localidad_recepcion = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_geo_localidad_recepcion', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_geo_provincia_recepcion = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_geo_provincia_recepcion', 0, Gral::TIPO_INTEGER);
    $cmb_filtro_prv_proveedor = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_prv_proveedor', 0, Gral::TIPO_INTEGER);
    
    $txt_filtro_desde = Gral::getFechaToDB($txt_filtro_desde);
    $txt_filtro_hasta = Gral::getFechaToDB($txt_filtro_hasta);
    
    //include "rep_vta_orden_venta_xlsx.php";
    include "rep_vta_orden_venta_php_excel.php";
} else {
    $txt_filtro_desde = Date::sumarDias(date('Y-m-d'), 0);
    $txt_filtro_hasta = date('Y-m-d');
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
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('Vta Orden Venta') ?> </div>
        <div class='contenedor central reportes'>

            <br />
            <br />

            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">
                    
                    <div class="titulo"><?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('Lista de VtaOrdenVenta') ?></div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Tipo de Estado') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_vta_orden_venta_tipo_estado_id', Gral::getCmbFiltro(VtaOrdenVentaTipoEstado::getVtaOrdenVentaTipoEstadosCmb(true), '...'), $cmb_filtro_vta_orden_venta_tipo_estado_id, 'textbox') ?> 
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Estado Remision') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_vta_orden_venta_tipo_estado_remision_id', Gral::getCmbFiltro(VtaOrdenVentaTipoEstadoRemision::getVtaOrdenVentaTipoEstadoRemisionsCmb(true), '...'), $cmb_filtro_vta_orden_venta_tipo_estado_remision_id, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Estado Facturacion') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_vta_orden_venta_tipo_estado_facturacion_id', Gral::getCmbFiltro(VtaOrdenVentaTipoEstadoFacturacion::getVtaOrdenVentaTipoEstadoFacturacionsCmb(true), '...'), $cmb_filtro_vta_orden_venta_tipo_estado_facturacion_id, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Cliente') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(true), '...'), $cmb_filtro_cli_cliente_id, 'textbox selective-input-filtro') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Cli Categoria') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_cli_categoria_id', Gral::getCmbFiltro(CliCategoria::getCliCategoriasCmb(true), '...'), $cmb_filtro_cli_categoria_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Cli Rubro') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_cli_rubro_id', Gral::getCmbFiltro(CliRubro::getCliRubrosCmb(true), '...'), $cmb_filtro_cli_rubro_id, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Descripcion') ?></div>
                        <div class="dato">
                            <input id="txt_descripcion" name="txt_filtro_descripcion" class="textbox" type="text" value="<?php Gral::_echo($txt_filtro_descripcion) ?>" size="20" />
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Cod Interno') ?></div>
                        <div class="dato">
                            <input id="txt_filtro_codigo_interno" name="txt_filtro_codigo_interno" class="textbox" type="text" value="<?php Gral::_echo($txt_filtro_codigo_interno) ?>" size="20" />
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Localidad Cliente') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsFullCmb(true), '...'), $cmb_filtro_geo_localidad_id, 'textbox selective-input-filtro') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Zonas') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_geo_zona_id', Gral::getCmbFiltro(GeoZona::getGeoZonasCmb(true), '...'), $cmb_filtro_geo_zona_id, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Tipo Lista de Precio') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_ins_tipo_lista_precio_id', Gral::getCmbFiltro(InsTipoListaPrecio::getInsTipoListaPreciosCmb(true), '...'), $cmb_filtro_ins_tipo_lista_precio_id, 'textbox') ?>
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
                        <div class="label"><?php Lang::_lang('Sucursal') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(true), '...'), $cmb_filtro_gral_sucursal_id, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Etiqueta') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_ins_etiqueta_id', Gral::getCmbFiltro(InsEtiqueta::getInsEtiquetasCmb(), '...'), $cmb_filtro_ins_etiqueta_id, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Categoria') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, '_cmb_filtro_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(true), '...'), $cmb_filtro_ins_categoria_id, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Vendedor') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(true), '...'), $cmb_filtro_vta_vendedor_id, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Proveedor') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_prv_proveedor', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(true), '...'), $cmb_filtro_prv_proveedor, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Tipo Despacho') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_vta_presupuesto_tipo_despacho_id', Gral::getCmbFiltro(VtaPresupuestoTipoDespacho::getVtaPresupuestoTipoDespachosCmb(true), '...'), $cmb_filtro_vta_presupuesto_tipo_despacho_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Sucursal Retiro') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_gral_sucursal_retiro', Gral::getCmbFiltro(GralSucursal::getGralSucursalsParaRetiroCmb(), '...'), $cmb_filtro_gral_sucursal_retiro, 'textbox') ?>
                        </div>
                    </div>                    
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Tipo Venta') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_vta_presupuesto_tipo_venta_id', Gral::getCmbFiltro(VtaPresupuestoTipoVenta::getVtaPresupuestoTipoVentasCmb(true), '...'), $cmb_filtro_vta_presupuesto_tipo_venta_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Tipo Emision') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_vta_presupuesto_tipo_emision_id', Gral::getCmbFiltro(VtaPresupuestoTipoEmision::getVtaPresupuestoTipoEmisionsCmb(true), '...'), $cmb_filtro_vta_presupuesto_tipo_emision_id, 'textbox') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Ruta de OV') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_gral_ruta_id', Gral::getCmbFiltro(GralRuta::getGralRutasCmb(true), '...'), $cmb_filtro_gral_ruta_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Localidad RCP') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_geo_localidad_recepcion', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsFullCmb(true), '...'), $cmb_filtro_geo_localidad_recepcion, 'textbox selective-input-filtro') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Provincia RCP') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_geo_provincia_recepcion', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasFullCmb(true), '...'), $cmb_filtro_geo_provincia_recepcion, 'textbox selective-input-filtro') ?>
                        </div>
                    </div>
                    
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Desde') ?></div>
                        <div class="dato">
                            <input id="txt_filtro_desde" name="txt_filtro_desde" value="<?php echo Gral::getFechaToWEB($txt_filtro_desde); ?>" size="10" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
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
                            <input id="txt_filtro_hasta" name="txt_filtro_hasta" value="<?php echo Gral::getFechaToWEB($txt_filtro_hasta); ?>" size="10" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
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