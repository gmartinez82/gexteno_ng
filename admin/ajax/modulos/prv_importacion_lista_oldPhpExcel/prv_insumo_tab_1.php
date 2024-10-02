<?php
include "_autoload.php";
session_start();
?>

<h4>Seleccione el archivo desde donde importar la lista de precios e indique el proveedor correspondiente.</h4>
<form action="" method="POST" enctype="multipart/form-data" name="formulario" id="formulario">

    <div class="par">
        <div class="label"><?php Gral::_echoTxt("Proveedor") ?>: </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), 0, 'textbox ' . $error_input_css) ?>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echoTxt("Convenio Descuento") ?>: </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_prv_convenio_descuento_id', Gral::getCmbFiltro(PrvConvenioDescuento::getPrvConvenioDescuentosCmb(), '...'), 0, 'textbox ' . $error_input_css) ?>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echo("Marca") ?>: </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), 0, 'textbox ' . $error_input_css) ?>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echo("Marca de Fabrica o Pieza (Original)") ?>: </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_pieza_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), 0, 'textbox ' . $error_input_css) ?>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echo("Descuento") ?>: </div>
        <div class="dato">
            <input type="text" id="descuento" name="descuento" class="textbox" />
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echo("Seleccione Archivo") ?>: </div>
        <div class="dato">
            <input type="file" id="archivo_excel" class="textbox" >
        </div>
    </div>

</form>

<div class="restablecer">
    <?php include "prv_bloque_importaciones_activas.php" ?>
</div>

<div class="botonera botonera-siguiente">
    <a class="boton" id="siguiente_tabs_2" href="#" >Siguiente</a>
</div>
