<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ins_insumo_vinculado';
$db_nombre_pagina = 'ins_insumo_vinculado_adm';


$criterio = new Criterio(InsInsumoVinculado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoVinculado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(InsInsumoVinculado::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = InsInsumoVinculado::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$ins_insumo_vinculados = InsInsumoVinculado::getInsInsumoVinculadosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('InsInsumoVinculados') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="ins_insumo_vinculado">
              <?php include 'ajax/modulos/ins_insumo_vinculado/ins_insumo_vinculado_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="ins_insumo_vinculado">
              <?php //include 'ajax/modulos/ins_insumo_vinculado/ins_insumo_vinculado_datos.php' ?>
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
    refreshAdmAll('ins_insumo_vinculado', <?php echo $pagina_actual ?>);
</script>

