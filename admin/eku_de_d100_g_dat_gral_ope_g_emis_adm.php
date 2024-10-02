<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_d100_g_dat_gral_ope_g_emis';
$db_nombre_pagina = 'eku_de_d100_g_dat_gral_ope_g_emis_adm';


$criterio = new Criterio(EkuDeD100GDatGralOpeGEmis::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeD100GDatGralOpeGEmis::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(EkuDeD100GDatGralOpeGEmis::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = EkuDeD100GDatGralOpeGEmis::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$eku_de_d100_g_dat_gral_ope_g_emiss = EkuDeD100GDatGralOpeGEmis::getEkuDeD100GDatGralOpeGEmissDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeD100GDatGralOpeGEmiss') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="eku_de_d100_g_dat_gral_ope_g_emis">
              <?php include 'ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="eku_de_d100_g_dat_gral_ope_g_emis">
              <?php //include 'ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_datos.php' ?>
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
    refreshAdmAll('eku_de_d100_g_dat_gral_ope_g_emis', <?php echo $pagina_actual ?>);
</script>

