<?php
$css_conciliado = '';
$css_importe_conciliado = '';
$vta_recibo_item_conciliado = $vta_recibo_item->getVtaReciboItemConciliadoActivo();

$importe_conciliado = 0;
$gral_si_no = GralSiNo::getOxId($vta_recibo_item->getConciliado());
$gral_si_no_descripcion = $gral_si_no->getDescripcion();
$gral_si_no_id = $gral_si_no->getId();

if ($vta_recibo_item_conciliado) {
    $css_conciliado = 'importe-conciliado';

    $importe_conciliado = Gral::getImporteDesdeDbToPriceFormat($vta_recibo_item_conciliado->getImporteConciliado());
    if ($vta_recibo_item_conciliado->getCreado() != $vta_recibo_item_conciliado->getModificado()) {
        $css_importe_conciliado = 'importe-conciliado';
    }
}
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?>'>
    <div class="id">
        <?php Gral::_echo($vta_recibo_item->getId()) ?>
    </div>
</td>   

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?>'>
    <?php if (count($vta_recibo_item->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($vta_recibo_item->getArrDescripcionExtendidaParaBackend() as $arr_descripcion_extendida) { ?>
                <?php if (trim($arr_descripcion_extendida['dato']) != '') { ?>
                    <div class="descripcion-extendida-uno">
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

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?>'>

    <div class="creado"> 
        <?php Gral::_echo(Gral::getFechaToWeb($vta_recibo_item->getCreado())); ?>
    </div>
    <div class="creado-por">
        <?php Gral::_echo($vta_recibo_item->getModificadoPorDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?>'>

    <div class="gral_fp_forma_pago_id"> 

        <?php Gral::_echo($vta_recibo_item->getGralFpFormaPago()->getDescripcion()); ?>
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?>'>
    <div class="importe_unitario">
        <?php Gral::_echoImp($vta_recibo_item->getImporteUnitario()); ?>
    </div>
</td>   

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?>'>
    <div class="codigo">
        <?php Gral::_echo($vta_recibo_item->getCodigo()) ?>
    </div>
</td> 

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?>'>
    <div class="">
        <?php Html::html_dib_select(1, 'cmb_vta_recibo_item_conciliar_' . $vta_recibo_item->getId(), GralSiNo::getGralSiNosCmb(), $vta_recibo_item->getConciliado(), 'textbox cmb_vta_recibo_item_conciliar ' . $css_conciliado) ?>
        
        <?php if ($vta_recibo_item_conciliado): ?>
            <div class="creado-por">
                <?php Gral::_echo($vta_recibo_item_conciliado->getModificadoPorDescripcion()) ?>
            </div>
        <?php endif; ?>
        
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?>'>
    <?php if ($vta_recibo_item_conciliado): ?>
        <div class="txt-importe-conciliado">
            <input id='txt_importe_conciliado_<?php echo $vta_recibo_item->getId(); ?>' name='txt_importe_conciliado[<?php echo $vta_recibo_item->getId(); ?>]' type='text' class='textbox moneda txt_importe_conciliado <?php echo $css_importe_conciliado; ?>' value='<?php Gral::_echoTxt($importe_conciliado) ?>' size='10' />
        </div>
        <div class="modificado">
            <?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item_conciliado->getModificado())) ?>
        </div>
    <?php endif; ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?>'>
    <?php if ($vta_recibo_item_conciliado): ?>
        <div class="diferencia-importe">
            <?php Gral::_echoImp($vta_recibo_item_conciliado->getImporteDiferencia()) ?>
        </div>
    <?php endif; ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?>'>
    <?php if ($vta_recibo_item_conciliado): ?>
        <div class="diferencia-porcentual">
            <?php Gral::_echoFloat(($vta_recibo_item_conciliado->getImporteDiferencia() / $vta_recibo_item->getImporteUnitario()) * 100) ?> %
        </div>
    <?php endif; ?>    
</td>