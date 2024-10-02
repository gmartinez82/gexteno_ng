<?php

/**
 * @modificado_por Esteban Martinez
 * @modificado 02/11/2016
 * @modificado 04/11/2016
 * @modificado 07/11/2016
 * @modificado 15/11/2016
 */

include "_autoload.php";
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, "id");

$os_orden_servicio = OsOrdenServicio::getOxId($id);
$os_tipo_estado    = $os_orden_servicio->getOsTipoEstado();

$os_resolucion = $os_orden_servicio->getOsResolucion();
//Gral::pr("estado: ".$os_tipo_estado->getCodigo());
//Gral::pr("resoluble: ".$os_tipo_estado->getResoluble());

?>

<div class="datos" orden_servicio_id="<?php Gral::_echo($os_orden_servicio->getId()) ?>" tipo_estado_actual_id="<?php Gral::_echo($os_tipo_estado->getId()) ?>">
    
    <div class="titulo">
        <?php Lang::_lang("OsOrdenServicio") ?>: 
        <strong>
            <?php Gral::_echo($os_orden_servicio->getCodigo()) ?>
        </strong>
    </div>
    
    <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_GESTION_ACCION_REGISTRAR_NOTIFICADO')){ ?>
    <?php if($os_tipo_estado->getCodigo() == OsTipoEstado::TIPO_GENERADO): ?>
    <div class="uno estado notificado">
        <img class="icono" src="imgs/os_tipo_estado/<?php Gral::_echo(OsTipoEstado::TIPO_NOTIFICADO); ?>.png" width="15" alt="tipo-estado-actual" align="absmiddle">
    	<?php Lang::_lang("Registrar"); ?>
        <strong><?php Gral::_echo("NOTIFICACION"); ?></strong>
    </div>
    <?php endif; ?>
    <?php } ?>
    
    <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_GESTION_ACCION_REGISTRAR_DESCARGO')){ ?>
    <?php if($os_tipo_estado->getCodigo() == OsTipoEstado::TIPO_NOTIFICADO || $os_tipo_estado->getCodigo() == OsTipoEstado::TIPO_NOTIFICADO_SIN_DESCARGO): ?>
    <div class="uno estado notificado_con_descargo">
        <img class="icono" src="imgs/os_tipo_estado/<?php Gral::_echo(OsTipoEstado::TIPO_DESCARGO_REALIZADO); ?>.png" width="15" alt="tipo-estado-actual" align="absmiddle">
    	<?php Lang::_lang("Registrar"); ?>
        <strong><?php Gral::_echo("DESCARGO"); ?></strong>
    </div>
    <?php endif; ?>
    <?php } ?>
    
    <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_GESTION_ACCION_REGISTRAR_RESOLUCION')){ ?>
    <?php if($os_tipo_estado->getResoluble()): ?>
    <div class="uno resolucion">
        <img class="icono" src="imgs/os_tipo_estado/<?php Gral::_echo(OsTipoEstado::TIPO_RESUELTO); ?>.png" width="15" alt="tipo-estado-actual" align="absmiddle">
    	<?php Lang::_lang("Registrar"); ?>
        <strong><?php Gral::_echo("RESOLUCION"); ?></strong>
    </div>
    <?php endif; ?>
    <?php } ?>
    
    <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_GESTION_ACCION_MODIFICAR_RESOLUCION')){ ?>
    <?php if($os_resolucion): ?>
    <?php if($os_tipo_estado->getCodigo() == OsTipoEstado::TIPO_RESUELTO): ?>
    <div class="uno resolucion">
        <img class="icono" src="imgs/btn_modi.gif" width="15" alt="tipo-estado-actual" align="absmiddle">
    	<?php Lang::_lang("Modificar"); ?>
        <strong><?php Gral::_echo("RESOLUCION"); ?></strong>
    </div>
    <?php endif; ?>
    <?php endif; ?>
    <?php } ?>
    
    <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_GESTION_ACCION_REGISTRAR_ARCHIVO')){ ?>
    <?php if($os_tipo_estado->getResoluble()): ?>
    <div class="uno estado archivo">
        <img class="icono" src="imgs/os_tipo_estado/<?php Gral::_echo(OsTipoEstado::TIPO_ARCHIVADO); ?>.png" width="15" alt="tipo-estado-actual" align="absmiddle">
    	<?php Lang::_lang("Registrar"); ?>
        <strong><?php Gral::_echo("ARCHIVO"); ?></strong>
    </div>    
    <?php endif; ?>
    <?php } ?>
    
    <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_GESTION_ACCION_REGISTRAR_RESOLUCION_NOTIFICADA')){ ?>
    <?php if($os_tipo_estado->getCodigo() == OsTipoEstado::TIPO_RESUELTO): ?>
    <div class="uno estado resuelto_notificado">
        <img class="icono" src="imgs/os_tipo_estado/<?php Gral::_echo(OsTipoEstado::TIPO_RESUELTO_NOTIFICADO); ?>.png" width="15" alt="tipo-estado-actual" align="absmiddle">
    	<?php Lang::_lang("Resolucion Notificada"); ?>
    </div>
    <?php endif; ?>
    <?php } ?>
    
    <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_GESTION_ACCION_FICHA_PDF')): ?>
    <div class="uno ficha pdf">
        <a href="<?php Gral::getPath('path_http') ?>ajax/modulos/os_orden_servicio_gestion/pdf_orden_servicio_ficha.php?os_id=<?php echo $os_orden_servicio->getId() ?>" target="_blank">
            <img class="icono" src="imgs/btn_pdf.png" width='17' border='0' />
            <?php Lang::_lang("PDF Ficha"); ?>
        </a>
    </div>
    <?php endif; ?>   

    <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_GESTION_ACCION_FICHA_PDF_RESOLUCION')){ ?>
    <?php if($os_resolucion): ?>
    <div class="uno ficha pdf">
        <a href="<?php Gral::getPath('path_http') ?>ajax/modulos/os_orden_servicio_gestion/pdf_orden_servicio_resolucion.php?os_id=<?php echo $os_orden_servicio->getId() ?>&resolucion_id=<?php echo $os_resolucion->getId() ?>" target="_blank">
            <img class="icono" src="imgs/btn_pdf.png" width='17' border='0' />
            <?php Lang::_lang(" PDF Resolucion"); ?>
        </a>
    </div>
    <?php endif; ?>
    <?php } ?>
    
</div>