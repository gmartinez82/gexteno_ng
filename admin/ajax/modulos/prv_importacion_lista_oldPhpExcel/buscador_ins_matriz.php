<?php
include "_autoload.php";

$buscar_insumo = Gral::getVars(1, 'buscar_insumo', 0);
$buscar_matriz = Gral::getVars(1, 'buscar_matriz', 0);

if (!empty($buscar_insumo)) {
    $ins_insumos = buscarInsumo($buscar_insumo);
}
if (!empty($buscar_matriz)) {
    $ins_matrizs = buscarMatriz($buscar_matriz);
}

function buscarInsumo($txt_buscador) {
    $criterio_insumo = new Criterio();
    $criterio_insumo->setAmbiguo(true);
    $criterio_insumo->add(InsInsumo::GEN_ATTR_ID, (int) $txt_buscador, Criterio::IGUAL, false, Criterio::_OR);
    $criterio_insumo->add(InsInsumo::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_insumo->add(InsInsumo::GEN_ATTR_CODIGO_MARCA, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_insumo->addTabla(InsInsumo::GEN_TABLA);
    $criterio_insumo->setCriterios();

    $ins_insumos = InsInsumo::getInsInsumos($p = new Paginador(10, 1), $criterio_insumo);
    //Gral::prr($ins_insumos);
    return $ins_insumos;
}

function buscarMatriz($txt_buscador) {
    $criterio_matriz = new Criterio();
    $criterio_matriz->setAmbiguo(true);
    $criterio_matriz->add(InsMatriz::GEN_ATTR_ID, (int) $txt_buscador, Criterio::IGUAL, false, Criterio::_OR);
    $criterio_matriz->add(InsMatriz::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_matriz->add(InsMatriz::GEN_ATTR_CODIGO_PIEZA, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_matriz->addTabla(InsMatriz::GEN_TABLA);
    $criterio_matriz->setCriterios();

    $ins_matrizs = InsMatriz::getInsMatrizs($p = new Paginador(10, 1), $criterio_matriz);
    return $ins_matrizs;
}
?>

<?php
if ($ins_insumos) {
    ?>
    <h4><?php echo count($ins_insumos) ?> Insumos encontrados</h4>
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
    <h4><?php echo count($ins_matrizs) ?> Insumos encontradas</h4>
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