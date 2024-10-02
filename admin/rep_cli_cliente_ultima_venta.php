<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = "rep_cli_cliente_ultima_venta";
$db_nombre_pagina = "rep_cli_cliente_ultima_venta";

if (Gral::esPost()) {
    $txt_descripcion = Gral::getVars(Gral::VARS_POST, 'txt_descripcion', '', Gral::TIPO_STRING);
    $cmb_busqueda = Gral::getVars(Gral::VARS_POST, 'cmb_busqueda', '', Gral::TIPO_STRING);
    $cmb_gral_sucursal_id = Gral::getVars(Gral::VARS_POST, 'cmb_gral_sucursal_id', 0, Gral::TIPO_INTEGER);
    $cmb_vta_vendedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_vta_vendedor_id', 0, Gral::TIPO_INTEGER);
    $cmb_cli_categoria_id = Gral::getVars(Gral::VARS_POST, 'cmb_cli_categoria_id', 0, Gral::TIPO_INTEGER);
    $cmb_cli_estado = Gral::getVars(Gral::VARS_POST, 'cmb_cli_estado', -1, Gral::TIPO_INTEGER);
    $cmb_datos_extra = Gral::getVars(Gral::VARS_POST, 'cmb_datos_extra', 0, Gral::TIPO_INTEGER);
    $txt_creado_desde = Gral::getVars(Gral::VARS_POST, 'txt_creado_desde', '', Gral::TIPO_STRING);
    $txt_creado_hasta = Gral::getVars(Gral::VARS_POST, 'txt_creado_hasta', '', Gral::TIPO_STRING);
    $cmb_cli_cliente_tipo_estado_venta_id = Gral::getVars(Gral::VARS_POST, 'cmb_cli_cliente_tipo_estado_venta_id', 0, Gral::TIPO_INTEGER);
    $cmb_cli_cliente_tipo_gestion_id = Gral::getVars(Gral::VARS_POST, 'cmb_cli_cliente_tipo_gestion_id', 0, Gral::TIPO_INTEGER);
    $cmb_cli_cliente_periodicidad_gestion_id = Gral::getVars(Gral::VARS_POST, 'cmb_cli_cliente_periodicidad_gestion_id', 0, Gral::TIPO_INTEGER);
    
    $error = false;
    
    // -------------------------------------------------------------------------
    // validacion de datos elementales
    // -------------------------------------------------------------------------
    if($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL){
        if($cmb_gral_sucursal_id == 0){
            //$error = true;
            //$cmb_gral_sucursal_id_error = 'Debe seleccionar alguna sucursal';
        }
    }elseif($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR){
        if($cmb_vta_vendedor_id == 0){
            //$error = true;
            //$cmb_vta_vendedor_id_error = 'Debe seleccionar algun vendedor';
        }        
    }
    
    if(!$error){
        include "rep_cli_cliente_ultima_venta_php_excel.php";
    }
} else {
    $txt_creado_desde = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), -30));
    $txt_creado_desde = '';
    $txt_creado_hasta = date('d/m/Y');
    $cmb_datos_extra = 0;
    
    $cmb_busqueda = GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL;
}
?>

<?php include 'parciales/head.php' ?>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php'; ?>
    <?php include 'parciales/user.php'; ?>
    <?php include 'parciales/mensajes.php'; ?>
    <div id='menu'>
        <?php include 'parciales/menuh.php'; ?>
    </div>
    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('Reporte de Clientes') ?></div>
        <div class='contenedor central reportes'>

            <br />
            <br />
            
            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">
                    <div class="titulo"><?php Lang::_lang('Reporte de Clientes') ?> - <?php Lang::_lang('Ultima Venta') ?></div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Descripcion') ?></div>
                        <div class="dato">
                            <input id='txt_descripcion' name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' value='<?php Gral::_echoTxt($txt_descripcion) ?>' size='50' />
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Busqueda') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_busqueda', GralSiNo::getOrdenamientoVendedorBusquedaCmb(), $cmb_busqueda, 'textbox ') ?>  
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Sucursal') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmbPorAlcanceYDetalleClientes(true), '...'), $cmb_gral_sucursal_id, 'textbox ') ?>
                            <div class="label-error"><?php Gral::_echo($cmb_gral_sucursal_id_error) ?></div>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Vendedor') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmbXAlcanceYDetalleClientes(true), '...'), $cmb_vta_vendedor_id, 'textbox ') ?>
                            <div class="label-error"><?php Gral::_echo($cmb_vta_vendedor_id_error) ?></div>
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
                        <div class="label"><?php Lang::_lang('Estado Venta') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_cli_cliente_tipo_estado_venta_id', Gral::getCmbFiltro(CliClienteTipoEstadoVenta::getCliClienteTipoEstadoVentasCmb(true), '...'), $cmb_cli_cliente_tipo_estado_venta_id, 'textbox ') ?>
                        </div>
                    </div>
    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Tipo Gestion') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_cli_cliente_tipo_gestion_id', Gral::getCmbFiltro(CliClienteTipoGestion::getCliClienteTipoGestionsCmb(true), '...'), $cmb_cli_cliente_tipo_gestion_id, 'textbox ') ?>
                        </div>
                    </div>
    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Periodicidad') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_cli_cliente_periodicidad_gestion_id', Gral::getCmbFiltro(CliClientePeriodicidadGestion::getCliClientePeriodicidadGestionsCmb(true), '...'), $cmb_cli_cliente_periodicidad_gestion_id, 'textbox ') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Datos Extra') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_datos_extra', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_datos_extra, 'textbox') ?>
                            
                            <div class="comentario">
                                Al elegir "SI" se agrega al reporte toda la informacion estadistica semestral de cada cliente.
                            </div>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Cliente Creado Desde') ?></div>
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
                        <div class="label"><?php Lang::_lang('Cliente Creado Hasta') ?></div>
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