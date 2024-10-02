<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'per_persona_gestion';
$db_nombre_pagina = 'per_persona_gestion';


$criterio = new Criterio(PerPersona::SES_CRITERIOS);
$criterio->setWhereInit(true);
$criterio->addTabla('per_persona');
$criterio->setCriteriosInicial();


$pagina_actual = PerPersona::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

$per_personas = PerPersona::getPerPersonasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>


<body>
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PerPersonas') ?> </div>
        <div class='contenedor central'>

            <div class="div_listado_buscador" modulo="per_persona_gestion">
                <?php include 'ajax/modulos/per_persona_gestion/per_persona_gestion_buscador_top.php' ?>
                <a href="per_mov_movimiento_calendario.php"></a>
            </div>

            <div class="div_listado_datos" modulo="per_persona_gestion">
                <?php //include 'ajax/modulos/per_persona_gestion/per_persona_gestion_datos.php' ?>
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
    refreshAdmAll('per_persona_gestion', <?php echo $pagina_actual ?>);
</script>

