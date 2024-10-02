<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_vendedor_ins_tipo_lista_precio';
$db_nombre_pagina = 'vta_vendedor_ins_tipo_lista_precio_adm';


$criterio = new Criterio(VtaVendedorInsTipoListaPrecio::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaVendedorInsTipoListaPrecio::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(VtaVendedorInsTipoListaPrecio::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = VtaVendedorInsTipoListaPrecio::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$vta_vendedor_ins_tipo_lista_precios = VtaVendedorInsTipoListaPrecio::getVtaVendedorInsTipoListaPreciosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaVendedorInsTipoListaPrecio') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="vta_vendedor_ins_tipo_lista_precio">
              <?php include 'ajax/modulos/vta_vendedor_ins_tipo_lista_precio/vta_vendedor_ins_tipo_lista_precio_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="vta_vendedor_ins_tipo_lista_precio">
              <?php //include 'ajax/modulos/vta_vendedor_ins_tipo_lista_precio/vta_vendedor_ins_tipo_lista_precio_datos.php' ?>
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
    refreshAdmAll('vta_vendedor_ins_tipo_lista_precio', <?php echo $pagina_actual ?>);
</script>

