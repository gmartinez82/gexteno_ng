<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'cntb_tipo_clasificacion';
$db_nombre_pagina = 'cntb_tipo_clasificacion_adm';


$criterio = new Criterio(CntbTipoClasificacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbTipoClasificacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(CntbTipoClasificacion::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = CntbTipoClasificacion::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$cntb_tipo_clasificacions = CntbTipoClasificacion::getCntbTipoClasificacionsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('CntbTipoClasificacions') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="cntb_tipo_clasificacion">
              <?php include 'ajax/modulos/cntb_tipo_clasificacion/cntb_tipo_clasificacion_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="cntb_tipo_clasificacion">
              <?php //include 'ajax/modulos/cntb_tipo_clasificacion/cntb_tipo_clasificacion_datos.php' ?>
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
    refreshAdmAll('cntb_tipo_clasificacion', <?php echo $pagina_actual ?>);
</script>

