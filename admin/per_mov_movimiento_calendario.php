<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$user = UsUsuario::autenticado();

$db_nombre_objeto = 'per_mov_movimiento_calendario';
$db_nombre_pagina = 'per_mov_movimiento_calendario';

PerPersona::setSesFiltroFechaDesde(Date::sumarDias(date('Y-m-d'), -7));

$criterio = new Criterio(PerPersona::SES_CRITERIOS);
$criterio->setWhereInit(true);
$criterio->addTabla(PerPersona::GEN_TABLA);
$criterio->addOrden(PerPersona::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
$criterio->setCriteriosInicial();

$pagina_actual = PerPersona::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

$per_personas = PerPersona::getPerPersonasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>

<script type="text/javascript" src="../js/admin/adm.js"></script>

<script src="../comps/rowspanizer/jquery.rowspanizer.min.js"></script>

<body>
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('Calendario de Movimientos') ?> </div>
        <div class='contenedor central'>
            
            <div class="div_listado_buscador" modulo="per_mov_movimiento_calendario">
                <?php include 'ajax/modulos/per_mov_movimiento_calendario/per_mov_movimiento_calendario_buscador_top.php' ?>
            </div>
            
            <?php if(false){ ?>
                <div class="div_listado_acciones" modulo="trf_pln_calendario_choferes">
                    <?php include Gral::getPathAbs().'admin/ajax/modulos/per_mov_movimiento_calendario/per_mov_movimiento_calendario_acciones_masivas.php'  ?>
                </div>
            <?php } ?>
            
            <div class="div_listado_datos" modulo="per_mov_movimiento_calendario">
                <?php //include 'ajax/modulos/per_mov_movimiento_calendario/per_mov_movimiento_calendario_datos.php'  ?>
            </div>
            
            <br />
        </div>
    </div>
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    <div class="div_modal"></div>
    <div class="div_modal_modal">
</body>
</html>
<script type='text/javascript'>
<?php Gral::_echo($mi_hash) ?>
    refreshAdmAll('per_mov_movimiento_calendario', <?php echo $pagina_actual ?>);
</script>