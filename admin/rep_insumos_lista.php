<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'rep_insumos_lista';
$db_nombre_pagina = 'rep_insumos_lista';

if (Gral::esPost()) {

    $cmb_ins_categoria_id = Gral::getVars(1, 'cmb_ins_categoria_id', 0);
    $cmb_ins_etiqueta_id = Gral::getVars(1, 'cmb_ins_etiqueta_id', 0);    
    $cmb_prv_proveedor_id = Gral::getVars(1, 'cmb_prv_proveedor_id', 0);    
    $cmb_estado = Gral::getVars(1, 'cmb_estado', -1);    
    $txt_descripcion = Gral::getVars(1, 'txt_descripcion', '');

    $txt_desde = Gral::getVars(1, 'txt_desde', '');
    $txt_hasta = Gral::getVars(1, 'txt_hasta', '');

    include "rep_insumos_lista_xlsx.php";
} else {

    $cmb_estado = 1;
    $txt_desde = '';
    $txt_hasta = '';
}
?>
<?php include 'parciales/head.php' ?>


<body>
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('Lista de Precios de Insumos') ?> </div>
        <div class='contenedor central reportes'>
            <br />	
            <br />
            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">
                    <div class="titulo"><?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('Lista de Precios de Insumos') ?></div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Categoria') ?></div>
                        <div class="dato"><?php Html::html_dib_select(1, 'cmb_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(), '...'), $cmb_ins_categoria_id, 'textbox') ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Proveedor') ?></div>
                        <div class="dato"><?php Html::html_dib_select(1, 'cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $cmb_prv_proveedor_id, 'textbox') ?></div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Etiqueta') ?></div>
                        <div class="dato"><?php Html::html_dib_select(1, 'cmb_ins_etiqueta_id', Gral::getCmbFiltro(InsEtiqueta::getInsEtiquetasCmb(), '...'), $cmb_ins_etiqueta_id, 'textbox') ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Producto Habilitado') ?></div>
                        <div class="dato"><?php Html::html_dib_select(1, 'cmb_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), $cmb_estado, 'textbox') ?></div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Descripcion') ?></div>
                        <div class="dato">
                            <input id="txt_descripcion" name="txt_descripcion" class="textbox" type="text" value="<?php Gral::_echo($txt_descripcion) ?>" size="20" />
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Actualizacion Costo Desde') ?></div>
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
                        <div class="label"><?php Lang::_lang('Actualizacion Costo Hasta') ?></div>
                        <div class="dato">
                            <input id="txt_hasta" name="txt_hasta" class="textbox date" type="text" value="<?php Gral::_echo($txt_hasta) ?>" size="10" />
                            <input type='button' id='cal_txt_hasta' value='...' />

                            <script type='text/javascript'>
                                Calendar.setup({
                                    inputField: 'txt_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_hasta'
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
