<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'rep_ins_insumo';
$db_nombre_pagina = 'rep_ins_insumo';

if (Gral::esPost())
{
    $txt_descripcion            = Gral::getVars(Gral::VARS_POST, 'txt_descripcion', '', Gral::TIPO_STRING);
    $txt_codigo_interno         = Gral::getVars(Gral::VARS_POST, 'txt_codigo_interno', '', Gral::TIPO_STRING);
    $txt_creado_desde           = Gral::getVars(Gral::VARS_POST, 'txt_creado_desde', '', Gral::TIPO_STRING);
    $txt_creado_hasta           = Gral::getVars(Gral::VARS_POST, 'txt_creado_hasta', '', Gral::TIPO_STRING);
    $cmb_ins_marca_id           = Gral::getVars(Gral::VARS_POST, 'cmb_ins_marca_id', 0, Gral::TIPO_INTEGER);
    $cmb_ins_categoria_id       = Gral::getVars(Gral::VARS_POST, 'cmb_ins_categoria_id', 0, Gral::TIPO_INTEGER);
    $cmb_ins_tipo_insumo_id     = Gral::getVars(Gral::VARS_POST, 'cmb_ins_tipo_insumo_id', 0, Gral::TIPO_INTEGER);
    $cmb_estado                 = Gral::getVars(Gral::VARS_POST, 'cmb_estado', -1, Gral::TIPO_INTEGER);
    $cmb_veh_marca_id           = Gral::getVars(Gral::VARS_POST, 'cmb_veh_marca_id', 0, Gral::TIPO_INTEGER);
    $cmb_veh_modelo_id          = Gral::getVars(Gral::VARS_POST, 'cmb_veh_modelo_id', 0, Gral::TIPO_INTEGER);
    $cmb_ins_unidad_medida_id   = Gral::getVars(Gral::VARS_POST, 'cmb_ins_unidad_medida_id', 0, Gral::TIPO_INTEGER);
    $cmb_ins_tipo_fabricante_id = Gral::getVars(Gral::VARS_POST, 'cmb_ins_tipo_fabricante_id', 0, Gral::TIPO_INTEGER);
    $cmb_gral_tipo_iva_compra   = Gral::getVars(Gral::VARS_POST, 'cmb_gral_tipo_iva_compra', 0, Gral::TIPO_INTEGER);
    $cmb_gral_tipo_iva_venta    = Gral::getVars(Gral::VARS_POST, 'cmb_gral_tipo_iva_venta', 0, Gral::TIPO_INTEGER);
    $cmb_venta_web              = Gral::getVars(Gral::VARS_POST, 'cmb_venta_web', -1, Gral::TIPO_INTEGER);
    $cmb_venta_mercadolibre     = Gral::getVars(Gral::VARS_POST, 'cmb_venta_mercadolibre', -1, Gral::TIPO_INTEGER);
    
    include 'rep_ins_insumo_xlsx.php';
}
else
{
    //$txt_desde = '';
    //$txt_hasta = '';
    $txt_creado_desde = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), -7));
    $txt_creado_hasta = date('d/m/Y');
}

?>

<?php include 'parciales/head.php' ?>

<body>
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>
    <div id='menu'><?php include 'parciales/menuh.php' ?></div>
    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('InsInsumo') ?> </div>
        <div class='contenedor central reportes'>
            
            <br />
            <br />

            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">
                    <div class="titulo"><?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('Lista de InsInsumo') ?></div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Descripcion') ?></div>
                        <div class="dato">
                            <input id='txt_descripcion' name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' value='<?php Gral::_echoTxt($txt_descripcion) ?>' size='50' />
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Codigo Interno') ?></div>
                        <div class="dato">
                            <input id='txt_codigo_interno' name='txt_codigo_interno' type='text' class='textbox <?php echo $error_input_css ?> ' value='<?php Gral::_echoTxt($txt_codigo_interno) ?>' size='50' />
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Marca') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(true),'...'), $cmb_ins_marca_id, 'textbox selective-input-filtro'); ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Categoria') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(true),'...'), $cmb_ins_categoria_id, 'textbox selective-input-filtro'); ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Tipo') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_ins_tipo_insumo_id', Gral::getCmbFiltro(InsTipoInsumo::getInsTipoInsumosCmb(true),'...'), $cmb_ins_tipo_insumo_id, 'textbox'); ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Etiqueta') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_ins_etiqueta_id', Gral::getCmbFiltro(InsEtiqueta::getInsEtiquetasCmb(), '...'), $cmb_ins_etiqueta_id, 'textbox selective-input-filtro'); ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Habilitado') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_estado, 'textbox'); ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Marca Vehiculo') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_veh_marca_id', Gral::getCmbFiltro(VehMarca::getVehMarcasCmb(),'...'), $cmb_veh_marca_id, 'textbox selective-input-filtro'); ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Modelo Vehiculo') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_veh_modelo_id', Gral::getCmbFiltro(VehModelo::getVehModelosCmb(),'...'), $cmb_veh_modelo_id, 'textbox selective-input-filtro'); ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Unidad Medida') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_ins_unidad_medida_id', Gral::getCmbFiltro(InsUnidadMedida::getInsUnidadMedidasCmb(), '...'), $cmb_ins_unidad_medida_id, 'textbox selective-input-filtro'); ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Tipo Fabricante') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_ins_tipo_fabricante_id', Gral::getCmbFiltro(InsTipoFabricante::getInsTipoFabricantesCmb(), '...'), $cmb_ins_tipo_fabricante_id, 'textbox selective-input-filtro'); ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Tipo Iva Compra') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_gral_tipo_iva_compra', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), $cmb_gral_tipo_iva_compra, 'textbox '); ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Tipo Iva Venta') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_gral_tipo_iva_venta', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), $cmb_gral_tipo_iva_venta, 'textbox '); ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Venta Web') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_venta_web', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_venta_web, 'textbox'); ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Venta ML') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_venta_mercadolibre', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_venta_mercadolibre, 'textbox'); ?>
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
                                    inputField: 'txt_creado_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_creado_hasta', onUpdate: function (){
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