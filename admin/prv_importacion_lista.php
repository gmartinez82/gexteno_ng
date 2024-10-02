<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';
session_start();

$db_nombre_objeto = 'prv_importacion_lista';
$db_nombre_pagina = 'prv_importacion_lista';

$id = Gral::getVars(2, 'id', 0);
$tab = Gral::getVars(2, 'tab', 0);

$prv_importacion = PrvImportacion::getOxId($id);
if ($prv_importacion) {
    $prv_importacion_resultados = $prv_importacion->getPrvImportacionResultadosOrdenados();
    //Gral::prr($prv_importacion_resultados);
} else {
    
}

//$prv_proveedors = PrvProveedor::getPrvProveedors();
//$ins_marcas = InsMarca::getInsMarcas();
Gral::setSes('web_ins_marca_id', 0);
Gral::setSes('web_pieza_id', 0);
Gral::setSes('descuento', 0);
Gral::setSes('prv_proveedor_id', 0);
Gral::setSes('prv_importacion_id', 0);
?>
<?php include 'parciales/head_importacion_lista.php' ?>


<body class="<?php echo Gral::getConfig('cont_entorno') ?>">

    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PrvImportacionLista') ?> </div>
        <div class='contenedor central'>

            <div id="div_prv_importacion_lista" class="div_listado_datosx" modulo="prv_importacion_lista">
                <div id="tabs" select="<?php echo $tab ?>">

                    <ul>
                        <li><a href="#tabs-1"><?php Gral::_echoTxt("1 - Seleccion de Archivo") ?></a></li>
                        <li><a href="#tabs-2"><?php Gral::_echoTxt("2 - Configurar Columnas") ?></a></li>
                        <li><a href="#tabs-3"><?php Gral::_echoTxt("3 - Tablero de Control") ?></a></li>
                        <li><a href="#tabs-5"><?php Gral::_echoTxt("4 - Resultado de Proceso") ?></a></li>
                    </ul>
                    <div id="tabs-1"></div>
                    <div id="tabs-2"></div>
                    <div id="tabs-3">
                        <div class="div_listado_buscador" modulo="prv_importacion_lista">
                            <?php include 'ajax/modulos/prv_importacion_lista/prv_importacion_lista_buscador_top.php' ?>
                        </div>

                        <div class="div_listado_datos" modulo="prv_importacion_lista"></div>                        

                    </div>
                    <div id="tabs-4"></div>
                    <div id="tabs-5">
                        <?php include Gral::getPathAbs() . "admin/ajax/modulos/prv_importacion_lista/prv_insumo_tab_5_resultados.php" ?>                        
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    <div class="div_modal"></div>
    <div class="div_modal_descripcion_matriz"></div>

    <?php if ($user->getUsuario() == "admin") { ?>
        <div class="div_modal_debug_tab_3"></div>
    <?php } ?>

</body>
</html>



