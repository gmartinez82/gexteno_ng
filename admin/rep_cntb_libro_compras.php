<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'rep_cntb_libro_compras';
$db_nombre_pagina = 'rep_cntb_libro_compras';

if (Gral::esPost()) {

    $btn_enviar_xls = Gral::getVars(1, 'btn_enviar_xls', '');
    $btn_enviar_pdf = Gral::getVars(1, 'btn_enviar_pdf', '');
    
    $cmb_filtro_gral_empresa_id = Gral::getVars(1, 'cmb_filtro_gral_empresa_id', 0);
    $cmb_filtro_prv_proveedor_id = Gral::getVars(1, 'cmb_filtro_prv_proveedor_id', 0);
    $cmb_filtro_gral_mes_id = Gral::getVars(1, 'cmb_filtro_gral_mes_id', "");
    $cmb_filtro_anio = Gral::getVars(1, 'cmb_filtro_anio', "");
    
    if($btn_enviar_xls != ''){
        include "rep_cntb_libro_compras_xlsx.php";
    }elseif($btn_enviar_pdf != ''){
        include "rep_cntb_libro_compras_pdf.php";        
    }
} else {

    $cmb_filtro_gral_mes_id = date('m');
    $cmb_filtro_anio = date('Y');
    
}
?>

<?php include 'parciales/head.php' ?>

<body>
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>
    <div id='menu'><?php include 'parciales/menuh.php' ?></div>
    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('Comprobantes de Compras') ?> </div>
        <div class='contenedor central reportes'>
            <br />	
            <br />	
            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">

                    <div class="titulo">
                        <?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('Libro de Compras') ?>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Empresa') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(true), '...'), $cmb_filtro_gral_empresa_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Proveedor') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_filtro_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(true), '...'), $cmb_filtro_prv_proveedor_id, 'textbox') ?>
                        </div>
                    </div>

                    <div class="agrupador">
                        
                        <div class="agrupador-titulo">Periodos Fiscales</div>
                        <div class="agrupador-subtitulo">Periodo Fiscal al que fue vinculado el comprobante</div>
                        
                        <div class="par">
                            <div class="label"><?php Lang::_lang('Mes') ?></div>
                            <div class="dato">
                                <?php Html::html_dib_select(1, 'cmb_filtro_gral_mes_id', Gral::getCmbFiltro(GralMes::getGralMessCmb(true), '...'), $cmb_filtro_gral_mes_id, 'textbox') ?>
                            </div>
                        </div>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Anio') ?></div>
                            <div class="dato">
                                <?php Html::html_dib_select(1, 'cmb_filtro_anio', Gral::getCmbFiltro(Gral::getAniosCmb(3), '...'), $cmb_filtro_anio, 'textbox') ?>
                            </div>
                        </div>
                    </div>

                    <div class="botonera">
                        <input id="btn_enviar_xls" name="btn_enviar_xls" class="boton" type="submit" value="<?php Lang::_lang('Libro de Compras en Excel') ?>" />
                        <input id="btn_enviar_pdf" name="btn_enviar_pdf" class="boton" type="submit" value="<?php Lang::_lang('Libro de Compras en PDF') ?>" />
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