<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_comisionista';
$db_nombre_pagina = 'vta_comisionista_adm';


$criterio = new Criterio(VtaComisionista::SES_CRITERIOS);
$criterio->addTabla('vta_comisionista');
$criterio->setCriteriosInicial();


$pagina_actual = VtaComisionista::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

$vta_comisionistas = VtaComisionista::getVtaComisionistasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>


<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaComisionista') ?> </div>
          <div class='contenedor central'>

            <div class='ubicacion'>
                <label class='actual'>
                <?php Lang::_lang('Administracion de') ?> <?php Lang::_lang('VtaComisionista') ?></label> <br />
                 | <a href='_sitemap.php' title='<?php Lang::_lang('Ir al Menu') ?>'><img src='imgs/btn_sitemap.png' height='15' border='0' align='absmiddle'></a> | <a href='index.php' title='<?php Lang::_lang('Ir al Inicio') ?>'><img src='imgs/btn_home.png' height='15' border='0' align='absmiddle'></a>
            </div>

            <div class="div_listado_buscador" modulo="vta_comisionista">
                <?php include 'ajax/modulos/vta_comisionista/vta_comisionista_buscador_top.php' ?>
            </div>

            <div class="div_listado_datos" modulo="vta_comisionista">
                <?php //include 'ajax/modulos/vta_comisionista/vta_comisionista_datos.php' ?>
            </div>

            <br />

            </div>

    </div>
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    <div class="div_modal"></div>

</body>
</html>
<script type='text/javascript'>
    <?php Gral::_echo($mi_hash) ?>
    refreshAdmAll('vta_comisionista', <?php echo $pagina_actual ?>);
</script>

