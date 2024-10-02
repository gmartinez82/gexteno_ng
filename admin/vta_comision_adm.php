<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_comision';
$db_nombre_pagina = 'vta_comision_adm';


$criterio = new Criterio(VtaComision::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaComision::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(VtaComision::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = VtaComision::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$vta_comisions = VtaComision::getVtaComisionsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaComisions') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="vta_comision">
              <?php include 'ajax/modulos/vta_comision/vta_comision_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="vta_comision">
              <?php //include 'ajax/modulos/vta_comision/vta_comision_datos.php' ?>
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
    refreshAdmAll('vta_comision', <?php echo $pagina_actual ?>);
</script>

