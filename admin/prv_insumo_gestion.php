<?php

include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = "prv_insumo_gestion";
$db_nombre_pagina = "prv_insumo_gestion";


$criterio = new Criterio(PrvInsumo::SES_CRITERIOS);
$criterio->addTabla('prv_insumo');
$criterio->addOrden('prv_insumo.id', 'desc');
$criterio->setCriterios();


$pagina_actual = PrvInsumo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

$prv_insumos = PrvInsumo::getPrvInsumosDesdeBackend($paginador, $criterio);

?>

<?php include "parciales/head.php"; ?>

<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>
    
    <div id='menu'><?php include 'parciales/menuh.php' ?></div>
    
    <div id='cuerpo'>
        
        <div class='adm_cuerpo_titulo'>
            <?php Lang::_lang('Buscador de Insumos de Proveedores') ?>
        </div>
        
        <div class='contenedor central'>
            
            <div class="div_listado_buscador" modulo="prv_insumo_gestion">
                <?php include 'ajax/modulos/prv_insumo_gestion/prv_insumo_gestion_buscador_top.php' ?>
            </div>
            
            <div class="div_listado_datos" modulo="prv_insumo_gestion">
                <?php //include 'ajax/modulos/prv_insumo/prv_insumo_datos.php' ?>
            </div>
            
            <br/>
            
        </div>
    
    </div>
    
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    <div class="div_modal"></div>

</body>

</html>

<script type="text/javascript">
	<?php Gral::_echo($mi_hash) ?>
	refreshAdmAll("prv_insumo_gestion", <?php echo $pagina_actual ?>);
</script>

