<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'os_orden_servicio_archivo';
$db_nombre_pagina = 'os_orden_servicio_archivo_adm';


$criterio = new Criterio(OsOrdenServicioArchivo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
OsOrdenServicioArchivo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(OsOrdenServicioArchivo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = OsOrdenServicioArchivo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$os_orden_servicio_archivos = OsOrdenServicioArchivo::getOsOrdenServicioArchivosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('OsOrdenServicioArchivo') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="os_orden_servicio_archivo">
              <?php include 'ajax/modulos/os_orden_servicio_archivo/os_orden_servicio_archivo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="os_orden_servicio_archivo">
              <?php //include 'ajax/modulos/os_orden_servicio_archivo/os_orden_servicio_archivo_datos.php' ?>
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
    refreshAdmAll('os_orden_servicio_archivo', <?php echo $pagina_actual ?>);
</script>

