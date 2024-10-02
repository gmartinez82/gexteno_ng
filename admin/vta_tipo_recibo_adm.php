<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_tipo_recibo';
$db_nombre_pagina = 'vta_tipo_recibo_adm';


$criterio = new Criterio(VtaTipoRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTipoRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(VtaTipoRecibo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = VtaTipoRecibo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$vta_tipo_recibos = VtaTipoRecibo::getVtaTipoRecibosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaTipoRecibo') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="vta_tipo_recibo">
              <?php include 'ajax/modulos/vta_tipo_recibo/vta_tipo_recibo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="vta_tipo_recibo">
              <?php //include 'ajax/modulos/vta_tipo_recibo/vta_tipo_recibo_datos.php' ?>
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
    refreshAdmAll('vta_tipo_recibo', <?php echo $pagina_actual ?>);
</script>

