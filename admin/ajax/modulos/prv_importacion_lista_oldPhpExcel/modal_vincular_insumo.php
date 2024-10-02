
<link href='../../../../css/admin/general.css' rel='stylesheet' type='text/css' />
<link rel='stylesheet' type='text/css' href='../../../../css/admin/modulos/prv_importacion_lista.css' />

<?php
include "_autoload.php";
session_start();
require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php');
require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel/Reader/Excel2007.php');

$row = Gral::getVars(2, 'identificador', 0);

$nombre_archivo = Gral::getSes('nombre_archivo');
$path_destino = Gral::getPathAbs() . 'excel/tab_3/' . $nombre_archivo;

include 'prv_insumo_variables_cabecera.php';

$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objReader->setReadDataOnly(false);

if (file_exists($path_destino)) {
    $objPHPExcel = $objReader->load($path_destino);
    $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);

    $codigo_proveedor = $objWorksheet->getCellByColumnAndRow($col_codigo_proveedor, $row)->getValue();
    $codigo_marca = $objWorksheet->getCellByColumnAndRow($col_codigo_marca, $row)->getValue();
    $marca_id = $objWorksheet->getCellByColumnAndRow($col_marca_id, $row)->getValue();
    $codigo_pieza = $objWorksheet->getCellByColumnAndRow($col_codigo_pieza, $row)->getValue();
    $pieza_id = $objWorksheet->getCellByColumnAndRow($col_pieza_id, $row)->getValue();
    $descripcion = $objWorksheet->getCellByColumnAndRow($col_descripcion, $row)->getValue();
    
    // insumos sugeridos
    $ins_insumos = InsInsumo::getInsInsumosSugeridos($descripcion, $codigo_marca, $codigo_proveedor);

    // matrices sugeridas
    $ins_matrizs = InsMatriz::getInsInsumosSugeridos($descripcion, $codigo_pieza);
}
?>

<div class="vinculacion-sugerencia">
    <input type="hidden" name="fila" id="fila" value="<?php echo $row; ?>">
    
    <div class="bloque sugerencias">

        <h3>Sugerencias encontradas</h3>

        <div class="datos">
            

            <?php
            if ($ins_insumos) {
                ?>
                <h4><?php echo count($ins_insumos) ?> Insumos existentes sugeridos</h4>
                <?php foreach ($ins_insumos as $ins_insumo) { ?>
                    <div class="uno insumo btn_asignar_insumo" insumo_id="<?php echo $ins_insumo->getId() ?>">

                        <div class="avatar">
                            <a href="<?php echo $ins_insumo->getPathImagenPrincipal() ?>" title="<?php Gral::_echo($ins_insumo->getDescripcion()) ?>">
                                <img src="<?php echo $ins_insumo->getPathImagenPrincipal(true) ?>" alt="img-prd" />
                            </a>
                        </div>

                        <div class="info-insumo">
                            <div class="codigo">ID #<?php Gral::_echo($ins_insumo->getId()) ?></div>
                            <div class="codigo">Cod Int: <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?></div>
                            <div class="descripcion"><?php Gral::_echo($ins_insumo->getDescripcion()) ?></div>
                            <div class="marca">Marca: <?php Gral::_echo($ins_insumo->getInsMarca()->getDescripcion()) ?> - <?php Gral::_echo($ins_insumo->getCodigoMarca()) ?></div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?> 

            <?php
            if ($ins_matrizs) {
                ?>
                <h4><?php echo count($ins_matrizs) ?> Matrices existentes sugeridas</h4>
                <?php foreach ($ins_matrizs as $ins_matriz) { ?>
                    <div class="uno matriz btn_asignar_matriz" matriz_id="<?php echo $ins_matriz->getId() ?>">

                        <div class="avatar">
                            <a href="<?php echo $ins_matriz->getPathImagenPrincipal() ?>" title="<?php Gral::_echo($ins_matriz->getDescripcion()) ?>">
                                <img src="<?php echo $ins_matriz->getPathImagenPrincipal(true) ?>" alt="img-prd" />
                            </a>
                        </div>

                        <div class="info-insumo">
                            <div class="codigo">Matriz ID #<?php Gral::_echo($ins_matriz->getId()) ?></div>
                            <div class="descripcion"><?php Gral::_echo($ins_matriz->getDescripcion()) ?></div>
                            <div class="marca">OEM: <?php Gral::_echo($ins_matriz->getInsMarca()->getDescripcion()) ?> - <?php Gral::_echo($ins_matriz->getCodigoPieza()) ?></div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?> 
        </div>
    </div>

    <div class="bloque insumos">
        <h3>Buscar en Insumos</h3>

        <div class="buscador">
            <input type="text" id="busqueda_insumo" placeholder="Escriba palabras para buscar en insumos" size="45" />
            <div class="comentario">Presione ENTER para buscar</div>
        </div>

        <div class="datos">
            <div id="resultado_insumo"></div>
        </div>        
    </div>

    <div class="bloque matrices">
        <h3>Buscar en Matriz de Insumos</h3>

        <div class="buscador">
            <input type="text" id="busqueda_matriz" placeholder="Escriba palabras para buscar en matrices" size="45" />
            <div class="comentario">Presione ENTER para buscar</div>
        </div>

        <div class="datos">
            <div id="resultado_matriz"></div>
        </div>        
    </div>

    <div class="botonera">
        <button class="boton" id="crear_insumo">Crear un Nuevo Insumo</button>
        <button class="boton" id="desvincular_insumo">Desvincular Insumo</button>
        <button class="boton" id="cerrar_modal">Cerrar Pantalla</button>
    </div>
    
</div>
