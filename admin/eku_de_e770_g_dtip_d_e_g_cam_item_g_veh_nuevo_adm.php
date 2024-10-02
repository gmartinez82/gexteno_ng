<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo';
$db_nombre_pagina = 'eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_adm';


$criterio = new Criterio(EkuDeE770GDtipDEGCamItemGVehNuevo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE770GDtipDEGCamItemGVehNuevo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = EkuDeE770GDtipDEGCamItemGVehNuevo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevos = EkuDeE770GDtipDEGCamItemGVehNuevo::getEkuDeE770GDtipDEGCamItemGVehNuevosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeE770GDtipDEGCamItemGVehNuevos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo">
              <?php include 'ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo">
              <?php //include 'ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_datos.php' ?>
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
    refreshAdmAll('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo', <?php echo $pagina_actual ?>);
</script>

