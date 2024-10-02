
<?php

$pde_recibo_imagens_secundarias = $pde_recibo->getPdeReciboImagensSecundarias();
$pde_recibo_imagen_principal = $pde_recibo->getPdeReciboImagenPrincipal();
    
?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $pde_recibo->getId() ?>" modulo="pde_recibo">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
   
    <?php if ($pde_recibo_imagen_principal) { ?>
        <div class="avatar">
            <a href="<?php echo $pde_recibo_imagen_principal->getPathImagen() ?>" rel="pde_recibo_<?php echo $pde_recibo->getId() ?>" title="<?php Gral::_echo($pde_recibo_imagen_principal->getObservacion()) ?>">
                <img class="foto" src="<?php echo $pde_recibo_imagen_principal->getPathImagen(true) ?>" alt="imagen-pde_recibo" />
            </a>
        </div>

        <div class="fotos-min">
            <?php foreach ($pde_recibo_imagens_secundarias as $pde_recibo_imagen) { ?>
                <div class="foto avatar">
                    <a href="<?php echo $pde_recibo_imagen->getPathImagen() ?>" rel="pde_recibo_<?php echo $pde_recibo->getId() ?>" title="<?php Gral::_echo($pde_recibo_imagen->getObservacion()) ?>">
                        <img src="<?php echo $pde_recibo_imagen->getPathImagen(true) ?>" alt="img-prd" />
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <img src="../imgs/no-imagen.jpg" width="60" alt="img-pde_recibo" />
    <?php } ?>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($pde_recibo->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($pde_recibo->getDescripcion()) ?>
    </div>
    <?php if (count($pde_recibo->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($pde_recibo->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
                <?php if (trim($arr_descripcion_extendida['dato']) != '') { ?>
                    <div class="descripcion-extendida-uno <?php echo $i ?> ">
                        <div class="par">
                            <div class="label">
                                <?php Gral::_echo($arr_descripcion_extendida['label']) ?>            
                            </div>
                            <div class="dato">
                                <?php Gral::_echo($arr_descripcion_extendida['dato']) ?>            
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    <?php } ?>                

</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="prv_proveedor_id <?php Gral::_echo($pde_recibo->getPrvProveedor()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_recibo->getPrvProveedor()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_tipo_recibo_id <?php Gral::_echo($pde_recibo->getPdeTipoRecibo()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_recibo->getPdeTipoRecibo()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_tipo_origen_recibo_id <?php Gral::_echo($pde_recibo->getPdeTipoOrigenRecibo()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_recibo->getPdeTipoOrigenRecibo()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_condicion_iva_id <?php Gral::_echo($pde_recibo->getGralCondicionIva()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_recibo->getGralCondicionIva()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_tipo_personeria_id <?php Gral::_echo($pde_recibo->getGralTipoPersoneria()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_recibo->getGralTipoPersoneria()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_empresa_id <?php Gral::_echo($pde_recibo->getGralEmpresa()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_recibo->getGralEmpresa()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_centro_pedido_id <?php Gral::_echo($pde_recibo->getPdeCentroPedido()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_recibo->getPdeCentroPedido()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_recibo_tipo_estado_id <?php Gral::_echo($pde_recibo->getPdeReciboTipoEstado()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_recibo->getPdeReciboTipoEstado()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="cae">
            <?php Gral::_echo($pde_recibo->getCae()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fecha_emision">
            <?php Gral::_echo(Gral::getFechaToWeb($pde_recibo->getFechaEmision())) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="persona_descripcion">
            <?php Gral::_echo($pde_recibo->getPersonaDescripcion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="razon_social">
            <?php Gral::_echo($pde_recibo->getRazonSocial()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($pde_recibo->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="anio">
            <?php Gral::_echo($pde_recibo->getAnio()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_mes_id <?php Gral::_echo($pde_recibo->getGralMes()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_recibo->getGralMes()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="cntb_diario_asiento_id <?php Gral::_echo($pde_recibo->getCntbDiarioAsiento()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_recibo->getCntbDiarioAsiento()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_orden_pago_id <?php Gral::_echo($pde_recibo->getPdeOrdenPago()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_recibo->getPdeOrdenPago()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fnd_caja_id">
            <?php Gral::_echo($pde_recibo->getFndCaja()->getDescripcion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='pde_recibo_alta.php?id=<?php Gral::_echo($pde_recibo->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($pde_recibo->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($pde_recibo->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ADM_ACCION_GIMAGEN')){ ?>
	<li class='adm_botones_accion'><a href='pde_recibo_imagen_gestor.php?id=<?php Gral::_echo($pde_recibo->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'><img src='imgs/btn_album_imagenes.png' width='22' border='0' /></a></li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ADM_ACCION_GARCHIVO')){ ?>
	<li class='adm_botones_accion'><a href='pde_recibo_archivo_gestor.php?id=<?php Gral::_echo($pde_recibo->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Archivos') ?>'><img src='imgs/btn_album_archivos.png' width='19' border='0' /></a></li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_RECIBO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pde_recibo/pde_recibo_db_context_acciones.php?id=<?php Gral::_echo($pde_recibo->getId()) ?>' modulo_metodo_init="setInitPdeRecibo()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


