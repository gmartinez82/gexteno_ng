<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ins_insumo_enviado';
$db_nombre_pagina = 'ins_insumo_enviado_adm';


$criterio = new Criterio(InsInsumoEnviado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoEnviado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(InsInsumoEnviado::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = InsInsumoEnviado::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$ins_insumo_enviados = InsInsumoEnviado::getInsInsumoEnviadosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('InsInsumoEnviados') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="ins_insumo_enviado">
              <?php include 'ajax/modulos/ins_insumo_enviado/ins_insumo_enviado_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="ins_insumo_enviado">
              <?php //include 'ajax/modulos/ins_insumo_enviado/ins_insumo_enviado_datos.php' ?>
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
    refreshAdmAll('ins_insumo_enviado', <?php echo $pagina_actual ?>);
</script>

