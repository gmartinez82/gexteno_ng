<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prd_orden_trabajo_gestion';
$db_nombre_pagina = 'prd_orden_trabajo_gestion';

$prd_orden_trabajo_id = Gral::getVars(Gral::VARS_GET, 'id', 0, Gral::TIPO_INTEGER);
$hdn_hash = Gral::getVars(Gral::VARS_GET, 'hash', '-', Gral::TIPO_STRING);

$prd_orden_trabajo = PrdOrdenTrabajo::getOxId($prd_orden_trabajo_id);

if ( $prd_orden_trabajo )
{
    if ( $prd_orden_trabajo->getHash() != $hash )
    {
        //header('Location: us_noautorizado.php?tipo=HASH&clase=PrdOrdenTrabajo&id='.$prd_orden_trabajo->getId().'&cod='.$hash);
        //exit;
    }

    $codigo = $prd_orden_trabajo->getCodigo();
    $insumo = $prd_orden_trabajo->getInsInsumo()->getDescripcion();
    $cantidad = $prd_orden_trabajo->getCantidad();
    $proceso_productivo = $prd_orden_trabajo->getPrdProcesoProductivo()->getDescripcion();

    $prd_orden_trabajo_ciclos = $prd_orden_trabajo->getPrdOrdenTrabajoCiclos();
}


?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'>Edicion <?php Lang::_lang('PrdOrdenTrabajos') ?> </div>
        <div class='contenedor central ot-edicion'>
            
            <!-- Cabecera -->
            <div class="ot-edicion-cabecera">
                <div class="col par">
                    <div class="label">
                        Codigo
                    </div>
                    <div class="dato">
                        <?php Gral::_echo($codigo); ?>
                    </div>
                </div>

                <div class="col par">
                    <div class="label">
                        Producto
                    </div>
                    <div class="dato">
                        <?php Gral::_echo($insumo); ?>
                    </div>
                </div>

                <div class="col par">
                    <div class="label">
                        Cantidad
                    </div>
                    <div class="dato">
                        <?php Gral::_echo($cantidad); ?>
                    </div>
                </div>
            </div>

            <!-- Ciclos -->
            <div class="ot-edicion-ciclos">
                
                <?php
                foreach ( $prd_orden_trabajo_ciclos as $prd_orden_trabajo_ciclo ):
                    $ciclo = $prd_orden_trabajo_ciclo->getDescripcion();

                    $prd_linea_produccion = $prd_orden_trabajo_ciclo->getPrdLineaProduccion();
                    $prd_orden_trabajo_operacions = $prd_orden_trabajo_ciclo->getPrdOrdenTrabajoOperacions();
                    
                    if ( $prd_linea_produccion )
                    {
                        $linea_produccion = $prd_linea_produccion->getDescripcion();
                    }
                ?>
                <div class="col ciclo ciclo-<?php echo $prd_orden_trabajo_ciclo->getId(); ?>">
                    
                    <div class="ciclo-titulo"><?php Gral::_echo($ciclo); ?></div>
                    <div class="linea-produccion-titulo"><?php Gral::_echo($linea_produccion); ?></div>

                    <div class="operacions">
                        <?php
                        foreach ( $prd_orden_trabajo_operacions as $prd_orden_trabajo_operacion )
                        {
                            //$operacion = $prd_orden_trabajo_operacion->getDescripcion();
                            $operacion_numero = $prd_orden_trabajo_operacion->getNumero();
                            $prd_param_operacion = $prd_orden_trabajo_operacion->getPrdParamOperacion();
                            
                            if ( $prd_param_operacion )
                            {
                                $operacion = $prd_param_operacion->getDescripcion();
                            }
                            
                            $prd_orden_trabajo_operacion_prd_equipos = $prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionPrdEquipos(null, null, true);
                            $prd_orden_trabajo_operacion_ope_operarios = $prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionOpeOperarios(null, null, true);
                            
                        ?>
                        
                        <div id="operacion_outer_<?php echo $prd_orden_trabajo_operacion->getId();?>" class="operacion-outer">
                            <?php include "ajax/modulos/prd_orden_trabajo_gestion/prd_orden_trabajo_edicion_bloque_operacion.php" ?>
                        </div>

                        <?php
                        }
                        ?>
                    </div>

                </div>
                <?php
                endforeach;
                ?>
           
            </div>

            <style>
                

            </style>



        </div>

    </div>
    
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    
    <div class="div_modal"></div>
    <div class="div_modal_modal"></div>
    <div class="div_modal_modal_modal"></div>

</body>
</html>
