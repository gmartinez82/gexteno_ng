<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = "rep_pde_nota_debito";
$db_nombre_pagina = "rep_pde_nota_debito";

if (Gral::esPost())
{
    $txt_filtro_desde                    = Gral::getVars(1, 'txt_filtro_desde', "");
    $txt_filtro_hasta                    = Gral::getVars(1, 'txt_filtro_hasta', "");
    $cmb_filtro_prv_proveedor_id         = Gral::getVars(1, 'cmb_filtro_prv_proveedor_id', 0);
    $cmb_filtro_pde_tipo_nota_credito_id = Gral::getVars(1, 'cmb_filtro_pde_tipo_nota_credito_id', 0);
    $cmb_filtro_gral_condicion_iva_id    = Gral::getVars(1, 'cmb_filtro_gral_condicion_iva_id', 0);
    $cmb_filtro_gral_empresa_id          = Gral::getVars(1, 'cmb_filtro_gral_empresa_id', 0);
    
    include "rep_pde_nota_debito_xlsx.php";
}
else
{
    //$txt_desde = '';
    //$txt_hasta = '';
    $txt_filtro_desde = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), -7));
    $txt_filtro_hasta = date('d/m/Y');
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
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PDE Nota Debito') ?> </div>
        <div class='contenedor central reportes'>
            <br />	
            <br />
            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">
                    <div class="titulo"><?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('Lista de PdeNotaDebito') ?></div>
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Proveedor') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(true), '...'), $cmb_filtro_prv_proveedor_id, 'textbox') ?>
                        </div>
                    </div>
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Tipo de Nota de Credito') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_pde_tipo_nota_credito_id', Gral::getCmbFiltro(PdeTipoNotaCredito::getPdeTipoNotaCreditosCmb(true), '...'), $cmb_filtro_pde_tipo_nota_credito_id, 'textbox') ?>
                        </div>
                    </div>
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Condicion Iva') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(true), '...'), $cmb_filtro_gral_condicion_iva_id, 'textbox') ?>
                        </div>
                    </div>
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Empresa Facturadora') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(true), '...'), $cmb_filtro_gral_empresa_id, 'textbox') ?>
                        </div>
                    </div>
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Desde') ?></div>
                        <div class="dato">
                            <input id="txt_filtro_desde" name="txt_filtro_desde" value="<?php echo $txt_filtro_desde; ?>" size="10" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
                            <input type="button" id="cal_txt_filtro_desde" value=" ... ">
                            <script type='text/javascript'>
                                Calendar.setup({
                                    inputField: 'txt_filtro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_desde',onUpdate: function(){
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
                                    inputField: 'txt_filtro_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_hasta',onUpdate: function(){
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