<?php
include "_autoload.php";

$os_id             = Gral::getVars(2, "os_id", 0);
$os_orden_servicio = OsOrdenServicio::getOxId($os_id);

$os_estados     = $os_orden_servicio->getOsEstados();
$os_resolucions = $os_orden_servicio->getOsResolucions();
//$per_persona    = $os_orden_servicio->getPerPersona();  

// -----------------------------------------------------------------------------
// se determina si la OS tiene imagenes o archivos
$os_orden_servicio_imagens = $os_orden_servicio->getOsOrdenServicioImagens();
$os_orden_servicio_archivos = $os_orden_servicio->getOsOrdenServicioArchivos();

?>

<div class="tabs">
    <ul>
        <li><a href="#tab_general"><?php Lang::_lang("General") ?></a></li>
        <li><a href="#tab_estados"><?php Lang::_lang("Estados") ?></a></li>
        
        <?php if(count($os_orden_servicio_imagens) > 0){ ?>
        <li><a href="#tab_imagenes"><?php Lang::_lang("Imagenes") ?></a></li>
        <?php } ?>

        <?php if(count($os_orden_servicio_archivos) > 0){ ?>
        <li><a href="#tab_archivos"><?php Lang::_lang("Archivos") ?></a></li>
        <?php } ?>
        
        <?php if($os_orden_servicio->getOsResolucion()): ?>
        <li><a href="#tab_resolucion"><?php Lang::_lang("Resolucion") ?></a></li>
        <?php endif;?>
        
    </ul>
    
    <!-- Tab General -->
    <div id="tab_general" class="datos">
    	<?php include "modal_os_orden_servicio_gestion_ficha_general.php" ?>
    </div>
    
    <!-- Tab Estados -->
    <div id="tab_estados" class="datos">
    	<?php include "modal_os_orden_servicio_gestion_ficha_estados.php" ?>
    </div>

    <?php if(count($os_orden_servicio_imagens) > 0){ ?>
    <!-- Tab Imagenes -->
    <div id="tab_imagenes" class="datos">
    	<?php include "modal_os_orden_servicio_gestion_ficha_imagenes.php" ?>
    </div>
    <?php } ?>

    <?php if(count($os_orden_servicio_archivos) > 0){ ?>
    <!-- Tab Archivos -->
    <div id="tab_archivos" class="datos">
    	<?php include "modal_os_orden_servicio_gestion_ficha_archivos.php" ?>
    </div>
    <?php } ?>
    
    <!-- Tab Resolucion -->
    <!-- Mostrar Tab de resolucion unicamente cuando exista una resolucion -->
    <?php if($os_orden_servicio->getOsResolucion()): ?>
    <div id="tab_resolucion" class="datos">
    	<?php include "modal_os_orden_servicio_gestion_ficha_resolucion.php" ?>
    </div>
    <?php endif;?>
    
</div>