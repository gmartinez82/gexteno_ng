<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'veh_marca_imagen';
$db_nombre_pagina = 'veh_marca_imagen_adm';


$criterio = new Criterio(VehMarcaImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VehMarcaImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(VehMarcaImagen::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = VehMarcaImagen::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$veh_marca_imagens = VehMarcaImagen::getVehMarcaImagensDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VehMarcaImagens') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="veh_marca_imagen">
              <?php include 'ajax/modulos/veh_marca_imagen/veh_marca_imagen_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="veh_marca_imagen">
              <?php //include 'ajax/modulos/veh_marca_imagen/veh_marca_imagen_datos.php' ?>
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
    refreshAdmAll('veh_marca_imagen', <?php echo $pagina_actual ?>);
</script>

