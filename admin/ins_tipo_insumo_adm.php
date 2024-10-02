<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ins_tipo_insumo';
$db_nombre_pagina = 'ins_tipo_insumo_adm';


$criterio = new Criterio(InsTipoInsumo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsTipoInsumo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(InsTipoInsumo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = InsTipoInsumo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$ins_tipo_insumos = InsTipoInsumo::getInsTipoInsumosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('InsTipoInsumos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="ins_tipo_insumo">
              <?php include 'ajax/modulos/ins_tipo_insumo/ins_tipo_insumo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="ins_tipo_insumo">
              <?php //include 'ajax/modulos/ins_tipo_insumo/ins_tipo_insumo_datos.php' ?>
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
    refreshAdmAll('ins_tipo_insumo', <?php echo $pagina_actual ?>);
</script>

