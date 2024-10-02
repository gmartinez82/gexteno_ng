<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'fnd_chq_tipo_emisor';
$db_nombre_pagina = 'fnd_chq_tipo_emisor_adm';


$criterio = new Criterio(FndChqTipoEmisor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndChqTipoEmisor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(FndChqTipoEmisor::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = FndChqTipoEmisor::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$fnd_chq_tipo_emisors = FndChqTipoEmisor::getFndChqTipoEmisorsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('FndChqTipoEmisor') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="fnd_chq_tipo_emisor">
              <?php include 'ajax/modulos/fnd_chq_tipo_emisor/fnd_chq_tipo_emisor_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="fnd_chq_tipo_emisor">
              <?php //include 'ajax/modulos/fnd_chq_tipo_emisor/fnd_chq_tipo_emisor_datos.php' ?>
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
    refreshAdmAll('fnd_chq_tipo_emisor', <?php echo $pagina_actual ?>);
</script>

