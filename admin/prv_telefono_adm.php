<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prv_telefono';
$db_nombre_pagina = 'prv_telefono_adm';


$criterio = new Criterio(PrvTelefono::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvTelefono::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PrvTelefono::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PrvTelefono::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$prv_telefonos = PrvTelefono::getPrvTelefonosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PrvTelefono') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="prv_telefono">
              <?php include 'ajax/modulos/prv_telefono/prv_telefono_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="prv_telefono">
              <?php //include 'ajax/modulos/prv_telefono/prv_telefono_datos.php' ?>
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
    refreshAdmAll('prv_telefono', <?php echo $pagina_actual ?>);
</script>

