<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prv_proveedor_ins_marca';
$db_nombre_pagina = 'prv_proveedor_ins_marca_adm';


$criterio = new Criterio(PrvProveedorInsMarca::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvProveedorInsMarca::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PrvProveedorInsMarca::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PrvProveedorInsMarca::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$prv_proveedor_ins_marcas = PrvProveedorInsMarca::getPrvProveedorInsMarcasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PrvProveedorInsMarcas') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="prv_proveedor_ins_marca">
              <?php include 'ajax/modulos/prv_proveedor_ins_marca/prv_proveedor_ins_marca_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="prv_proveedor_ins_marca">
              <?php //include 'ajax/modulos/prv_proveedor_ins_marca/prv_proveedor_ins_marca_datos.php' ?>
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
    refreshAdmAll('prv_proveedor_ins_marca', <?php echo $pagina_actual ?>);
</script>

