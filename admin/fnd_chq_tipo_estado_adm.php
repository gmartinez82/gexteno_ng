<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'fnd_chq_tipo_estado';
$db_nombre_pagina = 'fnd_chq_tipo_estado_adm';


$criterio = new Criterio(FndChqTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndChqTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(FndChqTipoEstado::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = FndChqTipoEstado::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$fnd_chq_tipo_estados = FndChqTipoEstado::getFndChqTipoEstadosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('FndChqTipoEstado') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="fnd_chq_tipo_estado">
              <?php include 'ajax/modulos/fnd_chq_tipo_estado/fnd_chq_tipo_estado_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="fnd_chq_tipo_estado">
              <?php //include 'ajax/modulos/fnd_chq_tipo_estado/fnd_chq_tipo_estado_datos.php' ?>
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
    refreshAdmAll('fnd_chq_tipo_estado', <?php echo $pagina_actual ?>);
</script>

