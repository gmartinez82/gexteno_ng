<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'afip_citi_compras_importaciones';
$db_nombre_pagina = 'afip_citi_compras_importaciones_adm';


$criterio = new Criterio(AfipCitiComprasImportaciones::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AfipCitiComprasImportaciones::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(AfipCitiComprasImportaciones::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = AfipCitiComprasImportaciones::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$afip_citi_compras_importacioness = AfipCitiComprasImportaciones::getAfipCitiComprasImportacionessDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('AfipCitiComprasImportacioness') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="afip_citi_compras_importaciones">
              <?php include 'ajax/modulos/afip_citi_compras_importaciones/afip_citi_compras_importaciones_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="afip_citi_compras_importaciones">
              <?php //include 'ajax/modulos/afip_citi_compras_importaciones/afip_citi_compras_importaciones_datos.php' ?>
          </div>

          <br />

        </div>

    </div>
    
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    
    <div class="div_modal"></div>
    <div class="div_modal_modal"></div>
    <div class="div_modal_modal_modal"></div>

</body>
</html>
<script type='text/javascript'>
    <?php Gral::_echo($mi_hash) ?>
    refreshAdmAll('afip_citi_compras_importaciones', <?php echo $pagina_actual ?>);
</script>

