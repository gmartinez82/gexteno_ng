<?php
$cantidad_remitos = count($vta_hoja_ruta->getVtaRemitosXVtaHojaRutaVtaRemito(null, null, true));
$cantidad_remitos_ajuste = count($vta_hoja_ruta->getVtaRemitoAjustesXVtaHojaRutaVtaRemitoAjuste(null, null, true));
?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_hoja_ruta->getId() ?>" modulo="vta_hoja_ruta">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <!--<div class="id">
    <?php //Gral::_echo($vta_hoja_ruta->getId())  ?>
    </div>-->
    <div class="codigo">
        <?php Gral::_echo($vta_hoja_ruta->getCodigo()); ?>
    </div>
    <div class="creado">
        <?php Gral::_echo(Gral::getFechaHoraToWEB($vta_hoja_ruta->getCreado())); ?>
    </div>
    <div class="creado-por">
        <?php Gral::_echo($vta_hoja_ruta->getCreadoPorDescripcion()); ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
        <?php Gral::_echo($vta_hoja_ruta->getDescripcion()) ?>
    </div>
    <?php if (count($vta_hoja_ruta->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($vta_hoja_ruta->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
    <div class="ruta gral_ruta_id <?php Gral::_echo($vta_hoja_ruta->getGralRuta()->getCodigo()) ?> ">
        <?php Gral::_echo($vta_hoja_ruta->getGralRuta()->getDescripcion()); ?>
    </div>

    <div class="fecha">	
        <?php Gral::_echo(Gral::getFechaToWeb($vta_hoja_ruta->getFechaDespacho())); ?>
    </div>

</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vta_hoja_ruta_tipo_estado_id <?php Gral::_echo($vta_hoja_ruta->getVtaHojaRutaTipoEstado()->getCodigo()); ?>">
        <img src="imgs/vta_hoja_ruta_tipo_estado/<?php Gral::_echo($vta_hoja_ruta->getVtaHojaRutaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_hoja_ruta->getVtaHojaRutaTipoEstado()->getDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="remitos">
        <?php Gral::_echo(($cantidad_remitos > 0) ? $cantidad_remitos : '-') ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="remitos-ajuste">
        <?php Gral::_echo(($cantidad_remitos_ajuste > 0) ? $cantidad_remitos_ajuste : '-') ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">

        <?php if (UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_GESTION_ACCION_MODIFICAR')) { ?>
            <li class='adm_botones_accion'>
                <img src='imgs/btn_modi.gif' width='22' title="Modificar Hoja de Ruta" class='gen-modal-open' gen-modal-file="ajax/modulos/vta_hoja_ruta_gestion/modal_hoja_ruta.php?identificador=<?php echo $vta_hoja_ruta->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="600" gen-modal-titulo="Modificar hoja de ruta" gen-modal-callback="setInit()"/>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion adm-ver-ficha' title='<?php Lang::_lang('Ver Ficha') ?>'>
                <img src='imgs/btn_ficha.png' width='15' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_GESTION_ACCION_ORDENAR')) { ?>
            <li class='adm_botones_accion'>
                <img src='imgs/btn_ordenar.png' width='20' title="Ordenar Hoja de Ruta" class='gen-modal-open' gen-modal-file="ajax/modulos/vta_hoja_ruta_gestion/modal_hoja_ruta_ordenar.php?identificador=<?php echo $vta_hoja_ruta->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="600" gen-modal-titulo="Ordenar hoja de ruta" gen-modal-callback="setInit()"/>
            </li>
        <?php } ?>
            
        <?php if (UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_GESTION_ACCION_COMPROBANTE')) { ?>
            <li class='adm_botones_accion vta-hoja-ruta-comprobante'>
                <a href="ajax/modulos/vta_hoja_ruta_gestion/pdf_hoja_ruta.php?vta_hoja_ruta_id=<?php echo $vta_hoja_ruta->getId() ?>" target="_blank">
                    <img src='imgs/btn_pdf.png' width='20' border='0' title="Ver Remito" />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_hoja_ruta_gestion/vta_hoja_ruta_gestion_db_context_acciones.php?id=<?php Gral::_echo($vta_hoja_ruta->getId()) ?>' modulo_metodo_init="setInitVtaHojaRutaGestion()">
                <img src='imgs/btn_config.png' width='20' />       
            </li>
        <?php } ?>

    </ul>
</td>