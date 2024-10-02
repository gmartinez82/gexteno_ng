
<?php

$pde_nota_debito_imagens_secundarias = $pde_nota_debito->getPdeNotaDebitoImagensSecundarias();
$pde_nota_debito_imagen_principal = $pde_nota_debito->getPdeNotaDebitoImagenPrincipal();
    
?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $pde_nota_debito->getId() ?>" modulo="pde_nota_debito">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
   
    <?php if ($pde_nota_debito_imagen_principal) { ?>
        <div class="avatar">
            <a href="<?php echo $pde_nota_debito_imagen_principal->getPathImagen() ?>" rel="pde_nota_debito_<?php echo $pde_nota_debito->getId() ?>" title="<?php Gral::_echo($pde_nota_debito_imagen_principal->getObservacion()) ?>">
                <img class="foto" src="<?php echo $pde_nota_debito_imagen_principal->getPathImagen(true) ?>" alt="imagen-pde_nota_debito" />
            </a>
        </div>

        <div class="fotos-min">
            <?php foreach ($pde_nota_debito_imagens_secundarias as $pde_nota_debito_imagen) { ?>
                <div class="foto avatar">
                    <a href="<?php echo $pde_nota_debito_imagen->getPathImagen() ?>" rel="pde_nota_debito_<?php echo $pde_nota_debito->getId() ?>" title="<?php Gral::_echo($pde_nota_debito_imagen->getObservacion()) ?>">
                        <img src="<?php echo $pde_nota_debito_imagen->getPathImagen(true) ?>" alt="img-prd" />
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <img src="../imgs/no-imagen.jpg" width="60" alt="img-pde_nota_debito" />
    <?php } ?>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($pde_nota_debito->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($pde_nota_debito->getDescripcion()) ?>
    </div>
    <?php if (count($pde_nota_debito->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($pde_nota_debito->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="prv_proveedor_id <?php Gral::_echo($pde_nota_debito->getPrvProveedor()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_nota_debito->getPrvProveedor()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_tipo_nota_debito_id <?php Gral::_echo($pde_nota_debito->getPdeTipoNotaDebito()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_nota_debito->getPdeTipoNotaDebito()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_tipo_origen_nota_debito_id <?php Gral::_echo($pde_nota_debito->getPdeTipoOrigenNotaDebito()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_nota_debito->getPdeTipoOrigenNotaDebito()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_condicion_iva_id <?php Gral::_echo($pde_nota_debito->getGralCondicionIva()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_nota_debito->getGralCondicionIva()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_tipo_personeria_id <?php Gral::_echo($pde_nota_debito->getGralTipoPersoneria()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_nota_debito->getGralTipoPersoneria()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_empresa_id <?php Gral::_echo($pde_nota_debito->getGralEmpresa()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_nota_debito->getGralEmpresa()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_centro_pedido_id <?php Gral::_echo($pde_nota_debito->getPdeCentroPedido()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_nota_debito->getPdeCentroPedido()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_nota_debito_tipo_estado_id <?php Gral::_echo($pde_nota_debito->getPdeNotaDebitoTipoEstado()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_nota_debito->getPdeNotaDebitoTipoEstado()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_fp_forma_pago_id <?php Gral::_echo($pde_nota_debito->getGralFpFormaPago()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_nota_debito->getGralFpFormaPago()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_actividad_id <?php Gral::_echo($pde_nota_debito->getGralActividad()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_nota_debito->getGralActividad()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_escenario_id <?php Gral::_echo($pde_nota_debito->getGralEscenario()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_nota_debito->getGralEscenario()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="cae">
            <?php Gral::_echo($pde_nota_debito->getCae()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fecha_emision">
            <?php Gral::_echo(Gral::getFechaToWeb($pde_nota_debito->getFechaEmision())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fecha_vencimiento">
            <?php Gral::_echo(Gral::getFechaToWeb($pde_nota_debito->getFechaVencimiento())) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="persona_descripcion">
            <?php Gral::_echo($pde_nota_debito->getPersonaDescripcion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="razon_social">
            <?php Gral::_echo($pde_nota_debito->getRazonSocial()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($pde_nota_debito->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="anio">
            <?php Gral::_echo($pde_nota_debito->getAnio()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_mes_id <?php Gral::_echo($pde_nota_debito->getGralMes()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_nota_debito->getGralMes()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="cntb_diario_asiento_id <?php Gral::_echo($pde_nota_debito->getCntbDiarioAsiento()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_nota_debito->getCntbDiarioAsiento()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="prv_descuento_financiero_id <?php Gral::_echo($pde_nota_debito->getPrvDescuentoFinanciero()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_nota_debito->getPrvDescuentoFinanciero()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='pde_nota_debito_alta.php?id=<?php Gral::_echo($pde_nota_debito->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($pde_nota_debito->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($pde_nota_debito->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_ADM_ACCION_GIMAGEN')){ ?>
	<li class='adm_botones_accion'><a href='pde_nota_debito_imagen_gestor.php?id=<?php Gral::_echo($pde_nota_debito->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'><img src='imgs/btn_album_imagenes.png' width='22' border='0' /></a></li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_ADM_ACCION_GARCHIVO')){ ?>
	<li class='adm_botones_accion'><a href='pde_nota_debito_archivo_gestor.php?id=<?php Gral::_echo($pde_nota_debito->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Archivos') ?>'><img src='imgs/btn_album_archivos.png' width='19' border='0' /></a></li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pde_nota_debito/pde_nota_debito_db_context_acciones.php?id=<?php Gral::_echo($pde_nota_debito->getId()) ?>' modulo_metodo_init="setInitPdeNotaDebito()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


