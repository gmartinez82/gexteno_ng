<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'nov_novedad_us_grupo';
$db_nombre_pagina = 'nov_novedad_us_grupo_adm';


$criterio = new Criterio(NovNovedadUsGrupo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NovNovedadUsGrupo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(NovNovedadUsGrupo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = NovNovedadUsGrupo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$nov_novedad_us_grupos = NovNovedadUsGrupo::getNovNovedadUsGruposDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('NovNovedadUsGrupos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="nov_novedad_us_grupo">
              <?php include 'ajax/modulos/nov_novedad_us_grupo/nov_novedad_us_grupo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="nov_novedad_us_grupo">
              <?php //include 'ajax/modulos/nov_novedad_us_grupo/nov_novedad_us_grupo_datos.php' ?>
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
    refreshAdmAll('nov_novedad_us_grupo', <?php echo $pagina_actual ?>);
</script>

