<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_tipo_recibo';
$db_nombre_pagina = 'pde_tipo_recibo_adm';


$criterio = new Criterio(PdeTipoRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeTipoRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PdeTipoRecibo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PdeTipoRecibo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pde_tipo_recibos = PdeTipoRecibo::getPdeTipoRecibosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeTipoRecibo') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="pde_tipo_recibo">
              <?php include 'ajax/modulos/pde_tipo_recibo/pde_tipo_recibo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="pde_tipo_recibo">
              <?php //include 'ajax/modulos/pde_tipo_recibo/pde_tipo_recibo_datos.php' ?>
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
    refreshAdmAll('pde_tipo_recibo', <?php echo $pagina_actual ?>);
</script>

