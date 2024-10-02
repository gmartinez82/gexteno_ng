<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_tipo_iva';
$db_nombre_pagina = 'gral_tipo_iva_adm';


$criterio = new Criterio(GralTipoIva::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralTipoIva::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(GralTipoIva::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = GralTipoIva::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$gral_tipo_ivas = GralTipoIva::getGralTipoIvasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GralTipoIvas') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="gral_tipo_iva">
              <?php include 'ajax/modulos/gral_tipo_iva/gral_tipo_iva_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="gral_tipo_iva">
              <?php //include 'ajax/modulos/gral_tipo_iva/gral_tipo_iva_datos.php' ?>
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
    refreshAdmAll('gral_tipo_iva', <?php echo $pagina_actual ?>);
</script>

