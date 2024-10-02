
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $gral_moneda->getId() ?>" modulo="gral_moneda">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="id">
        <?php Gral::_echo($gral_moneda->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="flag">
        <img src="<?php echo Gral::getPathHttp() ?>admin/imgs/flag_<?php Gral::_echo($gral_moneda->getCodigoIso()) ?>.png" alt="flag" />
    </div>

    <div class="descripcion">
        <?php Gral::_echo($gral_moneda->getDescripcion()) ?> (<?php Gral::_echo($gral_moneda->getSimbolo()) ?>)
    </div>

    <div class="codigo">
        <?php Gral::_echo($gral_moneda->getCodigo()) ?>
    </div>

    <div class="codigo">
        <?php Gral::_echo($gral_moneda->getCodigoIso()) ?>
    </div>

</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php
    foreach ($gral_moneda->getGralMonedasTipoCambiosActual() as $gral_moneda_tipo_cambio) {
        $gral_moneda_aconvertir = $gral_moneda_tipo_cambio->getGralMoneda();
        $gral_moneda_comparada = GralMoneda::getOxId($gral_moneda_tipo_cambio->getGralMonedaComparada());

        if ($gral_moneda_aconvertir->getId() == $gral_moneda_comparada->getId()) {
            continue;
        }
        ?>
        <div class="tipo-cambio-info">
            <div class="tipo-cambio-real">
                
                <label class="moneda-origen">1 <?php Gral::_echo($gral_moneda_aconvertir->getCodigoIso()) ?> es </label>
                <?php Gral::_echo($gral_moneda_comparada->getSimbolo()) ?> 
                <?php echo number_format((double) $gral_moneda_tipo_cambio->getTipoCambioReal(), 6, ',', '.') ?> 
                <br />

                <label class="moneda-origen">1 <?php Gral::_echo($gral_moneda_comparada->getCodigoIso()) ?> es </label>
                <?php Gral::_echo($gral_moneda->getSimbolo()) ?> 
                <?php echo number_format((double) 1/$gral_moneda_tipo_cambio->getTipoCambioReal(), 6, ',', '.') ?> 
                
                <?php if (UsCredencial::getEsAcreditado('GRAL_MONEDA_GESTION_ACCION_MODIFICAR_COEFICIENTE')){ ?>
                    <label class="uno cambiar-estado-en-ruta gen-modal-open" modulo_estado="vta_hoja_ruta_estado" gen-modal-file="ajax/modulos/gral_moneda_gestion/modal_modificar_tipo_cambio.php?gral_moneda_id=<?php echo $gral_moneda->getId() ?>&gral_moneda_comparada=<?php echo $gral_moneda_comparada->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="500" gen-modal-titulo="Modificar Tipo de Cambio" gen-modal-callback="setInit()">
                        <img src='imgs/btn_modi.gif' width='12' border='0' />
                    </label>
                <?php } ?>
                
            </div>

            <div class="flag">
                <img src="<?php echo Gral::getPathHttp() ?>admin/imgs/flag_<?php Gral::_echo($gral_moneda_comparada->getCodigoIso()) ?>.png" alt="flag" />
            </div>            
            <div class="tipo-cambio">
                <?php Gral::_echo($gral_moneda_comparada->getSimbolo()) ?> 
                <?php echo number_format((double) $gral_moneda_tipo_cambio->getTipoCambio(), 6, ',', '.') ?> 
            </div>
            <div class="coeficiente-ajuste">
                <?php echo number_format((double) $gral_moneda_tipo_cambio->getCoeficienteAjuste(), 6, ',', '.') ?>                 
            </div>
            <div class="fecha">
                <?php echo Gral::getFechaToWEB($gral_moneda_tipo_cambio->getFecha()) ?>                 
            </div>
            <div class="observacion"><?php Gral::_echo($gral_moneda_tipo_cambio->getObservacion()) ?></div>
            <div class="fechahora-modificacion">Actualizado por <?php Gral::_echo($gral_moneda_tipo_cambio->getModificadoPorDescripcion()) ?> el <?php Gral::_echo(Gral::getFechaHoraToWEB($gral_moneda_tipo_cambio->getModificado())) ?></div>
        </div>
    <?php } ?>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones">

        <?php if (UsCredencial::getEsAcreditado('GRAL_MONEDA_GESTION_ACCION_MODIFICAR')) { ?>
            <li class='adm_botones_accion'>
                <a href='gral_moneda_alta.php?id=<?php Gral::_echo($gral_moneda->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'>
                    <img src='imgs/btn_modi.gif' width='20' border='0' />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('GRAL_MONEDA_GESTION_ACCION_ESTADO')) { ?>
            <li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($gral_moneda->getEstado()) ?>.gif' width='20' border='0' />
            </li>
        <?php } ?>

    </ul>
</td>


